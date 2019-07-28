@extends('layouts.master')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
                <div class="jumbotron text-center" style="background-color: #00b7b7;box-shadow: 0 10px 10px -5px;">
                        <div class="container">
                          <h2 class="display-3" style="color: white">مرحبا بك في موقع ملاحظاتي</h2>
                        </div>
                      </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-7 col-md-offset-1 col-lg-7 col-lg-offset-1">
                <div class="contact-form">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                            <label for="email"class="col-md-4 col-form-label text-md-right">{{ __('البريد الالكتروني') }}</label>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">
                            </div>
                            <label for="password"class="col-md-4 col-form-label text-md-right">{{ __('كلمة المرور') }}</label>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('تذكيرني') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-leggoo">
                                    {{ __('تسجيل الدخول') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('نسيت كلمة المرور؟') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <h3>مستخدم جديد</h3>
                <p>لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم
                    في
                    صناعات المطابع ودور النشر.</p>
                    <button type="submit" class="btn btn-leggoo pull-right">انشاء حساب</button>
                
            </div>
        </div>
    </div>
</section>
@endsection