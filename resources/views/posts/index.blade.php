@extends('layout.app')
@section('header')
    @include('partials.header')
@endsection
@section('body')
    @include('partials.body')
@endsection
@section('title','Статьи')

@section('content')
    @foreach($posts as $post)
        @include("partials.posts.item",["post"=> $post])
    @endforeach
@endsection
