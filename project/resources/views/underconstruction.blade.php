@extends('layouts.app')

@section('page-content')
    <div class="container-fluid cnt">
        <div class="jumbotron">
            <h3>Υπο κατασκευή</h3>
            <p>Λυπούμαστε, η σελίδα που προσπαθείτε να ανοίξετε δεν είναι διαθέσιμη αυτή τη στιγμή.</p>
            <hr>
            <a href="{{route('home')}}"><i class="fa fa-home menu-item-icon" aria-hidden="true"></i></a>
            <object style="max-height: 470px;" id="svg1" data="{{ asset('img/Flat Construction Site Vectors-02.svg') }}"
                    type="image/svg+xml"></object>
        </div>
    </div>
@endsection
