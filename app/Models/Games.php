<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $table = 'game';
    protected $primaryKey = 'gameid';
    use HasFactory;
}
