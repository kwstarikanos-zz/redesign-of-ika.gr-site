@extends('layouts.app')

@section('page-content')
    <div class="container-fluid cnt">
        <h4>Σήμερα</h4>
        @foreach($announcementsToday as $a)
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">
                    <details class="announcement-detail">
                        <summary>
                            <div class="row">
                                <i class="fa fa-bullhorn menu-item-icon" aria-hidden="true"></i> &nbsp;
                                <span>#{{$a->tag}}</span>
                                &nbsp;
                                <span class="pull-right">{{ Carbon\Carbon::parse($a->created_at)->format('l jS \\of F Y h:i:s A') }}</span>
                            </div>
                            <div class="row">
                                <h5>{{$a->title}}</h5>
                            </div>
                        </summary>
                        <p>{{$a->content}}</p>
                    </details>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
        @endforeach

        <hr>

        <h4>Την τελευταία εβδομάδα</h4>
        @foreach($announcementsWeek as $a)
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">
                    <details class="announcement-detail">
                        <summary>
                            <div class="row">
                                <i class="fa fa-bullhorn menu-item-icon" aria-hidden="true"></i> &nbsp;
                                <span>#{{$a->tag}}</span>
                                &nbsp;
                                <span class="pull-right">{{ Carbon\Carbon::parse($a->created_at)->format('l jS \\of F Y h:i:s A') }}</span>
                            </div>
                            <div class="row">
                                <h5>{{$a->title}}</h5>
                            </div>
                        </summary>
                        <p>{{$a->content}}</p>
                    </details>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
        @endforeach

        <hr>

        <h4>Τον τελευταίο μήνα</h4>
        @foreach($announcementsMonth as $a)
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">
                    <details class="announcement-detail">
                        <summary>
                            <div class="row">
                                <i class="fa fa-bullhorn menu-item-icon" aria-hidden="true"></i> &nbsp;
                                <span>#{{$a->tag}}</span>
                                &nbsp;
                                <span class="pull-right">{{ Carbon\Carbon::parse($a->created_at)->format('l jS \\of F Y h:i:s A') }}</span>
                            </div>
                            <div class="row">
                                <h5>{{$a->title}}</h5>
                            </div>
                        </summary>
                        <p>{{$a->content}}</p>
                    </details>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
        @endforeach
    </div>
@endsection
