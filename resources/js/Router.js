import VueRouter from 'vue-router';

import Home from './components/Home';

const router = new VueRouter({
  mode: 'history',
  base: __dirname,
  routes: [
    { path: '/', component: Home }
  ]
})

export default router;