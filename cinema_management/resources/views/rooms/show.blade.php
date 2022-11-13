@extends('welcome')
@section('content')
<div class="m-5 flex justify-center">
    <div class="card w-96 bg-base-100 shadow-xl" data-theme='light'>
        <div class="card-body items-center text-center">
          <h2 class="card-title">
            The Movie {{ $room->movie->title }} is in {{ $room->no_room }}
          </h2>
          <p>This room has {{ $room->no_chairs }} Chairs</p>
        </div>
      </div>


</div>







@endsection
