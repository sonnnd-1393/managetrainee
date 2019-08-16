@extends('layouts.app')

@section('content')
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-login m-login--signin  m-login--5" id="m_login" style="background-image: url(bower-components/managetrainee-bower/images/login/bg-3.jpg);">
            <div class="m-login__wrapper-1 m-portlet-full-height">
                <div class="m-login__wrapper-1-1">
                    <div class="m-login__contanier">
                        <div class="m-login__content">
                            <div class="m-login__logo">
                                <a href="#">
                                    <img src="bower-components/managetrainee-bower/images/login/logo-2.png">
                                </a>
                            </div>
                            <div class="m-login__title">
                                <h3>JOIN OUR GREAT METRO COMMUNITY GET FREE ACCOUNT</h3>
                            </div>
                            <div class="m-login__desc">
                                Amazing Stuff is Lorem Here.Grownng Team
                            </div>
                            <div class="m-login__form-action">
                                <button type="button" id="m_login_signup" class="btn btn-outline-focus m-btn--pill">Get An Account</button>
                            </div>
                        </div>
                    </div>
                    <div class="m-login__border">
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="m-login__wrapper-2 m-portlet-full-height">
                <div class="m-login__contanier">
                    <div class="m-login__signin">
                        <div class="m-login__head">
                            <h3 class="m-login__title">Login To Your Account</h3>
                        </div>
                        <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group m-form__group">
                                <input class="form-control m-input @error('email') is-invalid @enderror" type="text" placeholder="Username" name="email" autocomplete="off" autofocus value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group m-form__group">
                                <input class="form-control m-input m-login__form-input--last @error('password') is-invalid @enderror" id="password" type="Password" placeholder="Password" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row m-login__form-sub">
                                <div class="col m--align-left">
                                    <label class="m-checkbox m-checkbox--focus">
                                        <input type="checkbox" name="remember"> Remember me
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col m--align-right">
                                    <a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
                                </div>
                            </div>
                            <div class="m-login__form-action">
                                <button class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air" type="submit">Sign In</button>
                            </div>
                        </form>
                    </div>
                    <div class="m-login__signup">
                        <div class="m-login__head">
                            <h3 class="m-login__title">Sign Up</h3>
                            <div class="m-login__desc">Enter your details to create your account:</div>
                        </div>
                        <form class="m-login__form m-form" method="POST" action="http://127.0.0.1:8000/register" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group m-form__group">
                                <input class="form-control m-input @error('name') is-invalid @enderror" type="text" placeholder="Fullname" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group m-form__group">
                                <input class="form-control m-input" type="text" placeholder="Email" name="register_email" value="{{ old('register_email') }}" autocomplete="off">
                                @error('register_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group m-form__group">
                                <input class="form-control m-input" type="password" placeholder="Password" name="register_password" value="{{ old('register_password') }}">
                                @error('register_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group m-form__group">
                                <input class="form-control m-input" type="password" placeholder="Confirm Password" name="register_password_confirmation" value="{{ old('register_password') }}">
                            </div>			
                            <div class="form-group m-form__group mb-3">
                                <input class="form-control m-input" type="text" placeholder="University" name="university">
                            </div>
                            <div class="form-group m-form__group mt-3 mb-3">
                                <label for="exampleSelect1">Position</label>
                                <select class="form-control m-input mt-3 mb-3" id="exampleSelect1" name="position_id">
                                    <option value="1">1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group m-form__group mt-3 mb-3">
                                <label for="exampleSelect1">Batch</label>
                                <select class="form-control m-input mt-3 mb-3" id="exampleSelect1" name="batch_id">
                                    <option value="1">1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group m-form__group mt-3 mb-3">
                                <label for="exampleSelect2">Language</label>
                                <select class="form-control m-input" id="exampleSelect2" name="language_id">
                                    <option value="1">1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleSelect3" placeholder="">Primary Trainer</label>
                                <select class="form-control m-input" id="exampleSelect3" name="primary_trainer">
                                    <option value="1">1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group m-form__group mt-3 mb-3">
                                <label for="exampleFormControlFile1">Avatar</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="avatar">
                            </div>
                            <div class="m-login__form-sub">
                                <label class="m-checkbox m-checkbox--focus">
                                    <input type="checkbox" name="agree"> I Agree the
                                    <a href="#" class="m-link m-link--focus">terms and conditions</a>.
                                    <span></span>
                                </label>
                                <span class="m-form__help"></span>
                            </div>
                            <div class="m-login__form-action">
                                <button  class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Sign Up</button>
                                <button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <div class="m-login__forget-password">
                        <div class="m-login__head">
                            <h3 class="m-login__title">Forgotten Password ?</h3>
                            <div class="m-login__desc">Enter your email to reset your password:</div>
                        </div>
                        <form class="m-login__form m-form" action="">
                            <div class="form-group m-form__group">
                                <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
                            </div>
                            <div class="m-login__form-action">
                                <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Request</button>
                                <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom ">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Page -->
</div>
@endsection

@section('script')
    <script type="text/javascript">
        $('#m_login_signup_submit').click(function( event ) {
            event.preventDefault();
        })
    </script>
@endsection
