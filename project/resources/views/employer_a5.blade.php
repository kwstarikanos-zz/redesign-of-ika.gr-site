@extends('layouts.app')

@section('page-content')
    <div class="container-fluid cnt">
        <section>
            <div class="row">
                <div class="col-12">
                    <header>
                        <h5>Επιχείρηση: {{$employer->business}}</h5>
                        <h6>Α.Φ.Μ. Επιχείρησης: {{$employer->business_afm}}</h6>
                    </header>
                    <br>

                </div>
            </div>
        </section>

        <section>
            @if($employees)
                <p>Επιλέξτε έναν απο τους εργαζομένους της επιχείρησης σας για να δείτε αναλυτικά τα ένσημα του:</p>
                <input class="form-control" id="myInput" type="text" placeholder="Αναζήτηση Εργαζομένου..">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Ονοματεπώνυμο</th>
                        <th>Θέση Εργασίας</th>
                        <th>Α.Μ.A.</th>
                        <th>Α.Φ.Μ.</th>
                        <th>Α.Μ.Κ.Α.</th>
                        <th>Σύμβαση</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @foreach ($employees as $e)
                        <tr class='clickable-row' data-href='{{route('employer.a5.results')}}'>
                            <form method="POST" enctype="multipart/form-data" action="{{route('employer.a5.results')}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="_afm" value="{{$e->afm}}">
                            </form>
                            <td>{{$e->name}} {{$e->surname}}</td>
                            <td>{{$e->jobtitle}}</td>
                            <td>{{$e->ama}}</td>
                            <td>{{$e->afm}}</td>
                            <td>{{$e->amka}}</td>
                            @if($e->contract_expiry)
                                <td>Μέχρι {{$e->contract_expiry}}</td>
                            @else
                                <td>Αοριστου χρονου</td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h6>Δεν έχετε καταχωρημένους εργαζομένους στην επιχείρηση σας. Μπορείτε να κάνετε προσθήκη εργαζομένου
                    παρακάτω</h6>
            @endif
            <br>
            <h6><strong>Προσθήκη Εργαζομένου</strong></h6>
            @if(Session::has('info'))
                <div class="alert alert-info">
                    {{ Session::get('info') }}
                    {{Session::forget('info')}}
                </div>
            @endif
            @if(Session::has('warning'))
                <div class="alert alert-warning">
                    {{ Session::get('warning') }}
                    {{Session::forget('warning')}}
                </div>
            @endif
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    {{Session::forget('success')}}
                </div>
            @endif
            @if(Session::has('danger'))
                <div class="alert alert-danger">
                    {{ Session::get('danger') }}
                    {{Session::forget('danger')}}
                </div>
            @endif
            <form method="POST" enctype="multipart/form-data" action="{{route('employer.a5')}}">
                {{ csrf_field() }}
                <input type="hidden" name="_act" value="_insert_employee">
                <table class="table table-bordered table-striped">
                    <tbody id="myTable">
                    <tr>
                        <td>
                            <label for="name">Όνομα</label>
                            <input type="text" class="form-control" id="name" placeholder="Όνομα"
                                   name="name">
                        </td>
                        <td>
                            <label for="surnamename">Επώνυμο</label>
                            <input type="text" class="form-control" id="surname" placeholder="Επώνυμο"
                                   name="surname">
                        </td>
                        <td>
                            <label for="jobtitle">Θέση Εργασίας</label>
                            <input type="text" class="form-control" id="jobtitle" placeholder="Θέση Εργασίας"
                                   name="jobtitle">
                        </td>
                        <td>
                            <label for="ama">Α.Μ.Α.</label>
                            <input type="text" class="form-control" id="ama" placeholder="A.M.A."
                                   name="ama">
                        </td>
                        <td>
                            <label for="afm">Α.Φ.Μ.</label>
                            <input type="text" class="form-control" id="afm" placeholder="A.Φ.M."
                                   name="afm">
                        </td>
                        <td>
                            <label for="amka">Α.Μ.Κ.Α</label>
                            <input type="text" class="form-control" id="amka" placeholder="A.M.Κ.A."
                                   name="amka">
                        </td>
                        <td>
                            <label for="contract">Σύμβαση (προαιρετικό)</label>
                            <input type="date" class="form-control" id="contract" name="contract">
                        </td>
                    </tr>
                    </tbody>
                </table>

                <button type="submit" class="btn btn-default">Προσθήκη</button>
            </form>
        </section>
    </div>


@endsection
