@extends('layouts.app')

@section('page-content')
    <div class="container-fluid cnt">
        <section class="row">

            <!--Carousel-->
            <div id="carouselExampleIndicators" class="carousel slide pull-left" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="{{route('insured.a4')}}">
                            <img class="d-block w-100" src="{{asset('img/slider_1.jpg')}}" alt="First slide">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <a href="{{route('insured.a4')}}" style="color: white">
                                <h3>Μάθετε τώρα πότε θα πάρετε σύνταξη!</h3>
                                <p>Μάθετε εύκολα πόσα έτη εργσίας χρειάζεται να συμπληρώσετε ακόμη για να πάρετε
                                    σύνταξη</p>
                            </a>
                        </div>


                    </div>

                    <div class="carousel-item">
                        <a href="{{route('insured.a7')}}">
                            <img class="d-block w-100" src="{{asset('img/slider_2.jpg')}}" alt="Second slide">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <a href="{{route('insured.a7')}}" style="color: white">
                                <h3>Ασφάλιση έμμεσα ασφαλιζόμενων μελών</h3>
                                <p>Ασφαλίστε και δείτε τα έμμεσα ασφαλισμένα μέλη που σας αντισοτιχούν</p>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <a href="{{route('insured.a8')}}">
                            <img class="d-block w-100" src="{{asset('img/slider_3.jpg')}}" alt="Second slide">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <a href="{{route('insured.a8')}}" style="color: white">
                                <h3>Έκδοση βεβαιώσεων Online</h3>
                                <p>Εκδώστε και τυπώστε τις βεβαιώσεις που χρειάζεστε άμεσα online χωρις να επισκεφθείτε
                                    κάποιο υποκατάστημα</p>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <a href="{{route('employer.a5')}}">
                            <img class="d-block w-100" src="{{asset('img/slider_4.jpg')}}" alt="Second slide">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <a href="{{route('employer.a5')}}" style="color: white">
                                <h3>Παροχή Ενσήμων σε Εργαζομένους</h3>
                                <p>Δείτε πότε πρέπει να γίνει η επόμενη καταχώρηση ενσήμων στους εργααζόμενους σας και
                                    σε τι ποσό ανέρχεται</p>
                            </a>
                        </div>
                    </div>


                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                   data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                   data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <article>
                <header>
                    <h4>Όραμα ΙΚΑ</h4>
                </header>
                <div class="article-body">
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                        tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
                        malesuada
                        magna mollis euismod. Donec sed odio dui
                    </p>
                    <p>
                        dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit
                        amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tempus
                        convallis quis ac lectus. Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id
                        dui posuere blandit. Nulla quis lorem ut libero malesuada feugiat. Quisque velit nisi,
                        pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Vestibulum
                        ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                        neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan
                        tincidunt.
                    </p>
                </div>
            </article>

        </section>
        <!--Articles-->
        <section class="row">
            <hr>
            <article>
                <header>
                    <h4>Δυνατότητα διακανονισμού για τους οφειλέτες</h4>
                    <p>16:08 12/10/2017</p>
                </header>
                <div class="article-body">
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                        tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
                        malesuada
                        magna mollis euismod. Donec sed odio dui
                    </p>
                    <p>
                        dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit
                        amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tempus
                        convallis quis ac lectus. Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id
                        dui posuere blandit. Nulla quis lorem ut libero malesuada feugiat. Quisque velit nisi,
                        pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Vestibulum
                        ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                        neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan
                        tincidunt.
                    </p>
                </div>
            </article>
        </section>
    </div>
@endsection
