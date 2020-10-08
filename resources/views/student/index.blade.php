@extends('layouts.student')

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
                    <h5 class="card-title">Points<span class="card-title-helper"></span></h5>
                    <div class="savings-stats">
                        <h5> @if(!empty($myPoints)) {{ $myPoints }} @else 0 @endif </h5>
                        <span>Points achieved so far.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card savings-card">
                <div class="card-body">
                    <h5 class="card-title">Activities<span class="card-title-helper"></span></h5>
                    <div class="savings-stats">
                        <h5> @if(!empty($activities)) {{ $activities }} @else 0 @endif </h5>
                        <span>Total activities conducted so far.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card savings-card">
                <div class="card-body">
                    <h5 class="card-title">My Participation<span class="card-title-helper"></span></h5>
                    <div class="savings-stats">
                        <h5> @if(!empty($myActivities)) {{ $myActivities }} @else 0 @endif </h5>
                        <span>My participation w.r.t total activities.</span>
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
                    <h5 class="card-title">Student Details<span class="card-title-helper"></span>
                    </h5>
                    <div class="server-load row">
                        <div class="server-stat col-sm-3">
                            <p>@if(!empty($rank)) {{ $rank }} @else 0 @endif</p>
                            <span>Student's Rank</span>
                        </div>
                        <div class="server-stat col-sm-3">
                            <p> @if(!empty(Auth::user()->batch)) {{ Auth::user()->batch }} @endif</p>
                            <span>Student's Batch</span>
                        </div>

                        <div class="server-stat col-sm-3">
                            <p> @if(Auth::user()->level == 1) Reading @elseif(Auth::user()->level == 2) Grammar @else @endif</p>
                            <span>Student's Level</span>
                        </div>
                        <div class="server-stat col-sm-3">
                            <p> {{ Auth::user()->standard }} </p>
                            <span>Student's Grade</span>
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