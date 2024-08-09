import { createRouter, createWebHistory } from "vue-router";
import Home           from './pages/Home.vue';
import Preis          from './pages/Price.vue';
import UberUns        from "./pages/AboutUs.vue";
import Contact        from "./pages/Contact.vue";
import Services       from "./pages/Services.vue";
import Station        from "./pages/Station.vue";
import Products       from "./pages/Products.vue";


const routes = [
    { 
        path: '/', 
        component: Home,
        meta: {
            title: 'Startseite | Renova Energie',
            description: 'Renova Energie bietet hochwertige Ladestationen für Elektrofahrzeuge und Solar-Panels für erneuerbare Energien an. Entdecken Sie unsere Lösungen für nachhaltige Energie.',
            keywords: 'Renova Energie, Ladestationen, Elektrofahrzeuge, Solar-Panels, erneuerbare Energien',
        }
    },
    { 
        path: '/preisgestaltung', 
        component: Preis,
        meta: {
            title: 'Preisgestaltung | Renova Energie',
            description: 'Erfahren Sie mehr über die Preisgestaltung unserer Ladestationen und Solar-Panels. Transparente Preise für erstklassige Produkte im Bereich erneuerbare Energien.',
            keywords: 'Preisgestaltung, Ladestationen, Solar-Panels, erneuerbare Energien, Renova Energie',
        }
    },
    { 
        path: '/uber-uns', 
        component: UberUns,
        meta: {
            title: 'Über Uns | Renova Energie',
            description: 'Erfahren Sie mehr über Renova Energie, unsere Expertise im Bereich Elektromobilität und Solarenergie sowie unser Engagement für nachhaltige Lösungen.',
            keywords: 'Renova Energie, Über uns, Elektromobilität, Solarenergie, erneuerbare Energien',
        }
    },
    { 
        path: '/kontakt', 
        component: Contact,
        meta: {
            title: 'Kontaktieren Sie Uns | Renova Energie',
            description: 'Kontaktieren Sie uns für Informationen zu unseren Ladestationen und Solar-Panels. Wir stehen Ihnen für Fragen und Beratung zur Verfügung.',
            keywords: 'Kontakt, Renova Energie, Ladestationen, Solar-Panels, Kundenservice',
        }
    },
    { 
        path: '/energielosungen', 
        component: Services,
        meta: {
            title: 'Energielösungen | Renova Energie',
            description: 'Entdecken Sie unsere Energielösungen, darunter innovative Ladestationen für Elektrofahrzeuge und effiziente Solar-Panels für nachhaltige Energie.',
            keywords: 'Energielösungen, Ladestationen, Solar-Panels, erneuerbare Energien, Renova Energie',
        }
    },
    { 
        path: '/ladestation', 
        component: Station,
        meta: {
            title: 'Ladestation | Renova Energie',
            description: 'Finden Sie hochwertige Ladestationen für Elektrofahrzeuge bei Renova Energie. Erleben Sie erstklassige Ladeinfrastruktur für nachhaltige Mobilität.',
            keywords: 'Ladestation, Elektrofahrzeuge, Renova Energie, Ladeinfrastruktur, nachhaltige Mobilität',
        }
    },
    { 
        path: '/produkte', 
        component: Products,
        meta: {
            title: 'Produkte | Renova Energie',
            description: 'Unsere Produkte umfassen Ladestationen für Elektrofahrzeuge und Solar-Panels. Entdecken Sie unsere Angebote für eine nachhaltige Energiezukunft.',
            keywords: 'Produkte, Ladestationen, Solar-Panels, Renova Energie, nachhaltige Energie',
        }
    },
];


const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to, from, savedPosition) {
        return { top: 0 };
    }
});

router.beforeEach((to, from, next) => {
    const nearestWithTitle = to.matched.slice().reverse().find(r => r.meta && r.meta.title);
    const nearestWithMeta = to.matched.slice().reverse().find(r => r.meta && r.meta.metaTags);

    if(nearestWithTitle) document.title = nearestWithTitle.meta.title;

    Array.from(document.querySelectorAll('[data-vue-router-controlled]')).map(el => el.parentNode.removeChild(el));

    if(!nearestWithMeta) return next();

    nearestWithMeta.meta.metaTags.map(tagDef => {
        const tag = document.createElement('meta');

        Object.keys(tagDef).forEach(key => {
            tag.setAttribute(key, tagDef[key]);
        });

        tag.setAttribute('data-vue-router-controlled', '');

        return tag;
    })
    .forEach(tag => document.head.appendChild(tag));

    next();
});

export default router;