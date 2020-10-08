@extends('layouts.student')

@section('style')

@endsection

@section('page')
Activities
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Activities</h5>

                    <table id="zero-conf" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Activity Name</th>
                                <th>Start Date</th>
                                <th>Activity Points</th>
                                <th>My Points</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($myActivities[0]))
                                @php
                                    $sr = 0;
                                @endphp
                                
                                @foreach($myActivities as $key => $activities)
                                <tr>
                                    <td>{{ ($sr = $sr+1) }}</td>
                                    <td>{{ $activities->re_ac_name }}</td>
                                    <td>{{ $activities->re_ac_date }}</td>
                                    <td>{{ $activities->re_ac_marks }}</td>  
                                    <td> @if(!empty($activities->re_po_roll_no)) {{ $activities->re_ac_marks }} @else 0 @endif </td>                                  
                                </tr>
                                @endforeach

                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sr. No</th>
                                <th>Activity Name</th>
                                <th>Start Date</th>
                                <th>Activity Points</th>                                
                                <th>My Points</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection