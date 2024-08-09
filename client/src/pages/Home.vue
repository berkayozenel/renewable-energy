<template>
    <div style="min-height: 200vh;">
        <app-nav        />
        <app-header     />
        <about-us       />
        <app-features   />
    </div>
</template>

<script>
import Navbar     from '../components/NavbarHeader.vue'
import Header     from '../components/Header.vue'
import Footer     from '../components/Footer.vue'
import AboutUs    from '../components/AboutUs.vue';
import Features   from '../components/Features.vue';

export default {
    components:{
        'app-nav'      : Navbar,
        'app-header'   : Header,
        'app-footer'   : Footer,
        'about-us'     : AboutUs,
        'app-features' : Features
    }
}
</script>

<style lang="scss" scoped>

</style>