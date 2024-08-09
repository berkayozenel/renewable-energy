<template>
    <div v-if="isModalVisible" class="overlay">   
        <form class="form-container" @submit.prevent="sendMail">
            <div class="form-header">
                <div class="form-title">
                    <h3>Renova Energie</h3>
                    <h1>{{ formData.title }}</h1>
                </div>
                <div class="icon" @click="closeModal">
                    <span>X</span>
                </div>
            </div>
            <div v-if="formError" class="form-error">
                <span><i class="fa-solid fa-circle-exclamation"></i>{{ errorMessage }}</span>
            </div>
            <div class="form-group">
                <div class="form-element">
                    <label for="name">Name und Nachname</label>
                    <input type="text" name="name" placeholder="Schreiben Sie Ihren Name und Nachnamen" v-model="formData.nameSurname">
                </div>
                <div class="form-element">
                    <label for="phone">Telephone</label>
                    <input type="text" name="phone" v-model="formData.phone">
                </div>
            </div>
            <div class="form-group">
                <div class="form-element">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" v-model="formData.email">
                </div>
                <div class="form-element">
                    <label for="country">Land</label>
                    <select name="country" id="country" v-model="formData.country" @change="filterCity(formData.country)">
                    <option value="null">--Wählen--</option>
                    <option v-for="item in countries" :value="item.country_id">{{ item.country_name }}</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-element">
                    <label for="city">Stadt</label>
                    <select name="city" id="city" v-model="formData.city">
                    <option value="null">--Wählen--</option>
                    <option v-for="item in filteredCities" :value="item.city_name">{{ item.city_name }}</option>
                  </select>
                </div>
                <div class="form-element">
                    <label for="station-type">Stationstyp</label>
                    <select name="station-type" id="station-type" v-model="formData.stationType">
                    <option value="null">--Wählen--</option>
                    <option v-for="item in stations" :value="item.station_type_name">{{ item.station_type_name }}</option>
                  </select>
                </div>
            </div>
            <div class="form-textarea">
                <label for="text">Erläuterung</label>
                <textarea name="text" id="text" v-model="formData.description"></textarea>
            </div>
            <div class="form-controls">
                <button type="submit">Schicken</button>
            </div>
        </form>
    </div>
</template>
  
<script>
import axios from 'axios'
import Swal from 'sweetalert2'
export default {
    props: {
        isVisible: {
            type: Boolean,
            required: true
        }
    },
    data() {
        return {
            isModalVisible: this.isVisible,
            formData: {
                title:"Anmeldeformular für Arbeitsplätze und Plätze",
                nameSurname: null,
                phone: null,
                email: null,
                country: null,
                city: null,
                stationType: null,
                description: null
            },
            countries:[],
            cities :[],
            stations:[],
            filteredCities: [],
            formError: false,
            errorMessage: null
        }
    },
    methods: {
        closeModal() {
            this.$emit('close');
        },
        filterCity(id){
            this.filteredCities = this.cities.filter(item => item.country_id == id) 
        },
        sendMail(){
            const selectedCountry = this.countries.find(item => item.country_id === this.formData.country);
            this.formData.country = selectedCountry ? selectedCountry.country_name : null;
            const loader = Swal.fire({
                title: 'Bitte warten...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading()
                }
            });
            axios.post('https://renovaenergie.ch/api/send-solution', this.formData)
                .then(res => {
                    if (res.data.success) {
                        Swal.fire({
                            title: 'Erfolg!',
                            text: 'Ihr Formular hat uns erreicht. Die Antwort erfolgt schnellstmöglich.',
                            icon: 'success',
                            confirmButtonText: 'Ok',
                            confirmButtonColor: '#437D1F'
                        }).then(this.$emit('close'))

                    } else {
                        this.formError = true;
                        this.errorMessage = res.data.message;
                        Swal.close();

                    }
                })

        }

    },
    mounted(){
        axios.get("https://renovaenergie.ch/api/index-country")
        .then(res => {
            this.countries = res.data
        });
        axios.get("https://renovaenergie.ch/api/index-city")
        .then(res => {
            this.cities = res.data
        });
        axios.get("https://renovaenergie.ch/api/index-station")
        .then(res => {
            this.stations = res.data
        })
    }
}
</script>


<style scoped>
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(10px);
    z-index: 1010;
}

.form-container {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    z-index: 1020;
    width: 60%;
}

.form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.form-title h1,
.form-title h3 {
    margin: 0;
    color: #417D1F;
    font-weight: 400;
}

.form-title h3 {
    font-size: .9rem;
}

.icon {
    cursor: pointer;
    margin-right: 12px;
}

.icon span {
    display: inline-block; 
    width: 40px;         
    height: 40px;        
    font-size: 1.3rem;
    font-weight: 400;
    color: #FFF;
    text-align: center;  
    line-height: 40px;    
    border-radius: 50%;    
    background-color: #417D1F;
}


.form-group {
    display: flex;
    justify-content: space-between;
}

.form-element {
    flex-basis: 48%;
}

.form-element label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

.form-element input,
.form-element select,
.form-textarea textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    resize: none;
}

.form-textarea textarea {
    min-height: 80px;
}

.form-controls {
    text-align: center;
}

.form-controls button {
    padding: 10px 20px;
    background-color: #417D1F;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.form-controls button:hover {
    background-color: #33650E;
}

.form-error {
    width: 100%;
    background-color: #437D1F;
    color: #FFF;
    padding: 10px 20px;
    border-radius: 5px;
    margin-bottom: 2%;
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

@media (max-width: 1024px){
    .form-title h1{
        font-size: 1.5rem;
    }
    .form-container{
        width: 70%;
    }
}
@media (max-width: 768px){
    .form-title h1{
        font-size: 1.3rem;
    }
    .form-container{
        width: 85%;
        padding: 15px;
    }
}
@media (max-width: 480px){
    .form-title h1{
        font-size: 1.1rem;
    }
    .form-container{
        width: 90%;
        padding: 10px;
    }
    .form-group{
        flex-wrap: wrap;
    }
    .form-element{
        flex-basis: 100%;
    }
    .form-controls button {
        padding: 8px 16px;
    }
    label{
        font-size: .8rem;
    }
}

</style>
