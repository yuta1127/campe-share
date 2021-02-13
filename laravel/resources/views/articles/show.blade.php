@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('navafterlogin')
  <div class="container">
    @include('articles.card')
  </div>
@endsection