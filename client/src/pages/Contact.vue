<template>
    <div>
        <app-nav     />
        <app-contact style="margin-top: 5%;"/>
        <app-footer  />
    </div>
</template>

<script>
import axios from 'axios'
import Swal from 'sweetalert2'
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
