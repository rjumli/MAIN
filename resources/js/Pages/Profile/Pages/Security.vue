<template>
    <div class="">
        <form @submit.prevent="submit()" class="customform">
            <BCard no-body>
                <BCardHeader>
                    <BCardTitle>Password & Security</BCardTitle>
                    <p class="text-muted mb-0">Ensure your account is using a long, random password to stay secure.</p>
                </BCardHeader>
                <BCardBody class="p-4" style="height: calc(100vh - 300px); overflow: auto;">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="mb-1 fs-14 text-primary">Login & Recovery</h5>
                                <p class="text-muted fs-12">Manage your passwords, login preferences and recovery methods.</p>
                                <b-list-group>
                                    <BListGroupItem @click="openModal('password')" tag="button" class="list-group-item-action"><i class="ri-lock-password-fill me-2"></i>Change Password</BListGroupItem>
                                    <BListGroupItem @click="openModal('twofactor')" tag="button" class="list-group-item-action"><i class="ri-shield-keyhole-fill me-2"></i>Two-factor Aunthentication</BListGroupItem>
                                    <BListGroupItem @click="openModal('session')" tag="button" class="list-group-item-action"><i class="ri-window-fill me-2"></i>Browser Sessions</BListGroupItem>
                                </b-list-group>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mb-1 fs-14 text-primary">Security Checks</h5>
                                <p class="text-muted fs-12">Review security issues by running checks across apps, devices and emails sent.</p>
                                <b-list-group>
                                    <BListGroupItem @click="openModal('recovery')" tag="button" class="list-group-item-action"><i class="ri-folder-shield-2-fill me-2"></i>Recovery Codes</BListGroupItem>
                                    <BListGroupItem tag="button" class="list-group-item-action"><i class=" ri-alarm-warning-fill me-2"></i>Login Alerts</BListGroupItem>
                                    <BListGroupItem tag="button" class="list-group-item-action"><i class="ri-error-warning-fill me-2"></i>Security Checkup</BListGroupItem>
                                </b-list-group>
                            </div>
                            <div class="col-md-12">
                                <!-- <hr class="text-muted mt-4"/> -->
                                <div class="mt-4 mb-3 border-bottom border-top pt-3 pb-2">
                                    <div class="float-end">
                                        <a class="link-primary" href="javascript:void(0);">All Logout</a>
                                    </div>
                                    <h5 class="card-title fs-13 text-primary">Login History</h5>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </BCardBody>
            </BCard>
        </form>
    </div>
    <Recovery ref="recovery"/>
    <Session :sessions="sessions" ref="session"/>
    <Password ref="password"/>
    <TwoFactor :requires-confirmation="requiresConfirmation" ref="twofactor"/>
</template>
<script>
import Pagination from "@/Shared/Components/Pagination.vue";
import Recovery from '../Modals/Recovery.vue';
import Session from '../Modals/Session.vue';
import Password from '../Modals/Password.vue';
import TwoFactor from '../Modals/TwoFactor.vue';
export default {
    components: { Password, TwoFactor, Session, Recovery, Pagination },
    props: {
        requiresConfirmation: Boolean,
        sessions: Array
    },
    data(){
        return {
            lists: [],
            meta: {},
            links: {},
        }
    },
    created(){
        this.getLogs();
    },
    methods : {
        openModal(data){
            switch(data){
                case 'password':
                    this.$refs.password.show();
                break;
                case 'twofactor':
                    this.$refs.twofactor.show();
                break;
                case 'session':
                    this.$refs.session.show();
                break;
                case 'recovery':
                    this.$refs.recovery.show();
                break;
            }
        },
        getLogs(){
            return axios.get('/utility/users',{
                params : {
                    option: 'logs'
                }
            })
            .then(response => {
                this.lists = response.data.data;
                this.meta = response.data.meta;
                this.links = response.data.links;      
            });
        }
    }
}
</script>