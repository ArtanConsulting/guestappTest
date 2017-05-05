@extends('layouts.app')

@section('content')
<div class="login-screen modal-in">
    <div class="view-main">
      <div class="page">
        <div class="page-content login-screen-content">
          <div class="login-screen-title">Login</div>

          <form role="form" id="register-form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}
            <div class="list-block">
              <ul>
                <li class="item-content {{ $errors->has('email') ? ' has-error' : '' }}">
                  <div class="item-inner">
                    <div class="item-title label">E-mail</div>
                    <div class="item-input">
                      <input type="email" id="emial" placeholder="Your E-mail" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="item-title label">Password</div>
                    <div class="item-input">
                      <input type="password" id="password" name="password" placeholder="Your password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="list-block">
              
              <div class="list-block-label">
                  <ul style="padding-left: 45%;">
                    <button type="submit" id="submit-login" class="buttons button button-raised">
                            Login
                    </button>
                     
                  </ul>
                  <ul>
                   <li>
                      <label class="label-checkbox item-content">
                          <!-- Checked by default -->
                          <input type="checkbox" name="checkbox">
                          <div class="item-media">
                             <i class="icon icon-form-checkbox"></i>
                          </div>
                          <div class="item-inner">
                             <div class="item-title">Remember Me</div>
                          </div>
                      </label>
                    </li>
                  </ul>
                 <p><a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password? </a></p>
                 <p class="buttons">
                  <a href="{{ url('/form') }}" class="button button-raised">Register</a>
                </p>
              </div>   
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
