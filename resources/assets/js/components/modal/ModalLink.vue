<template>
    <span>
        <span v-if="item">
            <button v-on:click="fillForm()" v-if="!type || (type != 'button' && type != 'link')" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="`#${name}`">{{ title }}</button>
            <button v-on:click="fillForm()" v-if="type == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="`#${name}`">{{ title }}</button>
            <a v-on:click="fillForm()" v-if="type == 'link'" href="#" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="`#${name}`">{{ title }}</a>    
        </span>

        <span v-if="!item">
            <button v-on:click="fillForm()" v-if="!type || (type != 'button' && type != 'link')" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="`#${name}`">{{ title }}</button>
            <button v-on:click="fillForm()" v-if="type == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="`#${name}`">{{ title }}</button>
            <a v-if="type == 'link'" href="#" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="`#${name}`">{{ title }}</a>    
        </span>
    </span>
</template>

<script>
    export default {
        props: ['item', 'type', 'css', 'name', 'title'],
        methods: {
            fillForm: function() {
                this.$store.commit('setItem', this.item);
            }
        }
    }    
</script>