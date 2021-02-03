<template>
<div class="container">
 <div v-for="user in medecins" :key="user.id">
      <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                
                  
                  <tbody  v-for="patient in user.patients" :key="patient.id">
                    <tr>
                     <!-- <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{patient.users.name}}</font></font></td> -->
                     
                     <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{patient.photo}}</font></font></td>
                      <!-- <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{patient.etat}}</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{patient.durée}}</font></font></td>-->
                    <td><router-link to="/showpatient">voir</router-link></td>
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
            axios.get('http://127.0.0.1:8000/pat') 
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