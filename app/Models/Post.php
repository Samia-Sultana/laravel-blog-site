<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{  
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'title',
        'post_image',
        'body',
    ];
    //protected $guarded =[]; //opposite of fillable
    //a post belongs to a user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
