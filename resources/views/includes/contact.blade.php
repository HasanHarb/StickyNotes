<!-- ==============================START CONTACT SECTION ==============================-->

<section id="CONTACT">
    <div class="bg-leggoo">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="section-title">
                        <h2> <i class="fa fa-phone"></i> اتصل بنا </h2>
                        <h4> تواصل معنا </h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-md-offset-1 col-lg-7 col-lg-offset-1">
                    <div class="section-text">
                        <p>تواصل معنا من خلال البريد الالكترني الخاص بالموقع او يمكنك تعبئة محتويات الرسالة ادناه وارسالها لنا ، في حال واجهتك مشكلة او استفسار</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <address>
                        <p class=""><i class="fa fa-map-marker"></i> الخليل - بالقرب من جامعة الخليل</p>
                        <p class=""><i class="fa fa-phone"></i> +1-222-111-2222 </p>
                        <p class=""><i class="fa fa-envelope"></i> enapgroup64@gmail.com </p>
                    </address>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-md-offset-1 col-lg-7 col-lg-offset-1">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    <strong> {{ $error }} </strong>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(session()->has('insertContact'))
                        <div class="alert alert-success">
                            {{ session()->get('insertContact') }}
                        </div>
                     @endif
                    <div class="contact-form">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="الاسم..." required value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="البريد الالكترونى..."
                                    required value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="الموبيل..." required value="{{ old('phone') }}">
                            </div>
                            <div class="form-group">
                                <textarea rows="6" placeholder="الرساله..." class="form-control" name="body"
                                    required value="{{ old('body') }}"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-leggoo pull-right">ارسل</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CONTACT SECTION -->
