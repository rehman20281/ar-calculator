<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome in Calculator Page</title>
</head>
<body>
    <h1>Calculator</h1>

    <form action="{{route('calculated-result')}}" method="post">
        @csrf

        <label>Enter Value 1</label>
        <input type="text" name="v1"> <br>

        <label>Enter Value 2</label>
        <input type="text" name="v2"> <br>

        <button>Calculate</button>

    </form>
</body>
</html>
