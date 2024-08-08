<template>
    <div class="overlay">
    </div>
    <form class="form-container">
        <div class="form-header">
            <div class="form-title">
                <h3>Renova Energie</h3>
                <h1>Antragsformular für Parkplätze</h1>
            </div>
            <div class="icon">
                <span><i class="fa-solid fa-x"></i></span>
            </div>
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
                <select name="country" id="country" v-model="formData.country">
                <option value="null">--Wählen--</option>
              </select>
            </div>
        </div>
        <div class="form-group">
            <div class="form-element">
                <label for="city">Stadt</label>
                <select name="city" id="city" v-model="formData.city">
                <option value="null">--Wählen--</option>
              </select>
            </div>
            <div class="form-element">
                <label for="station-type">Stationstyp</label>
                <select name="station-type" id="station-type" v-model="formData.stationType">
                <option value="null">--Wählen--</option>
                <option value="AC">AC-Ladestation</option>
                <option value="DC">DC-Hochgeschwindigkeitsladestation</option>
              </select>
            </div>
        </div>
        <div class="form-textarea">
            <label for="text">Erläuterung</label>
            <textarea name="text" id="text" v-model="formData.message"></textarea>
        </div>
        <div class="form-controls">
            <button type="button">Schicken</button>
        </div>
    </form>
</template>
  
<script>
export default {
    data() {
        return {
            formData: {
                title: null,
                nameSurname: null,
                phone: null,
                email: null,
                country: null,
                city: null,
                stationType: null,
                message: null
            }
        }
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
    z-index: 10;
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
    z-index: 20;
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
    font-size: 1.1rem;
    color: #FFF;
    padding: 12px 15px;
    border-radius: 100%;
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
</style>
