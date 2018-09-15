@extends('layouts.app')

@section('content')
    <page size="10">
        <panel title="Dashboard">
            <bread-crumbs v-bind:list="{{ $listCrumbs }}"></bread-crumbs>
            <div class="row">
                <div class="col-md-4">
                    <box 
                        quantify="80"
                        title="Articles"
                        url="{{ route('articles.index') }}" 
                        color="#FF9D97"
                        icon="ion ion-pie-graph"
                    >
                    </box>
                </div>
                <div class="col-md-4">
                    <box 
                        quantify="2000"
                        title="Users"
                        url="#" 
                        color="#FFD38E"
                        icon="ion ion-person-stalker"
                    >
                    </box>
                </div>
                <div class="col-md-4">
                    <box 
                        quantify="150"
                        title="Authors"
                        url="#" 
                        color="#9ECCB1"
                        icon="ion ion-person"
                    >
                    </box>
                </div>
            </div>
        </panel>
    </page>
@endsection
