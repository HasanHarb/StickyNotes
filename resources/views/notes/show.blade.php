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
                <h2 class="display-3" style="border-bottom: 2px solid #00b7b7;padding: 20px;">
                    تمت المشاركة من قبل : {{ $note->user->name }}
                </h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4">            
                <?php
                    $style = array("note-yellow", "note-blue", "note-pink");
                ?>
                <div class="wrapper clearfix">    
                    @php
                        $value = rand(1, 20);
                    @endphp
                    <aside class="note-wrap {{$style[$value%3]}}" style="width: 380px;min-height: 280px;">
                        <h4 class="color-black text-center"><strong> {{ $note->title }} </strong></h4>
                        <p class="color-black"> <strong>تاريخ:</strong> {{ substr($note->created_at ,0, 10) }} </p>
                        <p class="color-black"> <strong>الوقت:</strong> {{ substr($note->created_at , 10 ,  18) }} </p>
                        <p class="color-black"> <strong>الحالة:</strong> @if ($note->status) عام @else خاص @endif </p>
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
                    </aside>  
                </div>
            </div>
            <div class="col-md-4 col-sm-4"></div>
        </div>
    </div>
</section>
@push('script')

    <script>
        function CopyText(link) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(link).select();
            document.execCommand("copy");
            $temp.remove();
        }
    </script>    
@endpush

@endsection