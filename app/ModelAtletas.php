<?php



namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelAtletas extends Model
{
     protected $table = 'dados_atleta';


    protected $fillable = ['nome','apelido','data_nasc','clube_anterior','posicao','perna_dominante','nacionalidade','naturalidade','estado_civil','email','telefone','foto'];
}
