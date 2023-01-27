
@props(['listing'])

    <x-card>
    <div class=" ">
        <div class="text-center ">
            <h3 class="hover:text-sky-800 text-2xl">
                <a href="/listings/{{$listing->id}}">Name: {{$listing->name}} {{$listing->lastname}}</a>
            </h3>
            <div class="text-xl mb-4 font-bold">Phone: {{$listing->phonenumber}}</div>
            <div class=" mt-4 text-lg ">
                <i class=" fa-envelope-square fa-solid "></i> {{$listing->email}}
            </div>
        </div>
    </div>
</x-card>

