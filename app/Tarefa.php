<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $table = 'tarefa';//usa se o nome da tabela não for o nome do model no plural
    protected $primaryKey = 'id';// usa se o campo id da tabela for outro tipo tar_id pra indica a chave primaria
    public $incrementing = false;//usa se não definiu que o id e chave primaria

    public $timestamps = false;//sempre usar

}
