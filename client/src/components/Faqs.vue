<template>
    <div class="faq-container">
        <h1>Häufige Fragen (FAQs)</h1>
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
                    answer: 'Die Installation von Solarpanels dauert in der Regel zwischen einem und drei Tagen, abhängig von der Größe der Anlage und der Komplexität des Systems.'
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
    width: 80%;
    margin: auto;
    padding: 20px;
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
}

.faq-arrow {
    font-size: 1.5rem;
    color: #437D1F;
}

.faq-answer {
    padding: 10px 0;
    font-size: 1rem;
    color: #555;
}
h2{
    font-weight: 400;
}
</style>