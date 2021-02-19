<nav class="navbar navbar-expand navbar-dark aqua-gradient">

  <a class="navbar-brand" href="/"><i class="fab fa-trello mr-1"></i>campe-share</a>

  <ul class="navbar-nav ml-auto">

    <li class="nav-item">
      <a class="nav-link" href="/register">ユーザー登録</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/login">ログイン</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('articles.index') }}">ゲストログイン</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="">
    </form>
    <!-- Dropdown -->

  </ul>

</nav>
