<template>
    <div class="m-content">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="m-portlet m-portlet--full-height  ">
                    <div class="m-portlet__body">
                        <div class="m-card-profile">
                            <div class="m-card-profile__title m--hide">
                                Your Profile
                            </div>
                            <div class="m-card-profile__pic">
                                <div class="m-card-profile__pic-wrapper">
                                    <img src="bower-components/managetrainee-bower/images/home/user4.jpg" alt="" />
                                </div>
                            </div>
                            <div class="m-card-profile__details">
                                <span class="m-card-profile__name">Mark Andre</span>
                                <a href="" class="m-card-profile__email m-link">mark.andre@gmail.com</a>
                            </div>
                        </div>
                        <ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
                            <li class="m-nav__separator m-nav__separator--fit"></li>
                            <li class="m-nav__section m--hide">
                                <span class="m-nav__section-text">Section</span>
                            </li>
                            <li class="m-nav__item">
                                <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                    <span class="m-nav__link-title">
                                        <span class="m-nav__link-wrap">
                                            <span class="m-nav__link-text">My Profile</span>
                                            <span class="m-nav__link-badge">
                                                <span class="m-badge m-badge--success">2</span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-share"></i>
                                    <span class="m-nav__link-text">Activity</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                    <span class="m-nav__link-text">Messages</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-graphic-2"></i>
                                    <span class="m-nav__link-text">Sales</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-time-3"></i>
                                    <span class="m-nav__link-text">Events</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                    <span class="m-nav__link-text">Support</span>
                                </a>
                            </li>
                        </ul>
                        <div class="m-portlet__body-separator"></div>
                        <div class="m-widget1 m-widget1--paddingless">
                            <div class="m-widget1__item">
                                <div class="row m-row--no-padding align-items-center">
                                    <div class="col">
                                        <h3 class="m-widget1__title">Member Profit</h3>
                                        <span class="m-widget1__desc">Awerage Weekly Profit</span>
                                    </div>
                                    <div class="col m--align-right">
                                        <span class="m-widget1__number m--font-brand">+$17,800</span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-widget1__item">
                                <div class="row m-row--no-padding align-items-center">
                                    <div class="col">
                                        <h3 class="m-widget1__title">Orders</h3>
                                        <span class="m-widget1__desc">Weekly Customer Orders</span>
                                    </div>
                                    <div class="col m--align-right">
                                        <span class="m-widget1__number m--font-danger">+1,800</span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-widget1__item">
                                <div class="row m-row--no-padding align-items-center">
                                    <div class="col">
                                        <h3 class="m-widget1__title">Issue Reports</h3>
                                        <span class="m-widget1__desc">System bugs and issues</span>
                                    </div>
                                    <div class="col m--align-right">
                                        <span class="m-widget1__number m--font-success">-27,49%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-tools">
                            <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
                                        <i class="flaticon-share m--hide"></i>
                                        Profile detail
                                    </a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2" role="tab">
                                        Report
                                    </a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_3" role="tab">
                                        Project
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item m-portlet__nav-item--last">
                                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                        <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                            <i class="la la-gear"></i>
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
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_user_profile_tab_1">
                            <form class="m-form m-form--fit m-form--label-align-right">
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group m--margin-top-10 m--hide">
                                        <div class="alert m-alert m-alert--default" role="alert">
                                            The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <div class="col-10 ml-auto">
                                            <h3 class="m-form__section">1. Personal Details</h3>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Full Name</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" value="Mark Andre">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Email</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" value="CTO">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Password</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="password" value="Keenthemes">
                                            <span class="m-form__help">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">University</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" value="+456669067890">
                                        </div>
                                    </div>
                                    <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                                    <div class="form-group m-form__group row">
                                        <div class="col-10 ml-auto">
                                            <h3 class="m-form__section">Training</h3>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Github</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" value="San Francisco">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Link Git Project</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" value="California">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Chatwork</label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text" value="45000">
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <div class="row">
                                            <div class="col-2">
                                            </div>
                                            <div class="col-7">
                                                <button type="reset" class="btn btn-accent m-btn m-btn--air m-btn--custom">Save changes</button>&nbsp;&nbsp;
                                                <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane " id="m_user_profile_tab_2">
                <!--Begin::Portlet-->
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Recent Activities
                                    </h3>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">
                                <ul class="m-portlet__nav">
                                    <li>
                                        <button type="button" class="btn m-btn--pill m-btn--air btn-success ml-3 mr-3" data-toggle="modal" data-target="#m_modal_4"><i class="fa fa-plus"></i>&nbsp;&nbsp; Daily Report</button>
                                    </li>
                                    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                        <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
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
                                                                    <span class="m-nav__link-text">Activity</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                    <span class="m-nav__link-text">Messages</span>
                                                                </a>
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
                                                            <li class="m-nav__separator m-nav__separator--fit">
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="m-scrollable" data-scrollable="true" data-height="650" data-mobile-height="300">

                                <!--Begin::Timeline 2 -->
                                <div class="m-timeline-2">
                                    <div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
                                        <div class="m-timeline-2__item">
                                            <span class="m-timeline-2__item-time"><b>10:00</b><br><small>12/2/2019</small></span>
                                            
                                            <div class="m-timeline-2__item-cricle">
                                                <i class="fa fa-genderless m--font-danger"></i>
                                            </div>
                                            <div class="m-timeline-2__item-text  m--padding-top-5">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                <br> incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                        <div class="m-timeline-2__item m--margin-top-30">
                                                <span class="m-timeline-2__item-time"><b>10:00</b><br><small>12/2/2019</small></span>
                                            <div class="m-timeline-2__item-cricle">
                                                <i class="fa fa-genderless m--font-success"></i>
                                            </div>
                                            <div class="m-timeline-2__item-text m-timeline-2__item-text--bold">
                                                AEOL Meeting With
                                            </div>
                                            <div class="m-list-pics m-list-pics--sm m--padding-left-20">
                                                <a href="../../#">
                                                    <img src="bower-components/managetrainee-bower/images/home/100_4.jpg" title="">
                                                </a>
                                                <a href="../../#">
                                                    <img src="bower-components/managetrainee-bower/images/home/100_13.jpg" title="">
                                                </a>
                                                <a href="../../#">
                                                    <img src="bower-components/managetrainee-bower/images/home/100_11.jpg" title="">
                                                </a>
                                                <a href="../../#">
                                                    <img src="bower-components/managetrainee-bower/images/home/100_14.jpg" title="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-timeline-2__item m--margin-top-30">
                                                <span class="m-timeline-2__item-time"><b>10:00</b><br><small>12/2/2019</small></span>
                                            <div class="m-timeline-2__item-cricle">
                                                <i class="fa fa-genderless m--font-brand"></i>
                                            </div>
                                            <div class="m-timeline-2__item-text m--padding-top-5">
                                                Make Deposit
                                                <a href="#" class="m-link m-link--brand m--font-bolder">USD 700</a> To ESL.
                                            </div>
                                        </div>
                                        <div class="m-timeline-2__item m--margin-top-30">
                                                <span class="m-timeline-2__item-time"><b>10:00</b><br><small>12/2/2019</small></span>
                                            <div class="m-timeline-2__item-cricle">
                                                <i class="fa fa-genderless m--font-warning"></i>
                                            </div>
                                            <div class="m-timeline-2__item-text m--padding-top-5">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                <br> incididunt ut labore et dolore magna elit enim at minim
                                                <br> veniam quis nostrud
                                            </div>
                                        </div>
                                        <div class="m-timeline-2__item m--margin-top-30">
                                                <span class="m-timeline-2__item-time"><b>10:00</b><br><small>12/2/2019</small></span>
                                            <div class="m-timeline-2__item-cricle">
                                                <i class="fa fa-genderless m--font-info"></i>
                                            </div>
                                            <div class="m-timeline-2__item-text m--padding-top-5">
                                                Placed a new order in
                                                <a href="#" class="m-link m-link--brand m--font-bolder">SIGNATURE MOBILE</a> marketplace.
                                            </div>
                                        </div>
                                        <div class="m-timeline-2__item m--margin-top-30">
                                            <span class="m-timeline-2__item-time">16:00</span>
                                            <div class="m-timeline-2__item-cricle">
                                                <i class="fa fa-genderless m--font-brand"></i>
                                            </div>
                                            <div class="m-timeline-2__item-text m--padding-top-5">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                <br> incididunt ut labore et dolore magna elit enim at minim
                                                <br> veniam quis nostrud
                                            </div>
                                        </div>
                                        <div class="m-timeline-2__item m--margin-top-30">
                                            <span class="m-timeline-2__item-time">17:00</span>
                                            <div class="m-timeline-2__item-cricle">
                                                <i class="fa fa-genderless m--font-danger"></i>
                                            </div>
                                            <div class="m-timeline-2__item-text m--padding-top-5">
                                                Received a new feedback on
                                                <a href="#" class="m-link m-link--brand m--font-bolder">FinancePro App</a> product.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--End::Timeline 2 -->
                            </div>
                        </div>


                    <!--End::Portlet-->
                        </div>
                        <div class="tab-pane " id="m_user_profile_tab_3">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ModalComponent></ModalComponent>
    </div>
</template>

<script>
    import ModalComponent from './ModalComponent.vue';
    export default {
        components: {
            ModalComponent,
        },
        mounted() {
            console.log('Component Content mounted.')
        }
    }
</script>
