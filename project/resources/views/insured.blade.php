@extends('layouts.app')

@section('page-content')
    <div class="container-fluid cnt">
        <section>
            <div class="row">
                <article class="col-12">
                    <header>
                        <h5>Ασφάλιση στο Ι.Κ.Α.</h5>
                    </header>
                    <img src="{{asset('img/insured_small.png')}}" alt="insured" class="pull-left">
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
            <header>
                <h5 align="center">Ενέργειες που μπορείς να πραγματοποιήσεις...</h5>
            </header>
            <div class="grid-container">
                <a href="{{route('insured.a1')}}">
                    <i class="fa fa-ravelry" aria-hidden="true"></i>
                    <header>
                        <h6>Πιστοποίηση Ασφαλισμένου</h6>
                        <p style="font-size: 12px">Donec id elit non mi porta gravida at eget metus.</p>
                    </header>
                </a>

                <a href="{{route('insured.a2')}}">
                    <i class="fa fa-ravelry" aria-hidden="true"></i>
                    <header>
                        <h6>Ασφαλιστική Ικανότητα</h6>
                        <p style="font-size: 12px">Donec id elit non mi porta gravida at eget metus.</p>
                    </header>
                </a>
                <a href="{{route('insured.a3')}}">
                    <i class="fa fa-ravelry" aria-hidden="true"></i>
                    <header>
                        <h6>Ατομικός Λογαριασμός Ασφάλισης</h6>
                        <p style="font-size: 12px">Donec id elit non mi porta gravida at eget metus.</p>
                    </header>
                </a>
                <a href="{{route('insured.a4')}}">
                    <i class="fa fa-ravelry" aria-hidden="true"></i>
                    <header>
                        <h6>Θεμελίωση Συνταξιοδοτικού Δικαιώματος</h6>
                        <p style="font-size: 12px">Donec id elit non mi porta gravida at eget metus.</p>
                    </header>
                </a>
                <a href="{{route('insured.a5')}}">
                    <i class="fa fa-ravelry" aria-hidden="true"></i>
                    <header>
                        <h6>Υποβολή Αίτησης Συνταξιοδότησης</h6>
                        <p style="font-size: 12px">Donec id elit non mi porta gravida at eget metus.</p>
                    </header>
                </a>
                <a href="{{route('insured.a6')}}">
                    <i class="fa fa-ravelry" aria-hidden="true"></i>
                    <header>
                        <h6>Υπολογισμός Βασικού Ποσού Σύνταξης</h6>
                        <p style="font-size: 12px">Donec id elit non mi porta gravida at eget metus.</p>
                    </header>
                </a>
                <a href="{{route('insured.a7')}}">
                    <i class="fa fa-ravelry" aria-hidden="true"></i>
                    <header>
                        <h6>Απογραφή και Απόδοση Ασφαλιστικής Ικανότητας Έμμεσα Ασφαλισμένων</h6>
                        <p style="font-size: 12px">Donec id elit non mi porta gravida at eget metus.</p>
                    </header>
                </a>
                <a href="{{route('insured.a8')}}">
                    <i class="fa fa-ravelry" aria-hidden="true"></i>
                    <header>
                        <h6>Βεβαιώσεις</h6>
                        <p style="font-size: 12px">Donec id elit non mi porta gravida at eget metus.</p>
                    </header>
                </a>
            </div>
        </section>
    </div>
@endsection
