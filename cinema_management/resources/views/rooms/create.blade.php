@extends('welcome')
@section('content')

    <div class="flex justify-center mt-5">
        <div class="card w-96 bg-base-100 shadow-xl" data-theme="light">
            <div class="card-body items-center text-center">
                <form action="{{ route('room.store') }}" method="post">
                    @csrf
                    <div class="flex justify-center mb-5">
                        <a href="{{ route('room.index') }}" class="btn btn-success">Go Back</a>
                    </div>
                    <label for="" class='text-lg '>Number of Room</label>
                    <input type="text" placeholder="Type here"
                        class="input input-bordered input-primary w-full max-w-xs mt-3" name="no_room"/><br><br>
                    <label for="" class='text-lg'>Number of Chairs</label>
                    <input type="number" placeholder="Type here"
                        class="mt-3 input input-bordered input-primary w-full max-w-xs" name="no_chairs"/><br><br>
                    <label for="" class='text-lg'>Movie</label>
                    <select name="movie"  class="select select-primary w-full max-w-xs">
                        @foreach ($movie as $item)
                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                        @endforeach
                    </select>
                    <div class="flex justify-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection
