<!-- START NAVBAR  SECTION -->
<nav class="navbar navbar-default navbar-fixed-top display-nav" id="navbar-leggoo">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-toggle"
                aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"> ملاحظاتي </a>
        </div>
        <div class="collapse navbar-collapse" id="collapse-toggle">
            <ul class="nav navbar-nav navbar-right">
                <li class="hvr-shutter-in-vertical"><a href="/"><i class="fa fa-tv nav-icon"></i> الرئيسيه </a></li>
                <li class="hvr-shutter-in-vertical"><a href="/contact"><i class="fa fa-phone nav-icon"></i> تواصل معنا </a></li>
                @guest
                    <li class="hvr-shutter-in-vertical">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="hvr-shutter-in-vertical">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('انشاء حساب') }}</a>
                        </li>
                    @endif
                @else
                    <li class="hvr-shutter-in-vertical"><a href="/notes"><i class="fa fa-star-o nav-icon"></i> ملاحظاتي</a></li>
                    <li class="hvr-shutter-in-vertical dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" style="text-align: right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="margin: 10%" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('تسجيل الخروج') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav><!-- END  NAVBAR  SECTION -->
