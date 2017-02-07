<?php 

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\http\Requests;
use Auth;
use Request;

class LoginController extends Controller {
	public function showLoginForm(){
		return view('auth.login');
	}

	public function login(){
		$credenciais = Request::route('email', 'password');
		if(Auth::attempt($credenciais)) {
			return "Usuário NOME logado com sucesso";
		}
		return "As credencias não são válidas";
	}
}