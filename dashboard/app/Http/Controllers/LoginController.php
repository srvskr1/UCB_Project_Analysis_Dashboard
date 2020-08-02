<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{


	public function index(Request $req){
    	
    	return view('login');
    }
    public function verify(Request $req){	
		
		

		$result = DB::table('user')->where('username', $req->username)
				->where('password', $req->password)
				->get();
		
		

		if(count($result) > 0)
		{

			$req->session()->put('username', $req->username);
			$req->session()->put('type', $result[0]->type);
			if($result[0]->type=='admin')
			{
				 return redirect()->route('admin.index');
			}
			elseif ($result[0]->type=='network') 
			{
				return redirect()->route('admin.network');
			}
			elseif ($result[0]->type=='csm') 
			{
				return redirect()->route('admin.csm');
			}
			elseif ($result[0]->type=='infra') 
			{
				return redirect()->route('admin.infra');
			}
			elseif ($result[0]->type=='issm') 
			{
				return redirect()->route('admin.issm');
			}
			elseif ($result[0]->type=='software') 
			{
				return redirect()->route('admin.software');
			}
			elseif ($result[0]->type=='application') 
			{
				return redirect()->route('admin.application');
			}

			
		}
		else
		{
			$req->session()->flash('msg', 'invalid username or password');
			return view('login');
			//return view('login.index');
		}
	}
}
