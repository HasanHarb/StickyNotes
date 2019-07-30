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
                        <p class=""><i class="fa fa-envelope"></i> info@molahadaty.com </p>
                        <p class=""><i class="fa fa-skype"></i> @ molahadaty </p>
                        <p class=""><i class="fa fa-clock-o"></i> sun. to thu. 9AM to 5PM </p>
                    </address>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-md-offset-1 col-lg-7 col-lg-offset-1">
                    <div class="contact-form">
                        <form action="{{ route('contact.store') }}" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="الاسم..." required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="البريد الالكترونى..."
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="الموبيل..." required>
                            </div>
                            <div class="form-group">
                                <textarea rows="6" placeholder="الرساله..." class="form-control" name="body"
                                    required></textarea>
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