
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>

        <script src="https://cdn.tailwindcss.com"></script>

<div
class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">


<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Edit contact
    </h2>

</header>

<form method="POST" action="/listings/{{$listing->id}}">
    @csrf
    @method('PUT')
    <div class="mb-6">
        <label
            for="name"
            class="inline-block text-lg mb-2"
            >Name</label>


        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="name"
            value="{{$listing->name}}"/>

        @error('name')
            <p class="text-red-500">{{$message}}</p> 
        @enderror
    </div>

    <div class="mb-6">
        <label for="lastname" class="inline-block text-lg mb-2">Last name</label>

        <input
            type="lastname"
            class="border border-gray-200 rounded p-2 w-full"
            name="lastname"
            value="{{$listing->lastname}}"/>


        @error('lastname')
        <p class="text-red-500">{{$message}}</p> 
    @enderror
    </div>

    <div class="mb-6">
        <label
            for="phonenumber"
            class="inline-block text-lg mb-2">Phone number</label>

        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="phonenumber"
            value="{{$listing->phonenumber}}"

            placeholder="041 999 999"/>

        @error('phonenumber')
        <p class="text-red-500">{{$message}}</p> 
    @enderror
    </div>

    <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">Email</label>

        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="email"
            value="{{$listing->email}}"/>
            
        @error('email')
        <p class="text-red-500">{{$message}}</p> 
        @enderror
    </div>

    <div class="mb-6">
        <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">
            Update contact
        </button>
        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>
</div>