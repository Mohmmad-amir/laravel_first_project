<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <title>Hello Amir</title>
</head>

<body>
    <h1 class="greenColor">Hello amir</h1>
    <img style="height: 100px; width:100px;" src="{{asset('asset/image/7314.jpg')}}" alt="">

    <ul>
        <li>
            <a href="/student">student</a>
        </li>
        <li>
            <a href="/welcome"> Welcome</a>
        </li>
        <li>
            <a href="/newWelcome"> New Welcome</a>
        </li>
        <li>
            <a href="/newStudents">New student</a>
        </li>
    </ul>
</body>

</html>