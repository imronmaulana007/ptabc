<template>
    <div>
        <!-- Company Id Field -->
        <div class="form-group col-sm-6">
            <label for="Company Name">Company Name</label>
            <v-select
                v-model="company_id"
                :options="companyList"
                :reduce="(option) => option.id"
                label="name"
                :placeholder="'company name'"
            />
        </div>


        <!-- Department Id Field -->
        <div class="form-group col-sm-6">
            <label for="">Department Name</label>
            <v-select
                v-model="department_id"
                :options="departmentList"
                :reduce="(option) => option.id"
                label="name"
                :placeholder="'Department name'"
            />
        </div>


        <!-- Nik Field -->
        <div class="form-group col-sm-6">
            <label for="">NIK</label>
            <input type="text" class="form-control" maxlength="16" v-model="nik">
        </div>

        <!-- Fullname Field -->
        <div class="form-group col-sm-6">
            <label for="">Fullname</label>
            <input type="text" class="form-control" v-model="fullname">
        </div>

        <!-- Joined Field -->
        <div class="form-group col-sm-6">
            <label for="">Joined</label>
            <input type="date" class="form-control" v-model="joined">
        </div>

        <!-- Resigned Field -->
        <div class="form-group col-sm-6">
            <label for="">Resigned</label>
            <input type="date" class="form-control" v-model="resigned">
        </div>

        <!-- Status Field -->
        <div class="form-group col-sm-6">
            <label for="">Sttaus</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" v-model="status" id="status1" value="1" checked>
                <label class="form-check-label" for="status1">
                Active
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" v-model="status" id="status2" value="0">
                <label class="form-check-label" for="status2">
                Inactive
                </label>
            </div>
        </div>
        <button
              class="sign-btn bg-green cl-white minimalis right"
              @click="onSubmit"
            >
              Send
            </button>
    </div>
</template>

<script>
    import vSelect from 'vue-select';
    export default {
        props:['title', 'subtitle'],
        components: {
            vSelect,
        },
        data: () => ({
            companyList: [
                { id: "1", name: "PT. ABC" },
                { id: "2", name: "PT. DEF" },
                { id: "3", name: "PT. GHI" },
            ],
            departmentList: [
                { id: "1", name: "Depart 1" },
                { id: "2", name: "Depart 2" },
                { id: "3", name: "Depart 3" },
            ],
            company_id: null,
            department_id: null,
            nik: null,
            fullname: null,
            joined: null,
            resigned: null,
            status: null,
        }),
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            async onSubmit() {
                // this.$swal.showLoading();
                try {
                    var isFailed = 0;

                    if (
                        this.company_id === null ||
                        this.department_id === null ||
                        this.nik === null ||
                        this.fullname === null ||
                        this.joined === null ||
                        this.resigned === null ||
                        this.status === null
                    ) {
                        isFailed++;
                    }
                    
                    if (isFailed !== 0) {
                        
                        this.$swal({
                            icon: "warning",
                            title: "Oops...",
                            text: "Fill the" + this.company_id == null ? "Company" : 
                                this.department_id == null ? "Department" : 
                                this.nik == null ? "NIK" : 
                                this.fullname == null ? "Full Name" : 
                                this.joined == null ? "Joined" : 
                                this.resigned == null ? "resigned" : "status",
                        });
                        return false;
                    }

                    this.$axios
                    .request({
                        url: "/employees",
                        method: "POST",
                        headers: {
                            // Authorization: "Bearer " + csrf_token(),
                        },
                        params: {
                            company_id: this.company_id,
                            department_id: this.department_id,
                            nik: this.nik,
                            fulname: this.fulname,
                            joined: this.joined,
                            resigned: this.resigned,
                            status: this.status
                        },
                    })
                    .then((response) => {
                        this.$swal({
                            icon: response.data.data ? "success" : "warning",
                            title: response.data.title ?? "",
                            text: response.data.message,
                        }).then(() => {
                            if (response.data.data) {
                                this.$router.push({ name: "employees" });
                            }
                        });
                    })
                    .catch((error) => {
                        this.checkError(error);
                    });
                } catch (error) {
                    console.log(error);
                    this.$swal({
                    icon: "warning",
                    text: error,
                    });
                }
            },
        }
    }
</script>