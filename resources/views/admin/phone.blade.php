@extends('admin.dashboard')

@section('content')
    <div class="container">
        <table class="table table-dark mt-1">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @forelse($users as $user)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td><a href="{{ route('phonelist', $user->id) }}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                </tr>
            @empty
                <h5>There are not any users!</h5>
            @endforelse
        </table>
    </div>
@endsection