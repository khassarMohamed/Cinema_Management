@extends('welcome')
@section('content')

    <div class="flex justify-center mt-5">
        <div class="card w-96 bg-base-100 shadow-xl" data-theme="light">
            <div class="card-body items-center text-center">
                <form action="{{ route('movie.update',$movie->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="flex justify-center mb-5">
                        <a href="{{ route('movie.index') }}" class="btn btn-success">Go Back</a>
                    </div>
                    <label for="" class='text-lg '>Title</label>
                    <input type="text" placeholder="Type here"
                        class="input input-bordered input-primary w-full max-w-xs mt-3" name="title" value="{{ $movie->title }}"/><br><br>
                    <label for="" class='text-lg'>Genre</label>
                    <input type="text" placeholder="Type here"
                        class="mt-3 input input-bordered input-primary w-full max-w-xs" name="genre" value="{{ $movie->genre }}"/><br><br>
                    <label for="" class='text-lg'>Director</label>
                    <input type="text" placeholder="Type here"
                        class="mt-3 input input-bordered input-primary w-full max-w-xs" name="director" value="{{ $movie->director }}"/><br><br>
                    <label for="" class='text-lg'>Description</label>
                    <input type="text" placeholder="Type here"
                        class="mt-3 input input-bordered input-primary w-full max-w-xs" name="des" value="{{ $movie->des }}"/><br><br>
                    <label for="" class='text-lg'>Poster</label>
                    <input type="file"
                        class="file-input file-input-bordered file-input-primary w-full max-w-xs" name="poster"/><br><br>
                    <div class="flex justify-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection
