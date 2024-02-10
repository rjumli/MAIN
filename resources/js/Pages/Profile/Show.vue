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
    layout: null
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
                        <img v-if="$page.props.jetstream.managesProfilePhotos" class="rounded-circle header-profile-user" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                        <input id="profile-img-file-input" type="file" class="profile-img-file-input" />
                        <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                            <span class="avatar-title rounded-circle bg-light text-body">
                            <i class="ri-camera-fill"></i>
                            </span>
                        </label>
                        </div>
                    </div>
                    <h5 class="fs-16 mb-1">{{ $page.props.auth.user.name }}</h5>
                    <p class="text-muted mb-0">Administrator</p>
                    </div>
                </BCardBody>
                </BCard>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <BTabs nav-class="nav-tabs nav-justified rounded" pills>
                            <BTab class="nav-item" title="Personal Details" active></BTab>
                            <BTab class="nav-item" title="Update Password"></BTab>
                            <BTab class="nav-item" title="Two Factor Authentication"></BTab>
                            <BTab class="nav-item" title="Browser Sessions"></BTab>
                        </BTabs>
                    </div>
                </div>
            </div>
        </div>
        
    </Layout>
</template>
