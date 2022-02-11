@extends('admin.dashboard')

@section('content')
    <div class="container">
        <h4 class="text-center text-primary">
            Phones from {{ $users->name }}
        </h4>
        <table class="table table-dark">
            <tr>
                <th>ID</th>
                <th>Company Name</th>
                <th>Phone</th>
            </tr>
            @foreach($users->phones as $users)
                <tr>
                    <td>{{ $users->id }}</td>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->phone }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection