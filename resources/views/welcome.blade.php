<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel model controller</title>
    <!-- css + js -->
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center m-5">Laravel model controller</h1>
    <main class="container">
        <div class="row gap-3 justify-content-center">
            @foreach ($movies as $movie)
                <!-- card -->
                <div class="card rounded-0" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">{{ $movie['title'] }}</h5>
                        <ul>
                            <li>Original Title: {{ $movie['original_title'] }}</li>
                            <li>Nationality: {{ $movie['nationality'] }}</li>
                            <li>Date: {{ $movie['date'] }}</li>
                            <li>Vote: {{ $movie['vote'] }}</li>
                        </ul>
                    </div>
                </div>
                <!-- fine card -->
            @endforeach
        </div>
    </main>
</body>

</html>
