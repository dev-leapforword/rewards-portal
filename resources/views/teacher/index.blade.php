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
                        <h5>Teacher's Full Name</h5>
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
                        <h5>Witty International</h5>
                        <!-- <span>Points achieved so far.</span> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card savings-card">
                <div class="card-body">
                    <h5 class="card-title">School Type<span class="card-title-helper"></span></h5>
                    <div class="savings-stats">
                        <h5>Private</h5>
                        <!-- <span>Total activities conducted so far.</span> -->
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
                        <div class="server-stat col-sm-3">
                            <p>0</p>
                            <span>Teacher's Rank</span>
                        </div>
                        
                        <div class="server-stat col-sm-3">
                            <p>0</p>
                            <span>Teaching Level</span>
                        </div>
                        <div class="server-stat col-sm-3">
                            <p>0</p>
                            <span> Teaching Grade</span>
                        </div>
                        <div class="server-stat col-sm-3">
                            <p>Marathi</p>
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