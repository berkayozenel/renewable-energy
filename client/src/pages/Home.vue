<template>
    <div>
        <app-form-individuell></app-form-individuell>
        <app-form-WorkPlaza></app-form-WorkPlaza>
    </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
import formIndividuell from '../components/forms/form-individual.vue'
import formWorkplacesPlazas from '@/components/forms/form-workplacesPlazas.vue';
import formCarPark from '@/components/forms/form-carPark.vue';
import formGasStation from '@/components/forms/form-gasStation.vue';
import formMuniciplaites from '@/components/forms/form-municiplaites.vue';
export default {
    components:{
        'app-nav'   : Navbar,
        'app-footer': Footer,
        "app-form-individuell" : formIndividuell,
        "app-form-WorkPlaza" : formWorkplacesPlazas,
        "app-form-carPark" :formCarPark,
        "app-form-gasStation" :formGasStation,
        "app-form-municiplaites":formMuniciplaites
    }
}
</script>

<style lang="scss" scoped>

</style>