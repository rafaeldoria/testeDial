<?php

namespace Teste\Model;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoa';
    public $timestamps = false;
    
    protected $fillable = array('nome','email','telefoneCelular','dataNascimento','cep','endereco','numero','bairro','cidade','estado');
    protected $guarded = ['id'];
}
