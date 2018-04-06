@section('footer')
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12" id="footer-header">
                    <img src="{{asset('img/logo_w.png')}}" alt="Logo" width="45" height="33">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="heading7"> Τηλεφωνικό Κέντρο</div>
                    <p><i class="fa fa-phone"></i> 12462</p>
                </div>
                <div class="col-md-2 col-sm-6 col-lg-2">
                    <h6 class="heading7">Λογαριασμός</h6>
                    <ul class="footer-ul">
                        @if(\Illuminate\Support\Facades\Auth::user())
                            <li><a href="{{route('profile')}}"> Προφίλ</a></li>
                            <li><a href="{{route('password_change')}}"> Αλλαγή Συνθηματικού</a></li>
                        @else
                            <li><a href="{{route('login')}}"> Σύνδεση</a></li>
                            <li><a href="{{route('register')}}"> Εγγραφή</a></li>
                        @endif
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 col-lg-2">
                    <h6 class="heading7">Εξυπηρέτηση</h6>
                    <ul class="footer-ul">
                        <li><a href="{{route('help')}}"> Βοήθεια</a></li>
                        <li><a href="{{route('faq')}}"> Συχνές Ερωτήσεις</a></li>
                        <li><a href="{{route('terms')}}"> Όροι Χρήσης ιστοχώρου</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 col-lg-2">
                    <h6 class="heading7">Οργανισμός</h6>
                    <ul class="footer-ul">
                        <li><a href="{{route('about')}}"> Για εμάς</a></li>
                        <li><a href="{{route('sitemap')}}"> Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 col-lg-3">
                    <form method="get" action="{{route('newsletter')}}">
                        <div class="row">
                            <h6 class="heading7">Ενημερώσεις</h6>
                            <p id="newsletter-txt">Θέλω να λαμβάνω <strong>e-mail</strong> για ενημερώσεις και
                                ανακοινώσεις
                                που
                                αφορούν:</p>
                        </div>
                        <div class="row unselectable">
                            <div class="col-md-2 col-sm-3 col-lg-6">
                                <label class="custom-control custom-checkbox checkbox-style">
                                    <input type="checkbox" class="custom-control-input" name="q0">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Ασφαλισμένους</span>
                                </label>
                                <label class="custom-control custom-checkbox checkbox-style">
                                    <input type="checkbox" class="custom-control-input" name="q1">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Οφειλέτες</span>
                                </label>
                                <label class="custom-control custom-checkbox checkbox-style">
                                    <input type="checkbox" class="custom-control-input" name="q2">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Παρόχους Κατ'Οίκον Φροντίδας Συνταξιούχων</span>
                                </label>
                            </div>
                            <div class="col-md-2 col-sm-3 col-lg-6">
                                <label class="custom-control custom-checkbox checkbox-style">
                                    <input type="checkbox" class="custom-control-input" name="q3">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Εργοδότες</span>
                                </label>
                                <label class="custom-control custom-checkbox checkbox-style">
                                    <input type="checkbox" class="custom-control-input" name="q4">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Πιστοποιημένους φορείς</span>
                                </label>
                                <label class="custom-control custom-checkbox checkbox-style">
                                    <input type="checkbox" class="custom-control-input" name="q5">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Χρήστες υπηρεσιών ΚΕ.Π.Α.</span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Εισάγετε το e-mail σας..."
                                           aria-describedby="emailHelp" aria-label="E-mail" name="email">
                                    <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="submit">
                                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                            </button>
                                        </span>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">Δε θα κοινοποιηθεί το e-mail σας
                                    σε
                                    τρίτους.
                                </small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Copyrights-->
        <div class="copyright">
            <div class="container">
                <div>
                    <p>© 2017 - Created by kwstarikanos & dimitris krikonis
                    - icons <a href="https://www.freevector.com/insurance-agent">FreeVector.com</a></p>
                </div>
            </div>
        </div>
    </footer>
