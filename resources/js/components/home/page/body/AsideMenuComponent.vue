<template>

    <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
        <!-- BEGIN: Aside Menu -->
        <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
            <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover">
                    <router-link to="/profile" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-layers"></i>
                        <span class="m-menu__link-text">Profile</span>
                    </router-link>
                </li>
                <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover">
                    <router-link to="/tracking" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-share"></i>
                        <span class="m-menu__link-text">Tracking</span>
                    </router-link>
                </li>
                <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover">
                    <router-link to="/language" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-share"></i>
                        <span class="m-menu__link-text">Language</span>
                    </router-link>
                </li>
                <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover">
                    <router-link to="/batch" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-share"></i>
                        <span class="m-menu__link-text">Batch</span>
                    </router-link>
                </li>
            </ul>
        </div>
        <!-- END: Aside Menu -->
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component AsideMenu mounted.')
        }
    }
</script>
