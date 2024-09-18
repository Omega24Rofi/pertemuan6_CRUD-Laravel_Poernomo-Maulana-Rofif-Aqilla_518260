<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Lists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="mb-4">Movie Lists</h1>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>id</th>
                <th>Movie Title</th>
                <th>Director</th>
                <th>Duration</th>
                <th>Release Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_movie as $movie)
            <tr>
                <td>{{ $movie->id }}</td>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->director }}</td>
                <td>{{ $movie->duration . " Min" }}</td>
                <td>{{ $movie->release_date}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
