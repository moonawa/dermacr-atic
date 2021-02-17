<template>
  <div class="container">
 
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
         
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Entrez Ces Informations!</h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input
                      type="text"
                      class="form-control form-control-user"
                      id="name"
                      name="name"
                      v-model="name"
                      placeholder="Nom Complet"
                    />
                  </div>
                  <div class="col-sm-6">
                    <input
                      type="text"
                      class="form-control form-control-user"
                      name="telephone"
                       id="telephone"
            v-model="telephone"
                      placeholder="Entrez le téléphone"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control form-control-user"
                    id="exampleInputEmail"
                    name="email"
            v-model="email"
                    placeholder="Addresse Email "
                  />
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input
                      type="password"
                      class="form-control form-control-user"
                       name="password"
            v-model="password"
                      id="exampleInputPassword"
                      placeholder="Password"
                    />
                  </div>
                  <div class="col-sm-6">
                    <input
                      type="password"
                      class="form-control form-control-user"
                      id="exampleRepeatPassword"
                      placeholder="Repeat Password"
                    />
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input
                      type="text"
                      class="form-control form-control-user"
                       name="hopital"
            v-model="hopital"
                      id="hopital"
                      placeholder="Hopital/Clinique"
                    />
                  </div>
                  <div class="col-sm-6">
                    <input
                      type="text"
                      class="form-control form-control-user"
                       name="code"
            v-model="code"
                      id="code"
                      placeholder="Entrez code"
                    />
                  </div>
                </div>
                 <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input
                      type="text"
                      class="form-control form-control-user"
                       name="sexe"
            v-model="sexe"
                      id="sexe"
                      placeholder="sexe"
                    />
                  </div>
                  <div class="col-sm-6">
                    <input
                      type="text"
                      class="form-control form-control-user"
                       name="localistion"
            v-model="localistion"
                      id="localistion"
                      placeholder="Entrez localistion"
                    />
                  </div>
                </div>
                <a @click="getPatient" class="btn btn-primary btn-user btn-block">
                  Envoyez
                </a>
              
              </form>
             
            </div>
          </div>
           <div class="col-lg-5 d-none d-lg-block">
              <img src="https://sante-senegal.com/wp-content/uploads/2019/01/DERMATOLOGIE-Cinq-soucis-de-peau.jpg"  style="width:450px; height:500px" alt="">
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
   // users: {},
        etat: '',
        durée: '',
        antecedent: '',
        heredite: '',
         photo: '',
     
 
    };
  },

  methods: {

    getPatient(id){
              axios.get('update' + id)
              .then(response =>console.log(response))
              .catch(error => console.log(error));
            },
    // patientUpdate() {
    //   axios.post("http://127.0.0.1:8000/update", {
    //      etat: this.etat,
    //      durée: this.durée,
    //      antecedent: this.antecedent,
    //      heredite: this.heredite,
    //      photo: this.photo,
        
    //     })
    //     .then((response) => console.log(response))
    //     .catch((error) => console.log(error));
    // },
  },
};
</script> 