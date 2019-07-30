<!-- ====================== START statics SECTION ======================-->
<section class="section count-item">
    <div class="bg-leggoo">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="counter">
                        <i class="fa fa-male"></i>
                        <div class="timer" id="item1" data-to="{{ App\Http\Controllers\NotesController::NumberOfUsers() }}" data-speed="1000">0</div>
                        <h4> المستخدمين</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="counter">
                        <i class="fa fa-check"></i>
                        <div class="timer" id="item2" data-to="{{ App\Http\Controllers\NotesController::NumberOfNotes() }}" data-speed="1000">0</div>
                        <h4>الملاحظات</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="counter">
                        <i class="fa fa-coffee"></i>
                        <div class="timer" id="item3" data-to="9876" data-speed="5000">9876</div>
                        <h4> فروعنا </h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="counter wow fadeI">
                        <i class="fa fa-briefcase"></i>
                        <div class="timer" id="item4" data-to="9999" data-speed="5000">9999</div>
                        <h4> عملاتنا</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================END statics SECTION ======================-->
