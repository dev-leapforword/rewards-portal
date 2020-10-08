@extends('layouts.teacher')

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
                        <h5 class="card-title">Teacher Details</h5>

                        <ul class="list-unstyled profile-about-list">
                            @if(!empty($schoolDetails[0]))
                                <li><i class="material-icons">school</i><span>School Name:
                                        <a href="#">{{ $schoolDetails[0]->amd_school }}</a></span></li>
                                <li><i class="material-icons">work</i><span>Teacher's Name: <a
                                            href="#">@if(!empty(Auth::user()->name)){{ Auth::user()->name }}@endif</a></span></li>
                                <li><i class="material-icons">my_location</i><span>From <a href="#">{{ $schoolDetails[0]->amd_taluka }}, {{ $schoolDetails[0]->amd_district }}</a></span></li>
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
                            <li><i class="material-icons">mail_outline</i><span>email@domain.com</span>
                            </li>
                            <li><i class="material-icons">home</i><span>Lives in <a href="#">City, Pin
                                        Code</a></span></li>
                                <li><i class="material-icons">local_phone</i><span>+91 @if(!empty(Auth::user()->whatsappNumber)){{ Auth::user()->whatsappNumber }} @endif</span>
                            </li>
                            <li><i class="material-icons">local_phone</i><span>+91 @if(!empty(Auth::user()->callingNumber)){{ Auth::user()->callingNumber }} @endif</span>
                            </li>
                            <li><i class="material-icons"></i><span> </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Grade Table Name</h5>
                    
                        <!-- <code>$().DataTable();</code>.</p> -->
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Grade</th>
                                    <th>1st, 2nd, 3rd, 4th</th>
                                    <th>5th, 6th, 7th,8th, 9th, 10th</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Total Students</td>
                                    <td> {{ Auth::user()->countReading }} </td>
                                    <td> {{ Auth::user()->countGrammar }} </td>
                                    
                                </tr>
                                <tr>
                                    <td>Registered Students</td>
                                    <td>{{ $readingCountRegistredStudent }}</td>
                                    <td>{{ $grammarCountRegistredStudent }}</td>
                                    
                                </tr>
                                <tr>
                                    <td>Total Points</td>
                                    <td></td>
                                    <td></td>
                                    
                                </tr>
                                
                    
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ranking</h5>
                    
                        <!-- <code>$().DataTable();</code>.</p> -->
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>1st, 2nd, 3rd, 4th</th>
                                    <th>5th, 6th, 7th,8th, 9th, 10th</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>In your Batch</td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <td>Across Maharashtra</td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>                           
                    
                            </tbody>                            
                        </table>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
@endsection

@section('script')

@endsection