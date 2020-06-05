<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;

class Todo extends Model
{
    protected $fillable = [
        'title','completed', 'user_id',
    ];

}
