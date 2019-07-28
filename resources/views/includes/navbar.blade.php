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
            <a class="navbar-brand" href="index-1.html">{{ config('app.name') }}</a>
        </div>
        <div class="collapse navbar-collapse" id="collapse-toggle">
            <ul class="nav navbar-nav navbar-right">
                <li class="hvr-shutter-in-vertical"><a href="#HOME"><i class="fa fa-tv nav-icon"></i> الرئيسيه </a></li>
                <li class="hvr-shutter-in-vertical"><a href="#ABOUT"><i class="fa fa-star-o nav-icon"></i> من نحن</a>
                </li>
                <li class="hvr-shutter-in-vertical"><a href="#SERVICES"><i class="fa fa-heart-o nav-icon"></i>
                        خدماتنا</a></li>
                <li class="hvr-shutter-in-vertical"><a href="#TEAM"><i class="fa fa-user-o nav-icon"></i> فريق العمل</a>
                </li>
                <li class="hvr-shutter-in-vertical"><a href="#WORK"><i class="fa fa-lemon-o nav-icon"></i> اعمالنا</a>
                </li>
                <li class="hvr-shutter-in-vertical"><a href="#PRICING"><i class="fa fa-clone nav-icon"></i> اسعارنا</a>
                </li>
                <li class="hvr-shutter-in-vertical"><a href="#BLOG"><i class="fa fa-sun-o nav-icon"></i> المدونه</a>
                </li>
                <li class="hvr-shutter-in-vertical"><a href="#CONTACT"><i class="fa fa-phone nav-icon"></i> اتصل بنا</a>
                </li>
                <!-- Authentication Links -->
                @guest
                    <li class="hvr-shutter-in-vertical">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="hvr-shutter-in-vertical">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('ال تسجيل') }}</a>
                        </li>
                    @endif
                @else
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