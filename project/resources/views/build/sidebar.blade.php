@section('sidebar')
    <aside class="col-sm-12 col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar">
        <!--Left Sidebar-->

        <!--Search form-->
        <section id="search" class="row">
            <form method="get" action="{{route('search')}}" class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Αναζήτηση..." name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>

                </div>
            </form>
        </section>

        <!--Sidebar Menu-->
        <section id="sidebar-menu" class="nav-side-menu">
            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
            <header class="row" id="recent-anouncements-title">
                <h6>Επέλεξε την κατηγορία που σε ενδιαφέρει...</h6>
            </header>
            <div class="menu-list">
                <ul id="menu-content" class="menu-content collapse out">

                    <!--Ασφαλισμένος-->
                    <a href="{{route('insured')}}">
                        <li class="collapsed {{ Request::is('insured','insured/*') ? 'active' : '' }}">
                            <i class="fa fa-superpowers fa-lg"></i>
                            Ασφαλισμένος
                        </li>
                    </a>
                    <ul class="sub-menu collapse {{ Request::is('insured', 'insured/*') ? 'show' : '' }}" id="m1">

                        <a href="{{route('insured.a1')}}">
                            <li class="{{ Request::is('insured/Πιστοποίηση-ασφαλισμένου') ? 'active' : '' }}">
                                Πιστοποίηση ασφαλισμένου
                            </li>
                        </a>

                        <a href="{{route('insured.a2')}}">
                            <li class="{{ Request::is('insured/Ασφαλιστική-ικανότητα') ? 'active' : '' }}">
                                Ασφαλιστική ικανότητα
                            </li>
                        </a>

                        <a href="{{route('insured.a3')}}">
                            <li class="{{ Request::is('insured/Ατομικός-λογαριασμός-ασφάλισης') ? 'active' : '' }}">
                                Ατομικός λογαριασμός ασφάλισης
                            </li>
                        </a>

                        <a href="{{route('insured.a4')}}">
                            <li class="{{ Request::is('insured/Θεμελίωση-συνταξιοδοτικού-δικαιώματος') ? 'active' : '' }}">
                                Θεμελίωση συνταξιοδοτικού δικαιώματος
                            </li>
                        </a>

                        <a href="{{route('insured.a5')}}">
                            <li class="{{ Request::is('insured/Υποβολή-αίτησης-συνταξιοδότησης') ? 'active' : '' }}">
                                Υποβολή αίτησης συνταξιοδότησης
                            </li>
                        </a>

                        <a href="{{route('insured.a6')}}">
                            <li class="{{ Request::is('insured/Υπολογισμός-βασικού-ποσού-σύνταξης') ? 'active' : '' }}">
                                Υπολογισμός βασικού ποσού σύνταξης
                            </li>
                        </a>

                        <a href="{{route('insured.a7')}}">
                            <li class="{{ Request::is('insured/Απογραφή-και-απόδοση-ασφαλιστικής-ικανότητας-έμμεσα-ασφαλισμένων') ? 'active' : '' }}">
                                Απογραφή και απόδοση ασφαλιστικής ικανότητας έμμεσα ασφαλισμένων
                            </li>
                        </a>

                        <a href="{{route('insured.a8')}}">
                            <li class="{{ Request::is('insured/Βεβαιώσεις') ? 'active' : '' }}">
                                Βεβαιώσεις
                            </li>
                        </a>

                    </ul>

                    <!--Εργοδότης-->
                    <a href="{{route('employer')}}">
                        <li class="collapsed {{ Request::is('employer','employer/*') ? 'active' : '' }}">
                            <i class="fa fa-superpowers fa-lg"></i>
                            Εργοδότης
                        </li>
                    </a>
                    <ul class="sub-menu collapse {{ Request::is('employer', 'employer/*') ? 'show' : '' }}" id="m2">
                        <a href="{{route('employer.a1')}}">
                            <li class="{{ Request::is('employer/Ηλεκτρονική-Υποβολή-Α.Π.Δ.') ? 'active' : '' }}">
                                Ηλεκτρονική Υποβολή Α.Π.Δ.
                            </li>
                        </a>

                        <a href="{{route('employer.a2')}}">
                            <li class="{{ Request::is('employer/Οικονομική-Καρτέλα-Εργοδότη') ? 'active' : '' }}">
                                Οικονομική Καρτέλα Εργοδότη
                            </li>
                        </a>

                        <a href="{{route('employer.a3')}}">
                            <li class="{{ Request::is('employer/Μαζική-Ταυτοποίηση-Ασφαλισμένων') ? 'active' : '' }}">
                                Μαζική Ταυτοποίηση Ασφαλισμένων
                            </li>
                        </a>

                        <a href="{{route('employer.a4')}}">
                            <li class="{{ Request::is('employer/Βεβαίωση-Ασφαλιστικής-Ενημερότητας') ? 'active' : '' }}">
                                Βεβαίωση Ασφαλιστικής Ενημερότητας
                            </li>
                        </a>

                        <a href="{{route('employer.a5')}}">
                            <li class="{{ Request::is('employer/Παροχή-ενσήμων-εργαζομένων') ? 'active' : '' }}">
                                Παροχή ενσήμων εργαζομένων
                            </li>
                        </a>
                    </ul>


                    <!--Οφειλέτης-->
                    <a href="{{route('debtor')}}">
                        <li class="collapsed {{ Request::is('debtor') ? 'active' : '' }}">
                            <i class="fa fa-superpowers fa-lg"></i>
                            Οφειλέτης
                        </li>
                    </a>

                    <!--Πιστοποιημένος φορέας-->
                    <a href="{{route('coperator')}}">
                        <li class="collapsed {{ Request::is('coperator') ? 'active' : '' }}">
                            <i class="fa fa-superpowers fa-lg"></i>
                            Πιστοποιημένος φορέας
                        </li>
                    </a>

                    <!--Πάροχος Κατ'Οίκον Φροντίδας Συνταξιούχων-->
                    <a href="{{route('care')}}">
                        <li class="collapsed {{ Request::is('care') ? 'active' : '' }}">
                            <i class="fa fa-superpowers fa-lg"></i>
                            Φροντίδα συνταξιούχων
                        </li>
                    </a>

                    <!--Χρήστης υπηρεσιών ΚΕ.Π.Α.-->
                    <a href="{{route('kepa')}}">
                        <li class="collapsed {{ Request::is('kepa') ? 'active' : '' }}">
                            <i class="fa fa-superpowers fa-lg"></i>
                            Χρήστης υπηρεσιών ΚΕ.Π.Α.
                        </li>
                    </a>
                </ul>
            </div>
        </section>

        <!--Announcements-->
        <section id="announcements" class="container-fluid">

            <header class="row" id="recent-anouncements-title">
                <h6>Πρόσφατες Aνακοινώσεις</h6>
            </header>
            <div class="row">

                @foreach(\App\Http\Controllers\PagesController::announcementsWidget() as $a)
                    <div class="row">
                        <div class="col">
                            <details class="sidebar-announcement-detail">
                                <summary class="unselectable">
                                    <div class="row">
                                        <strong>{{$a->title}}</strong>
                                    </div>
                                    <small class="pull-right">{{ Carbon\Carbon::parse($a->created_at)->format('d M Y h:i:s A') }}</small>
                                </summary>
                                <p>{{$a->content}}</p>

                            </details>
                        </div>
                    </div>

                @endforeach
                <hr>
                <div class="row">
                    <a href="{{route('announcements')}}" id="more-announcements-link">Περισσότερες ανακοινώσεις...</a>
                </div>
            </div>

        </section>


        <!--Banners-->
        <section id="banners" class="row">
            <!-- <img src="img/EFKA_logo_w300.jpg" />-->

        </section>
    </aside>