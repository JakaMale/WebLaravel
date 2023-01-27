<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    //

    public function store(Request $request){
        $data = $request->validate([
            'rating'=>'required',

        ]);
        $id=$request->id;
        $data['listing_id']=$id;

        Rating::create($data);

        return redirect("/listings/$id");
    }
}
