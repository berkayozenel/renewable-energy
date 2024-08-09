<template>
    <div>
        <app-nav />
        <div class="services-container">
            <div class="services-title">
                <div class="services-title__icon">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <div class="services-title__text">
                    <h5>Renova Energie</h5>
                    <h2>Energielösungen</h2>
                </div>
            </div>
            <div class="service-card-left">
                <div class="service-card__image">
                    <img src="https://renovaenergie.ch/storage/service-page/individual-use.jpg" alt="Innovative Energielösungen">
                </div>
                <div class="service-card__text">
                    <header>
                        <h1>Innovative Energielösungen für den privaten Gebrauch</h1>
                    </header>
                    <section class="content">
                        <h2>Optimieren Sie Ihren Energieverbrauch</h2>
                        <p>Energieeffizienz und umweltfreundliche Technologien sind heutzutage auch für Privatnutzer von grosser Bedeutung. Renova Energie bietet Hausbesitzern und Einzelanwendern Lösungen, um ihren Energieverbrauch zu optimieren und gleichzeitig
                            die Umwelt zu schonen.</p>
    
                        <h3>Unsere Produkte und Dienstleistungen</h3>
                        <p>Unsere Ladestationen für Elektrofahrzeuge und Solaranlagen sind speziell für die Bedürfnisse von Einzelanwendern entwickelt. Elektrofahrzeugbesitzer können ihre Fahrzeuge bequem zu Hause aufladen, während unsere Solaranlagen es ihnen
                            ermöglichen, ihren eigenen Strom zu produzieren und Energiekosten zu senken.</p>
    
                        <h3>Benutzerfreundliche Apps</h3>
                        <p>Die Lösungen von Renova Energie werden durch benutzerfreundliche mobile Apps unterstützt. Elektrofahrzeugbesitzer können den Ladezustand ihrer Fahrzeuge über die App überwachen und Zahlungen digital abwickeln. Solaranlagen bieten ebenfalls
                            die Möglichkeit, Produktions- und Verbrauchsdaten über die App zu verfolgen.</p>
    
                        <h3>Erleben Sie umweltfreundliche Energie</h3>
                        <p>Entdecken Sie die innovativen Lösungen von Renova Energie, um Ihre persönlichen Energiebedürfnisse zu erfüllen und ein umweltfreundliches Leben zu führen. </p>
                        <div class="contact">
                            <p>Kontaktieren Sie uns und wir rufen Sie umgehend an.</p>
                            <span @click="showIndividuelForm = true">
                                <i class="fa-regular fa-paper-plane"></i> Jetzt informieren
                            </span>
                    </div>
                    </section>
    
                </div>
            </div>
            <form-individuel v-if="showIndividuelForm" :isVisible="showIndividuelForm" @close="showIndividuelForm = false" />

            <div class="service-card-left" style="flex-direction: row-reverse;">
                <div class="service-card__image">
                    <img src="https://renovaenergie.ch/storage/service-page/workplace-plaza.jpg" alt="Innovative Energielösungen für moderne Bürogebäude" style="border-radius: 0 15px 15px 0; height: 870px;">
                </div>
                <div class="service-card__text">
                    <header>
                        <h1>Innovative Energielösungen für moderne Bürogebäude und Gewerbeimmobilien</h1>
                    </header>
                    <section class="content">
                        <h2>Nachhaltige Zukunft für Bürogebäude und Gewerbeimmobilien</h2>
                        <p>In einer Welt, in der die effiziente Nutzung von Ressourcen und die Verbreitung umweltfreundlicher Technologien immer wichtiger werden, spielen innovative Projekte eine zentrale Rolle bei der Gestaltung einer nachhaltigen Zukunft.
                            Renova Energie bietet massgeschneiderte Lösungen für Bürogebäude und Gewerbeimmobilien, die nicht nur den Energieverbrauch optimieren, sondern auch die Umweltbilanz verbessern.</p>
    
                        <h3>Ladestationen und Solaranlagen für moderne Arbeitsumgebungen</h3>
                        <p>Unsere Ladestationen für Elektrofahrzeuge und Solaranlagen sind speziell darauf ausgelegt, moderne Arbeitsumgebungen zu unterstützen. Diese Technologien ermöglichen es Unternehmen, ihre Ressourcen effektiv zu nutzen und gleichzeitig
                            ihren Beitrag zur Reduzierung der CO₂-Emissionen zu leisten. Durch den Einsatz unserer Produkte können Firmen nicht nur ihre Betriebskosten senken, sondern auch ihr Engagement für eine nachhaltige Zukunft unter Beweis stellen.</p>
    
                        <h3>Benutzerfreundliche Lösungen für Ihr Unternehmen</h3>
                        <p>Renova Energie’s Lösungen bieten Bürogebäuden und Gewerbeimmobilien die Möglichkeit, Elektrofahrzeuge bequem aufzuladen und gleichzeitig den Einsatz erneuerbarer Energien zu fördern. Unsere benutzerfreundliche mobile App ermöglicht
                            es, den Ladezustand der Fahrzeuge zu überwachen und Zahlungen digital abzuwickeln.</p>
    
                        <h3>Energieeffizienz und ein positives Unternehmensimage</h3>
                        <p>Neben der praktischen Nutzung unserer Technologien profitieren Unternehmen auch von einer verbesserten Energieeffizienz und einem positiven Image als umweltbewusste Arbeitgeber. Unsere Lösungen sind darauf ausgelegt, den Anforderungen
                            moderner Büro- und Gewerbeimmobilien gerecht zu werden und gleichzeitig einen Beitrag zur Reduzierung des ökologischen Fussabdrucks zu leisten.</p>
    
                        <h3>Investieren Sie in die Zukunft Ihres Unternehmens</h3>
                        <p>Mit Renova Energie setzen Sie auf innovative Lösungen, die Ihrem Unternehmen nicht nur heute, sondern auch in der Zukunft zugutekommen werden.</p>
                        <div class="contact">
                            <p>Kontaktieren Sie uns und wir rufen Sie umgehend an.</p>
                            <span @click="showPlazaForm = true">
                                <i class="fa-regular fa-paper-plane"></i> Jetzt informieren
                            </span>
                        </div>
    
                    </section>
                </div>
            </div>

            <form-plaza v-if="showPlazaForm" :isVisible="showPlazaForm" @close="showPlazaForm = false" />


            <div class="service-card-left">
                <div class="service-card__image">
                    <img src="https://renovaenergie.ch/storage/service-page/municipality.jpg" alt="Innovative Dienstleistungen für zukunftsweisende öffentliche Institutionen" style="height: 750px;">
                </div>
                <div class="service-card__text">
                    <header>
                        <h1>Innovative Dienstleistungen für zukunftsweisende öffentliche Institutionen und visionäre Verwaltungen</h1>
                    </header>
                    <section class="content">
                        <h2>Umweltfreundliche Technologien und Ressourcennutzung</h2>
                        <p>Der richtige Umgang mit Ressourcen und die Verbreitung umweltfreundlicher Technologien gehören zu den wichtigsten Aufgaben, denen sich die Menschheit stellen muss, um eine saubere Welt für morgen zu hinterlassen. In diesem Zusammenhang
                            spielen Projekte, die als Vorbild für die Öffentlichkeit dienen, und die Institutionen, die diese Projekte umsetzen, eine grosse Rolle.</p>
    
                        <h3>Oncharge Ladestationen für öffentliche Institutionen</h3>
                        <p>Die Oncharge Ladestationen für Elektrofahrzeuge, die zu einem Symbol für umweltfreundliche Technologien werden, unterstützen öffentliche Institutionen nicht nur bei der effizienten Nutzung ihrer Ressourcen, sondern auch bei der Präsentation
                            ihrer Vision. Oncharge ermöglicht es öffentlichen Institutionen, ihre Elektrofahrzeuge aufzuladen und gleichzeitig eine führende Rolle bei der Bewusstseinsbildung für die Nutzung sauberer Energie zu übernehmen.</p>
    
                        <h3>Ununterbrochene Lademöglichkeiten für Elektrofahrzeuge</h3>
                        <p>Oncharge ermöglicht es öffentlichen Bediensteten in öffentlichen Institutionen und lokalen Verwaltungen, ihre Elektrofahrzeuge ununterbrochen aufzuladen. Neben den öffentlichen Bediensteten können Verwaltungen diese Geräte auch der
                            Öffentlichkeit zur Verfügung stellen und so ein neues Dienstleistungsangebot eröffnen.</p>
    
                        <h3>Kompatible mobile Anwendungen</h3>
                        <p>Besitzer von Elektrofahrzeugen können den Ladezustand ihrer Fahrzeuge über die Oncharge-Mobilanwendung, die mit allen Smartphones kompatibel ist, überwachen und ihre Zahlungen digital abwickeln.</p>
                        <div class="contact">
                            <p>Kontaktieren Sie uns und wir rufen Sie umgehend an.</p>
                            <span @click="showMunicipalitiesForm = true">
                                <i class="fa-regular fa-paper-plane"></i> Jetzt informieren
                            </span>
                        </div>
    
                    </section>
                </div>
            </div>

            <form-municiplaites v-if="showMunicipalitiesForm" :isVisible="showMunicipalitiesForm" @close="showMunicipalitiesForm = false" />

            <div class="service-card-left" style="flex-direction: row-reverse;">
                <div class="service-card__image">
                    <img src="https://renovaenergie.ch/storage/service-page/station.jpg" alt="Energielösungen für Tankstellen" style="border-radius: 0 15px 15px 0; height: 700px;">
                </div>
                <div class="service-card__text">
                    <header>
                        <h1>Energielösungen für Tankstellen</h1>
                    </header>
                    <section class="content">
                        <h2>Effizienz und Nachhaltigkeit für Tankstellen</h2>
                        <p>Unsere fortschrittlichen Energielösungen steigern die Effizienz von Tankstellen und fördern umweltfreundliche Praktiken. Renova Energie bietet umfassende Lösungen, um den Energiebedarf von Tankstellen zu decken und deren Betrieb nachhaltiger
                            zu gestalten.</p>
    
                        <h3>Integration von Ladestationen für Elektrofahrzeuge</h3>
                        <p>Unsere Ladestationen für Elektrofahrzeuge können nahtlos in die bestehende Infrastruktur von Tankstellen integriert werden, sodass diese sowohl Kraftstoff- als auch Elektrofahrzeug-Ladeleistungen anbieten können, was die Kundenzufriedenheit
                            erhöht.
                        </p>
    
                        <h3>Solaranlagen für nachhaltige Energieversorgung</h3>
                        <p>Unsere Solaranlagen ermöglichen es, den Energiebedarf Ihrer Stationen teilweise oder vollständig mit Sonnenenergie zu decken, wodurch die Betriebskosten gesenkt und die Umweltauswirkungen reduziert werden.</p>
    
                        <h3>Optimierung des Energieverbrauchs</h3>
                        <p>Die Lösungen von Renova Energie optimieren den Energieverbrauch von Tankstellen und reduzieren die Energiekosten für die Betreiber. Unsere innovativen Technologien ermöglichen es den Tankstellen, umweltfreundliche Ansätze zu verfolgen
                            und den modernen Energieanforderungen gerecht zu werden.</p>
    
                        <h3>Entdecken Sie die Lösungen von Renova Energie</h3>
                        <p>Entdecken Sie die Lösungen von Renova Energie, um die Effizienz Ihrer Tankstelle zu steigern und umweltfreundliche Dienstleistungen anzubieten.</p>
                        <div class="contact">
                            <p>Kontaktieren Sie uns und wir rufen Sie umgehend an.</p>
                            <span @click="showGasStationForm = true">
                                <i class="fa-regular fa-paper-plane"></i> Jetzt informieren
                            </span>
                        </div>
    
                    </section>
                </div>
            </div>
            <form-gas-station v-if="showGasStationForm" :isVisible="showGasStationForm" @close="showGasStationForm = false" />

            <div class="service-card-left">
                <div class="service-card__image">
                    <img src="https://renovaenergie.ch/storage/service-page/parking.jpg" alt="Energielösungen für Parkplätze" style="height: 750px;">
                </div>
                <div class="service-card__text">
                    <header>
                        <h1>Energielösungen für Parkplätze</h1>
                    </header>
                    <section class="content">
                        <h2>Nachhaltigkeit und Effizienz für moderne Städte</h2>
                        <p>In modernen Städten spielt das Energiemanagement von Parkplätzen eine entscheidende Rolle für Nachhaltigkeit und Effizienz. Renova Energie bietet innovative Energielösungen für Parkplätze, um sowohl die Umweltbelastung zu reduzieren
                            als auch den Komfort für die Nutzer zu erhöhen.</p>
    
                        <h3>Integration von Ladestationen für Elektrofahrzeuge</h3>
                        <p>Unsere Ladestationen für Elektrofahrzeuge können nahtlos in die bestehende Infrastruktur Ihrer Parkplätze integriert werden. So können Sie Ihren Besuchern die Möglichkeit bieten, ihre Elektrofahrzeuge aufzuladen, und Ihren Parkplatz
                            attraktiver gestalten.</p>
    
                        <h3>Solaranlagen für nachhaltige Energie</h3>
                        <p>Darüber hinaus können unsere Solaranlagen den Energiebedarf Ihres Parkplatzes durch Sonnenenergie decken, wodurch Sie Ihre Energiekosten senken und die Umweltauswirkungen reduzieren können.</p>
    
                        <h3>Optimierung des Energieverbrauchs</h3>
                        <p>Die Lösungen von Renova Energie optimieren den Energieverbrauch Ihrer Parkplätze und unterstützen eine nachhaltige Energieverwendung. Unsere intelligenten Energiemanagementsysteme helfen Ihnen, den Energiebedarf Ihrer Parkplätze effizient
                            zu decken.</p>
    
                        <h3>Entdecken Sie die Lösungen von Renova Energie</h3>
                        <p>Entdecken Sie die Lösungen von Renova Energie, um die Energieeffizienz Ihres Parkplatzes zu steigern und umweltfreundliche Dienstleistungen anzubieten.</p>
                        <div class="contact">
                            <p>Kontaktieren Sie uns und wir rufen Sie umgehend an.</p>
                            <span @click="showCarParkForm = true">
                                <i class="fa-regular fa-paper-plane"></i> Jetzt informieren
                            </span>
                        </div>
    
                    </section>
                </div>
            </div>
            <form-car-park v-if="showCarParkForm" :isVisible="showCarParkForm" @close="showCarParkForm = false" />

        </div>
        <app-footer />
    </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
import FormIndividuell from '../components/forms/FormInvidual.vue'
import FormWorkPlacesPlazas from '@/components/forms/FormPlazas.vue';
import FormCarPark from '@/components/forms/FormCarPark.vue';
import FormGasStation from '@/components/forms/FormGasStation.vue';
import FormMuniciplaites from '@/components/forms/FormMuniciplaites.vue';
export default {
    components: {
        'app-nav': Navbar,
        'app-footer': Footer,
        "form-individuel": FormIndividuell,
        "form-plaza": FormWorkPlacesPlazas,
        "form-car-park": FormCarPark,
        "form-gas-station": FormGasStation,
        "form-municiplaites": FormMuniciplaites
    },
    data() {
        return {
            showIndividuelForm: false,
            showPlazaForm: false,
            showCarParkForm: false,
            showGasStationForm: false,
            showMunicipalitiesForm: false,
            
        }
    }
}
</script>

<style scoped>
.services-container {
    min-height: 60vh;
    padding: 7% 10% 2% 10%;

}

.services-title {
    margin: 3% 0;
    display: flex;
    justify-content: start;
    align-items: center;
}

.services-title__icon {
    font-size: 3rem;
    margin-right: 1%;
    color: #437D1F;
}

.services-title__text h5 {
    font-weight: 400;
    font-size: .7rem;
    margin-bottom: -10px;
    color: #437D1F;
}

.services-title__text h2 {
    font-weight: 400;
    font-size: 2.4rem;
    color: #437D1F;
}

.service-card-left {
    width: 100%;
    display: flex;
    justify-content: start;
    align-items: center;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    border-radius: 20px;
    margin-bottom: 5%;
    animation: fadeInOpacity 2s forwards;

}

.service-card__image {
    flex-basis: 40%;
    padding: 0;
}

.service-card__image img {
    width: 100%;
    height: 650px;
    border-radius: 20px 0 0 20px;
    display: block;
    object-fit: cover;
}

.service-card__text {
    flex-basis: 60%;
    padding: 3% 5%;
}

.service-card__text h1,
.service-card__text h2,
.service-card__text h3 {
    font-weight: 400;
    color: #417D1F;
}

.service-card__text h1 {
    font-size: 1.6rem;
}

.service-card__text h2 {
    font-size: 1.4rem;
    margin-bottom: 1%;
}

.service-card__text h3 {
    font-size: 1.2rem;
    margin-bottom: 1%;
}

.service-card__text p {
    font-size: .9rem;
    opacity: .85;
    margin-bottom: 1%;
    text-indent: 2%;
}

.contact {
    display: flex;
    justify-content: start;
    align-items: center;
    width: 100%;
    margin-top: 2%;
}

.contact p {
    flex-basis: 65%;
    font-style: normal;
}

.contact span {
    cursor: pointer;
    flex-basis: 30%;
    border: 2px solid #417D1F;
    padding: 5px 10px;
    border-radius: 5px;
    color: #417D1F;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all .4s ease;
}

.contact span i {
    margin-right: 10px;
    font-size: 1.2rem;
}

.contact span:hover {
    background: #417D1F;
    color: #FFF;
}

@media (max-width: 1024px){
    .services-container {
    padding: 10% 10% 2% 10%;
}
.service-card-left {
    width: 100%;
    display: flex;
    flex-direction: column !important;
    justify-content: start;
    align-items: center;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    border-radius: 20px;
    margin-bottom: 5%;
    animation: fadeInOpacity 2s forwards;

}
.service-card__image {
    flex-basis: 100%;
    padding: 0;
}

.service-card__image img {
    width: 100%;
    height: auto !important;
    border-radius: 20px 20px 0 0 !important;
    display: block;
    object-fit: cover;
}
}
@media (max-width: 768px){
    .services-container {
    padding: 12% 10% 2% 10%;
}
.contact {
    justify-content: space-around;
}

.contact p {
    flex-basis: 50%;
}

.contact span {
    flex-basis: 40%;

}
}@media (max-width: 480px){
    .services-container {
    padding: 20% 10% 2% 10%;
}
.services-title__icon {
    font-size: 2rem;
    margin-right: 3%;
    color: #437D1F;
}

.services-title__text h5 {
    font-weight: 400;
    font-size: .7rem;
    margin-bottom: -5px;
    color: #437D1F;
}

.services-title__text h2 {
    font-weight: 400;
    font-size: 1.6rem;
    color: #437D1F;
}
.contact {
    flex-direction: column;
}

.contact p {
    flex-basis: 50%;
}

.contact span {
    flex-basis: 40%;
    margin-bottom: 2%;
    margin-top: 2%;
    font-size: .8rem;

}
.service-card__text h1 {
    font-size: 1.4rem;
}

.service-card__text h2 {
    font-size: 1.2rem;
    margin-bottom: 1%;
}

.service-card__text h3 {
    font-size: 1rem;
    margin-bottom: 1%;
}

.service-card__text p {
    font-size: .8rem;
    opacity: .85;
    margin-bottom: 1%;
    text-indent: 2%;
}
}
</style>