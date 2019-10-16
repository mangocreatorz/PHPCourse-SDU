<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{URL::to('submit')}}" method="post">
    {{ csrf_field() }}
        <input type="text" name="name">
        <input type="password" name="password">
        <button type="submit">Submit</button>
    </form>

    @if($errors->any())
    <div>
    <ul>
        @foreach($errors->all() as $errors)
        <li>{{$errors}}</li>
        @endforeach
    </ul>
    </div>
    @endif
</body>
</html>