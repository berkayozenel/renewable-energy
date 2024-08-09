<template>
    <div>
        <app-nav />
        <div class="preis-container" style="min-height: 60vh;">
            <div class="preis-title">
                <div class="preis-title__icon">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <div class="preis-title__text">
                    <h5>Renova Energie</h5>
                    <h2>Preisgestaltung</h2>
                </div>
            </div>
            <div class="preis-section-one">
                <div class="preis-section-one__image">
                    <img src="https://renovaenergie.ch/storage/preis-page/asset-1.jpg" >
                </div>
                <div class="preis-section-one__content">
                    <h3>AC-Steckdosentarif</h3>
                    <div class="line"></div>
                    <div class="table-head">
                        <span>VERBRAUCH</span>
                        <span>PREISEINHEIT</span>
                    </div>
                    <div class="line-opacity"></div>

                    <div class="table-row">
                        <span>AC-Steckdosen vom Typ 2</span>
                        <span>0.80 CHF</span>
                    </div>
                </div>
            </div>
            <div class="preis-section-two">
                <div class="preis-section-two__image">
                    <img src="https://renovaenergie.ch/storage/preis-page/asset-2.jpg" >
                </div>
                <div class="preis-section-two__content">
                    <h3>DC-Steckdosentarif</h3>
                    <div class="line"></div>
                    <div class="table-head">
                        <span>VERBRAUCH</span>
                        <span>PREISEINHEIT</span>
                    </div>
                    <div class="line-opacity"></div>
                    <div class="table-row">
                        <span>DC CCS</span>
                        <span>0.80 CHF</span>
                    </div>
                </div>
            </div>
            <div class="preis-warning">
                <p><strong>Hinweis:</strong> Die Preise können je nach Standort oder Steckdose variieren.</p>
                <p>*Abgerechnet Pro kW</p>
            </div>
        </div>
        <app-footer />
    </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
export default {
    components:{
        'app-nav'   : Navbar,
        'app-footer': Footer
    }
}
</script>

<style scoped>
.preis-container{
    padding: 7% 10%;
}
.preis-title{
    margin: 3% 0;
    display: flex;
    justify-content: start;
    align-items: center;
}
.preis-title__icon{
    font-size: 3rem;
    margin-right: 1%;
    color: #437D1F;
}
.preis-title__text h5{
    font-weight: 400;
    font-size: .7rem;
    margin-bottom: -10px;
    color: #437D1F;

}
.preis-title__text h2{
    font-weight: 400;
    font-size: 2.4rem;
    color: #437D1F;

}
.preis-section-one{
    margin: 5% 0;
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: stretch; /* align-items: stretch olarak değiştirildi */
    height: auto; /* Yüksekliğin otomatik olarak ayarlanmasını sağlar */
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
    border-radius: 15px;
    animation: fadeInRight 2s forwards;
    overflow-y: hidden;
}
.preis-section-one__image{
    flex-basis: 25%;
    height: auto;
}
.preis-section-one__image img{
    width: 100%;
    height: 100%;
    border-radius: 15px 0 0 15px;
}
.preis-section-one__content{
    flex-basis: 75%;
    padding: 0 5%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
}
.preis-section-one__content h3{
    font-weight: 400;
    color: #437D1F;
}
.line{
    margin: 2% 0;
    width: 100%;
    height: 2px;
    border-radius: 5px;
    background: #437D1F;
}
.line-opacity{
    margin: 2% 0 1% 0;
    width: 100%;
    height: 2px;
    border-radius: 5px;
    background: gray;
    opacity: .6;
}
.table-head, .table-row{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.table-head span{
    flex-basis: 50%;
    font-weight: 500;
}
.table-row span{
    flex-basis: 50%;
    opacity: .8;
}
.preis-section-two{
    margin: 5% 0;
    display: flex;
    flex-direction: row-reverse;
    justify-content: space-around;
    align-items: stretch; /* align-items: stretch olarak değiştirildi */
    height: auto; /* Yüksekliğin otomatik olarak ayarlanmasını sağlar */
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
    border-radius: 15px;
    animation: fadeInLeft 2s forwards;
    overflow-y: hidden;
}
.preis-section-two__image{
    flex-basis: 25%;
    height: auto;
}
.preis-section-two__image img{
    width: 100%;
    height: 100%;
    border-radius: 0 15px 15px 0;
}
.preis-section-two__content{
    flex-basis: 75%;
    padding: 0 5%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
}
.preis-section-two__content h3{
    font-weight: 400;
    color: #437D1F;
}

</style>