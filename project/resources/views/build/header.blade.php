@section('header')
    <header id="header" class="navbar navbar-expand-lg navbar-light bg-light container-fluid">
        <a class="navbar-brand" rel="home" href="{{ route('home') }}" title="Αρχική σελίδα">
            <img style="max-width:135px; margin-top: -7px;" src="{{ asset('img/logo_w.png') }}">
        </a>
        <div class="row" style="width: 100%;">
            <div class="col-sm-8 col-md-8 col-lg-7">
                <div id="title" class="row">
                    <h2 class="display-6">Ίδρυμα Κοινωνικών Ασφαλίσεων</h2>
                </div>
                <div id="subtitle" class="row">
                    <h5 class="display-6">Ενιαίο Ταμείο Ασφάλισης Μισθωτών</h5>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">

                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer" role="button"
                               aria-expanded="false">
                                @if(Route::currentRouteName()=='english')
                                    <img id="navEng" src="https://image.flaticon.com/icons/png/128/206/206592.png"
                                         alt="language" class="img-thumbnail icon-small">  
                                    <span id="lanNavSel">ENG</span>
                                    @else
                                <img id="imgNavSel" src="https://image.flaticon.com/icons/png/128/206/206682.png"
                                     alt="language" class="img-thumbnail icon-small">  
                                <span id="lanNavSel">ΕΛΛ</span>
                                @endif
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    @if(Route::currentRouteName()=='home' or Route::currentRouteName()=='english')
                                        <a id="navGr" href="{{ route('home')}}" class="language">
                                            <img id="imgNavGr"
                                                 src="https://image.flaticon.com/icons/png/128/206/206682.png"
                                                 alt="greek" class="img-thumbnail icon-small"> 
                                             <span id="lanNavGr">Ελληνικά</span>
                                        </a>
                                    @else
                                        <a id="navGr" href="{{ Route::currentRouteName()}}" class="language">
                                            <img id="imgNavGr"
                                                 src="https://image.flaticon.com/icons/png/128/206/206682.png"
                                                 alt="greek" class="img-thumbnail icon-small"> 
                                             <span id="lanNavGr">Ελληνικά</span>
                                        </a>
                                    @endif
                                </li>
                                <li>
                                    <a id="navEng" href="{{route('english')}}" class="language">
                                        <img id="imgNavEng"
                                             src="https://image.flaticon.com/icons/png/128/206/206592.png" alt="english"
                                             class="img-thumbnail icon-small">  
                                        <span id="lanNavEng">English</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

            </div>
            @if(\Illuminate\Support\Facades\Auth::user())
                <div class="col-sm-10 col-md-10 col-lg-2" id="nav-user-actions">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ route('profile') }}" class="btn btn-outline-light">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                {{{ isset(Auth::user()->username) ? Auth::user()->username : Auth::user()->email }}}
                            </a>

                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                {{ csrf_field() }}
                                <button style="cursor:pointer" type="submit" class="btn btn-outline-light">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    Αποσύνδεση
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <div class="col-sm-10 col-md-10 col-lg-2" id="nav-user-actions">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ route('login') }}" class="btn btn-outline-light">
                                <i class="fa fa-sign-in" aria-hidden="true"></i>
                                Σύνδεση
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="btn btn-outline-light">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                Εγγραφή
                            </a>
                        </li>
                    </ul>
                </div>
                @include('layouts.login_modal')
                @include('layouts.register_modal')
            @endif
        </div>


    </header>