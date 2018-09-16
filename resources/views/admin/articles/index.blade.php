@extends('layouts.app')

@section('content')
    <page size="12">
        <panel title="List of Articles">
            <bread-crumbs v-bind:list="{{ $listCrumbs }}"></bread-crumbs>
            <modal-link
               type="button"
               css="btn btn-danger"
               name="myModalTest"
               title="Create Article" 
            >
            </modal-link>          
            <table-list
                v-bind:titles="['#', 'Title', 'Description', 'Author']"
                v-bind:itens="[[1, 'PHP7 with typescript', 'Laravel', 'Joellima'], [2, 'JavaScript ES7/8', 'VueJS', 'ThomasMiller'], [3, 'Django in production', 'Python', 'DuLiver']]"
                order="asc"
                orderCol="1"
                view="#view"
                create="#create"
                edit="#edit"
                dell="#dell"
                token="8795456818181"
            >
            </table-list>
        </panel>
    </page>
    <modal name="myModalTest" header="Create Article">
        <panel title="Create new article for world">
            <formulary
                css=""
                action="#"
                method="post"
                enctype=""
                token=""
            >
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Description">
                </div>
                <button class="btn btn-info">Create</button>                     
            </formulary>
    </panel>
    </modal>
@endsection
