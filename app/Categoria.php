<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model{

	public function produtos(){
		$this->hasMany('estoque\Produto');
	}
}
