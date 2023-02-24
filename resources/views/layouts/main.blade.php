<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>
<body class="py-5 bg-dark">
    <h1 class="text-center text-success">
        Movies
    </h1>

    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-3 g-5 text-center">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{$movie->title}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                      <div class="card-text"> language: <strong>{{$movie->nationality}}</strong> </div>
                      <div class="card-text"> Release: {{$movie->date}} </div>
                      <div class="card-text"> Vote:  <strong>{{$movie->vote}}</strong> </div>
                      <a href="#" class="card-link">See more</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>  

</body>
</html>