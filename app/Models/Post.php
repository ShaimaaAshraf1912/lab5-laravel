<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class Post extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

   protected $fillable  = ["title", "description"];
    //    protected $hidden = [
    //     'created_at', 'updated_at',
    // ];

}
