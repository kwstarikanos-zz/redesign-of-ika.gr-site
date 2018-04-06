@extends('layouts.app')

@section('page-content')
    <div class="container-fluid cnt">
        <section>
            <div class="row">
                <article class="col-12">
                    <header>
                        <h5>Εργοδότηση στο Ι.Κ.Α.</h5>
                    </header>
                    <object id="employability_icon" data="{{ asset('img/employability.svg') }}" type="image/svg+xml"
                            class="pull-left"></object>
                    {{--<img src="{{asset('img/employability.svg')}}" alt="insured" class="pull-left">--}}
                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit
                        amet
                        nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada. Curabitur aliquet
                        quam
                        id dui posuere blandit. Nulla quis lorem ut libero malesuada feugiat. Quisque velit nisi,
                        pretium ut
                        lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Vestibulum ante ipsum
                        primis
                        in faucibus orci luctus et ultricet nisl tempus convallis quis ac lectus. Mauris blandit aliquet
                        elit, eget
                        tincidunt nibh pulvinar a.im. Donec sollicitudin molestie malesuada. Vestibulum ante ipsum
                        primis
                        in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet
                        aliquam vel, ullamcorper sit amet lies posuere cubilia Curae; Donec velit neque, auctor sit amet
                        aliquam vel, ullamcorper sit amet ligula.</p>
                </article>
            </div>
        </section>
        <hr>

        <section>
            <header>
                <h5 align="center">Ενέργειες που μπορείς να πραγματοποιήσεις...</h5>
            </header>

            <div id="employer-options" class="grid-container">
                <a href="{{route('employer.a1')}}">
                    <i class="fa fa-ravelry" aria-hidden="true"></i>
                    <header>
                        <h6>Ηλεκτρονική Υποβολή Α.Π.Δ.</h6>
                        <p style="font-size: 12px">Donec id elit non mi porta gravida at eget metus.</p>
                        <p style="font-size: 12px; color: #5cac25">Πρόσβαση μόνο με λογαριασμό Εργοδότη</p>
                    </header>
                </a>

                <a href="{{route('employer.a2')}}">
                    <i class="fa fa-ravelry" aria-hidden="true"></i>
                    <header>
                        <h6>Οικονομική Καρτέλα Εργοδότη</h6>
                        <p style="font-size: 12px">Donec id elit non mi porta gravida at eget metus.</p>
                        <p style="font-size: 12px; color: #5cac25">Πρόσβαση μόνο με λογαριασμό Εργοδότη</p>
                    </header>
                </a>
                <a href="{{route('employer.a3')}}">
                    <i class="fa fa-ravelry" aria-hidden="true"></i>
                    <header>
                        <h6>Μαζική Ταυτοποίηση Ασφαλισμένων</h6>
                        <p style="font-size: 12px">Donec id elit non mi porta gravida at eget metus.</p>
                        <p style="font-size: 12px; color: #5cac25">Πρόσβαση μόνο με λογαριασμό Εργοδότη</p>
                    </header>
                </a>
                <a href="{{route('employer.a4')}}">
                    <i class="fa fa-ravelry" aria-hidden="true"></i>
                    <header>
                        <h6>Βεβαίωση Ασφαλιστικής Ικανότητας</h6>
                        <p style="font-size: 12px">Donec id elit non mi porta gravida at eget metus.</p>
                        <p style="font-size: 12px; color: #5cac25">Πρόσβαση μόνο με λογαριασμό Εργοδότη</p>
                    </header>
                </a>
                <a href="{{route('employer.a5')}}">
                    <i class="fa fa-ravelry" aria-hidden="true"></i>
                    <header>
                        <h6>Παροχή Ενσήμων Εργαζομένων</h6>
                        <p style="font-size: 12px">Donec id elit non mi porta gravida at eget metus.</p>
                        <p style="font-size: 12px; color: #5cac25">Πρόσβαση μόνο με λογαριασμό Εργοδότη</p>
                    </header>
                </a>
            </div>
        </section>
    </div>
@endsection
