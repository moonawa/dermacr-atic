
require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);
import { Form, HasError, AlertError } from 'vform'

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

Vue.component('ins-medecin', require('./components/medecin/Inscription.vue').default) ;
Vue.component('add-ordo', require('./components/ordonnance/Ajout.vue').default) ;
Vue.component('edit-pat', require('./components/patient/EditPatientComponent.vue').default) ;

import Welcome from './components/home.vue';
import Login from './components/login.vue';

// pour les users
import ListeComponent from './components/user/ListeComponent.vue';
import Ajout from './components/user/Ajout.vue';

// pour les medecins
import ListeMedecin from './components/medecin/Liste.vue';
import AjoutListeMedecin from './components/medecin/Ajout.vue';
import Rv from './components/medecin/Rv.vue';
import Patient from './components/medecin/patientlist.vue';
import Inscriptions from './components/medecin/Inscription.vue';
import ShowPatient from './components/medecin/patientshow.vue';
import Traitement from './components/medecin/ordonnancelist.vue';
import Meet from './components/medecin/Rv.vue';


import Ordonnace from './components/ordonnance/Liste.vue';



// pour les admin
import ListeAdmin from './components/admin/Liste.vue';
import AjoutAdmin from './components/admin/Ajout.vue';
import ListesMedecin from './components/admin/ListeMedecin.vue';
import AjoutProfession from './components/admin/Ajoutadmin.vue';

// pour les patients
import ListePatient from './components/patient/Liste.vue';
import AjoutPatient from './components/patient/Ajout.vue';
import Dermato from './components/patient/dermato.vue';
import Update from './components/patient/update.vue';


const routes = [
    {path: '/',component: Welcome},
    {path: '/log',component: Login},
    {path: '/user',component: ListeComponent},
    {path: '/ajoutuser',component: Ajout},
    // pour les medecins
    
    {path: '/showpatient/:id',component: ShowPatient},
    {path: '/showordonnance/:id',component: Traitement},
    {path: '/showrv/:id',component: Meet},
    {path: '/medecin',component: ListeMedecin},
    {path: '/ajoutmedecin', component: AjoutListeMedecin },
    {path: '/rv', component: Rv },
    {path: '/patients', component: Patient },
    {path: '/inscrip', component: Inscriptions },

    {path: '/ordo', component: Ordonnace },
    // pour les admin
    {path: '/admin',component: ListeAdmin},
    {path: '/addadmin',component: AjoutAdmin},
    {path: '/listemedecin',component: ListesMedecin},
    {path: '/ajoutadmin',component: AjoutProfession},
    // pour les patients
    {path: '/patient', component: ListePatient },
    {path: '/addpatient',component: AjoutPatient },
    {path: '/derma',component: Dermato },
    {path: '/up',component: Update }
]


const router = new VueRouter({routes});

const app = new Vue({
    el: '#app',
    router:router
});

