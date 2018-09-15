@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <panel title="Dashboard">
                    Test content...

                    <div class="row">
                        <div class="col-md-4">
                            <panel title="Content 1" color="panel-red-clean">
                                Test content...
                            </panel>
                        </div>
                        <div class="col-md-4">
                            <panel title="Content 1" color="panel-yellow-clean">
                                Test content...
                            </panel>
                        </div>
                        <div class="col-md-4">
                            <panel title="Content 1" color="panel-green-clean">
                                Test content...
                            </panel>
                        </div>
                    </div>
                </panel>
            </div>
        </div>
    </div>
@endsection
