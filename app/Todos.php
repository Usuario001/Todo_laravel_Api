<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todos extends Model
{
    use SoftDeletes;

    protected $table = 'todos';

    protected $fillable = [
        'id_todo', 'titulo','responsible','description','priority', 'activa'
    ];


}