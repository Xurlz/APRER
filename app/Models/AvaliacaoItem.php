<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AvaliacaoItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'avaliacao_id',
    ];
    
    public $timestamps = false;

    public function avaliacao () {
        return $this->belongsTo('App\Model\Avaliacao');
    }

}
