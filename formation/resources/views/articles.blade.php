@extends('layouts.app')
@section('title')
   Articles

@endsection
@section('content')
    <h1> Liste des articles </h1>
@foreach($articles as $id=>$item)
    <p><a href = "{{ route('single',['id'=>$id])}}">{{$item}}</a></p>

@endforeach
@endsection