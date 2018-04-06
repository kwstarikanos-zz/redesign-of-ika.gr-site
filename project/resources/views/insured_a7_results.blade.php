@extends('layouts.app')

@section('page-content')
    <div id="page-container" class="container-fluid cnt">
        <div class="row">
            <div class="container col-10" style="text-align: left; padding-top: 1%;">
                <a href="{{route('insured.a7')}}"> <i class="fa fa-angle-left" aria-hidden="true"></i> Επιστροφή στην
                    Αναζήτηση</a>
            </div>
            <div class="container col-2" style="text-align: right">
                <button id="printButton" class="btn btn-outline-light"><i class="fa fa-print" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <section>
            <div class="row printableArea">
                <div class="container col-lg-12 col-md-12 col-sm-12">
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
                @if($indirectly_insured)
                    <h5>Τα έμμεσα ασφαλισμένα μέλη που σας αντιστοιχούν</h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Ονοματεπώνυμο</th>
                            <th>Ημερομηνία Γεννησης</th>
                            <th>Α.Μ.Κ.Α.</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @foreach ($indirectly_insured as $i)
                            <tr>
                                <td>{{$i->name}} {{$i->surname}}</td>
                                <td>{{$i->birthdate}}</td>
                                <td>{{$i->amka}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <h5>Δεν σας αντιστοιχει κάποιο έμμεσα ασφαλισμένο μέλος</h5>
                @endif
            </div>
            <br>
            <h6><strong>Υποβολή αιτήματος ασφάλισης έμμεσα ασφαλισμένου μέλους:</strong></h6>
            <h6>Εισάγετε τα στοιχεία του ατόμου που θέλετε να ασφαλίσετε</h6>
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
            <form method="POST" enctype="multipart/form-data" action="{{route('insured.a7.results')}}">
                {{ csrf_field() }}
                <input type="hidden" name="_ama" value="{{$insured['ama']}}">
                <input type="hidden" name="_afm" value="{{$insured['afm']}}">
                <input type="hidden" name="_amka" value="{{$insured['amka']}}">
                <input type="hidden" name="_act" value="_insert_indirectly_insured">
                <table class="table table-bordered table-striped">
                    <tbody id="myTable">
                    <tr>
                        <td>
                            <label for="name">Όνομα</label>
                            <input type="text" class="form-control" id="name" placeholder="Όνομα" name="name">
                        </td>
                        <td>
                            <label for="surnamename">Επώνυμο</label>
                            <input type="text" class="form-control" id="surname" placeholder="Επώνυμο" name="surname">
                        </td>
                        <td>
                            <label for="name">Ημερομηνία Γέννησης</label>
                            <input type="date" class="form-control" id="birthdate" placeholder="Ημερομηνία Γέννησης"
                                   name="birthdate">
                        </td>
                        <td>
                            <label for="indirect_amka">Α.Μ.Κ.Α</label>
                            <input type="text" class="form-control" id="indirect_amka" placeholder="A.M.Κ.A." name="indirect_amka">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-default">Υποβολή</button>
            </form>
        </section>
    </div>
@endsection
