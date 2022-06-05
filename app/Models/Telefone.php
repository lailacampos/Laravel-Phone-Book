<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_usuario
 * @property string $numero
 * @property Usuario $usuario
 */
class Telefone extends Model
{
    /**
     * @var array
     */
    protected $table = 'telefones';
    protected $fillable = ['id_usuario', 'numero'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario', 'id_usuario');
    }
}
