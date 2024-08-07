<template>
    <div>
        <app-nav />
        <div class="contact-container">
            <div class="contact-title">
                <div class="contact-title__icon">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <div class="contact-title__text">
                    <h5>Renova Energie</h5>
                    <h2>Kontaktieren Sie Uns</h2>
                </div>
            </div>
            <div class="contact-content">
                <div class="contact-content__info">
                    <h3>Renova Energie</h3>
                    <a href="#"><i class="fa-solid fa-location-dot"></i> Hofwiesenstrasse 273, 8050 Zürich, Schweiz</a>
                    <a href="tel:+410432880980"><i class="fa-solid fa-phone"></i> +41 043 288 09 80</a>
                    <a href="mailto:omer@sivgin.ch"><i class="fa-solid fa-envelope"></i> omer@sivgin.ch</a>
                </div>
                <form class="contact-content__form" @submit.prevent="contactSubmit">
                    <div class="form-title">
                        <h3>Kontakt Formular</h3>
                    </div>
                    <div v-if="contactError" class="form-error">
                        <span><i class="fa-solid fa-circle-exclamation"></i>{{ contactMessage }}</span>
                    </div>
                    <div class="form-element">
                        <label for="subject">Subject</label>
                        <select name="subject" id="subject" v-model="formData.subject">
                                    <option v-for="item in subjects" :key="item.id" :value="item.subject">{{ item.subject }}</option>
                                </select>
                    </div>
                    <div class="form-element">
                        <label for="nameSurname">Name und Nachname</label>
                        <input type="text" id="nameSurname" v-model="formData.nameSurname">
                    </div>
                    <div class="form-element">
                        <label for="phone">Telefon</label>
                        <input type="text" id="phone" v-model="formData.phone">
                    </div>
                    <div class="form-element">
                        <label for="mail">E-Mail</label>
                        <input type="email" id="mail" v-model="formData.email">
                    </div>
                    <div class="form-element">
                        <label for="message">Erzählen Sie uns kurz über sich.</label>
                        <textarea name="message" id="message" v-model="formData.description"></textarea>
                    </div>
                    <div class="form-button">
                        <button type="submit">Senden</button>
                    </div>
                </form>
            </div>
        </div>
        <app-footer />
    </div>
</template>

<script>
import axios from 'axios'
import Swal from 'sweetalert2'
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
export default {
    components: {
        'app-nav': Navbar,
        'app-footer': Footer
    },
    data() {
        return {
            formData: {
                subject: 'Bitte wählen Sie ein Thema.',
                nameSurname: null,
                phone: null,
                email: null,
                description: null
            },
            contactError: false,
            contactMessage: null,
            subjects: [{
                    id: 0,
                    subject: 'Bitte wählen Sie ein Thema.'
                },
                {
                    id: 1,
                    subject: 'Vorschlag / Kommentar'
                },
                {
                    id: 2,
                    subject: 'Beschwerde'
                }
            ]
        }
    },
    methods: {
        contactSubmit() {
            const loader = Swal.fire({
                title: 'Bitte warten...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading()
                }
            });

            axios.post('https://renovaenergie.ch/api/send-contact', this.formData)
                .then(res => {
                    if (res.data.success) {
                        Swal.fire({
                            title: 'Erfolg!',
                            text: 'Ihr Formular hat uns erreicht. Die Antwort erfolgt schnellstmöglich.',
                            icon: 'success',
                            confirmButtonText: 'Ok',
                            confirmButtonColor: '#437D1F'
                        });
                    } else {
                        this.contactError = true;
                        this.contactMessage = res.data.message;
                        Swal.close(); 
                    }
                })
                .catch(error => {
                    Swal.close(); 
                    console.error("Error:", error);
                });
        }
    }
}
</script>

<style scoped>
.contact-container {
    padding: 7% 10%;
    min-height: 60vh;
    animation: fadeInOpacity 2s forwards;
 
}

.contact-content {
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact-title {
    margin: 3% 0;
    display: flex;
    justify-content: start;
    align-items: center;
}

.contact-content__info {
    flex-basis: 50%;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
}
.contact-content__info a{
    text-decoration: none;
    color: #000;
    opacity: 0.7;
    font-size: 1.1rem;
    margin: 1% 0;
}
.contact-content__info a i{
    margin-right: 10px;
}
.contact-content__info a:hover{
    opacity: 1;
}
.contact-content__info h3{
    font-weight: 400;
    font-size: 1.5rem;
    margin-bottom: 1%;
    color: #437D1F;
}
.contact-title__icon {
    font-size: 3rem;
    margin-right: 1%;
    color: #437D1F;
}

.contact-title__text h5 {
    font-weight: 400;
    font-size: .7rem;
    margin-bottom: -10px;
    color: #437D1F;
}

.contact-title__text h2 {
    font-weight: 400;
    font-size: 2.4rem;
    color: #437D1F;
}

.contact-content__form {
    flex-basis: 40%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
    padding: 4% 4%;
    border-radius: 10px;
}

.form-element {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
    margin: 1% 0;
}

.form-element label {
    font-weight: 500;
    font-size: .9rem;
    margin-bottom: .5%
}

.form-element input {
    border: 1.5px solid #000;
    border-radius: 5px;
    height: 35px;
    width: 100%;
    padding: 5px 10px;
    color: #000;
}

.form-element select {
    border: 1.5px solid #000;
    border-radius: 5px;
    height: 35px;
    width: 100%;
    padding: 5px 10px;
    color: #000;
}

.form-element textarea {
    border: 1.5px solid #000;
    width: 100%;
    resize: none;
    height: 100px;
    border-radius: 5px;
    padding: 2% 3%;
}

.form-element textarea:focus,
.form-element input:focus,
.form-element select:focus {
    outline: #437D1F 1px solid;
}

.form-button {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 2%
}

.form-button button {
    cursor: pointer;
    font-size: 1rem;
    padding: 5px 20px;
    background-color: transparent;
    border: 2px solid #437D1F;
    border-radius: 5px;
    color: #437D1F;
    transition: all .4s ease-in-out;
}

.form-button button:hover {
    background: #437D1F;
    color: #FFF;
}

.form-title {
    margin: 2% 0;
}

.form-title h3 {
    font-weight: 400;
    font-size: 1.6rem;
    color: #437D1F;
}

.form-error {
    width: 100%;
    background-color: #437D1F;
    color: #FFF;
    padding: 10px 20px;
    border-radius: 5px;
}

.form-error span {
    width: 100%;
    display: flex;
    justify-content: start;
    align-items: center;
    font-size: .9rem;
}

.form-error span i {
    font-size: 1.2rem;
    margin-right: 10px;
}
</style>