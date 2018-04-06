@extends('layouts.app')

@section('page-content')
    <div id="page-container" class="container-fluid cnt">

        <div class="row">
            <div class="container col-10" style="text-align: left; padding-top: 1%;">
                <a href="{{route('employer.a5')}}"> <i class="fa fa-angle-left" aria-hidden="true"></i> Επιστροφή στον
                    Πίνακα των Εργαζομένων</a>
            </div>
            <div class="container col-2" style="text-align: right">
                <button id="printButton" class="btn btn-outline-light"><i class="fa fa-print" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <section>
            <div class="row printableArea">
                <div class="container col-lg-8 col-md-12 col-sm-12">
                    <div class="container-fluid" style="border: 1px solid #dbdbdb;">
                        <br>
                        <h5>Ονοματεπώνυμο: {{$employee[0]->name}} {{$employee[0]->surname}}</h5>
                        <h5>Θέση Εργασίας: {{$employee[0]->jobtitle}}</h5>
                        <h5>Α.Μ.Κ.Α: {{$employee[0]->amka}}</h5>
                        <h5>Α.Φ.Μ: {{$employee[0]->afm}}</h5>
                        <br>
                    </div>
                </div>
                <div class="container col-lg-4 col-md-6 col-sm-12">
                    <div class="container-fluid a4_results_container" style="text-align: center">
                        <object style="max-height: 40px;" id="svg1" data="{{ asset('img/stamp.svg') }}"
                                type="image/svg+xml"></object>
                        <h6 style="padding-top: 20px;">Συνολικός Αριθμός Ενσήμων</h6>
                        <h1>
                            @if($total_stamps)
                                {{$total_stamps->stamps}}
                            @else
                                0
                            @endif
                        </h1>
                    </div>
                </div>
            </div>

        </section>
        <section>
            <div class="row">
                <div class="container col-12">
                    <div class="container-fluid" style="border: 1px solid #dbdbdb;">
                        <br>
                        <h5>Καταχώρηση Ενσήμου</h5>
                        <br>
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
                        <form method="POST" enctype="multipart/form-data" action="{{route('employer.a5.results')}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_afm" value="{{$employee[0]->afm}}">
                            <input type="hidden" name="_act" value="_insert_stamp">
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <label for="value">Ποσό Ενσήμου Καταχώρησησς</label>
                                        <input type="number" class="form-control" id="value"
                                               placeholder="Εισάγετε το Ποσό Ενσήμου"
                                               name="stamp_value">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-default" id="cert-submit"
                                            style="margin-top: 31px;">Υποβολή
                                    </button>
                                </div>
                            </div>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row printableArea">
                <div class="container col-12">
                    @if($total_stamps && $stamp_history)
                        <div class="container-fluid" style="border: 1px solid #dbdbdb;">
                            <br>
                            <h5>Ιστορικό καταχωρήσεων ενσήμων από την ημερομηνία
                                πρόσληψης {{$total_stamps->hire_date}}</h5>
                            <br>
                            <table class="table table-bordered table-striped">
                                <thead style="text-align: center">
                                <tr>
                                    <th>Ημερομηνία Καταχώρησης</th>
                                    <th>Ποσό Καταχώρησης</th>
                                </tr>
                                </thead>
                                <tbody id="myTable" style="text-align: center">
                                @foreach ($stamp_history as $stamp)
                                    <tr>
                                        <td>{{$stamp->date}}</td>
                                        <td>{{$stamp->value}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </section>

    </div>
@endsection
