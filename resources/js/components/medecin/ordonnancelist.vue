<template>
    <div class="container">
       <div class="card">
              <div class="card-header">
                <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ordonnances</font></font></h3>
               
                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Medicament</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dosage</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Indication</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Renouvellable</font></font></th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{patient.pivot.medicament}} </font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ patient.pivot.dosage }}</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ patient.pivot.indication }}</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ patient.pivot.renouveau }}</font></font></td>


                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            
    </div>
</template>
<script>
    export default {
       data(){
            return{
               patients: [],
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