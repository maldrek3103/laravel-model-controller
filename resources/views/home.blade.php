<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    @foreach($movies as $movie)
    <div class="card">
        <div class="card-body">
          <h2 class="card-title">Title: {{ $movie->title }}</h5>
          <h4 class="card-subtitle mb-2 text-muted">Original title: {{ $movie->original_title }}</h6>
          <time>Publication date: {{ $movie->date }}</time>
          <p>Vote: {{ $movie->vote }}</p>
        </div>
      </div>
      <hr>
    @endforeach

</body>
</html>