<template>
    <div>
        <toolbar></toolbar>
        <login></login>
        <app-footer></app-footer>
    </div>
</template>

<script>

    import Toolbar from './Toolbar.vue'
    import AppFooter from './AppFooter.vue'
    import Login from './login/Login.vue'
    export default{
        components:{
            Toolbar,
            AppFooter,
            Login
        }
    }

</script>

<style>
</style>