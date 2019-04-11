<template>
<div class="container">
    <div class="row">
        <div v-bind:class="defineTamanho">
            <slot></slot>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        props: ['tamanho'],
        computed: {
            defineTamanho: function(){
                if(this.tamanho >= 12){
                    return "col-12";
                }
                if(this.tamanho <= 2){
                    return "col-2 offset-5";
                }
                if((this.tamanho % 2 ) == 0 ){
                    return "col-"+this.tamanho+" offset-"+((12 - this.tamanho)/2);
                }
                else {
                    return "col-"+(parseInt(this.tamanho) + 1)+" offset-"+((12 - (parseInt(this.tamanho) + 1))/2);
                }
                return "col-4 offset-4  ";
            }
        }
    }
</script>
