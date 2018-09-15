<template>
    <div>
        <div class="form-inline">
            <a v-if="create" v-bind:href="create">Create</a>
            <div class="form-group pull-right">
                <input type="search" class="form-control" placeholder="Search" v-model="search">
            </div>  
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th v-for="title in titles">{{ title }}</th>
                    <th v-if="view || edit || dell">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in list">
                    <td v-for="i in item">{{ i }}</td>

                    <td v-if="view || edit || dell">
                        <form v-bind:id="index" v-if="dell && token" v-bind:action="dell">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" v-bind:value="token">

                            <a v-if="view" v-bind:href="view">View |</a>
                            <a v-if="edit" v-bind:href="edit">Edit |</a>
                            <a href="#" v-on:click="executeForm(index)">Delete</a>
                        </form>
                        <span v-if="!token">
                            <a v-if="view" v-bind:href="view">View |</a>
                            <a v-if="edit" v-bind:href="edit">Edit |</a>
                            <a v-if="dell" v-bind:href="dell">Delete</a>
                        </span>
                        <span v-if="token && !dell">
                            <a v-if="view" v-bind:href="view">View |</a>
                            <a v-if="edit" v-bind:href="edit">Edit</a>
                        </span>                        
                    </td>
                </tr>                
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {       
        props: [
            'titles',
            'itens',
            'view',
            'create',
            'edit',
            'dell',
            'token'
        ],
        data: function() {
            return {
                search: ''
            }
        },
        methods: {
            executeForm: function(index) {
                document.getElementById(index).submit();
            }
        },
        computed: {
            list: function() {
                return this.itens.filter(res => {
                    let k = 0;
                    for(k; k < res.length; k++) {
                        if ((res[k] + "").toLowerCase().indexOf(this.search.toLowerCase()) >= 0) return true;
                    }
                    return false;
                });

                return this.itens;
            }
        }
    }
</script>
