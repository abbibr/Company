@extends('admin.dashboard')

@section('content')
    <div class="container">
        <table class="table table-dark">
            <tr>
                <th>#</th>
                <th>Company Name</th>
                <th>Phone</th>
            </tr>
            @foreach($search as $query)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $query->name }}</td>
                    <td>{{ $query->phone }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection