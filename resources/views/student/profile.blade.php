@extends('layouts.student')

@section('style')

@endsection

@section('page')
Profile
@endsection

@section('content')
    <div class="profile-content">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Student Details</h5>

                        <ul class="list-unstyled profile-about-list">
                            @if(!empty($schoolDetails[0]))
                                <li>
                                    <i class="material-icons">school</i>
                                    <span>School Name: <a href="#">{{ $schoolDetails[0]->amd_school }}</a></span>
                                </li>
                                <li>
                                    <i class="material-icons">work</i>
                                    <span>Teacher's Name: <a href="#">Teacher</a></span>
                                </li>
                                <li>
                                    <i class="material-icons">my_location</i>
                                    <span>From <a href="#">{{ $schoolDetails[0]->amd_taluka }}, {{ $schoolDetails[0]->amd_district }}</a></span>
                                </li>
                            @endif                            
                            <li>
                                <i class="material-icons">rss_feed</i>
                                <span>Batch Details: <a href="#">@if(!empty(Auth::user()->batch)){{ Auth::user()->batch }}@endif</a></span>
                            </li>
                            <!-- <li>
                                <button class="btn btn-block btn-primary m-t-lg">Follow</button>
                                <button class="btn btn-block btn-secondary m-t-lg">Message</button>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact Info</h5>
                        <ul class="list-unstyled profile-about-list">
                            <li>
                                <i class="material-icons">mail_outline</i>
                                <span>email@domain.com</span>
                            </li>
                            <li>
                                <i class="material-icons">home</i>
                                <span>Lives in <a href="#">City, PinCode</a></span>
                            </li>
                            <li>
                                <i class="material-icons">local_phone</i>
                                <span>+91 @if(!empty(Auth::user()->whatsappNumber)){{ Auth::user()->whatsappNumber }} @endif</span>
                            </li>
                            <li>
                                <i class="material-icons">local_phone</i>
                                <span>+91 @if(!empty(Auth::user()->callingNumber)){{ Auth::user()->callingNumber }} @endif</span>
                            </li>
                            <li>
                                <i class="material-icons"></i>
                                <span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection