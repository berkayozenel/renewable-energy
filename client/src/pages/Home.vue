<template>
    <div style="min-height: 200vh;">
        <app-nav        />
        <app-header     />
        <about-us       />
        <app-features   />
        <app-faqs       />
    </div>
</template>

<script>
import Navbar     from '../components/NavbarHeader.vue'
import Header     from '../components/Header.vue'
import Footer     from '../components/Footer.vue'
import AboutUs    from '../components/AboutUs.vue';
import Features   from '../components/Features.vue';
import Faqs       from '../components/Faqs.vue';

export default {
    components:{
        'app-nav'      : Navbar,
        'app-header'   : Header,
        'app-footer'   : Footer,
        'about-us'     : AboutUs,
        'app-features' : Features,
        'app-faqs'     : Faqs
    }
}
</script>

<style lang="scss" scoped>

</style>