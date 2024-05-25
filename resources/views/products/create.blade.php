<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/menus/{{$menu->id}}/{{$category->id}}/store" method="POST" style="display:grid;">
            @csrf
        <div>
            <label for="name">Title</label>
            <input type="text" name="name"/>
        </div>
            @error('name')
            {{$message}}
            @enderror
        <div>
            <label for="image">Image</label>
            <input type="file" name="image"/>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" name="price"/>
        </div>
        Description
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description">
            </textarea>
            <button type="submit">Submit</button>
    </form>
</body>
</html>