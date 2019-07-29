@extends('layouts.master')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="jumbotron text-center" style="background-color: #00b7b7;box-shadow: 0 10px 10px -10px;">
                <div class="container">
                    <h2 class="display-3" style="color: white">تمتع بكامل المزايا عند انشاء حساب خاص بك على الموقع</h2>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <style>
                .contact-form .form-control {
                    color: #999 !important;
                }    
            </style>
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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('الإسم:') }}</label>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('البريد الالكتروني:') }}</label>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                required autocomplete="new-password">
                            </div>
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('كلمة المرور:') }}</label>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تأكيد كلمة المرور:') }}</label>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-leggoo">
                                    {{ __('تسجيل') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <h3>لدي حساب</h3>
                <p>لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم
                    في
                    صناعات المطابع ودور النشر.</p>
                <button type="submit" class="btn btn-leggoo pull-right">نسجيل الدخول</button>
            </div>
        </div>
    </div>
</section>
@endsection