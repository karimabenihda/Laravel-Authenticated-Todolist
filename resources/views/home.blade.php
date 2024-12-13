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
       .container1{
        margin: auto;
        border: 1px grey solid;
        margin-top: 10vh;
        width: 455px;
        height: 310px;
        padding: 30px;
    }
    .container{
        margin: auto;
        border: 1px grey solid;
        margin-top: 25vh;
        width: 455px;
        height:400px;
        padding: 20px;
    }
    .logout{
       position: absolute;
       top:10px;
       right: 0;
    }
    h2{
        text-align: center;
        color: rgb(32, 64, 65);
    }
    input{
        margin: 10px
    }
    ul {
        list-style-type:none;
    }
   

    li{
        border-radius: 15px;
        padding: 20px
    }
    .actions{
        display: flex;
    }
    .container2{
        margin-inline: 100px
    }
</style>
</head>

<body>

    @auth
    <h6 style="background:rgb(209,231,221) ;padding:20px ;font-family:arial; color:#204041" >Congrate, You logged in ! </h6>
    <form action="/logout" method="POST" >
    @csrf
    <button name="logout" class="btn btn-danger logout">logout</button>
</form>

<div class="container1">
<h2>Create a new task</h2>
<form action="/createTask" method="POST">
@csrf
<input type="text" name="title"  placeholder="Write down your task ..." class="form-control">
<textarea name="body" style="margin: 10px"  placeholder="Small description of your task ..." class="form-control"></textarea>
<button class="btn btn-success" style="margin-top: 18px;margin-left:13px; width: 391px; ">Save</button>
</form>
</div>
<br>
<div class="container2">
    <h2>All your Tasks</h2>
    @foreach ($posts as $post)
    <ul>
    <li  style="border: 1px #dddd solid ;"><h3>{{$post['title']}}</h3>
        <p>{{$post['body']}}</p>
        <div class="actions">
            <button class="btn btn-success"><a href="/edit_task/{{$post->id}}" style="color: rgb(255, 255, 255); text-decoration:none;" >Edit</a></button>
            <form action="/delete_task/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
    </li>
</ul>
@endforeach
</div>
    @else
    <div class="container" >
    <h1 class="text-center">Sign up</h1>
    <form  action="/register" method="POST">
        @csrf
        <input type="text" placeholder="name" name="name" class="form-control">
        <input type="text" placeholder="email" name="email" class="form-control">
        <input type="password" name="password" placeholder="password" class="form-control">
        <button name="register" class="btn btn-info" style="margin-top: 18px;margin-left:13px; width: 410px; ">sign up</button><br><br>
        <div style="color:rgb(32, 64, 65); text-align:center;">You already have one ? <a style="text-decoration:none;font-weight:bold;color:#0f97b2; "href="/signin">Login</a></div>

    </form>
</div>

    @endauth
</body>
</html>