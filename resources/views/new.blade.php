<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

{{ View::make('header')}}

<h1>Create New Form</h1>
<form action="new" method="POST" >
@csrf

<label for="">User Name:</label> <input type="text" name="email">
<label for="">Password:</label> <input type="text" name="password">

<button type="submit" class="btn btn-primary  Value="login" >LogIn</button>


</form>


{{ View::make('footer')}}
    
</body>
</html>