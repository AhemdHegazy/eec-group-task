@extends('admin.layouts.app')
@section('content')
    <div class="row">

        <div class="col-lg-3 col-md-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Categories</h5>

                </div>
                <div class="card-body row">
                    <div class="col-lg-8">
                        <h1 class="card-title">{{\App\Category::count()}}</h1>
                    </div>
                    <div class="col-lg-4">
                        <i class="now-ui-icons design_bullet-list-67" style="font-size: 40px"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Locations</h5>

                </div>
                <div class="card-body row">
                    <div class="col-lg-8">
                        <h1 class="card-title">{{\App\Location::count()}}</h1>
                    </div>
                    <div class="col-lg-4">
                        <i class="now-ui-icons location_pin" style="font-size: 40px"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Experiences</h5>

                </div>
                <div class="card-body row">
                    <div class="col-lg-8">
                        <h1 class="card-title">{{\App\Experience::count()}}</h1>
                    </div>
                    <div class="col-lg-4">
                        <i class="now-ui-icons clothes_tie-bow" style="font-size: 40px"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Careers</h5>

                </div>
                <div class="card-body row">
                    <div class="col-lg-8">
                        <h1 class="card-title">{{\App\Career::count()}}</h1>
                    </div>
                    <div class="col-lg-4">
                        <i class="now-ui-icons business_chart-bar-32" style="font-size: 40px"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
