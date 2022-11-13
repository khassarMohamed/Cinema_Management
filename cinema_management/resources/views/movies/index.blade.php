@extends('welcome')
@section('content')
<div class="m-5 flex justify-end" >
    <a class="btn btn-success" href="{{ route('movie.create') }}">Add</a>
</div>
<div class="m-5" >
    <div class="overflow-x-auto" >
        <table class="table table-zebra w-full rounded-lg" data-theme="light">
          <!-- head -->
          <thead>
            <tr>
              <th>Title</th>
              <th>Genre</th>
              <th>Director</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($movies as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->genre }}</td>
                    <td>{{ $item->director }}</td>
                    <td>
                        <form action="{{ route('movie.destroy',$item->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('movie.show',$item->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('movie.edit',$item->id) }}" class="btn btn-warning">Edit</a>
                            <button class="btn btn-error" onClick="return confirm('Are you sure you want to do this?')">Delete</button>
                        </form>
                    </td>
                </tr>

            @endforeach
          </tbody>
        </table>
      </div>
</div>
@endsection
