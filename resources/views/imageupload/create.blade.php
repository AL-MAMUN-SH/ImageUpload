<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
<form action="{{route('imageupload.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
    <label for="">File :
        <input type="file" name="image">
    </label>
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <br><br>
    <button type="submit">Create</button>


















</form>
</body>
</html>
