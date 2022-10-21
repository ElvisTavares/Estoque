<template>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Produto</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Imagem</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                    <td>Goku</td>
                    <td>30</td>
                    <td>5</td>
                    <td><img src="https://cf.shopee.com.br/file/c658e03a00940ddf857cb13017151ac8" alt=""  width="50" height="50"></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                    <td>Vegeta</td>
                    <td>30</td>
                    <td>5</td>
                    <td><img src="https://cdn.iset.io/assets/47923/produtos/6203/61pylru55gl._ac_sx425_.jpg" alt=""  width="50" height="50"></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                    <td>Piccolo</td>
                    <td>30</td>
                    <td>5</td>
                    <td><img src="https://cf.shopee.com.br/file/db95c7d6057e1c6d22532a006f2b5e78" alt=""  width="50" height="50"></td>
                
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
