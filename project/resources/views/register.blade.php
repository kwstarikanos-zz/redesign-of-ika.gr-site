@extends('layouts.app')

@section('page-content')
    <div id="register-card" class="card">
        <div class="card-header">
            <h4 class="card-title">Εγγραφή χρήστη</h4>
        </div>
        <div class="card-block">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="_username" class="col-md-4 control-label">Όνομα χρήστη</label>

                    <div class="col">
                        <input id="_username" type="text" class="form-control" name="username"
                               value="{{ old('username') }}" required autofocus>

                        @if ($errors->has('username'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="_email" class="col control-label">Διεύθυνση E-Mail</label>

                    <div class="col">
                        <input id="_email" type="email" class="form-control" name="email"
                               value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="_password" class="col control-label">Συνθηματικό</label>

                    <div class="col">
                        <input id="_password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="_password-confirm" class="col control-label">Επιβεβαίωση συνθηματικού</label>

                    <div class="col">
                        <input id="_password-confirm" type="password" class="form-control"
                               name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="role" class="col control-label">θέλω πραγματοποιήσω εγγραφή στον ιστοχώρο ως:</label>
                    <div class="col-12" id="role">
                        <div id="certifications_radio" class="funkyradio">
                            <div class="funkyradio-primary">
                                <input type="radio" name="role" value="insured" id="c1"/>
                                <label for="c1">Ασφαλισμένος</label>
                            </div>
                            <div class="funkyradio-primary">
                                <input type="radio" name="role" value="employer" id="c2"/>
                                <label for="c2">Εργοδότης</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="insured-fields">
                    <div class="form-group{{ $errors->has('afm') ? ' has-error' : '' }}">
                        <label for="_afm" class="col">
                            Αριθμός φορολογικού μητρώου (Α.Φ.Μ.)
                        </label>
                        <div class="col">
                            <input
                                    id="_afm"
                                    type="number"
                                    class="form-control"
                                    name="afm"
                                    value="{{ old('afm') }}"
                                    autofocus
                            >
                            @if ($errors->has('afm'))
                                <span class="help-block">
                                <strong>{{ $errors->first('afm') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('amka') ? ' has-error' : '' }}">
                        <label for="_amka" class="col">
                            Αριθμός Μητρώου Κοινωνικής Ασφάλισης (A.M.K.A.)
                        </label>
                        <div class="col">
                            <input
                                    id="_amka"
                                    type="number"
                                    class="form-control"
                                    name="amka"
                                    value="{{ old('amka') }}"
                                    autofocus
                            >
                            @if ($errors->has('amka'))
                                <span class="help-block">
                                <strong>{{ $errors->first('amka') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('ama') ? ' has-error' : '' }}">
                        <label for="_ama" class="col">
                            Αριθμός Μητρώου Ασφαλισμένου
                        </label>
                        <div class="col">
                            <input
                                    id="_ama"
                                    type="number"
                                    class="form-control"
                                    name="ama"
                                    value="{{ old('ama') }}"
                                    autofocus
                            >
                            @if ($errors->has('ama'))
                                <span class="help-block">
                                <strong>{{ $errors->first('ama') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <button type="submit" id="_submit-register-btn" class="btn btn-primary">
                            Εγγραφή
                        </button>
                    </div>
                </div>

            </form>
        </div>
        <div class="card-footer">
            Αν έχετε ήδη λογαριασμό, πραγματοποιήστε
            <a href="{{route('login')}}"> σύνδεση</a>
            .
        </div>
    </div>
@endsection
