<template>
    <div>
        <app-nav />
        <div class="about-us-container">
            <div class="about-us-title">
                <div class="about-us-title__icon">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <div class="about-us-title__text">
                    <h5>Renova Energie</h5>
                    <h2>Über Uns</h2>
                </div>
            </div>
            <div class="section">
                <p><strong>Renova Energie</strong> engagiert sich für innovative und nachhaltige Energielösungen und ist in ganz Europa und der Schweiz tätig. Wir bieten den Verkauf, das Marketing und die Installation von Ladestationen für Elektrofahrzeuge sowie
                    Solarpanelen an, um eine umweltfreundliche und kosteneffiziente Energienutzung zu fördern.</p>
                <br>
                <p>In einer Zeit, in der der Markt für Elektrofahrzeuge rasant wächst und die Energiekosten steigen, wird der Bedarf an umweltfreundlichen Energielösungen für Privatpersonen und Unternehmen immer dringender. <strong>Renova Energie</strong> stellt
                    hochqualitative Ladestationen für Elektrofahrzeuge und Solarsysteme bereit und bietet massgeschneiderte Lösungen für Ihre Bedürfnisse.</p>
                <br>
                <p>Unser erfahrenes Team arbeitet eng mit Ihnen zusammen, um sicherzustellen, dass Sie den bestmöglichen Service erhalten. Wir sind Experten in der Installation von Solarpanelen und der Integration von Ladestationen und sind stolz darauf, umweltfreundliche
                    und nachhaltige Energielösungen anzubieten.</p>
                <br>
                <p>Für alle unsere Kunden, die die Energiewende unterstützen und in die Zukunft investieren möchten, bieten wir weiterhin qualitativ hochwertige Produkte und professionelle Dienstleistungen an. Mit unserem Engagement für Innovation und Nachhaltigkeit
                    ist <strong>Renova Energie</strong> Ihr zuverlässiger Partner für die besten Lösungen für Ihren Energiebedarf.</p>
            </div>
        </div>
        <div class="career-container">
            <div class="about-us-title">
                <div class="about-us-title__icon">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <div class="about-us-title__text">
                    <h5>Renova Energie</h5>
                    <h2>Karriere</h2>
                </div>
            </div>
            <div class="career-content">
                <div class="career-content__slogan">
                    <img src="../assets/logo.svg" alt="Renova Energie Logo">
                    <h4>Werde auch du Teil des Renova Energie Teams – bewirb dich jetzt!</h4>
                </div>
                <form class="career-content__form" @submit.prevent="careerSubmit">
                    <div class="form-title">
                        <h3>Karriereform</h3>
                    </div>
                    <div v-if="carrierError" class="form-error">
                        <span><i class="fa-solid fa-circle-exclamation"></i>{{ carrierMessage }}</span>
                    </div>
                    <div class="form-element">
                        <label for="nameSurname">Name und Nachname</label>
                        <input type="text" id="nameSurname" v-model="formData.name">
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
                        <label for="cv-writing">Erzählen Sie uns kurz über sich.</label>
                        <textarea name="cv-writing" id="cv-writing" v-model="formData.cv_writing"></textarea>
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
                name: null,
                phone: null,
                email: null,
                cv_writing: null
            },
            carrierError: false,
            carrierMessage: null
        }
    },
    methods: {
        careerSubmit() {
            const loader = Swal.fire({
                title: 'Bitte warten...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading()
                }
            });

            axios.post('https://renovaenergie.ch/api/send-career', this.formData)
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
                        this.carrierError = true;
                        this.carrierMessage = res.data.message;
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

.about-us-container {
    min-height: 60vh;
    padding: 7% 10% 2% 10%;
    animation: fadeInOpacity 2s forwards;
}

.career-container {
    min-height: 60vh;
    padding: 1% 10%;
    animation: fadeInOpacity 2s forwards;
}

.about-us-title {
    margin: 3% 0;
    display: flex;
    justify-content: start;
    align-items: center;
}

.about-us-title__icon {
    font-size: 3rem;
    margin-right: 1%;
    color: #437D1F;
}

.about-us-title__text h5 {
    font-weight: 400;
    font-size: .7rem;
    margin-bottom: -10px;
    color: #437D1F;
}

.about-us-title__text h2 {
    font-weight: 400;
    font-size: 2.4rem;
    color: #437D1F;
}

.section {
    width: 100;
    display: flex;
    flex-direction: column;
    align-items: start;
    justify-content: start;
}

.career-content {
    margin-bottom: 5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.career-content__slogan {
    flex-basis: 50%;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: center;
}

.career-content__slogan img {
    width: 50%;
    height: 150px;
    margin-bottom: 5%;
}

.career-content__slogan h4 {
    font-size: 1.2rem;
    font-weight: 400;
    width: 80%;
    color: #000;
    text-align: center;
}

.career-content__form {
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
    height: 29px;
    width: 100%;
    padding: 3% 3%;
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
.form-element input:focus {
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