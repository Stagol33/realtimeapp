<template>
    <v-toolbar dark color="primary">
        <v-toolbar-side-icon></v-toolbar-side-icon>
        <v-toolbar-title>Title</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items class="hidden-sm-and-down">
        <v-btn flat>Forum</v-btn>
        <v-btn flat>Questions</v-btn>
        <v-btn flat>Category</v-btn>
        <router-link to="/login">
            <v-btn flat>Login</v-btn>
        </router-link>
        </v-toolbar-items>
    </v-toolbar>
</template>

<script>
export default{

}
</script>

<style>
</style>