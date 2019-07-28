@extends('layouts.master')

@section('content')
@push('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/card.css')}}"><!--  RTL Style CSS -->
@endpush
<section class="section">
    <style>
        .btn-p-20 {
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
                <button type="button" class="btn btn-leggoo btn-lg btn-block btn-p-20" data-toggle="modal"
                    data-target="#personModal">
                    <span class="glyphicon glyphicon-user"></span>
                    اضافة مستخدم جديد
                </button>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <button type="button" class="btn btn-leggoo btn-lg btn-block btn-p-20" data-toggle="modal"
                data-target="#noteModal">
                    <span class="glyphicon glyphicon-list-alt"></span>
                    اضافة ملاحظة جديد
                </button>
            </div>
        </div>
        <div class="row">
            <div class="wrapper clearfix">
                <aside class="note-wrap note-yellow">
                    <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                        بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن</p>
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
            </div>
        </div>
    </div>
    <!-- Modal Person-->
    <div id="personModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">اضافة مستخدم جديد</h4>
                </div>
                <div class="modal-body">
                    <div class="contact-form">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="first_name"
                                        placeholder="الاسم الاول ..." />
                                </div>
                                <label class="col-sm-3 control-label" for="first_name">الاسم الاول:</label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="last_name"
                                        placeholder="الاسم الاخير ..." />
                                </div>
                                <label class="col-sm-3 control-label" for="last_name">الاسم الاخير:</label>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">حفظ</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Nots-->
    <div id="noteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">اضافة ملاحظة جديد</h4>
                </div>
                <div class="modal-body">
                    <style>
                        .contact-form .form-control {
                            color: #999 !important;
                        }    
                    </style>
                    <div class="contact-form">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="title"
                                        placeholder="العناون ..." />
                                </div>
                                <label class="col-sm-3 control-label" for="title">العنوان:</label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <select class="form-control" id="sel1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <label for="sel1" class="col-sm-3 control-label">مستخدم سابق:</label>
                            </div>
                            
                            <div class="form-group">
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="5" id="body"></textarea>
                                    </div>
                                <label for="body" class="col-sm-3 control-label">النص:</label>
                            </div>

                            <div class="form-group">
                                    <div class="col-sm-9">
    
                                        <div class="material-switch pull-right">
                                            <input id="someSwitchOptionInfo" name="someSwitchOption001" type="checkbox"/>
                                            <label for="someSwitchOptionInfo" class="label-info">   </label>
                                        </div>
                                                
                                    </div>
                                    <label for="sel1" class="col-sm-3 control-label">عام للجميع:</label>
                                </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">حفظ</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection