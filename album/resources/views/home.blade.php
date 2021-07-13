<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>file uploading</title>
</head>
<body>

    <form action="{{route('insert')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file"  name="file" class="form-control">
        <input type="submit" class="btn btn-success">
    </form>


    <div class="container">
        <div class="row">
            @foreach ($data as $item)
                <div class="card">
                    <img src="{{ asset('storage/'. $item->name)}}" alt="" class="card-img-top">
                    <div class="card-body">
                        {{$item->caption}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
