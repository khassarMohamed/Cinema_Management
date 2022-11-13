@extends('welcome')
@section('content')
<div class="m-5 flex justify-end" >
    <a class="btn btn-success" href="{{ route('room.create') }}">Add</a>
</div>
<div class="m-5" >
    <div class="overflow-x-auto" >
        <table class="table table-zebra w-full rounded-lg" data-theme="light">
          <!-- head -->
          <thead>
            <tr>
              <th>Number of Room</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($rooms as $item)
                <tr>
                    <td>{{ $item->no_room }}</td>
                    <td>
                        <form action="{{ route('room.destroy',$item->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('room.show',$item->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('room.edit',$item->id) }}" class="btn btn-warning">Edit</a>
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
