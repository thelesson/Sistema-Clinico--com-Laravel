<?php

namespace Artesaos;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model{

    public $timestamps = false;

    protected $fillable = ['nome', 'uf'];
}