<template>
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
        <div class="about-us-content">
            <div class="about-us-content__text">
                <p><strong>Renova Energie</strong> engagiert sich für innovative und nachhaltige Energielösungen und ist
                    in ganz Europa und der Schweiz tätig. Wir bieten den Verkauf, das Marketing und die Installation von
                    Ladestationen für Elektrofahrzeuge sowie
                    Solarpanelen an, um eine umweltfreundliche und kosteneffiziente Energienutzung zu fördern.</p>
                <br>
                <p>In einer Zeit, in der der Markt für Elektrofahrzeuge rasant wächst und die Energiekosten steigen,
                    wird der Bedarf an umweltfreundlichen Energielösungen für Privatpersonen und Unternehmen immer
                    dringender. <strong>Renova Energie</strong> stellt
                    hochqualitative Ladestationen für Elektrofahrzeuge und Solarsysteme bereit und bietet
                    massgeschneiderte Lösungen für Ihre Bedürfnisse.</p>
                <div class="route-button"><router-link to="/uber-uns">Mehr lesen</router-link></div>
            </div>
            <div class="about-us-content__image">
                <img src="https://renovaenergie.ch/storage/about.jpg" alt="">
            </div>
        </div>
    </div>
</template>

<style scoped>
.about-us-container {
    padding: 1% 10%;
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

.about-us-content {
    display: flex;
    justify-content: space-between;
    align-items: stretch;
}

p {
    text-indent: 2%;
}

.about-us-content__text {
    flex-basis: 65%;
}

.about-us-content__image {
    flex-basis: 30%;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    border-radius: 20px;
    background: #2e2e2e;
    color: #e2e2e2;
}

.about-us-content__image img {
    width: 100%;
    height: auto; /* height yerine auto kullanmak daha uyumlu olabilir */
    border-radius: 20px;
    object-fit: cover; /* Resmin belirlenen alanı kaplamasını sağlar */
}

.route-button {
    width: 100%;
    padding: 2% 2% 0 2%;
    text-align: end;
}

.route-button a {
    text-decoration: none;
    color: #437D1F;
    border: 2px solid #437D1F;
    padding: 5px 15px;
    border-radius: 5px;
    transition: all .3s ease;
}

.route-button a:hover {
    background-color: #437D1F;
    color: #FFF;
}

strong {
    color: #437D1F;
}

@media (max-width: 1024px) {
    .about-us-container {
        padding: 2% 5%;

    }

    .about-us-title__icon {
        font-size: 2.7rem;
        margin-right: 2%;
    }

    .about-us-title__text h5 {
        font-size: .7rem;
        margin-bottom: -8px;
    }

    .about-us-title__text h2 {
        font-size: 2.1rem;
    }

    .about-us-content {
        justify-content: space-around;
    }

    .about-us-content__image img {
        width: 100%;
        height: 100%;
        border-radius: 20px;
    }
}

@media (max-width: 768px) {
    .about-us-container {
        padding: 2% 5%;

    }

    .about-us-content__text {
        flex-basis: 55%;
    }

    .about-us-content__image {
        flex-basis: 40%;
    }
}

@media (max-width: 480px) {
    .about-us-container {
        padding: 4% 5%;
    }

    .about-us-title__icon {
        font-size: 2rem;
        margin-right: 3%;
    }

    .about-us-title__text h5 {
        font-weight: 400;
        font-size: .7rem;
        margin-bottom: -5px;
    }

    .about-us-title__text h2 {
        font-weight: 400;
        font-size: 1.6rem;
    }

    .about-us-content {
        flex-direction: column-reverse;
    }

    p {
        text-indent: 5%;
    }

    .about-us-content__text {
        flex-basis: 100%;
        margin-top: 5%;
    }

    .route-button a {
        text-decoration: none;
        color: #437D1F;
        border: 2px solid #437D1F;
        padding: 5px 20px;
        border-radius: 5px;
        transition: all .3s ease;
    }
}
</style>