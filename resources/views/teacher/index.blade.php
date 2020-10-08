@extends('layouts.teacher')

@section('style')

@endsection

@section('page')
Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card savings-card">
                <div class="card-body">
                    <h5 class="card-title">Teacher Name<span class="card-title-helper"></span></h5>
                    <div class="savings-stats">
                        <h5>{{ Auth::user()->name }}</h5>
                        <!-- <span>My participation w.r.t total activities.</span> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card savings-card">
                <div class="card-body">
                    <h5 class="card-title">School Name<span class="card-title-helper"></span></h5>
                    <div class="savings-stats">
                        @if(!empty($schoolDetails[0]))
                        <h5>{{ $schoolDetails[0]->amd_school }}</h5>
                        <!-- <span>Points achieved so far.</span> -->
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card savings-card">
                <div class="card-body">
                    <h5 class="card-title">School Type<span class="card-title-helper"></span></h5>
                    <div class="savings-stats">
                        @if(!empty($schoolDetails[0]))
                        <h5>{{ $schoolDetails[0]->amd_school_type }}</h5>
                        <!-- <span>Total activities conducted so far.</span> -->
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Teacher Details<span class="card-title-helper"></span>
                    </h5>
                    <div class="server-load row">
                        <!-- <div class="server-stat col-sm-3"> -->
                            <!-- <p>0</p> -->
                            <!-- <span>Teacher's Rank</span> -->
                        <!-- </div> -->
                        
                        <div class="server-stat col-sm-4">
                            <p> @if(Auth::user()->level == 1) Reading @elseif(Auth::user()->level == 2) Grammar @else Both @endif</p>
                            <span>Teaching Level</span>
                        </div>
                        <div class="server-stat col-sm-4">
                            <p>@if(!empty(Auth::user()->standard)) {{ Auth::user()->standard }} @endif</p>
                            <span> Teaching Grade</span>
                        </div>
                        <div class="server-stat col-sm-4">
                            @if(!empty($schoolDetails[0]))
                            <p>{{ $schoolDetails[0]->amd_medium }}</p>
                            @endif
                            <span>Teaching Medium</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
@endsection

@section('script')

@endsection