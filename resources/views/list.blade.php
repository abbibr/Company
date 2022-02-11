<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background: #eee;
        }
    </style>
</head>
<body>

    <div class="container">
        <h3 class="mt-2">My phone numbers</h3>
        <table class="table table-dark mt-3">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Created date</th>
            </tr>
            @foreach($user->phones as $phone)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $phone->name }}</td>
                    <td>{{ $phone->phone }}</td>
                    <td>{{ $phone->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    
</body>
</html>