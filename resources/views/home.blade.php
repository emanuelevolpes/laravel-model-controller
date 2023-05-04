<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container d-flex flex-wrap gap-3 justify-content-center align-items-center">
        @foreach ($movies as $movie)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->id}}</h5>
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->date}}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->nationality}}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->vote}}</h6>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
