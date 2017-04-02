<?php
namespace estoque\Http\Controllers;

use Request;
use estoque\User;
use estoque\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Auth;

class LoginController extends Controller {
	
	public function login(){
		return view('usuario.login');
	}


	public function loginPost(){
		$credenciais = Request::only('email', 'password');

		if(Auth::attempt($credenciais)){
			return redirect('/produtos');
		}

		//Adicionar aviso na View , Senha/Login incorreto	
		return redirect('/usuario/login');
	}

	public function novo(){
		return view('usuario.novo');
	}

	public function novoPost(LoginRequest $request){
		
		$params = $request->all();
		User::create([
			 'name' 	=>$params['name']
			,'email' 	=> $params['email']
			,'password' => Hash::make($params['password'])
		]);

		$credenciais = Request::only('email', 'password');

		if(Auth::attempt($credenciais)){
			return redirect('/produtos');			
		}		
	}

	public function logout(){	
	    Auth::logout();
	    Session::flush();
	    return redirect('/usuario/login');
	}
}
