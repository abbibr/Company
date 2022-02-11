<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Phone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background: #eee;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6 mt-5">
                <h3 class="text-center mb-3">Add Phone Number</h3>
                
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success">
                       {{ session('success') }} 
                    </div>
                @endif

                <a href="{{ route('import') }}" class="d-flex justify-content-end mb-2">Import From Excel</a>
                <form action="{{ route('addPhone') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="text" class="form-label">Name</label>
                        <input type="text" class="form-control" autocomplete="off" id="text" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="text" class="form-control" autocomplete="off" id="phone" name="phone" value="{{ old('phone') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>