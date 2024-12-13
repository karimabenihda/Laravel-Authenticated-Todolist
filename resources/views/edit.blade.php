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
        height: 300px;
        padding: 40px;
    }
    input{
        margin: 10px
    }
</style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Edit Task</h2>
        <form action="/edit_task/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" value="{{$post->title}}" class="form-control" name="title" style="margin-left:0px;">
        <textarea name="body" class="form-control" >{{$post->body}}</textarea>
        <button class="btn btn-success" style="margin-top: 18px;margin-left:2px; width: 370px; ">Save Changes</button>
        </form>
    </div>
</body>
</html>