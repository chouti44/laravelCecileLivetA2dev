<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>articles</title>
</head>
<body>
<h1>list articles</h1>


@foreach ($articles as $article)
        <h2>{{ $article[\App\Models\Articles::TITLE] }}</h2>
        <p>{{ str_limit($article[\App\Models\Articles::CONTENT], 200) }}</p>
@endforeach
</body>
</html>