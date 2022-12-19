<template>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" v-for="t, key in titles " :key="key">{{t}}</th>
               
            </tr>
        </thead>
        <tbody>
            <tr v-for="m in data" :key="m.id">
                <th scope="row">{{m.id}}</th>
                <td>{{m.name}}</td>
                <td><img src=" 'storage/' + m.image" alt="" width="50"
                        height="50"></td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    props: ['data', 'titles']
}
</script>
