<template>
<div>

    <div class="">
        <a class="btn btn-info" v-if="criar" v-bind:href="criar" >Criar</a>
        <div class="form-group pull-right">
            <input type="search" class="form-control"  placeholder="Buscar" v-model="buscar">
        </div>
    </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th style="cursor:pointer;" v-on:click="ordenaColuna(index)"  v-bind:key="titulo.id" v-for="(titulo, index) in titulos"><b>{{titulo}}</b></th>                    
                    <th v-if="detalhe || editar || deletar"  >Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in lista">
                    <td v-for="i in item">{{i}}</td>                                        
                    <td v-if="detalhe || editar || deletar" >
                        <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="POST" >
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" v-bind:value="token">
                            <a v-if="detalhe" v-bind:href="detalhe" >Detalhe | </a>
                            <a v-if="editar" v-bind:href="editar" >Editar | </a>                            
                            <a href="#" v-on:click="executaZorm(index)">Deletar</a>
                        </form>
                        <span v-if="!token" >
                            <a v-if="detalhe" v-bind:href="detalhe" >Detalhe | </a>
                            <a v-if="editar" v-bind:href="editar" >Editar</a> 
                            <a v-if="deletar" v-bind:href="deletar" >Deletar</a> 
                        </span>
                        <span v-if="token && !deletar" >
                            <a v-if="detalhe" v-bind:href="detalhe" >Detalhe | </a>
                            <a v-if="editar" v-bind:href="editar" >Editar</a> 
                        </span>
                    </td>   
                </tr>            
            </tbody>

        </table>
    </div>
</template>

<script>
    export default {
        props: ['titulos', 'itens', 'criar', 'detalhe', 'editar', 'deletar', 'token', 'ordem', 'ordemcol'],
        data: function () {
            return {
                buscar: '',
            }  
        },
        methods:{
            executaForm: function (index) {
                document.getElementById(index).submit();
            },
            ordenaColuna: function (coluna) {
                this.ordemcol = coluna;
                if(this.ordem.toLowerCase() == 'asc'){
                    this.ordem = 'desc';
                } else {
                    this.ordem = 'asc';
                }
            }
        },
        computed:{
            lista:function () {
                let ordem = this.ordem || "asc";
                let ordemCol = this.ordemcol || 0;
                ordem = ordem.toLowerCase();
                ordemCol = parseInt(ordemCol);

                if (ordem == 'asc'){
                    this.itens.sort( function (a,b) {
                        if(a[ordemCol] > b[ordemCol] ){ return 1; }
                        if(a[ordemCol] < b[ordemCol] ){ return -1; }                    
                        return 0;
                        
                    });
                } else{
                    this.itens.sort( function (a,b) {
                        if(a[ordemCol] < b[ordemCol] ){ return 1; }
                        if(a[ordemCol] > b[ordemCol] ){ return -1; }                    
                        return 0;
                        
                    });
                }

                
                return this.itens.filter(res => {
                    for(let k  = 0; k < res.length; k++){
                        if((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >=0 ){
                            return true;
                        }
                    }
                     return false;
                });


                return this.itens;
            }
        }
    }
</script>
