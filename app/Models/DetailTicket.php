<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTicket extends Model
{
    protected $table = ('chitietve');
    protected $fillable = [
        'veId',
        'gheId',
    ];
    use HasFactory;
}
