<template>
    <div v-bind:class="defineCor">
        <div v-bind:class="defineCorHead">{{titulo}}</div>

        <div class="card-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props:['titulo', 'cor'],
        computed:{
            defineCor: function ( ) {
                return "card card-default border-" + (this.cor || "default" );
            },
            defineCorHead: function(){
                return "card-header bg-" + (this.cor || "default");
            }
        }
    }
</script>
