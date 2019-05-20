<modal v-if="showModalLogin" @close="showModalLogin = false">
    <h3 slot="header">{{ __('Вход') }}</h3>
    <div slot="body">
    <form method="POST" action="{{ route('login') }}">
                        @csrf
        <div class="container">
        <div class="row">
          <div class="col-sm-12 my-auto">
            <div class="md-form">
              <input name="email" type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>
              <label for="email">{{ __('Почта') }}</label>
              @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
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
        </div>
        <div slot="footer" class="modal-footer">
        <div class="col-12 text-center">
          <button class="btn-sm col-12 btn-primary" type="submit">{{ __('Вход') }}</button>
          <span class="badge col-12 badge-primary">
          @if (Route::has('password.request'))
          <a id="show-modal" @click="showModalFReg = true">
          {{ __('Забыли пароль?') }}
          </a>
          @endif
          </span>
        </div>
      </div>
      </div>
    </form>
</modal>