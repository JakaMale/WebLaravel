@extends('layout')

@section('content')
@include('partials._hero')
<div class="content-center">
<div class="lg:grid lg:grid-cols-1 gap-4 space-y-4 md:space-y-4 content-center " style="margin:0 auto;">

@unless (count($listings)==0)

@foreach($listings as $listing)
    <x-listing-card :listing="$listing"/>
@endforeach

@else
<p>No listing foudn</p>
@endunless
</div>

</div>

@endsection

