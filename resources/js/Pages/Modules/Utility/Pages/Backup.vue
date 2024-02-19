<template>
<div class="">
    <form @submit.prevent="submit()" class="customform">
        <BCard no-body>
            <BCardHeader class="align-items-center d-flex py-0">
                <BCardTitle class="mb-0 flex-grow-1">Backup and Restore</BCardTitle>
                <div class="flex-shrink-0">
                    <BDropdown variant="link" class="card-header-dropdown" toggle-class="text-reset dropdown-btn arrow-none"
                    menu-class="dropdown-menu-end"  :offset="{ alignmentAxis: -140, crossAxis: 0, mainAxis: 0 }">
                    <template #button-content> 
                        <span class="text-muted fs-16"><i class="mdi mdi-dots-vertical align-middle"></i></span> </template>
                        <BDropdownItem @click="openGenerate()">Generate Backup</BDropdownItem>
                        <BDropdownItem>Restore Backup</BDropdownItem>
                        <BDropdownItem>Clean Backup</BDropdownItem>
                    </BDropdown>
                </div>
            </BCardHeader>
            <BCardBody class="p-4" style="height: calc(100vh - 280px); overflow: auto;">
                <b-row id="folderlist-data">
                    <b-col v-for="(folder, index) of lists" :key="index" class="col-md-3 folder-card" style="cursor: pointer;" @click="downloadFile(folder.name)">
                        <b-card no-body class="bg-light shadow-none" id="folder-1">
                            <b-card-body class="mt-4">
                                <div class="text-center">
                                    <div class="mb-2">
                                        <i class="ri-folder-zip-fill align-bottom text-success display-5"></i>
                                    </div>
                                    <h6 class="fs-12 folder-name">{{ folder.name }}</h6>
                                </div>
                                <div class="hstack mt-4 text-muted">
                                    <span class="me-auto fs-11">{{folder.date}}</span>
                                    <span class="fs-11"><b>{{ folder.size }}</b></span>
                                </div>
                            </b-card-body>
                        </b-card>
                    </b-col>
                </b-row>
            </BCardBody>
        </BCard>
    </form>
</div>
<View ref="view"/>
</template>
<script>
import Layout from "@/Shared/Layouts/Main.vue";
import profile from "@/Pages/Modules/Utility/Index.vue";
import View from '../Backups/Modals/View.vue';
export default {
    components: { View },
    layout: (h,page) => {
        return h(Layout, [
            h(profile,[page])
        ])
    },
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
        }
    },
    created(){
        this.fetch();
    },
    methods: {
        fetch(page_url){
            page_url = page_url || '/utility/backups';
            axios.get(page_url,{params : {option: 'lists'}})
            .then(response => {
                this.lists = response.data;      
            })
            .catch(err => console.log(err));
        },
        openGenerate(){
           this.$refs.view.show();
        },
        downloadFile(filePath) {
            window.open(this.currentUrl+'/utility/backups/'+filePath);
        },
    }
}
</script>
