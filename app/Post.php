<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use carbon;

class Post extends Model
{
    protected $fillable =[
        'title',
        'description',
        'user_id',
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getReadableDateAttribute()
    {
        return carbon\Carbon::parse($this->attributes['created_at'])->format('l jS \\of F Y h:i:s A');
    }
}
