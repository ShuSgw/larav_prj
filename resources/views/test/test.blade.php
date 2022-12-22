<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <p>test index</p>
    <p>
        {{-- @if (isset($vals))
            @foreach ($vals as $val)
                <p>{{ $val->id }}:{{ $val->text }}</p>
                <div>
                    <p>Id:{{ $val->id }}</p>
                    <p>Name:{{ $val->name }}</p>
                    <p>Email:{{ $val->email }}</p>
                    <p>Ms:{{ $val->text }}</p>
                </div>
            @endforeach
        @else
            <p>No Controller</p>
        @endif --}}

        @foreach ($vals as $val)
            <p>
                <a href="">{{ $val->name }} - {{ $val->created_at }}</a>
            </p>
        @endforeach
    </p>
</body>

</html>
