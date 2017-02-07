<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Request;
use Auth;
use Session;
class IndexController extends Controller
{
	public function form(){
		return view('login');
	}
    public function login(){
	$credenciais = Request::only('email', 'password');
	if(Auth::attempt($credenciais)) {
		return redirect('oficina/produtos');
		}
	Request::session()->flash('error', 'Usuário ou senha invalidos!');
	return redirect('/');
	}
	public function logout(){
		Auth::logout();
		return redirect('/');
	}
}
