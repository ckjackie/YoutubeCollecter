<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      @if(Auth::user())
        {{ Auth::user()->name }}
      @else
        訪客
      @endif
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">首頁</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/videolist">影片清單</a>
        </li>


        @guest
        <li class="nav-item">
          <a class="nav-link" href="/login/">登入</a>
        <li class="nav-item">
          <a class="nav-link" href="/register/">註冊</a>
        @else
        <li class="nav-item">
          <a class="nav-link" href="/mylogout/">登出</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard/">後台</a>
        @endguest


        </li>
        
      </ul>
    </div>
  </div>
</nav>