<template>
<div class="container">
  <h2>Mes Patients</h2>
 <div v-for="user in medecins" :key="user.id">
      <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                      
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Photo</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Age</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Etat</font></font></th>


                    </tr>
                  </thead>
                  
                  <tbody  v-for="patient in user.patients" :key="patient.id">
                    <tr>
                     inherit
                     <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{patient.users.avatar}}</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{patient.users.name}}</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{patient.age}} ans</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{patient.etat}} </font></font></td>
                       <button class="fluid ui violet button"  data-position="top center" @click="undo()">
                          <i class="undo icon"></i>
                        </button></router-link></td>
                        <td><router-link :to="`/showrv/${patient.id}`">
                        <button class="fluid ui violet button" data-tooltip="Annuler la modification" data-position="top center" @click="undo()">
              <i class="undo icon"></i>
            </button></router-link></td>


                    <td><router-link :to="`/showpatient/${patient.id}`">voir</router-link></td> 
                    </tr>
                 
                  </tbody>
                </table>
              </div>  
</div>  

 </div> 
</template>


<script>
    export default {
       data(){
            return{
                medecins: {},
              //  patients: {},
            }
        },
      
          created(){
            axios.get('/pat') 
            .then(response => this.medecins = response.data)
                //.then(response => this.patients = response.data)
                // .then(({data}) => {this.medecins = data.data})
                .catch(error => console.log(error));
          },
          methods: {
            refresh(medecins){
                 this.medecins = medecins.data
                //this.patients = patients.data
            }
            
        },
        mounted() {
          console.log('Component mounted.')
        }
    }
</script>