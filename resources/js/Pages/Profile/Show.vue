<script setup>
import { Head } from "@inertiajs/vue3"
import Layout from "@/Shared/Layouts/Main.vue";
import DeleteUserForm from '@/Pages/Profile/Partials/DeleteUserForm.vue';
import LogoutOtherBrowserSessionsForm from '@/Pages/Profile/Partials/LogoutOtherBrowserSessionsForm.vue';
import TwoFactorAuthenticationForm from '@/Pages/Profile/Partials/TwoFactorAuthenticationForm.vue';
import UpdatePasswordForm from '@/Pages/Profile/Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm.vue';
import PageHeader from '@/Shared/Components/PageHeader.vue';

defineProps({
    confirmsTwoFactorAuthentication: Boolean,
    sessions: Array,
});
</script>
<script>
export default {
    layout: null,
    data() {
        return {
            activeTab: 1, 
        };
    },
    methods: {
        show(tab){
            this.activeTab = tab;
        }
    }
}
</script>
<template>
    <Layout>
        <Head title="Profile" />
        <PageHeader title="Profile Information" pageTitle="User" />
        <div class="row">
            <div class="col-md-3">
                <BCard no-body class="">
                    <BCardBody class="p-4">
                        <div class="text-center">
                        <div class="profile-user position-relative d-inline-block mx-auto mb-4">
                            <!-- <img src="@assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image" /> -->
                            <img v-if="$page.props.jetstream.managesProfilePhotos" class="rounded-circle avatar-xl img-thumbnail user-profile-image material-shadow" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                            <input id="profile-img-file-input" type="file" class="profile-img-file-input" />
                            <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                <span class="avatar-title rounded-circle bg-light text-body">
                                <i class="ri-camera-fill"></i>
                                </span>
                            </label>
                            </div>
                        </div>
                        <h5 class="fs-16 mb-1">{{ $page.props.user.data.name }}</h5>
                        <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </BCardBody>
                </BCard>

                <b-list-group class="list-group-fill-success">
                    <BListGroupItem :active="activeTab === 1" href="#" class="list-group-item-action" @click="show(1)">
                        <i class="ri-profile-fill align-middle me-2"></i>Personal Information
                    </BListGroupItem>
                    <BListGroupItem :active="activeTab === 2" href="#" class="list-group-item-action" @click="show(2)">
                        <i class="ri-shield-check-line align-middle me-2"></i>Password & Security
                    </BListGroupItem>
                    <BListGroupItem :active="activeTab === 3" href="#" class="list-group-item-action" @click="show(3)">
                        <i class="ri-shield-keyhole-fill align-middle me-2"></i>Two Factor Authentication
                    </BListGroupItem>
                    <BListGroupItem :active="activeTab === 4" href="#" class="list-group-item-action" @click="show(4)">
                        <i class="ri-mac-fill align-middle me-2"></i>Browser sessions
                    </BListGroupItem>
                    <BListGroupItem :active="activeTab === 5" href="#" class="list-group-item-action" @click="show(5)">
                        <i class="ri-history-line align-middle me-2"></i>Activity Logs
                    </BListGroupItem>
                </b-list-group>
            </div>

            <div class="col-md-9">
                <UpdateProfileInformationForm v-if="activeTab === 1" :user="$page.props.auth.user" />
                <UpdatePasswordForm v-if="activeTab === 2" />
                <TwoFactorAuthenticationForm v-if="activeTab === 3" :requires-confirmation="confirmsTwoFactorAuthentication" />
                <LogoutOtherBrowserSessionsForm v-if="activeTab === 4" :sessions="sessions" />
            </div>
        </div>
    </Layout>
</template>
  <!-- <div class="card">
        <div class="card-body" style="height: calc(100vh - 220px); overflow: auto;">
            <BTabs nav-class="nav-tabs nav-border-top nav-border-top-primary rounded">
                <BTab class="nav-item" title="Personal Information" active>
                    <UpdateProfileInformationForm :user="$page.props.auth.user" />
                </BTab>
                <BTab class="nav-item" title="Update Password">
                    <UpdatePasswordForm />
                </BTab>
                <BTab class="nav-item" title="Two Factor Authentication">
                    <TwoFactorAuthenticationForm :requires-confirmation="confirmsTwoFactorAuthentication" />
                </BTab>
                <BTab class="nav-item" title="Browser Sessions">
                    <LogoutOtherBrowserSessionsForm :sessions="sessions" />
                </BTab>
            </BTabs>
        </div>
    </div> -->