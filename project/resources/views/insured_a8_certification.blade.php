@extends('layouts.app')

@section('page-content')
    <div id="page-container" class="container-fluid cnt" xmlns="http://www.w3.org/1999/html">

        <div class="row">
            <div class="container col-10" style="text-align: left; padding-top: 1%;">
                <a href="{{route('insured.a8')}}"> <i class="fa fa-angle-left" aria-hidden="true"></i> Επιστροφή στην
                    Επιλογή Βεβαίωσης</a>
            </div>
            <div class="container col-2" style="text-align: right">
                <button id="printButton" class="btn btn-outline-light"><i class="fa fa-print" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <br>
        <div class="row>" style="text-align: left">
            <div class="container col-lg-10 col-md-12 col-sm-12 printableArea">
                <div class="row" style="text-align: center">
                    <h3>{{$title}}</h3>
                </div>
                <br>
                <h5>Ονοματεπώνυμο: {{$insured['name']}} {{$insured['surname']}}</h5>
                <h5>Α.Μ.Α: {{$insured['ama']}}</h5>
                <h5>Α.Μ.Κ.Α: {{$insured['amka']}}</h5>
                <h5>Α.Φ.Μ: {{$insured['afm']}}</h5>

                @if($certification==="c1")

                    @if($insured['retired'])
                        <br>
                        <p>
                            Ο κατωθι υπογεγραμμένος {{$insured['name']}} {{$insured['surname']}}
                            με Α.Μ.Α: {{$insured['ama']}} παρουσιάζεται ως συνταξιούχος στο ασφαλιστικό σύστημα του
                            Ι.Κ.Α.
                        </p>
                        <h5>Λεπτομέριες Συνταξιοδότησης:</h5>
                        <div class="row">
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                commodo,
                                tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
                                malesuada magna mollis euismod. Donec sed odio dui posuere blandit. Vestibulum ac diam
                                sit
                                amet
                                quam vehicula elementum sed sit amet dui.
                                Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
                            </p>
                            <br>
                            <p>
                                Vestibulum ac diam sit
                                amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tempus
                                convallis quis ac lectus. Donec rutrum congue leo eget malesuada. Curabitur aliquet quam
                                id
                                dui posuere blandit. Nulla quis lorem ut libero malesuada feugiat. Quisque velit nisi,
                                pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                                Vestibulum
                                ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                                neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit
                                amet,
                                consectetur adipiscing elit. Donec sollicitudin molestie malesuada. Nulla porttitor
                                accumsan
                                tincidunt.
                            </p>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12" style="text-align: right">
                                <img src="{{asset('img/stamp.png')}}" alt="stamp">
                            </div>
                        </div>
                    @else
                        <br>
                        <p>Ο κατωθι υπογεγραμμένος {{$insured['name']}} {{$insured['surname']}} με
                            Α.Μ.Α: {{$insured['ama']}}
                            στο ασφαλιστικό σύστημα του Ι.Κ.Α δεν συνταξιοδοτείται ακόμη.</p>
                    @endif

                @endif

                @if($certification==="c3")
                    <br>
                    @if($data)
                        <p>Ο κάτωθι υπογεγραμμένος στο μητρώο του ΙΚΑ με αριθμο {{$insured['ama']}} και ονοματεπωνυμο
                            {{$insured['name']}} {{$insured['surname']}} έχει τα παρακάτω ένσημα:</p>
                        @foreach ($data as $d)
                            <p style="color: {{ $d[0]->stamps ? 'black' : 'red' }}">
                                <strong>{{$d[0]->stamps}}</strong> ένσημα από την
                                επιχείρηση <strong>{{$d[0]->business}}</strong> την περίοδο πρόσληψης
                                <strong>{{$d[0]->hire_date}}</strong>.
                            </p>
                            @if($d[0]->stamps)
                                <table class="table table-bordered table-striped">
                                    <thead style="text-align: center">
                                    <tr>
                                        <th>Ημερομηνία Κατωχώρησης</th>
                                        <th>Ποσό Κατωχήρωσης</th>
                                    </tr>
                                    </thead>
                                    <tbody id="myTable" style="text-align: center">
                                    @foreach ($d[1] as $stamps)
                                        <tr>
                                            <td>{{$stamps->date}}</td>
                                            <td>{{$stamps->value}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                            <br>
                        @endforeach
                    @else
                        <p>Ο κάτωθι υπογεγραμμένος στο μητρώο του ΙΚΑ με αριθμο {{$insured['ama']}} και ονοματεπωνυμο
                            {{$insured['name']}} {{$insured['surname']}} δεν έχει συλλέξει ένσημα</p>
                    @endif
                @endif

            </div>
        </div>
    </div>
@endsection
