<template>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Register</div>

                        <div class="card-body">


                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
                                    <span v-if="errors.name">{{ errors.name[0] }}</span>
                                    <div class="col-md-10">
                                        <input id="name" type="text" class="form-control" name="name" required autofocus v-model="form.name">


                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                                    <div class="col-md-10">
                                        <input id="email" type="email" class="form-control" name="email" required v-model="form.email">


                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                                    <div class="col-md-10">
                                        <input id="password" type="password" class="form-control" name="password" required v-model="form.password">


                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirm Password</label>

                                    <div class="col-md-10">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required v-model="form.password_confirmation">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button @click.prevent="saveForm" type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>
                        </div>
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
            form: {
                name: '',
                email: '',
                password: '',
                password_confirmation: ''
            },
            errors: [],
        }
    },
    methods: {
        saveForm() {
            axios.post('/api/register', this.form).then(()=>{
                console.log('saved');
            }).catch((error)=>{
                this.errors = error.response.data.errors;
            })
        }
    }
}
</script>
