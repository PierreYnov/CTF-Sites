<template>
  <div>
    <div class="box box-primary">
      <div class="box-header">

      </div>
      <div class="box-body">
        <form class="form-inline margin-bottom">
          <div class="input-group col-md-4">
            <input type="email" v-model="email" class="form-control" placeholder="Search by email">
          </div>
          <div class="input-group col-md-4">
            <input type="text" v-model="username" class="form-control" placeholder="Search by username">
          </div>
          <button type="button" v-on:click="findUser" class="btn btn-default"><span class="fa fa-search"></span> Cherchez</button>
        </form>
        <div v-show="loading" class="text-center">
          <span class="fa fa-spinner fa-pulse fa-3x fa-fw"></span>
          <span class="sr-only">Chargement...</span>
        </div>
        <div v-if="users && users.length">
          <table class="table table-striped">
            <tbody>
              <tr>
                <th>ID Utilisateur</th>
                <th>Nom d'utilisateur</th>
                <th>Email</th>
                <th>Actions</th>
              </tr>
              <tr v-for="(u, index) in users">
                <th>
                  {{u.id}}
                </th>
                <th>
                  {{u.username}}
                </th>
                <th>
                  {{u.email}}
                </th>
                <th>
                  <a href="#" data-toggle="modal" v-on:click="openEditForm($event, u)" data-target="#editModal" class="btn btn-xs btn-primary"><span class="fa fa-pencil"></span> Editez</a>
                  <a href="#" data-toggle="modal" v-on:click="openDeleteForm($event, u)" data-target="#deleteModal" class="btn btn-xs btn-danger"><span class="fa fa-times"></span> Supprimer</a>
                </th>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirmation</h4>
              </div>
              <div class="modal-body">
                <p>Êtes-vous sûr de vouloir supprimer cet utilisateur?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <button type="button" v-on:click="deleteUser" class="btn btn-danger">Yes</button>
              </div>
            </div>
          </div>
        </div><!-- /.modal -->

        <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editez l'utilisateur</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Nom d'utilisateur</label>
                  <input class="form-control" placeholder="Username of user" v-model="userinfo.u_username" type="text">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" placeholder="Email of user" v-model="userinfo.u_email" type="email">
                </div>
                <div class="form-group">
                  <section class="form-inline">
                    <input type="radio" v-model="userinfo.u_blocked" value="0"> Débloquer l'utilisateur
                    <input type="radio" v-model="userinfo.u_blocked" value="1"> Bloquer un utilisateur
                  </section>
                  <section class="form-inline">
                    <input type="radio" v-model="userinfo.u_confirmed" value="0"> Annuler la confirmation de l'email
                    <input type="radio" v-model="userinfo.u_confirmed" value="1"> Confirmer l'email
                  </section>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                <button type="button" v-on:click="updateUser" class="btn btn-danger">Mise à jour</button>
              </div>
            </div>
          </div>
        </div><!-- /.modal -->

        <div v-show="noresult">
          <p>Aucun utilisateur trouvé</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
      data: () => ({
        users: [],
        loading: false,
        noresult: false,
        username: '',
        email: '',
        user_id: 0,
        userinfo: {
          u_username: '',
          u_email: '',
          u_blocked: false,
          u_confirmed: true
        }
      }),
      created() {

      },
      methods: {
        findUser() {
          if(this.username.trim().length || this.email.trim().length) {
            this.loading = true;
            axios.post('/api/v1/users/search', {
              username: this.username,
              email: this.email
            })
            .then(response => {
              this.loading = false;
              if(response.data.success == true) {
                this.users = response.data.data.users;
                if(!this.users.length) {
                  this.noresult = true;
                }
                else {
                  this.noresult = false;
                }
              }
            })
            .catch(function (error) {
              console.log(error);
            });
          }
        },
        openDeleteForm(event, userObj) {
          event.preventDefault();
          this.user_id = userObj.id;
        },
        deleteUser() {
          axios.post('/api/v1/users/delete', {
            u_id: this.user_id
          })
          .then(response => {
            if(response.data.success == true) {
              $('#deleteModal').modal('hide');
              this.findUser();
            }
          })
          .catch(function (error) {
          });
        },
        openEditForm(event, userObj) {
          event.preventDefault();
          this.user_id = userObj.id;
          this.userinfo.u_username = userObj.username;
          this.userinfo.u_email = userObj.email;
          this.userinfo.u_blocked = userObj.blocked;
          this.userinfo.u_confirmed = userObj.confirmed;
        },
        updateUser() {
          axios.post('/api/v1/users/edit', {
            u_id: this.user_id,
            u_username: this.userinfo.u_username,
            u_email: this.userinfo.u_email,
            u_blocked: this.userinfo.u_blocked,
            u_confirmed: this.userinfo.u_confirmed
          })
          .then(response => {
            if(response.data.success == true) {
              $('#editModal').modal('hide');
              this.findUser();
            }
          })
        }
      }
    }
</script>
