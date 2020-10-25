<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use QCod\Gamify\Gamify;

class Usuario extends Model
{
    use Gamify;
    public $timestamps = false;
}
