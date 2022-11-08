<template>
    <div class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">ERP</h4>
            <button type="button" class="btn btn-sm" v-on:click="closeModal">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <div class="row">
                <div class="col-12">
                    <img src="https://lh3.googleusercontent.com/Oi2BFP9cVXQCxeKGezTqpJsplw7QpvHgiCgkhcTOVg9wfIQ_KQ1ccp__u-F4m-HShR7HE80Q_GRn4cz38DAQ8XdowkoCkiirByEpzQ=w286" alt="" class="rounded-circle">
                </div>
                <div class="col-12">
                    <h1>{{name}}</h1>
                </div>
                <div class="col-12">
                    <span>{{department}} - {{company}}</span>
                </div>
                <div class="col-12">
                    <h6 :class="(status == 1)?'badge badge-success':'badge badge-danger'">{{status == 1 ? "Active" : "Inactive"}}</h6>
                </div>
                <div class="col">
                    <label for="">NIK</label><br>
                    <span>{{nik}}</span>
                </div>
                <div class="col">
                    <label for="">SERVICE YEAR</label><br>
                    <span></span>
                </div>
                <div class="col">
                    <label for="">JOINED</label><br>
                    <span>{{joined}}</span>
                </div>
            </div>
            <br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" v-on:click="closeModal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </template>
  <script>
    export default {
        props:['id', 'name', 'status', 'joined', 'resigned', 'nik', 'company', 'department'],
        name: 'modal',
        data(){
            return {
            //
            }
        },
        mounted(){
        },
        watch: {
            // id:{
            //     handler(newval, oldval) {
            //         this.getDataDetail(newval);
            //     },
            //     deep: true,
            //     immediate: true,
            // }
        },
        updated(){
            // this.getDataDetail();
        },
        methods: {
            closeModal() {
                this.$emit('close-modal');
            },
            async getDataDetail() {
                var csrf_token = $('meta[name="csrf-token"]').attr('content');
                // this.showLoading();
                try {
                    await axios.get('/api/v1/mobile/employees/' + id)
                    .then((response) => {
                        console.log(response);
                        // handle success
                        // this.totalEmp = response.data.data.total;
                        // this.totalActiveEmp = response.data.data.active;
                        // this.totalInactiveEmp = response.data.data.inactive;
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
                    .finally(function () {
                        // always executed
                    });
                    
                } catch (error) {
                    // this.$swal({
                    //     icon: "warning",
                    //     text: error,
                    // });
                }
            },
        },
    };
  </script>
  <style scoped>
    .modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: block;
    overflow: hidden;
    outline: 0;
    background-color: rgba(0, 0, 0, 0.6);
    }
  </style>