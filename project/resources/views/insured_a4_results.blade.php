@extends('layouts.app')

@section('page-content')
    <div id="page-container" class="container-fluid cnt">

        <div class="row">
            <div class="container col-10" style="text-align: left; padding-top: 1%;">
                <a href="{{route('insured.a4')}}"> <i class="fa fa-angle-left" aria-hidden="true"></i> Επιστροφή στην
                    Αναζήτηση</a>
            </div>
            <div class="container col-2" style="text-align: right">
                <button id="printButton" class="btn btn-outline-light"><i class="fa fa-print" aria-hidden="true"></i>
                </button>
            </div>
        </div>


        <section>
            <div class="row printableArea">
                <div class="container col-lg-11 col-md-12 col-sm-12">
                    <div class="container-fluid" style="border: 1px solid #dbdbdb;">
                        <br>
                        <h5>Ονοματεπώνυμο: {{$insured['name']}} {{$insured['surname']}}</h5>
                        <h5>Α.Μ.Α: {{$insured['ama']}}</h5>
                        <h5>Α.Μ.Κ.Α: {{$insured['amka']}}</h5>
                        <h5>Α.Φ.Μ: {{$insured['afm']}}</h5>
                        <br>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row printableArea" style="text-align: center">
                <div class="container col-lg-5 col-md-6 col-sm-12">
                    <div class="container-fluid a4_results_container">
                        <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                        <h6 style="padding-top: 20px;">Συμπληρωμένες Ημέρες Ασφάλισης</h6>
                        @if($insured_days[0]->insured_days)
                            <h1>{{$insured_days[0]->insured_days}}</h1>
                        @else
                            <h1>0</h1>
                        @endif
                    </div>
                </div>


                <div class="container col-lg-5 col-md-6 col-sm-12">
                    <div class="container-fluid a4_results_container">
                        <i class="fa fa-puzzle-piece fa-2x" aria-hidden="true"></i>
                        <h6 style="padding-top: 20px;">Απαιτούμενες Επιπλέον Ημέρες Εργασίας για
                            Συνταξιοδότηση </h6>
                        @if($insured_days[0]->insured_days)
                            <h1>{{11000 - $insured_days[0]->insured_days}}</h1>
                        @else
                            <h1>11000</h1>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>

    </div>
@endsection
