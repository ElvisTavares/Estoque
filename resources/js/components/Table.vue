<template>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" v-for="t, key in titles" :key="key">{{t.title}}</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="obj, keys in dataFilter" :key="keys">
                <td v-for="value, keyValue in obj" :key="keyValue">
                    <span v-if="titles[keyValue].type == 'text'">{{ value }}</span>
                    <span v-if="titles[keyValue].type == 'image'">
                        <img :src="'/storage/'+value" alt="" width="50"
                        height="50">
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    props: ['data', 'titles'],
    computed: {
        dataFilter() {
            let fields = Object.keys(this.titles)
            let dataFiltered = []
            //console.log(fields)
           // console.log(this.titles)
            this.data.map((item, key)=> {
                //console.log(key, item)

                let itemFilter = {};

                fields.forEach(field => {
                   // console.log(field)
                   itemFilter[field] = item[field]
                   
                   //console.log(key, item, field)
                })

                dataFiltered.push(itemFilter);
            })

           // console.log(dataFiltered);
            return dataFiltered
        }
    }
}
</script>
