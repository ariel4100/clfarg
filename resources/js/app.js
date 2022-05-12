require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import bootstrap from 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css';
import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css';
import axios from 'axios'
import VueAxios from 'vue-axios'
import FlashMessages from '@/Components/FlashMessages.vue';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(VueAxios, axios)
            .mixin({ methods: { route } })
            .component('v-select', vSelect)
            .component('FlashMessages', FlashMessages)

            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
