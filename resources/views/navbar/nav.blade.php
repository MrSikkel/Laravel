<nav class="navbar maincolor navbar-expand-lg navbar-dark animated fadeIn">
    <div class="container">

      <!-- search -->
      <form id="demo-b">
        <input class="mr-2" type="search">
      </form>



      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        
        <ul class="navbar-nav mr-auto text-center">
          <li class="nav-item">
            <a class="nav-link" href="/">Главная
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/courses">Ближайшие курсы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Контакты</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/faq">ЧАВО</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://споспк.рф/">Главная СПК</a>
          </li>
        </ul>
      </div>


        
        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons justify-content-center">
           <!-- Authentication Links -->
      <div class="regLinks">
      @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
            </li>
          @endif
          @else
            <li class="nav-item dropdown links">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ auth::User()->name }}<span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right links" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      {{ __('Выход') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
                </div>
              </li>
            @endguest
        <div>
        </ul>

      </div>

    </div>
</nav>