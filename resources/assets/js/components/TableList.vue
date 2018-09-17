<template>
    <div>
        <div class="form-inline">            
            <div class="form-group pull-right">
                <input type="search" class="form-control" placeholder="Search" v-model="search">
            </div>  
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th style="cursor:pointer" v-on:click="orderColumn(index)" v-for="(title, index) in titles">{{ title }}</th>
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
            'order',
            'orderCol',
            'view',
            'create',
            'edit',
            'dell',
            'token'
        ],
        data: function() {
            return {
                search: '',
                orderAux: this.order || "asc",
                orderAuxCol: this.orderCol || 0
            }
        },
        methods: {
            executeForm: function(index) {
                document.getElementById(index).submit();
            },
            orderColumn: function(column) {
                this.orderAuxCol = column;

                if (this.orderAux.toLowerCase() == "asc") {
                    this.orderAux = 'desc';
                } else {
                    this.orderAux = 'asc';
                }
            }
        },
        computed: {
            list: function() {
                let order = this.orderAux;
                let orderCol = this.orderAuxCol;

                order = order.toLowerCase();
                orderCol = parseInt(orderCol);

                if (order == 'asc') {
                    this.itens.sort(function(a, b) {
                        if (Object.values(a)[orderCol] > Object.values(b)[orderCol]) return 1;
                        if (Object.values(a)[orderCol] < Object.values(b)) return -1;
                        return 0;
                    });
                } else {
                    this.itens.sort(function(a, b) {
                        if (Object.values(a)[orderCol] < Object.values(b)) return 1;
                        if (Object.values(a)[orderCol] > Object.values(b)) return -1;
                        return 0;
                    });
                }               

                if (this.search) {
                    return this.itens.filter(res => {
                        let k = 0;
                        for(k; k < res.length; k++) {
                            if ((res[k] + "").toLowerCase().indexOf(this.search.toLowerCase()) >= 0) return true;
                        }
                        return false;
                    });                    
                }

                return this.itens;
            }
        }
    }
</script>
