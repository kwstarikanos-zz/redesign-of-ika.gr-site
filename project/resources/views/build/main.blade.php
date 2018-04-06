@section('main')
    <!--Main-->
    <main id="main" class="row row-offcanvas row-offcanvas-right">
        @include('build.sidebar')
        <section class="col-sm-12 col-md-9 col-lg-10">
            <!--Title-->
            <div id="content-title">
                <h2>{{ $title }}</h2>
            </div>

            <!--Breadcrumbs-->
        {{ Breadcrumbs::render(Route::currentRouteName(), $title)}}

        <!--Page content-->
            @yield('page-content')
        </section>
    </main>
