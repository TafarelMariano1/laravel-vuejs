@extends('layouts.app')

@section('content')
    <page size="12">
        <panel title="List of Articles">
            <table-list
                v-bind:titles="['#', 'Title', 'Description', 'Author', 'Action']"
                v-bind:itens="[[1, 'PHP', 'Laravel', 'Joellima'], [2, 'JavaScript', 'VueJS', 'ThomasMiller']]"
            ></table-list>
        </panel>
    </page>
@endsection
