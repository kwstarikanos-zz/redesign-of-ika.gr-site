@extends('layouts.app')

@section('page-content')
    <div class="container-fluid cnt">
        <div class="row">
            <div class="container col-lg-10 col-md-10 col-sm-12">
                <div id="profile-image">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                </div>
                <br>

                <table class="table">
                    <tbody>
                    <tr>
                        <th class="prof-table-column">Όνομα Χρήστη</th>
                        <td>{{{ isset(Auth::user()->username) ? Auth::user()->username : Auth::user()->email }}}</td>
                    </tr>
                    <tr>
                        <th class="prof-table-column">Κατηγορεία Λογαρισμού</th>
                        <td>{{$category}}</td>
                    </tr>
                    </tbody>
                </table>
                <hr>
                <div class="row">
                    <div class="container col-12">
                        <a class="change-password" href="{{route('password_change')}}" style="text-align: center">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            <span class="label"> Αλλαγή Συνθηματικού</span>
                        </a>
                    </div>
                </div>
                <br>

                <table class="table">
                    <tbody>
                    <tr>
                        <th class="prof-table-column">Ονοματεπώνημο</th>
                        @if($data->name)
                            <td>{{$data->name}} {{$data->surname}}</td>
                        @else
                            <td>
                                <form method="POST" enctype="multipart/form-data" action="{{route('profile')}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_act" value="_insert_name_surname">
                                    <div class="row">
                                        <div class="col-5">
                                            <input type="text" class="form-control" id="name" placeholder="Όνομα"
                                                   name="name">
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control" id="surname" placeholder="Επώνυμο"
                                                   name="surname">
                                        </div>
                                        <div class="col-2">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-check"
                                                                                             aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>

                        @endif
                    </tr>
                    @if($category == "Ασφαλισμένος")
                        <tr>
                            <th>Α.Μ.Α.</th>
                            <td>{{$data->ama}}</td>
                        </tr>
                        <tr>
                            <th>Α.Μ.Κ.Α.</th>
                            <td>{{$data->amka}}</td>
                        </tr>
                        <tr>
                            <th>Α.Φ.Μ.</th>
                            <td>{{$data->afm}}</td>
                        </tr>
                        <tr>
                            <th>Συνταξιούχος</th>
                            @if($data->retired)
                                <td>NAI</td>
                            @else
                                <td>OXI</td>
                            @endif
                        </tr>
                    @endif
                    @if($category == "Εργοδότης")
                        <tr>
                            <th>Επιχείρηση</th>
                            @if($data->business)
                            <td>{{$data->business}}</td>
                                @else
                                <td>
                                    <form method="POST" enctype="multipart/form-data" action="{{route('profile')}}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_act" value="_insert_business">
                                        <div class="row">
                                            <div class="col-10">
                                        <input type="text" class="form-control" id="business" placeholder="Όνομα Επιχείρησης"
                                               name="business">
                                            </div>
                                            <div class="col-2">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-check"
                                                                                                 aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </td>


                                @endif
                        </tr>
                        <tr>
                            <th>Α.Φ.Μ. Επιχείρησης</th>
                            @if($data->business_afm)
                                <td>{{$data->business_afm}}</td>
                            @else
                                <td>
                                    <form method="POST" enctype="multipart/form-data" action="{{route('profile')}}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_act" value="_insert_business_afm">
                                        <div class="row">
                                            <div class="col-10">
                                                <input type="number" class="form-control" id="business_afm" placeholder="Α.Φ.Μ. Επιχείρησης"
                                                       name="business_afm">
                                            </div>
                                            <div class="col-2">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-check"
                                                                                                 aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </td>


                            @endif

                        </tr>
                    @endif
                    </tbody>
                </table>
                <hr>
                <div class="row">
                    <div class="container col-12">
                        <form method="POST" action="{{ route('logout') }}">
                            {{ csrf_field() }}
                            <button style="cursor:pointer" id="profile-logout" type="submit"
                                    class="btn btn-outline-light">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                Αποσύνδεση
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
