<template>
    <div class="container">

        
          
    
    </div>
</template>

<script>

    export default {
            props: [ 'price' ],

             data() {
        return {
            fields: {},
            errors: {},
           
            success: false,
            loaded: true,
        }
    },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
