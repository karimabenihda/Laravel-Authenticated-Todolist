<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
        
    .container{
        margin: auto;
        border: 1px grey solid;
        margin-top: 25vh;
        width: 455px;
        height: 400px;
        padding: 40px;
    }
    h2{
        text-align: center;
        color: rgb(32, 64, 65);
    }
    input{
        margin: 10px
    }
    
</style>
</head>
<body>
    <div class="container" >

        <h1 class="text-center">Login </h1><br>
        <form action="/login" method="POST">
            @csrf
            <input type="text" placeholder="username" name="loginname" class="form-control">
            <input type="password" name="loginpassword" placeholder="password" class="form-control">
            <button name="login" class="btn btn-info" style="margin-top: 18px;margin-left:13px; width: 370px; ">Login</button><br><br>
            <div style="color:rgb(32, 64, 65); text-align:center;">You don't have an account ? <a style="text-decoration:none;font-weight:bold;color:#0f97b2; "href="/">sign up</a></div>

        </form>
    </div>
</body>
</html>