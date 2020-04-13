<template>
  <div>
    <div v-show="loading" class="text-center">
      <span class="fa fa-spinner fa-pulse fa-3x fa-fw"></span>
      <span class="sr-only">Chargement...</span>
    </div>
    <div v-if="events && events.length">
      <div v-for="ev in events">
        <div class="box box-default">
          <div class="box-header with-border">
            <h4 class="box-title" v-text="ev.event_name"></h4>
            <div class="box-tools pull-right">


            </div>
          </div>
          <div class="box-body">
            <p>{{ev.description}}</p>
            <p v-if="ev.start_time"><span class="fa fa-calendar"></span> <strong>De</strong> {{ev.start_time}} <strong>à</strong> {{ev.end_time}}</p>
            <a :href="'/event/edit/' + ev.ref_guid" type="button" class="btn btn-default" data-widget="edit" data-toggle="tooltip" title="Edit" data-original-title="Edit">
              Editez
              <span class="fa fa-edit"></span>
            </a>
            <a class="btn btn-sm btn-default" :href="'/stadium/event/'+ ev.ref_guid + '/leaderboard'"> Voir le classement </a>

            <a :href="'/event/' + ev.ref_guid + '/categories'" type="button" class="btn btn-info pull-right" title="Category Editor">
              Ajouter des catégories
              <span class="fa fa-angle-double-right"></span>
            </a>

          </div>
        </div>
      </div>
    </div>
    <div v-else>
      <p class="text-muted">
        Aucun événement n'a encore été ajouté! <a href="/event/new/register">Enregistrer un nouvel événement <span class="fa fa-angle-double-right"></span></a>
      </p>
    </div>
  </div>
</template>

<script>
import utils from '../../mixins.js';
    export default {
      mixins: [utils],
      data: () => ({
        currentUser: '',
        events: [],
        loading: true
      }),
      created() {
        var self = this

        axios.all([
          axios.get('api/v1/events'),
          axios.get('api/v1/user')
        ])
        .then(
          axios.spread(function(eventresp, userresp) {
            self.events = eventresp.data.data.event;
            self.currentUser = userresp.data.data.user;
          })
        )

        self.loading = false;
      }
    }
</script>
