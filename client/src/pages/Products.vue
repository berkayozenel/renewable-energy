<template>
    <div>
        <app-navbar />
        <div class="products-container">
            <div class="products-title">
                <div class="products-title__icon">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <div class="products-title__text">
                    <h5>Renova Energie</h5>
                    <h2>Ladestationen</h2>
                </div>
            </div>
            <div class="product-card-container">
                <div v-for="item in products.filter(product => product.category === 'Charging Station')"
                    class="product-card">
                    <div class="product-card__image">
                        <img src="../assets/features/enviroment.svg" :alt="item.name">
                    </div>
                    <div class="product-card__content">
                        <h2>{{ item.name }} ({{ item.power }})</h2>
                        <h3>{{ item.brand }}</h3>
                        <h4>{{ item.type }}</h4>
                        <div class="product-card__content-features">
                            <div v-for="feature in item.features" class="feature__item">
                                <span><i class="fa-solid fa-bolt"></i>{{ feature.feature }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="products-title">
                <div class="products-title__icon">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <div class="products-title__text">
                    <h5>Renova Energie</h5>
                    <h2>Sonnenkollektoren</h2>
                </div>
            </div>
            <div class="product-card-container">
                <div v-for="item in products.filter(product => product.category === 'Solar Energy')"
                    class="product-card">
                    <div class="product-card__image">
                        <img src="../assets/features/enviroment.svg" :alt="item.name">
                    </div>
                    <div class="product-card__content">
                        <h2>{{ item.name }} ({{ item.power }})</h2>
                        <h3>{{ item.brand }}</h3>
                        <h4>{{ item.type }}</h4>
                        <div class="product-card__content-features">
                            <div v-for="feature in item.features" class="feature__item">
                                <span><i class="fa-solid fa-bolt"></i>{{ feature.feature }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <app-footer />
    </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
export default {
    components: {
        'app-navbar': Navbar,
        'app-footer': Footer
    },
    data() {
        return {
            products:
                [
                    {
                        product_id: 0,
                        name: 'BT100',
                        power: '22 kW',
                        brand: 'Bluetech',
                        type: 'AC Ladestation',
                        image: 'BT_100.svg',
                        category: 'Charging Station',
                        features:
                            [
                                {
                                    features_id: 0,
                                    feature: 'Lorem ipsum dolor sit amet.'
                                }
                            ]
                    },
                    {
                        product_id: 0,
                        name: 'BT100',
                        power: '22 kW',
                        brand: 'Bluetech',
                        type: 'AC Ladestation',
                        image: 'BT_100.svg',
                        category: 'Solar Energy',
                        features:
                            [
                                {
                                    features_id: 0,
                                    feature: 'Lorem ipsum dolor sit amet.'
                                }
                            ]
                    },
                    {
                        product_id: 0,
                        name: 'BT100',
                        power: '22 kW',
                        brand: 'Bluetech',
                        type: 'AC Ladestation',
                        image: 'BT_100.svg',
                        category: 'Solar Energy',
                        features:
                            [
                                {
                                    features_id: 0,
                                    feature: 'Lorem ipsum dolor sit amet.'
                                }
                            ]
                    },
                    {
                        product_id: 0,
                        name: 'BT100',
                        power: '22 kW',
                        brand: 'Bluetech',
                        type: 'AC Ladestation',
                        image: 'BT_100.svg',
                        category: 'Solar Energy',
                        features:
                            [
                                {
                                    features_id: 0,
                                    feature: 'Lorem ipsum dolor sit amet.'
                                }
                            ]
                    }
                ]
        }
    }
}
</script>

<style scoped>
.products-container {
    min-height: 60vh;
    padding: 7% 10% 2% 10%;
}

.products-title {
    margin: 3% 0;
    display: flex;
    justify-content: start;
    align-items: center;
}

.products-title__icon {
    font-size: 3rem;
    margin-right: 1%;
    color: #437D1F;
}

.products-title__text h5 {
    font-weight: 400;
    font-size: .7rem;
    margin-bottom: -10px;
    color: #437D1F;
}

.products-title__text h2 {
    font-weight: 400;
    font-size: 2.4rem;
    color: #437D1F;
}



.product-card-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.product-card {
    flex-basis: 45%;
    display: flex;
    justify-content: start;
    align-items: stretch;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    border-radius: 12px;
    margin-bottom: 3%;
}

.product-card__image {
    flex-basis: 40%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
}

.product-card__image img {
    width: 100%;
    height: auto;
}

.product-card__content {
    flex-basis: 60%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
    padding-left: 5%;
}

.product-card__content h2,
.product-card__content h3,
.product-card__content h4 {
    font-weight: 500;
    color: #2e2e2e;
}

.feature__item span {
    margin: 1% 0;
    color: rgb(81, 81, 81);
}

.feature__item span i {
    opacity: 1;
    color: #437D1F;
    margin-right: 10px;
}


@media (max-width: 1024px) {
    .products-container {
        padding: 12% 10%;
    }

    .products-title__icon {
        font-size: 2.7rem;
        margin-right: 2%;
    }

    .products-title__text h5 {
        font-size: .7rem;
        margin-bottom: -8px;
    }

    .products-title__text h2 {
        font-size: 2.1rem;
    }

    .product-card {
        flex-basis: 48%;
    }

    .product-card h2 {
        font-size: 1.4rem;
    }

    .product-card h3 {
        font-size: 1.2rem;
    }

    .product-card h4 {
        font-size: .9rem;
    }

    .product-card__content {
        padding: 5% 5%;
    }
}

@media (max-width: 768px) {
    .product-card {
        flex-basis: 100%;
    }

    .product-card h2 {
        font-size: 1.4rem;
    }

    .product-card h3 {
        font-size: 1.2rem;
    }

    .product-card h4 {
        font-size: .9rem;
    }

    .product-card__content {
        padding: 5% 5%;
    }
}

@media (max-width: 480px) {
    .products-container {
        padding: 20% 10%;
    }

    .products-title__icon {
        font-size: 2rem;
        margin-right: 3%;
    }

    .products-title__text h5 {
        font-weight: 400;
        font-size: .7rem;
        margin-bottom: -5px;
    }

    .products-title__text h2 {
        font-weight: 400;
        font-size: 1.6rem;
    }
    .product-card {
        flex-basis: 100%;
        flex-direction: column;
        margin-bottom: 6%;
    }

    .product-card h2 {
        font-size: 1.2rem;
    }

    .product-card h3 {
        font-size: 1rem;
    }

    .product-card h4 {
        font-size: .8rem;
    }

    .product-card__content {
        padding: 10% 10%;
    }

    .product-card__image img{
        width: 100%;
        height: 250px;
    }
}
</style>