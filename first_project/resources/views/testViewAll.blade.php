<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Test</title>
</head>

<body>
    @foreach($data as $elm)
    <h3>{{$elm->test_name}}</h3>
    <p>{{$elm->test_roll}}</p>
    @endforeach
</body>

</html>