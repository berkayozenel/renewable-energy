<template>
    <div>
        <app-nav />
    </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
export default {
    components:{
        'app-nav'   : Navbar,
        'app-footer': Footer
    }
}
</script>

<style lang="scss" scoped>

</style>