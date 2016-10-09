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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


	public function editUserProfile($name, $id, Request $request)
	{
		$user = User::findOrFail($id);
		if(Auth::user()->id != $user->id)
			abort(404);
		//get the countres names
		$countries = include_once __DIR__.'/../../Functions/Countries.php';
		return view('user.editUserProfile')->with(['user'=>$user,'countries'=>$countries]);
	}

}