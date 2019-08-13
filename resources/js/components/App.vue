<template>

<app-layout></app-layout>

</template>

<script>
import AuthLayout from './layouts/AuthLayout.vue'
import AppLayout from './layouts/AppLayout.vue'
export default {
    components:{
        'auth-layout': AuthLayout,
        'app-layout':AppLayout
    }
}
</script>

