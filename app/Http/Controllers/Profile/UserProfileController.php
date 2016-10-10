<?php
/**
 * Created by PhpStorm.
 * User: jbarron
 * Date: 10/6/16
 * Time: 11:46 PM
 */

namespace App\Http\Controllers\Profile;


use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class UserProfileController extends Controller
{

	/**
	 * This method show the user's profile page
	 * @param $id
	 * @param Request $request
	 * @return $this
	 */
	public function getUserProfile($name, $id, Request $request)
	{
		$user = User::findOrFail($id);
		//if the user is login, review is this is the profile's owner
		$owner = (Auth::check() && Auth::user()->id == $user->id)?true:false;
		//return the view
		return view('user.profile')->with(['user'=>$user,'owner'=>$owner]);
	}

	/**
	 * This method shows the profile's edit page
	 * @param $name
	 * @param $id
	 * @param Request $request
	 * @return $this
	 */
	public function editUserProfile($name, $id, Request $request)
	{
		$user = User::findOrFail($id);
		if(Auth::user()->id != $user->id)
			abort(404);
		//get the countres names
		$countries = include_once __DIR__.'/../../Functions/Countries.php';
		return view('user.editUserProfile')->with(['user'=>$user,'countries'=>$countries]);
	}



	public function postUpdateProfile(Request $request)
	{
		$validator = Validator::make($request->only(['name','profilePicture']),
				[
					'name'=>'required',
					'profilePicture'=>'image'
				]);

		if($validator->fails())
			return back()->withInput()->withErrors($validator);

		try{
			//If has file
			if ($request->hasFile('profilePicture')) {
				//save temp file
				$filename = Storage::putFile('public/profiles', Input::file('profilePicture'));
				//resize to 200px
				$image = Image::make(Storage::get($filename))->widen(200);
				//delete the temp file
				Storage::delete($filename);
				//save the new user file
				$filename = str_random(10) . '.jpg';
				Storage::disk('public')->put('profiles/' . $filename, $image->stream('jpg', 70));
			}
		}catch( \Exception $error){
			return back()->withInput()->withErrors(array('message' => 'Ocurrio un error, por favor intente nuevamente'));
		}

		$user = User::findOrFail(Auth::user()->id);

		//Delete the old image
		if($user->profileImage && Storage::disk('public')->exists('profiles/'.$user->profileImage))
			Storage::disk('public')->delete('profiles/'.$user->profileImage);

		$user->name = $request->input('name',null);
		$user->aboutMe = $request->input('aboutMe',null);
		$user->country = $request->input('country',null);
		$user->state = $request->input('state',null);
		$user->city = $request->input('city',null);
		$user->profileImage = $filename;
		$user->save();

		dd($request->all());
	}

}