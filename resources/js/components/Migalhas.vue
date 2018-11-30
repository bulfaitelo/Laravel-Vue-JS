<template>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li v-for="item in lista" class="breadcrumb-item">
        <a v-bind:class="defineClass" v-if="item.url" v-bind:href="item.url">{{item.titulo}}</a>
        <span class="breadcrumb-item active" v-if="!item.url">{{item.titulo}}</span>
    </li>
  </ol>
</nav>
</template>

<script>
    export default {
        props:['lista'],
        computed: {
            defineClass: function (){
                if(this.url){
                    return "active";
                }else {
                    return "";
                }
            }
        },
    }
</script>
