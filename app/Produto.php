<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {
	public $timestamps = false;
	protected $table = 'produtos';
	protected $fillable = array('nome', 'descricao', 'quantidade', 'tamanho', 'valor', 'categoria_id');    

	public function categoria(){
		return $this->belongsTo('estoque\Categoria');
	}
}
