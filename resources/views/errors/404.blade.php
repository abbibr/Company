<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background: #ddd;
        }
    </style>
</head>
<body>
    
    <section style="padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h1 style="font-size: 162px;">404</h1>
                    <h2>Page Not Found</h2>
                    <p>We are sorry, the page you requested could not found!</p>
                    <a href="{{ route('/') }}" class="btn btn-primary">Visit Homepage</a>
                </div>
            </div>
        </div>
    </section>

</body>
</html>