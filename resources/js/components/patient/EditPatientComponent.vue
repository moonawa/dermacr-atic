<template>
  <div class="container">
      <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editModal">Entrez ces informations</h5>
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
                    id="age"
                    name="age"
                     v-model="patientToEdit.age"
                   
                  />
                </div>
                 <div class="form-group">
                  <input
                    type="text"
                    class="form-control form-control-user"
                    id="etat"
                    name="etat"
                    v-model="patientToEdit.etat"
                    
                  />
                </div>
                 <div class="form-group">
                  <input
                    type="text"
                    class="form-control form-control-user"
                    id="durée"
                    name="durée"
                  v-model="patientToEdit.durée"
                   
                  />
                </div>
                 <div class="form-group">
                  <input
                    type="text"
                    class="form-control form-control-user"
                    id="antecedent"
                    name="antecedent"
                     v-model="patientToEdit.antecedent"
                   
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control form-control-user"
                    id="heredite"
                    name="heredite"
                      v-model="patientToEdit.heredite"
                   
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control form-control-user"
                    id="photo"
                    name="photo"
                     v-model="patientToEdit.photo"
                   
                  />
                </div>
           </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-primary" @click="update" data-dismiss="modal" >Enregistrer</button>
        </div>
        </div>
    </div>
    </div>
  </div>
</template>

<script>
export default {
    props: ['patientToEdit'],

    methods: {
        update(){
            axios.patch('patient/edit' + this.patientToEdit, {
                age: this.patientToEdit.age,
                etat: this.patientToEdit.etat,
                durée: this.patientToEdit.durée,
                antecedent: this.patientToEdit.antecedent,
                heredite: this.patientToEdit.heredite,
                photo: this.patientToEdit.photo
            })
            .then(response  => console.log(response))
            .catch(error => console.log(error));
        }
    }
}
</script>

<style>

</style>