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
    @if($message !== NULL)
            {{ $message }}
    @endif

{!! Form::open(['url' => '/contact/' , 'method' => 'POST']) !!}
    {!! Form::label('email', 'Enter email')  !!}
    {!! Form::email('email', '') !!} <br/> <br/>
    {!! Form::label('subject', 'Enter subject') !!}
    {!! Form::text('subject', '') !!}  <br/> <br/>
    {!! Form::label('content', 'Enter message') !!}
    {!! Form::textarea('content', '') !!} <br/> <br/>
    {{ csrf_field() }}
    {!! Form::submit('Send') !!}
{!! Form::close() !!}
</body>
</html>