<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
<h1>Contact</h1>

{!! Form::open(['url' => 'foo/bar']) !!}
    {!! Form::label('email', 'Enter email')  !!}
    {!! Form::email('email', '') !!} <br/> <br/>
    {!! Form::label('subject', 'Enter subject') !!}
    {!! Form::text('subject', '') !!}  <br/> <br/>
    {!! Form::label('message', 'Enter message') !!}
    {!! Form::textarea('message', '') !!} <br/> <br/>
    {!! Form::submit('Send') !!}
{!! Form::close() !!}
</body>
</html>