@extends('layouts.master')

@section('main content')
    <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="row">
                <div class="col-6 col-md-6 col-sm-12">
                    <div class="box left-dot h-100">
                        <div class="box-title">Line Charts</div>
                        <div class="box-body">
                            <div id="line-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-sm-12">
                    <div class="box left-dot h-100">
                        <div class="box-title">Area Charts</div>
                        <div class="box-body">
                            <div id="area-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-sm-12">
                    <div class="box left-dot h-100">
                        <div class="box-title">Column Charts</div>
                        <div class="box-body">
                            <div id="column-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-sm-12">
                    <div class="box left-dot h-100">
                        <div class="box-title">Pie Charts</div>
                        <div class="box-body">
                            <div id="pie-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-sm-12">
                    <div class="box left-dot h-100">
                        <div class="box-title">PolarArea Charts</div>
                        <div class="box-body">
                            <div id="polar-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-sm-12">
                    <div class="box left-dot h-100">
                        <div class="box-title">Radar Charts</div>
                        <div class="box-body">
                            <div id="radar-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- END MAIN CONTENT -->
@endsection
