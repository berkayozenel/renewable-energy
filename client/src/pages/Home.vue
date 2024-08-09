<template>
    <div style="min-height: 200vh;">
        <app-nav    />
        <app-header />
    </div>
</template>

<script>
import Navbar from '../components/NavbarHeader.vue'
import Header from '../components/Header.vue'
import Footer from '../components/Footer.vue'

export default {
    components:{
        'app-nav'   : Navbar,
        'app-header': Header,
        'app-footer': Footer,
    }
}
</script>

<style lang="scss" scoped>

</style>