<template>
    <div>
        <app-nav />
    </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
import FormIndividuell from '../components/forms/FormInvidual.vue'
import FormWorkPlacesPlazas from '@/components/forms/FormPlazas.vue';
import FormCarPark from '@/components/forms/FormCarPark.vue';
import FormGasStation from '@/components/forms/FormGasStation.vue';
import FormMuniciplaites from '@/components/forms/FormMuniciplaites.vue';
export default {
    components:{
        'app-nav'   : Navbar,
        'app-footer': Footer,
        "form-individuel" : FormIndividuell,
        "form-plaza" : FormWorkPlacesPlazas,
        "form-car-park" :FormCarPark,
        "form-gas-station" : FormGasStation,
        "form-municiplaites": FormMuniciplaites
    }
}
</script>

<style lang="scss" scoped>

</style>