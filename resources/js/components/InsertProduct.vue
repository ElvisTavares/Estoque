<template>

    <div class="form-group">
        <input-container-component titulo="Nome do Produto" id="newName" id-help="newNameHelp" texto-ajuda="Informe o nome do produto">
            <input type="text" class="form-control" id="novoNome" aria-describedby="novoNomeHelp" placeholder="Nome do produto" v-model="nameProduct">
        </input-container-component>
        <!-- {{nameProduct}} -->
    </div>
    
    <div class="form-group">
        <input-container-component titulo="Descrição do Produto" id="newDescription" id-help="newDescriptionHelp" texto-ajuda="Informe a descrição do produto">
            <input type="text" class="form-control" id="novoDescrição" aria-describedby="novoDescriçaoHelp" placeholder="Descrição do produto" v-model="descriptionProduct">
        </input-container-component>
        <!-- {{descriptionProduct}} -->
    </div>

    <div class="form-group">
        <input-container-component titulo="Preço de compra" id="newSalePrice" id-help="newSalePriceHelp" texto-ajuda="Informe o preço que custou o produto">
            <input type="number" class="form-control" id="novoPrecoCompra" aria-describedby="novoPrecoCompraHelp" placeholder="Preço de compra do produto" v-model="salePrice">
        </input-container-component>
        <!-- {{salePrice}} -->
    </div>

    <div class="form-group">
        <input-container-component titulo="Preço de venda" id="newPurchasePrice" id-help="newPurchasePriceHelp" texto-ajuda="Informe o preço de venda do produto">
            <input type="number" class="form-control" id="novoPrecoVenda" aria-describedby="novoPrecoVendaHelp" placeholder="Preço de venda do produto" v-model="purchasePrice">
        </input-container-component>
        <!-- {{purchasePrice}} -->
    </div>

    <div class="form-group">
        <input-container-component titulo="Quantidade do produto" id="newQuantity" id-help="newQuantityHelp" texto-ajuda="Informe a quantidade do produto">
            <input type="number" step="0.01" class="form-control" id="novoQuantidade" aria-describedby="novoQuantidadeHelp" placeholder="Quntidade do produto" v-model="quantity">
        </input-container-component>
        <!-- {{quantity}} -->
    </div>

    <div class="form-group">
        <input-container-component titulo="Imagem" id="newImage" id-help="newImageHelp" texto-ajuda="Selecione uma imagem">
            <input type="file" class="form-control-file" id="novoImageme" aria-describedby="novoImagemHelp" placeholder="Imagem" @change="loadImage($event)">
        </input-container-component>
        <!-- {{fileImage}} -->
    </div>

    <div>
        <button type="button" class="btn btn-primary" @click="save()"> Salvar</button>
    </div>

</template>
<script>
export default {
    data() {
        return {
            urlBase: 'http://localhost:8000/api/v1/product',
            nameProduct: '',
            descriptionProduct: '',
            purchasePrice: '',
            salePrice: 0,
            quantity: 0,
            fileImage: []
        }
    },
    methods: {
        loadImage(e) {
            this.fileImage = e.target.files
        },

        save() {
            console.log(this.nameProduct, this.fileImage,  this.descriptionProduct, this.purchasePrice, this.salePrice, this.quantity)

            let formData = new FormData();

            formData.append('name', this.nameProduct)
            formData.append('description', this.descriptionProduct)
            formData.append('purchasePrice', this.purchasePrice)
            formData.append('salePrice', this.salePrice)
            formData.append('quantity', this.quantity)
            formData.append('image', this.fileImage[0])
            
            let config = {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'Accept': 'application/json'
                }
            }

            axios.post(this.urlBase, formData, config)
                .then(response => {
                    console.log(response)
                })
                .catch(errors => {
                    console.log(errors)
                })
        }
    }


}
</script>
