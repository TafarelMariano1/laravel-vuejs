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
        <panel title="Form">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                    <label>
                    <input type="checkbox"> Check me out
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </panel>
    </modal>
@endsection
