<template>
    <!--begin::Modal-->
    <div class="modal fade" id="create_or_update_language_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ modalTitle }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Language</label>
                            <input type="text" class="form-control" id="recipient-name" v-model="updatedOrCreatedLanguage.name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" @click="handleSubmitModal">Create</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {

            }
        },
        computed: {

        },
        props: {
            modalTitle:'',
            updatedOrCreatedLanguage: '',
        },
        methods: {
            handleSubmitModal() {
                if (this.modalTitle == 'Create Language') {
                    this.$store.dispatch('language/createLanguage', this.updatedOrCreatedLanguage)
                } else
                
                if (this.modalTitle == 'Update Language') {
                    this.$store.dispatch('language/updateLanguage', this.updatedOrCreatedLanguage)
                } else
                
                if(this.modalTitle == 'Delete Language') {
                    this.$store.dispatch('language/deleteLanguage', this.updatedOrCreatedLanguage)
                }
                    
            },
        }
    }
</script>
