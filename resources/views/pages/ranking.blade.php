@extends('layouts.master')

@section('styles')
        <style>
            body {
                padding-top: 80px;
            }
        </style>
@endsection

@section('main')
    <div class="container" style="padding:20px 0;">
        <div class="page-header">
            <h3>EDUCATIONEER ANGEL</h3>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading" style="background: black;color: #eee;">NOBLE ANGEL</div>
                <div class="panel-body">
                    WITH ACCUMULATED <b class="textHijau">50</b> POINTS
                </div>

                <!-- Table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Point</th>
                        </tr>
                    </thead>
                    <tbody>

                       @for($i=0; $i < count($nobels); $i++)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $nobels[$i]->username }}</td>
                            <td>{{ $nobels[$i]->totalpoint }}</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>

        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading" style="background: #AC1F57;color: #eee;">LOVING ANGEL</div>
                <div class="panel-body">
                    WITH ACCUMULATED <b class="textHijau">25</b> POINTS
                </div>

                <!-- Table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Point</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i < count($lovings); $i++)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $lovings[$i]->username }}</td>
                            <td>{{ $lovings[$i]->totalpoint }}</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>

        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading" style="color: #eee;background: #28B08A;">NEW ANGEL</div>
                <div class="panel-body">
                    WITH ACCUMULATED <b class="textHijau">10</b> POINTS
                </div>

                <!-- Table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Point</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i < count($newbies); $i++)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $newbies[$i]->username }}</td>
                            <td>{{ $newbies[$i]->totalpoint }}</td>
                        </tr>
                        @endfor
                    </tbody>

                </table>
            </div>

        </div>
        <div class="col-md-12">
            <span><b>
                Angel Appreciation Program is an initiative by Educationeer to show appreciation,provide recognition and to express thank you to all the volunteers who has been working so hard to make all our events and activities a successful one.It is a point and ranking systems,and point will be awarded to each volunteers whenever they participate or donate in Educationeer,as per the following manner :
                <ul class="textHijau">
                    <li>2 points being awarded to Donasi Barang</li>
                    <li>1 points being awarded to Donasi Uang per Bulan</li>
                    <li>1 points being awarded to buy one Merchandises</li>
                </ul>
                </b>
            </span>
            <span>
               <b>
                Points awarded will be accumulated and once the volunteer reaches certain level of points,they will be inducted into Educationeer Hall of Fame during our annual dinner and Nobel Angel have ability to add child to sponsor under the respective categories as per below:
                <ul class="textHijau">
                    <li>New Angel (10 points and above)</li>
                    <li>Loving Angel (25 points and above)</li>
                    <li>Nobel Angel (50 points and above)</li>
                </ul></b>
            </span>
            <span>
                So what you waiting for?Hurry and join our activities and events to start collectiong points now while we work hand in hand to make our community more loving one.
            </span>
        </div>
    </div>
@endsection