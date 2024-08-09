<template>
    <div class="features-container">
        <div v-for="feature in features" :key="feature.id" class="features-card">
            <div class="features-card__image">
                <!-- Buraya özellik resmi eklenebilir -->
            </div>
            <div class="features-card__text">
                <h2>{{ feature.title }}</h2>
                <p>{{ feature.detail }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            features: [
                {
                    id: 1,
                    image: '', // Resim URL'si buraya eklenebilir
                    title: 'Zuverlässigkeit',
                    detail: 'Wir bieten zuverlässige Energielösungen mit kontinuierlichem Service und hochwertigen Produkten.'
                },
                {
                    id: 2,
                    image: '', // Resim URL'si buraya eklenebilir
                    title: 'Kundenservice',
                    detail: 'Unser leicht erreichbares Kundenserviceteam bietet schnelle Lösungen und fachkundige Unterstützung.'
                },
                {
                    id: 3,
                    image: '', // Resim URL'si buraya eklenebilir
                    title: 'Transparenz',
                    detail: 'Wir gewährleisten Vertrauen durch transparente Preisgestaltung und klare Informationen.'
                },
                {
                    id: 4,
                    image: '', // Resim URL'si buraya eklenebilir
                    title: 'Umweltfreundliche Anwendungen',
                    detail: 'Wir bieten umweltfreundliche und energieeffiziente Lösungen für eine nachhaltige Zukunft.'
                },
                {
                    id: 5,
                    image: '', // Resim URL'si buraya eklenebilir
                    title: 'Technologische Innovation',
                    detail: 'Wir liefern innovative Energielösungen mit neuester Technologie und benutzerfreundlichen Systemen.'
                },
                {
                    id: 6,
                    image: '', // Resim URL'si buraya eklenebilir
                    title: 'Flexibilität',
                    detail: 'Wir bieten anpassbare Lösungen und flexible Vertragsbedingungen, um den Bedürfnissen unserer Kunden gerecht zu werden.'
                }
            ]
        }
    }
}
</script>

<style scoped>
.features-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.features-card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 300px;
    text-align: center;
}

.features-card__image {
    height: 150px;
    background-color: #f0f0f0; /* Placeholder color for image */
}

.features-card__text {
    padding: 20px;
}

.features-card__text h2 {
    margin: 0;
    font-size: 1.5rem;
    color: #333;
}

.features-card__text p {
    margin: 10px 0 0;
    color: #666;
}
</style>