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
          <li class="nav-item active">
            <a class="nav-link" href="#">Бесплатные мероприятия
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Ближайшие курсы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Расписание занятий</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Контакты</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Фото</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">ЧАВО</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Преподаватели</a>
          </li>
          @guest
          <li class="nav-item">
          @if (Route::has('register'))
            <div class="dropdown nav-link">
              <a class="dropdown-toggle text-white" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Личный кабинет
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" id="show-modal" @click="showModalLogin = true">Вход</a>
                <a class="dropdown-item" id="show-modal" @click="showModalReg = true">Регистрация</a>
              </div>
            </div>
            @endif
            @else
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Выход') }}
                </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                
              </li>
          </li>
          @endguest
        </ul>


        
        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons justify-content-center">
          <li class="nav-item">
          </li>
        </ul>

      </div>

    </div>
</nav>