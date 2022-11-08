<template>
    <div class="container m-4">
        <a href="#" class="" @click="openModal()">
            {{ name }}
        </a>
      <openmodal v-show="isModalVisible" 
      :id="dataid" :name="name" :nik="nik" :company="company" :department="department" :joined="joined" :resigned="resigned" :status="status"
      @close-modal="closeModal" />
    </div>
  </template>
  
  <script> 
  import openmodal from './OpenModal' 
    
  export default {
    props:['dataid', 'name', 'status', 'joined', 'resigned', 'nik', 'company', 'department'],
    components: {
        openmodal, 
    },
    data(){
        return {  
            isModalVisible: false,  
        }
    },  
    watch: { 
        dataid: function(newVal, oldVal) { // watch it
            console.log('Prop changed: ', newVal, ' | was: ', oldVal)
        }
    },
    methods: {  
        openModal() { 
            this.isModalVisible = true;
        }, 
        closeModal() {
            this.isModalVisible = false;
        }, 
    }
}
  </script>