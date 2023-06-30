@extends('layouts.app')

@section('content')
    <table class="table">
        <caption><a href="{{route('brand.create')}}">Create new product</a></caption>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Edit</th>

        </tr>
        </thead>
        <tbody>

        @foreach($brands as $brand)
        <tr>
            <th scope="row">{{$brand->id}}</th>
            <td>{{$brand->title}}</td>
            <td><a href="{{ route('brand.edit', ['brand' => $brand->id]) }}"><i class="fa-solid fa-pen-to-square fa-lg" style="color:green;"></i></a></td>

        </tr>
        @endforeach

        </tbody>
    </table>
    {{$brands->links()}}
@endsection
