<template>
    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Basic Example
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air" data-toggle="modal" data-target="#myModal">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>New record</span>
                                </span>
                            </a>
                            <!-- <a href="#" class="btn btn-sm btn-warning edit" id="show" v-on:click="edittt()" ><i class="fa fa-eye"></i></a> -->
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST" role="form" v-on:submit="add()">
                                                <legend>Form title</legend>
                                            
                                                <div class="form-group">
                                                    <label for="">Name</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Input field">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Start Date</label>
                                                    <input type="datetime-local" class="form-control" id="startDate" placeholder="Start Date">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">End Date</label>
                                                    <input type="datetime-local" class="form-control" id="endDate" placeholder="End Date">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button v-on:click="add()">Click</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="m-portlet__nav-item"></li>
                        <li class="m-portlet__nav-item">
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">Quick Actions</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Create Post</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Send Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                            <span class="m-nav__link-text">Upload File</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__section">
                                                        <span class="m-nav__section-text">Useful Links</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Support</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit m--hide">
                                                    </li>
                                                    <li class="m-nav__item m--hide">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">


                <table class="table table-striped- table-bordered table-hover table-checkable" id="table-batch">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Star Date</th>
                            <th>End Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</template>



<script>
    export default {
        mounted() {
            // $('#table-batch').DataTable({
            //     destroy: true,
            //     processing: true,
            //     serverSide: true,
            //     ajax: 'api/batch',
            //     columns: [
            //         { data: 'id', name: 'id' },
            //         { data: 'name', name: 'name' },
            //         { data: 'start_date', name: 'start_date' },
            //         { data: 'end_date', name: 'end_date' },
            //         { data: 'action', name: 'action' },
            //     ],
            // });
            // let spans = document.querySelectorAll('.test');
            // spans.forEach(el => {
            //     el.addEventListener('click', this.clickTag);
            //     edittt();
            // })
            // spans.addEventListener('click', function(){
            //     alert('s');
            // });
        },

        methods:{
            // getUsers: function() {
            //     axios.get('/api/batch').then(function(response){
            //         this.rows = response.data;
            //     }.bind(this));
            // },

            add: function() {
                axios.post('api/batch', {
                    name: $('#name').val(),
                    start_date: $('#startDate').val(),
                    end_date: $('#endDate').val(),
                })
                .then(function (response) {
                    $('#myModal').modal('hide');
                    $('.fade').hide();
                    $('#table-batch').DataTable().ajax.reload(null, false);
                    console.log(response);
                    $('.m-portlet__nav-item').append(`<a href="#" class="btn btn-sm btn-warning edit" id="show" v-on:click="edittt()" ><i class="fa fa-eye"></i></a>`);
                })
                .catch(function (error) {
                    console.log(error);
                });
            },

            edittt: function() {
                alert('dddd');
                // var id=$(this).attr('data-id');
                // alert(id);
            },

            delete:function() {
                alert('delete');
            }
        }
    }
</script>
