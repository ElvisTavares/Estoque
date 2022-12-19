<template>

    <div class="form-group">
        <input-container-component titulo="Nome do Produto" id="newName" id-help="newNameHelp" texto-ajuda="Informe o nome do produto">
            <input type="text" class="form-control" id="novoNome" aria-describedby="novoNomeHelp" placeholder="Nome do produto" v-model="nameProduct">
        </input-container-component>
        {{nameProduct}}
    </div>

</template>
<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
