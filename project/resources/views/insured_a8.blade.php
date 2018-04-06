@extends('layouts.app')

@section('page-content')
    <div id="page-container" class="container-fluid cnt">
        <section>
            <div class="row">
                <article class="col-12">
                    <header>
                        <h5>Έκδοση Βεβαιώσεων Online</h5>
                    </header>
                    <img src="{{asset('img/certification.png')}}" alt="insured" class="pull-left">
                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit
                        amet
                        nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada. Curabitur aliquet
                        quam
                        id dui posuere blandit. Nulla quis lorem ut libero malesuada feugiat. Quisque velit nisi,
                        pretium ut
                        lacinia in, elementum id enCurabitur non nulla sit amet nisl tempus convallis quis ac lectus.
                        Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id
                        enim. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet
                        elit, eget tincidunt nibh pulvinar a.im. Donec sollicitudin molestie malesuada. Vestibulum ante
                        ipsum primis
                        in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet
                        aliquam vel, ullamcorper sit amet ligula.</p>
                </article>
            </div>
        </section>
        <hr>
        <section>
            <form method="POST" action="{{route('insured.a8.certification')}}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="container col-lg-6 col-md-6 col-sm-12">
                        <h5>Επιλέξτε τη βεβαίωση που θέλετε να εκδώσετε:</h5>
                        <div id="certifications_radio" class="funkyradio">
                            <div class="funkyradio-primary">
                                <input type="radio" name="certification" value="c1" id="c1"/>
                                <label for="c1">Βεβαίωση Συντάξεων</label>
                            </div>
                            <div class="funkyradio-primary">
                                <input type="radio" name="certification" value="c3" id="c3"/>
                                <label for="c3">Βεβαίωση Ενσήμων</label>
                            </div>
                        </div>
                    </div>
                    <div class="container col-lg-6 col-md-6 col-sm-12 ">

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

                        <h5>Εισάγετε τα στοιχεία σας:</h5>

                        <div class="form-group">
                            <label for="ama">Α.Μ.Α.</label>
                            @if(Auth::check() && $insured)
                                <input type="number" class="form-control" id="ama" placeholder="Εισάγετε το Α.Μ.Α. σας"
                                       name="ama" value="{{$insured->ama}}" disabled>
                            @else
                                <input type="number" class="form-control" id="ama" placeholder="Εισάγετε το Α.Μ.Α. σας"
                                       name="ama" disabled>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="amka">Α.Μ.Κ.Α.</label>
                            @if(Auth::check() && $insured)
                                <input type="number" class="form-control" id="amka"
                                       placeholder="Εισάγετε το Α.Μ.Κ.Α. σας"
                                       name="amka" value="{{$insured->amka}}" disabled>
                            @else
                                <input type="number" class="form-control" id="amka"
                                       placeholder="Εισάγετε το Α.Μ.Κ.Α. σας"
                                       name="amka" disabled>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="afm">Α.Φ.Μ.</label>
                            @if(Auth::check()  && $insured)
                                <input type="number" class="form-control" id="afm" placeholder="Εισάγετε το Α.Φ.Μ.σας"
                                       name="afm" value="{{$insured->afm}}" disabled>
                            @else
                                <input type="number" class="form-control" id="afm" placeholder="Εισάγετε το Α.Φ.Μ.σας"
                                       name="afm" disabled>
                            @endif
                        </div>
                        <input type="hidden" class="form-control" id="cert-type" name="cert-type" value="">
                        <button type="submit" class="btn btn-default" id="cert-submit" disabled>Υποβολή</button>

                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
