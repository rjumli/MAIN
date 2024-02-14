<template lang="">
    <PageHeader title="System Configuration" pageTitle="Utility" />
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="file-manager-content w-100 p-4 pb-0" style="height: calc(100vh - 180px); overflow: auto;" ref="box">
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <div class="card-body border-start ps-4 mb-4">
                        <div v-for="(list,index) in variables" v-bind:key="index">
                            <div class="input-group mb-2">
                                <div class="input-group-text fs-11 text-muted fw-semibold" style="width: 170px;">{{list.name}}</div>
                                <input type="text" class="form-control" :name="list.name" v-model="list.value">
                            </div>
                            <hr v-if="list.line" class="text-muted"/>
                        </div>
                        <BButton @click="update" variant="light" class="w-100" type="submit">Update .env</BButton>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Update ref="update"/>
</template>
<script>
import Update from './Modals/Update.vue';
import PageHeader from '@/Shared/Components/PageHeader.vue';
export default {
    props: ['variables'],
    components: { PageHeader, Update },
    data(){
        return { 
            currentUrl: window.location.origin,
            form: {},
        }
    },
    methods: {
        update(){
            this.$refs.update.show(this.variables);
        }
    }
}
</script>