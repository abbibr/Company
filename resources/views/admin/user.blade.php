@extends('admin.dashboard')

@section('content')
    <div class="container">
        
        @if(session()->has('remove'))
            <div class="alert alert-danger">
                {{ session('remove') }}
            </div>
        @endif

        <table class="table table-dark mt-1">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Remove</th>
            </tr>
            @forelse($users as $user)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ route('delete', $user->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @empty
                <h5>There are not any users!</h5>
            @endforelse
        </table>
    </div>
@endsection