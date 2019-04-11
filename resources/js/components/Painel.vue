<template>
 <div v-bind:class="defineCor">
    <div class="card-header">{{titulo}}</div>

    <div class="card-body">
        <slot></slot>
    </div>
</div>
</template>

<script>
    export default {
        props: [
            'titulo', 'cor'
        ],
        computed: {
            defineCor: function() {
                return "card " + (this.cor|| "");
            }
        }
    }
</script>
