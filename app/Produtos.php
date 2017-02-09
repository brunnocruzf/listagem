<?php

namespace App;
use categorias;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    //expecifica a tabela a ser usada
    protected $table = "produtos";
    //desativa as colulas de timestamps
    public $timestamps = false;
    //especifica os campos que podem ser preenchidos (MassAssignmentException)
    protected $fillable = array('nome', 'descricao','quantidade','valor','tamanho','categoria_id');
	
    public function categorias(){
       return $this->belongsTo('App\Categorias');
    }
}