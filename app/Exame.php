<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    

    protected $fillable = [
        'nome_exame', 'sub_titulo','material_analisado', 'tempo_coleta_material','finalidade','preparacao_previa','valores_normais_descr','valores_anormais_sign','prazo_resultado','nivel_confiabilidade','descricao_exame','med_alter_result','cor_de_fundo','avatar_fundo','avatar',
    ];	
}
