<template>
    <div>
        <form-municiplaites></form-municiplaites>
    </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
import formIndividuell from '../components/forms/FormInvidual.vue'
import formWorkplacesPlazas from '@/components/forms/FormPlazas.vue';
import formCarPark from '@/components/forms/FormCarPark.vue';
import formGasStation from '@/components/forms/FormGasStation.vue';
import formMuniciplaites from '@/components/forms/FormMuniciplaites.vue';
export default {
    components:{
        'app-nav'   : Navbar,
        'app-footer': Footer,
        "form-individuel" : formIndividuell,
        "form-plaza" : formWorkplacesPlazas,
        "form-car-park" :formCarPark,
        "form-gas-station" :formGasStation,
        "form-municiplaites":formMuniciplaites
    }
}
</script>

<style lang="scss" scoped>

</style>