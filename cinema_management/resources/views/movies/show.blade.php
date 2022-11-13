@extends('welcome')
@section('content')
<div class="m-5 flex justify-center">
    <div class="card w-96 bg-base-100 shadow-xl" data-theme='light'>
        <figure class="m-5"><img src={{ asset($movie->poster) }} alt="Poster" class="rounded-xl"/></figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">
            {{ $movie->title }} By {{ $movie->director }}
          </h2>
          <p>{{ $movie->des }}</p>
          <div class="card-actions justify-end">
            <div class="badge badge-outline">{{ $movie->genre }}</div>
          </div>
        </div>
      </div>


</div>







@endsection
