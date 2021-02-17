 <template>
    <div class="container">
       <div class="card">
              <div class="card-header">
                <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tableau des Administrateurs</font></font></h3>
                <div class="card-tools">
                    <button class="btn btn-success"><router-link to="/ajoutuser">Ajouter</router-link> </button>
                </div>
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
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Profession</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Avatar</font></font></th>
                      <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Action</font></font></th>
                    </tr>
                  </thead>
                  <tbody v-for="user in admins" :key="user.id">
                    <tr>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ user.users.name }}</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ user.users.email }}</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ user.users.telephone }}</font></font></td>
                      <td><span class="tag tag-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ user.profession }}</font></font></span></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ user.users.avatar }}</font></font></td>
                      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></td>
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
                admins: {}
            }
        },
      
          created(){
            axios.get ('adminlist') 
                .then(response => this.admins = response.data)
                .catch(error => console.log(error));
          },
          methods: {
            refresh(admins){
                this.admins = admins.data
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>