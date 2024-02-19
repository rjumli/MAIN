<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" title="Create User" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow>
                <BCol lg="12">
                    <div>
                        <h6 class="mb-1">General Information</h6>
                        <p class="text-muted fs-11 mt-n1">Fill all Information as below</p>
                    </div>
                    <div>
                        <BRow class="g-3">
                            <BCol lg="6">
                                <InputLabel for="firstname" value="Firstname" />
                                <TextInput id="firstname" v-model="form.firstname" type="text" class="form-control" autofocus placeholder="Please enter firstname" autocomplete="firstname" required :class="{ 'is-invalid': form.errors.firstname }" />
                                <InputError :message="form.errors.firstname" />
                            </BCol>
                            <BCol lg="6">
                                <InputLabel for="lastname" value="Lastname" />
                                <TextInput id="lastname" v-model="form.lastname" type="text" class="form-control" autofocus placeholder="Please enter lastname" autocomplete="lastname" required :class="{ 'is-invalid': form.errors.lastname }" />
                                <InputError :message="form.errors.lastname" />
                            </BCol>
                            <BCol lg="12"><hr class="text-muted mt-n1 mb-n5"/></BCol>
                            <BCol lg="12" class="mt-2 mb-n3">
                                <InputLabel for="email" value="Email" />
                                <TextInput id="email" v-model="form.email" type="email" class="form-control" autofocus placeholder="Please enter email" autocomplete="email" required :class="{ 'is-invalid': form.errors.email }" />
                                <InputError :message="form.errors.email" />
                            </BCol>
                            <BCol lg="6">
                                <InputLabel for="username" value="Username" />
                                <TextInput id="username" v-model="form.username" type="text" class="form-control" autofocus placeholder="Please enter username" autocomplete="email" required :class="{ 'is-invalid': form.errors.username }" />
                                <InputError :message="form.errors.username" />
                            </BCol>
                            
                            <BCol lg="6">
                                 <InputLabel for="mobile" value="Mobile" />
                                <TextInput id="mobile" v-model="form.mobile" type="text" class="form-control" autofocus placeholder="Please enter mobile" autocomplete="mobile" required :class="{ 'is-invalid': form.errors.mobile }" />
                                <InputError :message="form.errors.mobile" />
                            </BCol>
                        </BRow>
                    </div>    
                </BCol>
            </BRow>
        </form>
          <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="create('ok')" variant="primary" :disabled="form.processing" block>Submit</b-button>
        </template>
    </b-modal>
</template>
<script>
import { useForm } from '@inertiajs/vue3';
import InputError from '@/Shared/Components/Subcomponents/InputError.vue';
import InputLabel from '@/Shared/Components/Subcomponents/InputLabel.vue';
import TextInput from '@/Shared/Components/Subcomponents/TextInput.vue';
export default {
    components: { InputError, InputLabel, TextInput },
    data(){
        return {
            currentUrl: window.location.origin,
             form: useForm({
                firstname: null,
                lastname: null,
                username: null,
                email: null,
                mobile: null,
                gender: null
            }),
            showModal: false,
        }
    },
    methods: { 
        show(){
            this.showModal = true;
        }
    }
}
</script>