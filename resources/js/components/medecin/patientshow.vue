<template>
  <div class="container" v-if="patient && patient.id">
    <div class="row">
      <div class="col-md-4 card">
        <div>Nom</div>
        <div>awa</div>
        <div>Age</div>
        <div>24</div>
        <div>Photo</div>
        <div>Photo</div>
        <div>durée de la maladie</div>
        <div>d</div>
        <div>Antecedent</div>
        <div>antecedent</div>
        <div>Hérédité</div>
        <div>d</div>
        <div>Etat</div>
        <div>{{ patient.age }} </div>

      </div>

      <div class="col-md-8">
        <div class="row">
          <div class="col-md-4">  <router-link to>Consultation</router-link>  </div>
          <div class="col-md-4"> <router-link to>Rendez-Vous</router-link> </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  //  props: {
  //    patient: {
  //      type: Object,
  //      default: {}
  //  },
  // },
  data(){
    return{
      //pat: this.patient,
      //patient: null,
      patient: {},
       params: { _method: 'PUT' },
    }
  },
  getPatient(){
    axios.get ('patients/show/' + this.patientId
    ) 
    //.then(response => this.patient = response.data)
    //.then(response => console.log(response))
    .then(({data}) => { this.patient = data.data})
    .catch(error => console.log(error));
    },

     computed: {
            patientId: function() {
                return this.$route.params.id
            },
          
        },
        watch: {
            
            patientId: function() {
                this.getPatient()
            }
        },

 mounted() {
      console.log(this.$router.currentRoute.params.id)
    },
   
    
 
}
</script>

<style>

</style>