<template>
  <div class="container">


    <div class="row justify-content-center" style="margin-bottom: 50px;">


      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Add your link below</div>

          <div class="input-group">
            <input v-model="link" type="search" class="form-control rounded" placeholder="Link" aria-label="Search"
                   aria-describedby="search-addon"/>

            <button v-on:click="getLink" type="button" class="btn btn-outline-primary">get link</button>
          </div>


          <div class="col-md-8">
            <small id="passwordHelp" class="text-danger">{{ this.error }}</small>
          </div>

        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Result</div>
          <div class="input-group">
            <input v-model="result" type="text" class="form-control rounded" aria-label="Search"
                   aria-describedby="search-addon"/>
            <a type="button" class="btn btn-outline-primary" target="_blank" :href="result">open link</a>
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
      link: '',
      error: '',
      result: '',
    }
  },

  methods: {
    getLink() {

      axios({
        method: 'post',
        url: '/api/links',
        data: {
          link: this.link
        }
      })
          .then((response) => {
            this.result = response.data.data.link;
          })
          .catch(error => {
            this.error = error.response.data.message;
          });
    },
  },

  watch: {
    link(val) {
      if (val === "") {
        this.error = "";
      }
    },
  }

}
</script>
