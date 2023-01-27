<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['rating', 'listing_id'];


    public function listing(){
        return $this->belongsTo(Listing::class, 'listing_id');
    }


}
