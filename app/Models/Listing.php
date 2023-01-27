<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lastname', 'phonenumber', 'email','user_id'];
    
    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('name','like', '%' . request('search') .'%')
            ->orWhere('lastname','like', '%' . request('search') .'%')
            ->orWhere('phonenumber','like', '%' . request('search') .'%')
            ->orWhere('email','like', '%' . request('search') .'%');
        }

    }
    //relationship with user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function  rating(){
        return $this->hasMany(Rating::class, 'listing_id');
    }
    
}
