@extends('layouts.app')

@section('content')
    <page size="12">
        <panel title="List of Articles">
            <bread-crumbs v-bind:list="{{ $listCrumbs }}"></bread-crumbs>        
            <table-list
                v-bind:titles="['#', 'Title', 'Description', 'Date']"
                v-bind:itens="{{$listArticles}}"
                order="asc"
                orderCol="1"
                view="#view"
                create="#create"
                edit="#edit"
                dell="#dell"
                token="8795456818181"
                modal="yes"
            >
            </table-list>
        </panel>
    </page>
    <modal name="add" title="Create Article">
        <formulary
            id="formAdd"
            css=""
            action="{{ route('articles.store') }}"
            method="post"
            enctype=""
            token="{{ csrf_token() }}"
        >
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Description">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea id="content" class="form-control" id="content" name="content"></textarea>
            </div>
            <div class="form-group">
                <label for="">Date</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
        </formulary>
        <span slot="buttons">
            <button form="formAdd" class="btn btn-info">Create</button>                     
        </span>
    </modal>
    <modal name="edit" title="Edit you article">
        <formulary
            id="formEdit"
            css=""
            action="#"
            method="post"
            enctype=""
            token=""
        >
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" v-model="$store.state.item.title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" name="description" v-model="$store.state.item.description" placeholder="Description">
            </div>                   
        </formulary>
        <span slot="buttons">
            <button form="formEdit" class="btn btn-info">Edit</button>                     
        </span>
    </modal>
    <modal name="view" v-bind:title="$store.state.item.title">        
        <p>@{{$store.state.item.description}}</p>
    </modal>
@endsection
