<template>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Login</div>

                        <div class="card-body">


                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                                    <div class="col-md-10">
                                        <input id="email" type="email" class="form-control" name="email" required autofocus v-model="form.email">


                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                                    <div class="col-md-10">
                                        <input id="password" type="password" class="form-control" name="password" required v-model="form.password">


                                    </div>
                                </div>

                                <!-- <div class="row mb-3">
                                    <div class="col-md-8 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="row mb-0">
                                    <div class="col-md-12 offset-md-4">
                                        <button @click.prevent="loginUser" type="submit" class="btn btn-primary">
                                            Login
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
                email: '',
                password: '',
            },
            errors: []
        }
    },
    methods: {
        loginUser() {
            axios.post('/api/login', this.form).then(()=>{
                this.$router.push({name: "Dashboard"});
            }).catch((error)=>{
                this.errors = error.response.data.errors;
            })
        }
    }
}
</script>
