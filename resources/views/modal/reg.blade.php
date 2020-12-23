<modal v-if="showModalReg" @close="showModalReg = false">
      <h3 slot="header">{{ __('Регистрация') }}</h3>
      <div slot="body">
      <form method="POST" action="{{ route('register') }}">
                        @csrf
        <div class="container">
        <div class="row">
          <div class="col-sm-12 my-auto">
            <div class="md-form">
              <input name="name" type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autofocus>
              <label for="name">{{ __('Имя') }}</label>
              @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 my-auto">
            <div class="md-form">
              <input name="familiya" type="text" id="familiya" class="form-control{{ $errors->has('familiya') ? ' is-invalid' : '' }}" value="{{ old('familiya') }}" required autofocus>
              <label for="familiya">{{ __('Фамилия') }}</label>
              @if ($errors->has('familiya'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('familiya') }}</strong>
                                    </span>
                                @endif
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 my-auto">
            <div class="md-form">
              <input name="otchestvo" type="text" id="otchestvo" class="form-control{{ $errors->has('otchestvo') ? ' is-invalid' : '' }}" value="{{ old('otchestvo') }}" required autofocus>
              <label for="otchestvo">{{ __('Отчество') }}</label>
              @if ($errors->has('otchestvo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('otchestvo') }}</strong>
                                    </span>
                                @endif
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 my-auto">
            <div class="md-form">
              <input name="phone_number" type="tel" id="phone_number" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" value="{{ old('phone_number') }}" required autofocus>
              <label for="phone_number">{{ __('Номер телефона') }}</label>
              @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 my-auto">
            <div class="md-form">
              <input name="date_of_birth" type="date" id="date_of_birth" class="form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" value="{{ old('date_of_birth') }}" required autofocus>
              <label for="date_of_birth">{{ __('Дата рождения') }}</label>
              @if ($errors->has('date_of_birth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                @endif
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-12 my-auto">
          <div class="md-form">
            <input  type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
            <label for="password">{{ __('Пароль') }}</label>
            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-sm-12 my-auto">
            <div class="md-form">
              <input  type="password" name="password_confirmation" id="password-confirm" class="form-control" required>
              <label for="password-confirm">{{ __('Повторно пароль') }}</label>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-sm-12 my-auto">
              <div class="md-form">
                <input  type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
                <label for="email">{{ __('Почта') }}</label>
                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              </div>
            </div>
            </div>
        </div>
        <div slot="footer" class="modal-footer">
        <div class="col-12 text-center">
          <button class="btn-sm col-12 btn-primary" type="Submit">Регистрация</button>
        </div>
      </div>
      </div>
    </modal>