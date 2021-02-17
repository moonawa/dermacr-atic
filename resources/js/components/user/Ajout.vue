<template>
  <div class="container">
    <div class="card-header">
      <h3 class="card-title">
        <font style="vertical-align: inherit"><font style="vertical-align: inherit">Ajouter un Administrateur</font></font>
      </h3>
    </div>
    <form >
      <div class="card-body">
        <div class="form-group">
          <input
            type="text"
            name="name"
            v-model="name"
            class="form-control"
            placeholder="Entrez le nom"
          />
        </div>
        <div class="form-group">
          <input
            type="email"
            name="email"
            v-model="email"
            class="form-control"
            placeholder="Entrez l'email"
          />
        </div>
        <div class="form-group">
          <input
            type="text"
            name="telephone"
            v-model="telephone"
            class="form-control"
            placeholder="Entrez le téléphone"
          />
        </div>
        <div class="form-group">
          <input
            type="text"
            name="profession"
            v-model="profession"
            class="form-control"
            placeholder="Entrez la profession"
          />
        </div>
        <div class="form-group">
          <input
            type="password"
            name="password"
            v-model="password"
            class="form-control"
            placeholder="Mot de passe"
          />
        </div>
        <div class="form-group">
          <input
            type="password"
            name="password_confirmation"
            v-model="password_confirmation"
            class="form-control"
            placeholder="Confimez le mot de passe"
          />
        </div>

        <div class="form-group">
          <label for="exampleInputFile"
            ><font style="vertical-align: inherit"
              ><font style="vertical-align: inherit"
                >Photo De Profil</font
              ></font
            ></label
          >
          <div class="input-group">
            <div class="custom-file">
              <input
                type="file"
                class="custom-file-input"
              />
              <label class="custom-file-label" for="exampleInputFile"
                ><font style="vertical-align: inherit"
                  ><font style="vertical-align: inherit"
                    >Choisir le fichier</font
                  ></font
                ></label
              >
            </div>
            <div class="input-group-append">
              <span class="input-group-text"
                ><font style="vertical-align: inherit"
                  ><font style="vertical-align: inherit"
                    >Télécharger</font
                  ></font
                ></span
              >
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" @click="userStore" class="btn btn-primary">
          <font style="vertical-align: inherit"
            ><font style="vertical-align: inherit">Ajouter</font></font
          >
        </button>
      </div>
    </form>
  </div> 
</template>

<script>
export default {
   data() {
    return {
      users: {},
        name: '',
        email: '',
        password: '',
        telephone: '',
        profession: '',
        avatar: ''
     
    };
  },

  methods: {
    userStore() {
      axios.post('useradd',
      {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    telephone: this.telephone,
                    profession: this.profession
                })
                .then(response => console.log(response))
                .catch(error =>console.log(error)); 
    },
  },
 

  
 
};
</script> 
