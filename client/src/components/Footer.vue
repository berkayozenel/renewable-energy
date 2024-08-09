<template>
    <footer>
        <div class="footer-logo">
            <img src="https://renovaenergie.ch/storage/logo/logo-white.svg" alt="Renova Energie Logo">
        </div>
        <div class="footer-contact">
            <h4>Kommunikation</h4>
            <a href="#"><i class="fa-solid fa-location-dot"></i> Hofwiesenstrasse 273, 8050 Zürich, Schweiz</a>
            <a href="tel:+410432880980"><i class="fa-solid fa-phone"></i> +41 043 288 09 80</a>
            <a href="mailto:omer@sivgin.ch"><i class="fa-solid fa-envelope"></i> omer@sivgin.ch</a>
        </div>
        <div class="footer-sitemap">
            <h4>Seitenverzeichnis</h4>
            <router-link to="/">Startseite</router-link>
            <!-- <a href="#">Ladestationen</a>
            <a href="#">Antworten</a>
            <a href="#">Preise</a> -->
            <router-link to="/uber-uns">Über uns</router-link>
            <router-link to="#">Kontakt</router-link>
        </div>
        <div class="copyright">
            <p>© 2024 Renova Energie | Entworfen von Hematit Agency</p>
        </div>
    </footer>
</template>

<script>
export default {

}
</script>

<style scoped>
footer {
    width: 100%;
    background: rgb(41,77,19);
background: linear-gradient(90deg, rgba(41,77,19,1) 0%, rgba(65,123,30,1) 35%, rgba(67,127,31,1) 100%);    color: #FFFFFF;
    padding: 3% 5%;
    display: flex;
    justify-content: space-around;
    align-items: start;
    flex-wrap: wrap;
}

.footer-logo {
    flex-basis: 30%;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
}
.footer-logo img{
    width: 70%;
    height: 100px;
}
.footer-contact {
    flex-basis: 30%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.footer-sitemap {
    margin-left: 0%;
    flex-basis: 30%;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: end;
}

a {
    color: #FFFFFF;
    text-decoration: none;
    opacity: .8;
    margin: 2.5% 0;
}

a:hover {
    opacity: 1;
}

h4 {
    font-size: 1.6rem;
}

.copyright {
    flex-basis: 100%;
    text-align: center;
    margin-top: 3%;
    font-size: .8rem;
}

@media (max-width:1024px) {
    footer {
        padding: 3% 2%;
    }

    .footer-contact {
        flex-basis: 30%;
    }
}

@media (max-width:768px) {
    footer {
        padding: 3% 2%;
    }

    a {
        font-size: .9rem;
    }


    h4 {
        font-size: 1.3rem;
    }
}

@media (max-width:480px) {
    .footer-logo {
        flex-basis: 90%;

    }

    .footer-contact {
        flex-basis: 90%;
        margin-top: 9%;
        margin-bottom: 5%;

    }

    .footer-sitemap {
        margin-left: 0%;
        flex-basis: 90%;
        margin-bottom: 5%;
    }

}
</style>