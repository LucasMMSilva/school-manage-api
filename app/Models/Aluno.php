<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public function responsaveis()
    {
        return $this->belongsToMany(
            User::class,
            'responsavel_aluno',
            'aluno_id',
            'responsavel_id'
        );
    }
}
