@extends('layouts.master')

@section('content')
@push('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/card.css')}}"><!--  RTL Style CSS -->
@endpush
<section class="section">
    <style>
        .btn-leggoo {
            padding: 20px 30px !important;
        }
    </style>
    <div class="container">
        <div class="row text-center">
            <div class="container">
                <h2 class="display-3" style="border-bottom: 2px solid #00b7b7;padding: 20px;">مرحبا بك في موقع ملاحظاتي
                </h2>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <button type="button" class="btn btn-leggoo btn-lg btn-block">
                    <span class="glyphicon glyphicon-user"></span>
                    اضافة مستخدم جديد
                </button>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <button type="button" class="btn btn-leggoo btn-lg btn-block">
                    <span class="glyphicon glyphicon-list-alt"></span>
                    اضافة ملاحظة جديد
                </button>
            </div>
        </div>
        <div class="row">
            <div class="wrapper clearfix">
                <aside class="note-wrap note-yellow">
                    <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                        بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن
                        تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. </p>
                    <a href="http://youtu.be/vFYaFT0q6Uw">The Mighty Boosh</a>
                </aside>
                <aside class="note-wrap note-blue">
                    <p>So we back in the mine, got our pick axe swinging from side to side</p>
                    <a href="http://youtu.be/cPJUBQd-PNM">CaptainSparklez</a>
                </aside>
                <aside class="note-wrap note-blue">
                    <p>So we back in the mine, got our pick axe swinging from side to side</p>
                    <a href="http://youtu.be/cPJUBQd-PNM">CaptainSparklez</a>
                </aside>
                <aside class="note-wrap note-pink">
                    <p>Ice skating and shit in NORWAY</p>
                    <a href="http://youtu.be/EF1V8HFfpTE">apetor</a>
                </aside>
                <aside class="note-wrap note-green">
                    <p>One pill makes you larger,
                        And one pill makes you small</p>
                    <a href="http://youtu.be/i2LhAeFutxk">Jefferson Airplane</a>
                </aside>
                <aside class="note-wrap note-yellow">
                    <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                        بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن
                        تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. </p>
                    <a href="http://youtu.be/vFYaFT0q6Uw">The Mighty Boosh</a>
                </aside>
            </div>
        </div>
    </div>

</section>
@endsection