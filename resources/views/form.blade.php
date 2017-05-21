<html>
<head>
    <title>form</title>
</head>
<body>
<form action="{{url('/form')}}" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <input type="file" name="file">
    <br>
    <br>
    <input type="submit" value="upload">
</form>

@if(isset($errors))
    <ul>
        @foreach($errors->all() as $err)
            <li>{{$err}}</li>
        @endforeach
    </ul>
@endif
</body>
</html>