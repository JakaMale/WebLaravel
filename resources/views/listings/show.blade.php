@extends('layout')

@section('content')

            </a>
            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <div
                        class="flex flex-col items-center justify-center text-center">
                        <img
                            class="w-48 mr-6 mb-6"
                            src="images/acme.png"
                            alt=""/>

                        <h3 class="text-2xl mb-2">{{$listing->name}} {{$listing->lastname}}</h3>
                        <div class="text-xl font-bold mb-4">{{$listing->phonenumber}}</div>

                        <div class="text-lg my-4">
                            <i class="fa-solid text-black fa-email-square"></i> {{$listing->email}}

                        </div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        
                    </div>
                <h3>Person ratings:</h3>
                <ul>
                    @foreach ($listing->rating as $r)
                    <li>{{$r->rating}}</li>
                    
                @endforeach
                </ul>

                </div>
            </div>
            <div style="text-align:center; padding:20px">
                <button class="text-black-500 center hover:bg-black hover:text-white" style="padding:10px">
                    <a href="/listings/{{$listing->id}}/edit">Edit</a>
                </button>
                
                <form method="POST" action="/listings/{{$listing->id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500 center hover:bg-red-500 hover:text-white" style="padding:10px">
                    Delete
                </button>
                
                </form>

                <form method="POST" action="/ratings/{{$listing->id}}">
                    @csrf
                    <input type = "hidden"  name = "id" value = "{{$listing->id}}" />

                    <label for="rating">Rate person:</label>
                    <select id="rating" name="rating">
                      <option value="annoying">annoying</option>
                      <option value="whatever">whatever</option>
                      <option value="good">good</option>
                      <option value="great">great!</option>
                    </select>


                    <input class="bg-gray-900 hover:bg-black text-white py-2 px-5" type="submit">
                    
                    </form>
            </div>



@endsection