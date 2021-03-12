@extends('app')

@section('title', '記事投稿')

@include('navafterlogin')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            <div class="card-text">
              <form method="POST" action="">
                
                <button type="submit" class="btn blue-gradient btn-block">投稿する</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection