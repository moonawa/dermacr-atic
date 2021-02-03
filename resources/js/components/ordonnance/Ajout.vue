<template>
  <div class="contqiner">
      <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Ordonnance
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ordonnance</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           <form>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control form-control-user"
                    id="medicament"
                    name="medicament"
                      v-model="medicament"
                    placeholder="Nom medicament "
                  />
                </div>
                 <div class="form-group">
                  <input
                    type="text"
                    class="form-control form-control-user"
                    id="dosage"
                    name="dosage"
                      v-model="dosage"
                    placeholder="dosage"
                  />
                </div>
                 <div class="form-group">
                  <input
                    type="text"
                    class="form-control form-control-user"
                    id="indication"
                    name="indication"
                    v-model="indication"
                    placeholder="le nombre fois"
                  />
                </div>
                 <div class="form-group">
                  <input
                    type="text"
                    class="form-control form-control-user"
                    id="renouveau"
                    name="renouveau"
                      v-model="renouveau"
                    placeholder="Renouvellement"
                  />
                </div>
           </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-primary" @click="ordonnanceStore">Enregistrer</button>
        </div>
        </div>
    </div>
    </div>
  </div>
</template>

<script>
export default {
    data(){
        return{
            medicament: '',
            dosage: '',
            indication: '',
            renouveau: '',
        };
    },
    methods: {
    ordonnanceStore() {
      axios.post("http://127.0.0.1:8000/ordonnanceadd", {
         medicament: this.medicament,
         dosage: this.dosage,
         indication: this.indication,
         renouveau: this.renouveau,
        
        })
        .then((response) => console.log(response))
        .catch((error) => console.log(error));
    },
  },
}
</script>

<style>

</style>