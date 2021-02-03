 <template>
  <div class="container">
    <div class="card-header">
      <h3 class="card-title">
        <font style="vertical-align: inherit"
          ><font style="vertical-align: inherit"
            >Ajouter un Administrateur</font
          ></font
        >
      </h3>
    </div>
    <form>
      <div class="card-body">
        <div class="form-group">
          <input
            type="text"
            name="profession"
            v-model="profession"
            class="form-control"
            placeholder="Entrez la profession"
          />
        </div>

        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" @click="userStore" class="btn btn-primary">
            <font style="vertical-align: inherit"
              ><font style="vertical-align: inherit">Ajouter</font></font
            >
          </button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      users: {},
      profession: "",
    };
  },

  methods: {
    userStore() {
      axios
        .post("http://127.0.0.1:8000/useradd", {
          profession: this.profession,
        })
        .then((response) => console.log(response))
        .catch((error) => console.log(error));
    },
  },
};
</script> 
