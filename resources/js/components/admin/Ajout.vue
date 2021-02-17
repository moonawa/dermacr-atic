 <template>
 <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block ">
<img src="https://images.unsplash.com/photo-1576493095524-30aed531dfa9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=388&q=80" alt="">   
</div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Créer un compte Admin!</h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="name" v-model="name" placeholder="Nom complet">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" name="email" v-model="email" placeholder="Téléphone">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="telephone" v-model="telephone" placeholder="Email Address">
                </div>
                <!-- <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" v-model="password" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div> -->

                 <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="sexe" name="sexe" v-model="sexe" placeholder="sexe">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="profession" name="profession" v-model="profession" placeholder="profession">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="localisation" name="localistion" v-model="localistion" placeholder="localisation">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="photo" placeholder="photo de profil">
                  </div>
                </div>
                <a class="btn btn-primary btn-user btn-block" @click="adminStore">
                  Register Account
                </a>
                
                
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>


 </div>



 
  
</template>

<script>
export default {
   data() {
    return {
      users: {},
      name: '',
        email: '',
     
        telephone: '',
         sexe: '',
         localistion: '',
       
       
        profession: ''
     
    };
  },

  methods: {
    adminStore() {
      axios.post('adminaddd',
      {           
        name: this.name,
         email: this.email,
        
         telephone: this.telephone,
         sexe: this.sexe,
         localistion: this.localistion,
                    profession: this.profession
                })
                .then(response => console.log(response))
                .catch(error =>console.log(error)); 
    },
  },
}
</script> 
