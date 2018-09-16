<template>
    <div v-bind:id="name" class="modal fade" tabindex="-1" role="dialog" v-bind:aria-labelledby="name">
    <div class="modal-dialog modal-lg" role="document">        
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button> 
                <h4 class="modal-title" id="myLargeModalLabel">{{ header }}</h4> 
            </div>
            <slot></slot>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        props: ['name', 'header']

    }    
</script>