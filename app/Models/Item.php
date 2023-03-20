<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Item extends Model
{
    use HasFactory;
    
    protected $table = 'items';
    protected $fillable = [
        'name',
        'profile',
        'user_id'
        ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
