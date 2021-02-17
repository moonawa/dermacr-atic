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
                  <tbody v-for="ordonnance in ordonnances" :key="ordonnance.id">
                    <tr>
                     <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ ordonnance.medicament }}</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ ordonnance.dosage }}</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ ordonnance.indication }}</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ ordonnance.renouveau }}</font></font></td>


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
                ordonnances: {}
            }
        },
      
          created(){
            axios.get ('ordonnance') 
                .then(response => this.ordonnances = response.data)
                .catch(error => console.log(error));
          },
          methods: {
            refresh(ordonnances){
                this.ordonnances = ordonnances.data
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
