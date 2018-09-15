@extends('layouts.app')

@section('content')
    <page size="12">
        <panel title="List of Articles">
            <table-list
                v-bind:titles="['#', 'Title', 'Description', 'Author']"
                v-bind:itens="[[1, 'PHP', 'Laravel', 'Joellima'], [2, 'JavaScript', 'VueJS', 'ThomasMiller']]"
                view="#view"
                create="#create"
                edit="#edit"
                dell="#dell"
                token="8795456818181"
            >
            </table-list>
        </panel>
    </page>
@endsection
