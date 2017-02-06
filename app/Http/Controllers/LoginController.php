<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\http\Requests;
use Auth;
use Request;

class LoginController extends Controller {
	
	public function form(){
		return view('formLogin');
	}
	public function login(){
	$credenciais = Request::only('email', 'password');
		if(Auth::attempt($credenciais)) {
			return redirect('oficina/produtos');
		}
	return "As credencias não são válidas";
	}
}