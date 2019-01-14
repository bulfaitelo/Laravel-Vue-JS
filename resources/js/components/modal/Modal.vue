<template>
<!-- Modal -->
<div class="modal fade" v-bind:id="nome" tabindex="-1" role="dialog" v-bind:aria-labelledby="nome" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">      
      <div class="modal-body">
        <slot></slot>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>        
      </div>
    </div>
  </div>
</div>
</template>

<script>
    export default {
        props:['nome']
    }
</script>
