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

class ProfileController extends Controller
{


	public function getProfile($name, $id, Request $request)
	{
		$user = User::findOrFail($id);
		return view('user.profile')->with(['user'=>$user]);
	}


	public function editProfile($name, $id, Request $request)
	{

	}

}