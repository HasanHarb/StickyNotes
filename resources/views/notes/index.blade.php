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
        .color-black{
            color: #4f4f4f;
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
        <div class="row text-center" id="errors">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="container">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                </div>
            </div>
        </div>
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
            <?php
                $style = array("note-yellow", "note-blue", "note-pink");
            ?>
            <div class="wrapper clearfix">
                @foreach ($notes as $note)
                    @php
                        $value = rand(1, 100);
                    @endphp
                    <aside class="note-wrap {{$style[$value%3]}}">
                        <h4 class="color-black text-center"><strong> {{ $note->title }} </strong></h4>
                        <p class="color-black"> <strong>تاريخ:</strong> {{ substr($note->created_at ,0, 10) }} </p>
                        <p class="color-black"> <strong>الوقت:</strong> {{ substr($note->created_at , 10 ,  18) }} </p>
                        <p class="color-black">{{ $note->body }}</p>
                        <input type="hidden" id="note_link" value="{{URL::to('/').'/'. $note->link}}">
                        <br>
                        <a onclick="CopyText('{{URL::to('/').'/'. $note->link}}')" href="javascript:void(0);">
                            <span class="glyphicon glyphicon-link" data-toggle="tooltip" data-placement="top" title="نسخ الرابط !">
                            </a>
                        <a target="_blank" href="{{URL::to('/').'/'. $note->link}}">
                            <span class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="عرض !">
                            </a>
                        </span>
                        <div class="material-switch pull-right">
                            <input id="toggle_{{ $note->id }}" name="status" onclick="myfun('{{$note->id }}')" type="checkbox" @if ($note->status) checked @else "" @endif />
                                <label for="toggle_{{ $note->id }}" class="label-info"> </label>
                            </div>
                    </aside>
                @endforeach
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
                        <form class="form-horizontal" role="form" id="FormPerson" method="POST" action="{{ route('person.store') }}">
                            @csrf
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="first_name"
                                        placeholder="الاسم الاول ..." name="first_name"/>
                                </div>
                                <label class="col-sm-3 control-label" for="first_name">الاسم الاول:</label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="last_name"
                                        placeholder="الاسم الاخير ..." name="last_name"/>
                                </div>
                                <label class="col-sm-3 control-label" for="last_name">الاسم الاخير:</label>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                    <button type="submit" form="FormPerson" class="btn btn-info">حفظ</button>
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
                        <form class="form-horizontal" role="form" id="formNote" method="POST" action="{{route('notes.store')}}">
                            @csrf
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="title" placeholder="العنوان ..." name="title"/>
                                </div>
                                <label class="col-sm-3 control-label" for="title">العنوان:</label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <select class="form-control" id="person_id" name="person_id">
                                        <option value="">اختر المستخدم</option>
                                        @foreach ($persons as $person)
                                        <option value="{{ $person->id }}"> {{ $person->first_name . ' ' . $person->last_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="person_id" class="col-sm-3 control-label">مستخدم سابق:</label>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="5" id="body" name="body"></textarea>
                                </div>
                                <label for="body" class="col-sm-3 control-label">النص:</label>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9">

                                    <div class="material-switch pull-right">
                                        <input id="someSwitchOptionInfo2" name="status" type="checkbox" />
                                        <label for="someSwitchOptionInfo2" class="label-info"> </label>
                                    </div>

                                </div>
                                <label for="status" class="col-sm-3 control-label">عام للجميع:</label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-info" form="formNote">حفظ</button>
                </div>
            </div>
        </div>
    </div>
</section>
@push('script')

    <script>
        (function(){
            HideErrorsDiv();
        })();
        function HideErrorsDiv(){
            setTimeout(function(){
                document.getElementById("errors").style.display = "none";
            },5000);
        }
        function CopyText(link) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(link).select();
            document.execCommand("copy");
            $temp.remove();
        }
        function myfun(id_note) {
            $('input[id=toggle_' + id_note +']').change(function(){
            var mode= $(this).prop('checked');
            var id=$( this ).val();
                var note = {};
                note._token = '{{csrf_token()}}';
                note.id = id_note;
                note.status = $(this).prop('checked');
            $.ajax({
                type:"POST",
                dataType:"JSON",
                url:"{{ url('/notes/ChangeStatus') }}",
                data:note,
                success:function(data)
                {
                }
            });
        });
        }
    </script>
@endpush

@endsection
