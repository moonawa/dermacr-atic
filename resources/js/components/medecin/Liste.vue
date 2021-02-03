<template>
    <div class="container">
       <div class="card">
              <div class="card-header">
                <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tableau des Medecins</font></font></h3>
               
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Chercher">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-MAIL</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Téléphone</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Avatar</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hopital</font></font></th>


                    </tr>
                  </thead>
                  <tbody v-for="user in medecins" :key="user.id">
                    <tr>
                     <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ user.users.name }}</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ user.users.email }}</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ user.users.telephone }}</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ user.users.avatar }}</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ user.hopital }}</font></font></td>

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
                medecins: {}
            }
        },
      
          created(){
            axios.get ('http://127.0.0.1:8000/medecinlist ') 
                .then(response => this.medecins = response.data)
                .catch(error => console.log(error));
          },
          methods: {
            refresh(medecins){
                this.medecins = medecins.data
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
