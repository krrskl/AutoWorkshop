import VueRouter from 'vue-router';

import Base from './views/Base';
import Home from './views/Home';
import Receptionist from './views/Receptionist';
import ReceptionSheet from './views/ReceptionSheet';
import NewReceptionReport from './views/NewReceptionReport';
import RepairsAndRequestedWorks from './views/RepairsAndRequestedWorks';
import EditReceptionReport from './views/EditReceptionReport';

const router = new VueRouter({
  mode: 'history',
  base: __dirname,
  routes: [
    {
      path: '/', component: Base, children: [
        { path: '/', component: Home },
        { path: '/receptionist', component: Receptionist },
        { path: '/reception-sheet', component: ReceptionSheet },
        { path: '/new-reception-report', component: NewReceptionReport },
        { path: '/repair-and-requested-works', component: RepairsAndRequestedWorks },
        { path: '/receipt-sheets', component: EditReceptionReport }
      ]
    },
  ]
})

export default router;