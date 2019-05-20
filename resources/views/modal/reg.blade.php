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