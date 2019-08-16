<template>
    <div class="m-content">
        <!--begin::Portlet-->
        <div class="m-portlet m-portlet--full-height m-portlet--tabs">
            <div class="m-portlet__head">
                <div class="m-portlet__head-tools">
                    <ul class="nav nav-tabs m-tabs-line m-tabs-line--primary m-tabs-line--2x" role="tablist">
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1" role="tab">
                                <i class="la la-cog"></i> All
                            </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_1" role="tab">
                                <i class="la la-cog"></i> PHP
                            </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_2" role="tab">
                                <i class="la la-briefcase"></i> Ruby
                            </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3" role="tab">
                                <i class="la la-bell-o"></i>Android
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <div>
                    Batch:
                    <button type="button" class=" .m-demo__preview.m-demo__preview--btn .btn btn btn-outline-success">All</button>
                    <button type="button" class=" .m-demo__preview.m-demo__preview--btn .btn btn btn-outline-danger">Batch 1</button>
                    <button type="button" class=" .m-demo__preview.m-demo__preview--btn .btn btn btn-outline-info">Batch 2</button>
                    <button type="button" class=" .m-demo__preview.m-demo__preview--btn .btn btn btn-outline-warning">Batch 3</button>
                    <button type="button" class=" .m-demo__preview.m-demo__preview--btn .btn btn btn-outline-accent">Batch 4</button>
                    <button type="button" class=" .m-demo__preview.m-demo__preview--btn .btn btn btn-outline-primary">Batch 5</button>
                </div>
                <div class="mt-5">
                    Status: 
                    <button type="button" class="btn btn-outline-primary">All</button>
                    <button type="button" class="btn btn-outline-success">Pass</button>
                    <button type="button" class="btn btn-outline-danger">Failed</button>
                </div>
                <div class="m-demo__preview mt-5">
                    <div class="m-list-search">
                        <div class="m-list-search__results">
                            <span class="m-list-search__result-message m--hide">
                                No record found
                            </span>
                            <h2>PHP</h2>

                            <span class="m-list-search__result-category">
                                Batch 1 (26/3-26/5)
                            </span>
                            <a href="#" class="m-list-search__result-item">
                                <span class="m-list-search__result-item-pic">
                                    <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user1.jpg" title="">
                                </span>
                                <span class="m-list-search__result-item-text">Amanda Anderson</span>
                                <div class="m-demo__preview">
                                        <span class="m-type m--bg-success" style="">
                                            <span class="m--font-light" style="font-size: 1rem;">Git</span>
                                        </span>
                                        <span class="m-type m--bg-danger">
                                            <span class="m--font-light" style="font-size: 1rem;">SQL</span>
                                        </span>
                                        <span class="m-type m--bg-danger">
                                            <span class="m--font-light" style="font-size: 1rem;">PHP</span>
                                        </span>
                                    </div>
                            </a>
                            <a href="#" class="m-list-search__result-item">
                                <span class="m-list-search__result-item-pic">
                                    <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user2.jpg" title="">
                                </span>
                                <span class="m-list-search__result-item-text">Kennedy Lloyd</span>

                                    <div class="m-demo__preview">
                                        <span class="m-type m--bg-success" style="">
                                            <span class="m--font-light" style="font-size: 1rem;">Git</span>
                                        </span>
                                        <span class="m-type m--bg-danger">
                                            <span class="m--font-light" style="font-size: 1rem;">SQL</span>
                                        </span>
                                        <span class="m-type m--bg-danger">
                                            <span class="m--font-light" style="font-size: 1rem;">PHP</span>
                                        </span>
                                    </div>
                            </a>
                            <a href="#" class="m-list-search__result-item">
                                <span class="m-list-search__result-item-pic">
                                    <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user3.jpg" title="">
                                </span>
                                <span class="m-list-search__result-item-text">Megan Weldon</span>
                                <div class="m-demo__preview">
                                        <span class="m-type m--bg-success" style="">
                                            <span class="m--font-light" style="font-size: 1rem;">Git</span>
                                        </span>
                                        <span class="m-type m--bg-danger">
                                            <span class="m--font-light" style="font-size: 1rem;">SQL</span>
                                        </span>
                                        <span class="m-type m--bg-danger">
                                            <span class="m--font-light" style="font-size: 1rem;">PHP</span>
                                        </span>
                                    </div>
                            </a>
                            <a href="#" class="m-list-search__result-item">
                                <span class="m-list-search__result-item-pic">
                                    <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user4.jpg" title="">
                                </span>
                                <span class="m-list-search__result-item-text">Marc-André ter Stegen</span>
                                <div class="m-demo__preview">
                                        <span class="m-type m--bg-success" style="">
                                            <span class="m--font-light" style="font-size: 1rem;">Git</span>
                                        </span>
                                        <span class="m-type m--bg-danger">
                                            <span class="m--font-light" style="font-size: 1rem;">SQL</span>
                                        </span>
                                        <spakn class="m-type m--bg-danger">
                                            <span class="m--font-light" style="font-size: 1rem;">PHP</span>
                                        </spakn>
                                    </div>
                            </a>

                            <span class="m-list-search__result-category">
                                    Batch 1 (26/3-26/5)
                                </span>
                                <a href="#" class="m-list-search__result-item">
                                    <span class="m-list-search__result-item-pic">
                                        <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user1.jpg" title="">
                                    </span>
                                    <span class="m-list-search__result-item-text">Amanda Anderson</span>
                                </a>
                                <a href="#" class="m-list-search__result-item">
                                    <span class="m-list-search__result-item-pic">
                                        <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user2.jpg" title="">
                                    </span>
                                    <span class="m-list-search__result-item-text">Kennedy Lloyd</span>

                                        <div class="m-demo__preview">
                                            <span class="m-type m--bg-success" style="">
                                                <span class="m--font-light" style="font-size: 1rem;">Git</span>
                                            </span>
                                            <span class="m-type m--bg-danger">
                                                <span class="m--font-light" style="font-size: 1rem;">SQL</span>
                                            </span>
                                            <span class="m-type m--bg-danger">
                                                <span class="m--font-light" style="font-size: 1rem;">PHP</span>
                                            </span>
                                        </div>
                                </a>
                                <a href="#" class="m-list-search__result-item">
                                    <span class="m-list-search__result-item-pic">
                                        <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user3.jpg" title="">
                                    </span>
                                    <span class="m-list-search__result-item-text">Megan Weldon</span>
                                </a>
                                <a href="#" class="m-list-search__result-item">
                                    <span class="m-list-search__result-item-pic">
                                        <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user4.jpg" title="">
                                    </span>
                                    <span class="m-list-search__result-item-text">Marc-André ter Stegen</span>
                                </a>
                        </div>
                    </div>
                </div>
                <div class="m-demo__preview mt-5">
                        <div class="m-list-search">
                            <div class="m-list-search__results">
                                <span class="m-list-search__result-message m--hide">
                                    No record found
                                </span>
                                <h2>RUBY</h2>
                                <span class="m-list-search__result-category">
                                    Batch 1 (26/3-26/5)
                                </span>
                                <a href="#" class="m-list-search__result-item">
                                    <span class="m-list-search__result-item-pic">
                                        <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user1.jpg" title="">
                                    </span>
                                    <span class="m-list-search__result-item-text">Amanda Anderson</span>
                                </a>
                                <a href="#" class="m-list-search__result-item">
                                    <span class="m-list-search__result-item-pic">
                                        <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user2.jpg" title="">
                                    </span>
                                    <span class="m-list-search__result-item-text">Kennedy Lloyd</span>

                                        <div class="m-demo__preview">
                                            <span class="m-type m--bg-success" style="">
                                                <span class="m--font-light" style="font-size: 1rem;">Git</span>
                                            </span>
                                            <span class="m-type m--bg-danger">
                                                <span class="m--font-light" style="font-size: 1rem;">SQL</span>
                                            </span>
                                            <span class="m-type m--bg-danger">
                                                <span class="m--font-light" style="font-size: 1rem;">PHP</span>
                                            </span>
                                        </div>
                                </a>
                                <a href="#" class="m-list-search__result-item">
                                    <span class="m-list-search__result-item-pic">
                                        <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user3.jpg" title="">
                                    </span>
                                    <span class="m-list-search__result-item-text">Megan Weldon</span>
                                </a>
                                <a href="#" class="m-list-search__result-item">
                                    <span class="m-list-search__result-item-pic">
                                        <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user4.jpg" title="">
                                    </span>
                                    <span class="m-list-search__result-item-text">Marc-André ter Stegen</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="m-demo__preview mt-5">
                            <div class="m-list-search">
                                <div class="m-list-search__results">
                                    <span class="m-list-search__result-message m--hide">
                                        No record found
                                    </span>
                                    
                                    <span class="m-list-search__result-category">
                                        Batch 1 (26/3-26/5)
                                    </span>
                                    <a href="#" class="m-list-search__result-item">
                                        <span class="m-list-search__result-item-pic">
                                            <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user1.jpg" title="">
                                        </span>
                                        <span class="m-list-search__result-item-text">Amanda Anderson</span>
                                    </a>
                                    <a href="#" class="m-list-search__result-item">
                                        <span class="m-list-search__result-item-pic">
                                            <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user2.jpg" title="">
                                        </span>
                                        <span class="m-list-search__result-item-text">Kennedy Lloyd</span>

                                            <div class="m-demo__preview">
                                                <span class="m-type m--bg-success" style="">
                                                    <span class="m--font-light" style="font-size: 1rem;">Git</span>
                                                </span>
                                                <span class="m-type m--bg-danger">
                                                    <span class="m--font-light" style="font-size: 1rem;">SQL</span>
                                                </span>
                                                <span class="m-type m--bg-danger">
                                                    <span class="m--font-light" style="font-size: 1rem;">PHP</span>
                                                </span>
                                            </div>
                                    </a>
                                    <a href="#" class="m-list-search__result-item">
                                        <span class="m-list-search__result-item-pic">
                                            <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user3.jpg" title="">
                                        </span>
                                        <span class="m-list-search__result-item-text">Megan Weldon</span>
                                    </a>
                                    <a href="#" class="m-list-search__result-item">
                                        <span class="m-list-search__result-item-pic">
                                            <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user4.jpg" title="">
                                        </span>
                                        <span class="m-list-search__result-item-text">Marc-André ter Stegen</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="m-demo__preview mt-5">
                                <div class="m-list-search">
                                    <div class="m-list-search__results">
                                        <span class="m-list-search__result-message m--hide">
                                            No record found
                                        </span>
                                        
                                        <span class="m-list-search__result-category">
                                            Batch 1 (26/3-26/5)
                                        </span>
                                        <a href="#" class="m-list-search__result-item">
                                            <span class="m-list-search__result-item-pic">
                                                <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user1.jpg" title="">
                                            </span>
                                            <span class="m-list-search__result-item-text">Amanda Anderson</span>
                                        </a>
                                        <a href="#" class="m-list-search__result-item">
                                            <span class="m-list-search__result-item-pic">
                                                <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user2.jpg" title="">
                                            </span>
                                            <span class="m-list-search__result-item-text">Kennedy Lloyd</span>

                                                <div class="m-demo__preview">
                                                    <span class="m-type m--bg-success" style="">
                                                        <span class="m--font-light" style="font-size: 1rem;">Git</span>
                                                    </span>
                                                    <span class="m-type m--bg-danger">
                                                        <span class="m--font-light" style="font-size: 1rem;">SQL</span>
                                                    </span>
                                                    <span class="m-type m--bg-danger">
                                                        <span class="m--font-light" style="font-size: 1rem;">PHP</span>
                                                    </span>
                                                </div>
                                        </a>
                                        <a href="#" class="m-list-search__result-item">
                                            <span class="m-list-search__result-item-pic">
                                                <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user3.jpg" title="">
                                            </span>
                                            <span class="m-list-search__result-item-text">Megan Weldon</span>
                                        </a>
                                        <a href="#" class="m-list-search__result-item">
                                            <span class="m-list-search__result-item-pic">
                                                <img class="m--img-rounded" src="bower-components/managetrainee-bower/images/home/user4.jpg" title="">
                                            </span>
                                            <span class="m-list-search__result-item-text">Marc-André ter Stegen</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                <div class="tab-content">
                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
