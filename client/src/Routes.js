import { createRouter, createWebHistory } from "vue-router";
import Home           from './pages/Home.vue';
import Preis          from './pages/Preis.vue';
import UberUns        from "./pages/UberUns.vue";


const routes = [
    { 
        path: '/', 
        component: Home,
        meta: {
            title: 'Startseite | Renova Energie',
            description: '',
            keywords: '',
        }
    },
    { 
        path: '/preisgestaltung', 
        component: Preis,
        meta: {
            title: 'Preisgestaltung | Renova Energie',
            description: '',
            keywords: '',
        }
    },
    { 
        path: '/uber-uns', 
        component: UberUns,
        meta: {
            title: 'Über Uns | Renova Energie',
            description: '',
            keywords: '',
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