<template>
    <div class="faq-container">
        <div class="faq-title">
            <div class="faq-title__icon">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
            <div class="faq-title__text">
                <h5>Renova Energie</h5>
                <h2>Häufige Fragen</h2>
            </div>
        </div>
        <div v-for="(faq, index) in faqs" :key="index" class="faq-item">
            <div class="faq-question" @click="toggleAnswer(index)">
                <h2>{{ faq.question }}</h2>
                <span v-if="activeIndex === index" class="faq-arrow">▼</span>
                <span v-else class="faq-arrow">▶</span>
            </div>
            <div v-if="activeIndex === index" class="faq-answer">
                <p>{{ faq.answer }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            faqs: [
                {
                    question: 'Was sind die Vorteile von Solarzellen?',
                    answer: 'Solarzellen bieten eine umweltfreundliche und kostengünstige Möglichkeit, Strom zu erzeugen. Sie reduzieren Ihre Stromrechnung und sind eine nachhaltige Energiequelle.'
                },
                {
                    question: 'Wie lange dauert die Installation von Solarpanels?',
                    answer: 'Die Installation von Solarpanels dauert in der Regel zwischen einem und drei Tagen, abhängig von der Grösse der Anlage und der Komplexität des Systems.'
                },
                {
                    question: 'Wie funktioniert die Installation einer EV-Ladestation?',
                    answer: 'Die Installation einer EV-Ladestation umfasst die Auswahl eines geeigneten Standorts, das Verlegen der notwendigen elektrischen Leitungen und die Installation des Ladegeräts. Ein qualifizierter Techniker wird dies durchführen.'
                },
                {
                    question: 'Gibt es staatliche Förderungen für Solaranlagen?',
                    answer: 'Ja, viele Länder bieten staatliche Förderungen und Steuervergünstigungen für die Installation von Solaranlagen an. Es ist ratsam, sich über lokale Programme und Anreize zu informieren.'
                },
                {
                    question: 'Wie oft müssen Solarpanels gewartet werden?',
                    answer: 'Solarpanels erfordern nur wenig Wartung. Es wird empfohlen, sie einmal jährlich auf Verschmutzungen und Schäden zu überprüfen und gegebenenfalls reinigen zu lassen.'
                },
                {
                    question: 'Kann ich meine Ladestation selbst installieren?',
                    answer: 'Es wird empfohlen, eine qualifizierte Elektrofachkraft mit der Installation Ihrer Ladestation zu beauftragen, um sicherzustellen, dass alle Sicherheits- und Qualitätsstandards eingehalten werden.'
                }
            ],
            activeIndex: null
        }
    },
    methods: {
        toggleAnswer(index) {
            this.activeIndex = this.activeIndex === index ? null : index;
        }
    }
}
</script>

<style scoped>
.faq-container {
    width: 100%;
    padding: 2% 10%;
}

.faq-title {
    margin: 3% 0;
    display: flex;
    justify-content: start;
    align-items: center;
}

.faq-title__icon {
    font-size: 3rem;
    margin-right: 1%;
    color: #437D1F;
}

.faq-title__text h5 {
    font-weight: 400;
    font-size: .7rem;
    margin-bottom: -10px;
    color: #437D1F;
}

.faq-title__text h2 {
    font-weight: 400;
    font-size: 2.4rem;
    color: #437D1F;
}

.faq-item {
    border-bottom: 1px solid #ddd;
    padding: 10px 0;
}

.faq-question {
    cursor: pointer;
    font-size: 1.2rem;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #437D1F;
    color: #FFF;
    padding: 1%;
    border-radius: 5px;
}

.faq-arrow {
    font-size: 1.3rem;
    color: #FFF;
}

.faq-answer {
    padding: 10px 0;
    font-size: .9rem;
    color: #555;
}

h2 {
    font-weight: 400;
    font-size: 1.1rem;
}

@media (max-width: 1024px) {
    .faq-container {
        padding: 2% 5%;

    }

    .faq-title__icon {
        font-size: 2.7rem;
        margin-right: 2%;
    }

    .faq-title__text h5 {
        font-size: .7rem;
        margin-bottom: -8px;
    }

    .faq-title__text h2 {
        font-size: 2.1rem;
    }

    .faq-content {
        justify-content: space-around;
    }

    .faq-content__info {
        flex-basis: 45%;

    }

    .faq-content__form {
        flex-basis: 45%;

    }
}

@media (max-width: 768px) {
    h2 {
        font-weight: 400;
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .faq-title__icon {
        font-size: 2rem;
        margin-right: 3%;
    }

    .faq-title__text h5 {
        font-weight: 400;
        font-size: .7rem;
        margin-bottom: -5px;
    }

    .faq-title__text h2 {
        font-weight: 400;
        font-size: 1.6rem;
    }

    h2 {
        font-size: 1rem;
    }

    .faq-question {
        cursor: pointer;
        font-size: 1.2rem;
        font-weight: bold;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #437D1F;
        color: #FFF;
        padding: 3%;
        border-radius: 5px;
    }

    .faq-arrow {
        font-size: 1.1rem;
        margin-left: 3%;
        color: #FFF;
    }

    .faq-answer {
        padding: 10px 0;
        font-size: .9rem;
        color: #555;
    }
}
</style>