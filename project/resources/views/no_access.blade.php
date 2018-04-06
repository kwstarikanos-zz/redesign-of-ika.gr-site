@extends('layouts.app')

@section('page-content')
    <div class="container-fluid cnt">
        <div class="jumbotron">
            <h3>Δεν έχετε πρόσβαση σε αυτή τη σελίδα</h3>
            <br>
            <p>Η κατηγορία του λογαριασμού σας είναι <strong>Ασφαλισμένος</strong>.</p>

            <p>Για να έχετε πρόσβαση σε αυτή τη σελίδα πρέπει να έχετε λογαριασμό κατηγορίας <strong>Εργοδότη</strong>.
            </p>
            <p>Αν έχετε λογαριασμό <strong>Εργοδότη</strong> κάντε

            <form method="POST" action="{{ route('logout') }}">
                {{ csrf_field() }}
                <button style="cursor:pointer" type="submit" class="btn btn btn-primary">
                    Αποσύνδεση
                </button>
            </form>
            <br>
            και συνδεθείτε ξανά με αυτό το λογαριασμό</p>
            <p>Αλλιώς επιστροφή στην <a href="{{ route('home') }}">Αρχική σελίδα</a></p>
            <hr>
            <img src="{{asset('img/no_access.jpg')}}" alt="No Access">
        </div>
    </div>
@endsection
