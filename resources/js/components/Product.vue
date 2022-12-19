<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!--LIST-->
                <card-component>
                    <template v-slot:content>
                            <table-component
                            :data="products"
                            :titles="['ID', 'Name', 'Image']"
                            >

                            </table-component>
                    </template>
                </card-component>
                <!--LIST-->


    </div>
         </div>
             </div>
</template>

<script>
//import Table from './Table.vue';

    export default {
     //components: { Table }, 
        data() {
            return {
                urlBase: 'http://localhost:8000/api/v1/product',
                nameProduct: '',
                fileImage: [],
                products: [],
            }
        },
    methods: {
        loadList() {
            let config = {
                headers: {
                    'Accept': 'application/json',
                }
            }

            axios.get(this.urlBase, config)
                .then(response => {
                    this.products = response.data
                   // console.log(this.products)
                })
                .catch(errors => {
                    console.log(errors)
                })
        },
    },
    mounted() {
        this.loadList()
    }
    }

</script>