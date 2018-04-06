@section('navbar')
    <nav id="menu" class="row">
        <div class="col-sm-12 col-md col-lg top-menu">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fa fa-home menu-item-icon" aria-hidden="true"></i>
                <p class="menu-item-text">Αρχική σελίδα</p>
            </a>
        </div>
        <div class="col-sm-12 col-md col-lg top-menu">
            <a class="nav-link" href="{{ route('stores') }}">
                <i class="fa fa-building menu-item-icon" aria-hidden="true"></i>
                <p class="menu-item-text">Υποκαταστήματα</p>
            </a>
        </div>
        <div class="col-sm-12 col-md col-lg top-menu">
            <a class="nav-link" href="{{ route('faq') }}">
                <i class="fa fa-question menu-item-icon" aria-hidden="true"></i>
                <p class="menu-item-text">Συχνές ερωτήσεις</p>
            </a>
        </div>
        <div class="col-sm-12 col-md col-lg top-menu">
            <a class="nav-link" href="{{ route('announcements') }}">
                <i class="fa fa-bullhorn menu-item-icon" aria-hidden="true"></i>
                <p class="menu-item-text">Ανακοινώσεις</p>
            </a>
        </div>
        <div class="col-sm-12 col-md col-lg top-menu">
            <a class="nav-link" href="{{ route('contact') }}">
                <i class="fa fa-commenting menu-item-icon" aria-hidden="true"></i>
                <p class="menu-item-text">Επικοινωνία</p>
            </a>
        </div>
    </nav>
