<template>
  <div :class="style" role="alert">
    {{ title }}
   
    <span v-if="details.data.message">{{ details.data.message }}</span>
    <!-- <span v-if="details.data.id">{{ 'ID do registro: ' + details.data.id }}</span> -->
    <br>
    <ul v-if="details.data.errors">
        <li v-for="e, key in details.data.errors" :key="key"> {{ e[0] }}</li>
    </ul>
</div>

    </template>
    
    <script>
        export default {
            props: ['type', 'title', 'details'],
            computed: {
                style() {
                    return 'alert alert-'+this.type
                }
            }
        }
    </script>
    