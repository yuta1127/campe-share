@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('navafterlogin')
  <div class="container">
  <div class="card mt-3">
  <div class="card-body pt-0">
    <h3 class="h4 card-title">
        {{ $article->title }}
    </h3>
    <div class="card-text">
      {{ $article->content }}
    </div>
  </div>
  <form method="GET" action="">
    @csrf
    <input class="btn btn-info" type="submit" value="変更する"></input>
  </form>

  <form method="POST" action="">
     @csrf
    <a href="#" class="btn btn-danger"  onclick="deletePost(this);">削除する</a>
  </form>
</div>
</div>
@endsection