<template>
    <div class="container">
        <app-nav />
        <div class="station-container">
            <div class="station__text">
                <h1>
                    <span v-for="(char, index) in text" :key="index" :class="{ space: char === ' ' }" :style="{ '--i': index + 1 }">
                        {{ char }}
                    </span>
                </h1>
            </div>
            <div class="loader-container">
                <div class="loader">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import NavbarHeader from '@/components/NavbarHeader.vue';

export default {
    components: {
        'app-nav': NavbarHeader,
    },
    data() {
        return {
            text: 'Demnächst verfügbar'.split('') // Metni harflere ayırıyoruz
        }
    },
}
</script>

<style scoped>
.container {
    height: 100vh;
    background-image: url('https://renovaenergie.ch/storage/bgolası.jpg');
    background-position: center;
    background-size: contain;
    display: flex;
    justify-content: center;
    align-items: center;
}

.station-container {
    display: flex;
    align-items: center;
    margin-top: -3%;
}

.station__text h1 {
    font-size: 3rem;
    color: #fff;
    margin-right: 20px;
    display: inline-block;
}

.station__text h1 span {
    display: inline-block;
    animation: colorChange 2s ease-in-out infinite;
    animation-delay: calc(0.1s * var(--i));
    text-transform: uppercase;
}
.station__text h1 span.space {
    width: 1em; /* Boşluğun görünmesini sağlamak için genişlik ayarı */
    display: inline-block;
    background: transparent; /* Arka plan rengini şeffaf yaparak boşluğun görsel olarak net olmasını sağlar */
}

/* Animasyon tanımı */
@keyframes colorChange {

    0%,
    100% {
        color: #fff;
    }

    50% {
        color: #437D1F;
    }
}

/* Loader için ayrı bir konteyner */

.loader-container {
    margin-left: 40px;
    position: relative;
    width: 150px;
    height: 150px;
}

/* Loader stili */

.loader {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 150px;
    height: 150px;
    background: transparent;
    border-radius: 50%;
    box-shadow: 25px 25px 75px rgba(0, 0, 0, 0.55);
    border: 1px solid #333;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.loader::before {
    content: '';
    position: absolute;
    inset: 20px;
    background: transparent;
    border: 1px dashed #444;
    border-radius: 50%;
    box-shadow: inset -5px -5px 25px rgba(0, 0, 0, 0.25), inset 5px 5px 35px rgba(0, 0, 0, 0.25);
}

.loader::after {
    content: '';
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 1px dashed #444;
    box-shadow: inset -5px -5px 25px rgba(0, 0, 0, 0.25), inset 5px 5px 35px rgba(0, 0, 0, 0.25);
}

.loader span {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 50%;
    height: 100%;
    background: transparent;
    transform-origin: top left;
    animation: radar81 2s linear infinite;
    border-top: 1px dashed #fff;
}

.loader span::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #437D1F;
    transform-origin: top left;
    transform: rotate(-55deg);
    filter: blur(30px) drop-shadow(20px 20px 20px seagreen);
}

@keyframes radar81 {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}
</style>