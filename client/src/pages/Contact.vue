<template>
    <div>
        <app-nav     />
        <app-contact id="app-contact"/>
        <app-footer  />
    </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
import Contact from '../components/Contact.vue'
export default {
    components: {
        'app-nav': Navbar,
        'app-footer': Footer,
        'app-contact': Contact
    }
}
</script>

<style scoped>
#app-contact{
    margin-top: 5%;
}

@media (max-width: 1024px){
    #app-contact{
    margin-top: 9%;
}
}@media (max-width: 768px){
    #app-contact{
    margin-top: 9%;
}
}@media (max-width: 480px){
    #app-contact{
    margin-top: 18%;
}
}
</style>
