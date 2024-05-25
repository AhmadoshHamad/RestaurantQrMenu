<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/menus/store" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title"/>
        <label for="image">Image</label>
        <input type="file" name="image"/>
        <button type="submit">Submit</button>
    </form>
</body>
</html>