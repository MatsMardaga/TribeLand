<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'contact';
    protected $fillable = [
        'subject',
        'message',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
