@extends('layouts.app')

@section('content')

<div class="pages">
  <div data-page="form" class="page">
    <div class="page-content">
         <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
           {!! csrf_field() !!}
          <div class="content-block-title">Register</div>
          <div class="list-block">
            <ul>
              <li>
                <div class="item-content{{ $errors->has('name') ? ' has-error' : '' }}">
                  <div class="item-media"><i class="icon icon-form-name"></i></div>
                  <div class="item-inner"> 
                    <div class="item-title label">Name</div>
                    <div class="item-input">
                      <input type="text" placeholder="Your name" name="name" value="{{ old('name') }}"/>
                           @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="item-content{{ $errors->has('email') ? ' has-error' : '' }}">
                  <div class="item-media"><i class="icon icon-form-email"></i></div>
                  <div class="item-inner"> 
                    <div class="item-title label">E-mail</div>
                    <div class="item-input">
                      <input type="email" placeholder="E-mail" name="email" value="{{ old('email') }}"/>
                          @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                          @endif
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="item-content{{ $errors->has('password') ? ' has-error' : '' }}">
                  <div class="item-media"><i class="icon icon-form-password"></i></div>
                  <div class="item-inner"> 
                    <div class="item-title label">Password</div>
                    <div class="item-input">
                      <input type="password" placeholder="Password" name="password"/>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="item-content{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                  <div class="item-media"><i class="icon icon-form-password"></i></div>
                  <div class="item-inner"> 
                    <div class="item-title label">Confirm Password</div>
                    <div class="item-input">
                      <input type="password" placeholder="Password" name="password_confirmation"/>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="item-content{{ $errors->has('telefon') ? ' has-error' : '' }}">
                  <div class="item-media"><i class="icon icon-form-tel"></i></div>
                  <div class="item-inner"> 
                    <div class="item-title label">Phone</div>
                    <div class="item-input">
                      <input type="tel" placeholder="Phone" name="telefon"/>
                          @if ($errors->has('telefon'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telefon') }}</strong>
                                </span>
                          @endif
                    </div>
                  </div>
                </div>
              </li>
                <li>
                <div class="item-content{{ $errors->has('strasse') ? ' has-error' : '' }}">
                  <div class="item-media"><i class="icon ion-android-globe larger"></i></div>
                  <div class="item-inner"> 
                    <div class="item-title label">Strasse</div>
                    <div class="item-input">
                      <input type="text" placeholder="Strasse" name="strasse"/>
                           @if ($errors->has('strasse'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('strasse') }}</strong>
                                </span>
                          @endif
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="item-content{{ $errors->has('ort') ? ' has-error' : '' }}">
                  <div class="item-media"><i class="icon ion-location
                   larger"></i></div>
                  <div class="item-inner"> 
                    <div class="item-title label">Ort</div>
                    <div class="item-input">
                      <input type="text" placeholder="Ort" name="ort"/>
                           @if ($errors->has('ort'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('ort') }}</strong>
                                </span>
                          @endif
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="content-block">
            <div class="row">
              <div class="col-50"><a href="{{ url('/login') }}" class="button button-big button-fill color-gray open-login-screen">Login</a></div>
              <div class="col-50">
                <input type="submit" value="Submit" class="button button-big button-fill color-bluegray"/>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </div>
            </div>
          </div>
        </form> 
    </div>
  </div>
</div>


@endsection
