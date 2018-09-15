<template>
    <div v-bind:class="defineColor">
        <div class="panel-heading">{{ title }}</div>

        <div class="panel-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['title', 'color'],
        computed: {
            defineColor: function() {
                return `panel ${this.color} || panel-default`;
            }
        }
    }
</script>

<style media="screen">
    .panel-red-clean, .panel-yellow-clean, .panel-green-clean {
        border-color: #889BB2;
        box-shadow: 2px 2px #dad9d9;
    }

    .panel-heading {
        border-color: #889BB2;
    }

    .panel-red-clean > .panel-heading {
        background-color: #FF9D97;
    }
    
    .panel-yellow-clean > .panel-heading {
        background-color: #FFD38E;
    }

    .panel-green-clean > .panel-heading {
        background-color: #9ECCB1;
    }
</style>
