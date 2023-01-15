<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumMessage extends Model
{
    use HasFactory;
    
    protected $table = 'forum_message';
    public $timestamps = false;
    public function ForumMessageReply(){

        //laravel verwacht dat de foreign key van een tabel de naam is van de tabel plus de colom dus in dit geval faq_category_id
        //maar aangezien het in de database category_id is en niet faq_category_id wordt dit aan het model duidelijk gemaakt.
        return $this->hasMany(FaqQuestion::class, 'category_id');
        
    }
}
