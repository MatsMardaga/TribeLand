<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqQuestion extends Model
{
    use HasFactory;

    protected $table = 'faq_question';
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
