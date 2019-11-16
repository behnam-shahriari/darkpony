<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exception extends Model
{
    protected $fillable = [
    'manual_message', 'error_message', 'method', 'risk', 'send'
    ];
}