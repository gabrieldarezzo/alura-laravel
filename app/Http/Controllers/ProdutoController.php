<?php
namespace estoque\Http\Controllers;

use Request;
use estoque\Produto;
use estoque\Categoria;
use estoque\Http\Requests\ProdutoRequest;
use Auth;

class ProdutoController extends Controller{

	public function __construct(){
		$this->middleware('autorizador');
	}
	


	public function lista(){		
		$produtos = Produto::all();

		return view('produto.listagem', array(
			'produtos' => $produtos
		));
	}

	public function mostra($id){
		return view('produto.detalhes', array(
			'p' => Produto::find($id)
		));
	}


	public function novo(){
		return view('produto.novo')->with('categorias', Categoria::All());
	}

	public function adiciona(ProdutoRequest $request){

		/*
		$validator = Validator::make(
			 ['nome' => Request::input('nome')]
			,['nome' => 'required|min:3']

		);

		if($validator->fails()){
			$messages = $validator->messages();
			//dd($messages);
			return redirect('produtos/novo');
		}
		*/



		Produto::create($request->all());
		return redirect('/produtos')->withInput();		
	}

	public function excluir($id){
		$produto = Produto::find($id);
		$produto->delete();

		//return redirect('/produtos');		
		return redirect()->action('ProdutoController@lista');
	}


	

}