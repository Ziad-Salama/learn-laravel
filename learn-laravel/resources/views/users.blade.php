<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <p>My name is : {{$obj->username}} </p>
    <p>My age is : {{$obj->age}} </p>
    <p>My country is : {{$obj->country}} </p> --}}

    {{-- @if ($obj->username == 'ziad')
        <p>Hallow {{$obj->username}}</p>
    @endif --}}

    {{-- @if ($obj->username == 'ziad')
        <p>Hallow $obj->username</p>
    @else
        <p>Sorry your Are not can access this page</p>
    @endif --}}

    {{-- @foreach ($data as $item)
        <p>{{$item}}</p>
    @endforeach --}}

        @forelse ($data as $item)
            <p>{{$item}}</p>
        @empty
            <p>this is collection is empty</p>
        @endforelse

</body>
</html>
