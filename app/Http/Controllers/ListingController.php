<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //all
    public function index(){
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['search']))->get()
        ]);
    }
    //singl
    public function show(Listing $listing){

        return view('listings.show', [
            'listing' => $listing
        ]);
    
    }
    //create form
    public function create(){
        return view('listings.create');
    }

    //store function
    public function store(Request $request){

        $data = $request->validate([
            'name'=>'required|max:255|alpha',
            'lastname'=>'required|max:255|alpha',
            'phonenumber'=>'required|digits:9',
            'email'=>['required', 'email']
            
        ]);
        
        

        $data['user_id']=auth()->id();

        Listing::create($data);




        return redirect('/');
    }
    //edit form
    public function edit(Listing $listing){
        if($listing->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }

        return view('listings.edit', ['listing' => $listing]);
    }
    public function update(Request $request,Listing $listing){
        if($listing->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }

        $data = $request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'phonenumber'=>'required',
            'email'=>['required', 'email']
        ]);
        
        $listing->update($data);

        return back();
    }
    //delet
    public function destroy(Listing $listing){
        if($listing->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }
        $listing->delete();
        return redirect('/');
    }


}
