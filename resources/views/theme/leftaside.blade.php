<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
            class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
         m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
        <ul class="m-menu__nav ">
            <li class="m-menu__item  @if(Request::url() === url('/dashboard')) m-menu__item--active @endif"
                aria-haspopup="true"><a href="{{url('/dashboard')}}" class="m-menu__link "><span
                            class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-line-graph"></i><span
                            class="m-menu__link-text">Dashboard</span></a></li>
            <li class="m-menu__section m-menu__section--first">
                <h4 class="m-menu__section-text">Main Menu</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li>
            <li class="m-menu__item m-menu__item--submenu @if(Request::url() === url('/marketing') || Request::url() === url('/admin') || Request::url() === url('/manager')) m-menu__item--open @endif"
                aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:"
                                                                      class="m-menu__link m-menu__toggle"><span
                            class="m-menu__item-here"></span><i
                            class="m-menu__link-icon flaticon-user-settings"></i><span
                            class="m-menu__link-text">Admin Menu</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        @if(Session::get('level') == 3)
                            <li class="m-menu__item @if(Request::url() === url('/admin')) m-menu__item--active @endif"
                                aria-haspopup="true"><a href="{{url('/admin')}}" class="m-menu__link "><i
                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                            class="m-menu__link-text">Admin</span></a>
                            </li>
                        @endif
                        @if(Session::get('level') >= 2)
                            <li class="m-menu__item @if(Request::url() === url('/manager')) m-menu__item--active @endif"
                                aria-haspopup="true" m-menu-link-redirect="1">
                                <a href="{{url('/manager')}}" class="m-menu__link ">
                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span></i>
                                    <span class="m-menu__link-text">Manager</span>
                                </a>
                            </li>
                        @endif
                        @if(Session::get('level') >= 1 )
                            <li class="m-menu__item @if(Request::url() === url('/marketing')) m-menu__item--active @endif"
                                aria-haspopup="true"><a href="{{url('/marketing')}}" class="m-menu__link "><i
                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                            class="m-menu__link-text">Marketing</span></a></li>
                        @endif
                    </ul>
                </div>
            </li>
            <li class="m-menu__item @if(Request::url() === url('/totalsales')) m-menu__item--active @endif"
                aria-haspopup="true" m-menu-link-redirect="1"><a href="{{url('/totalsales')}}"
                                                                 class="m-menu__link "><span
                            class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-folder-1"></i><span
                            class="m-menu__link-text">Total Sales</span></a></li>
            <li class="m-menu__item @if(Request::url() === url('/banner')) m-menu__item--active @endif"
                aria-haspopup="true" m-menu-link-redirect="1">
                <a href="{{url('/banner')}}" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon flaticon-bag"></i>
                    <span class="m-menu__link-text">Manage Banner</span>
                </a>
            </li>
            @if(Session::get('level') == 3)
            <li class="m-menu__item @if(Request::url() === url('/managerules')) m-menu__item--active @endif"
                aria-haspopup="true" m-menu-link-redirect="1"><a href="{{url('/managerules')}}"
                                                                 class="m-menu__link "><span
                            class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-settings"></i><span
                            class="m-menu__link-text">Manage Rules</span></a></li>
            @endif
            <li class="m-menu__item @if(Request::url() === url('/unit')) m-menu__item--active @endif"
                aria-haspopup="true" m-menu-link-redirect="1"><a href="{{url('/unit')}}"
                                                                 class="m-menu__link "><span
                            class="m-menu__item-here"></span><i class="m-menu__link-icon fa fa-warehouse"></i><span
                            class="m-menu__link-text">Manage Unit</span></a></li>
            @if(Session::get('level') == 3)
            <li class="m-menu__item @if(Request::url() === url('/transactionlog')) m-menu__item--active @endif"
                aria-haspopup="true" m-menu-link-redirect="1"><a href="{{url('/transactionlog')}}"
                                                                 class="m-menu__link "><span
                            class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-list"></i><span
                            class="m-menu__link-text">Transaction Log</span></a></li>
            @endif
            <li class="m-menu__item @if(Request::url() === url('/message')) m-menu__item--active @endif"
                aria-haspopup="true" m-menu-link-redirect="1"><a href="{{url('/message')}}"
                                                                 class="m-menu__link "><span
                            class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-multimedia"></i><span
                            class="m-menu__link-text">Message</span></a></li>
            {{--<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-graphic-1"></i><span--}}
            {{--class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Support</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--accent">3</span></span> </span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>--}}
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span
                                class="m-menu__link"><span class="m-menu__item-here"></span><span
                                    class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span
                                            class="m-menu__link-text">Support</span>
														<span class="m-menu__link-badge"><span
                                                                    class="m-badge m-badge--accent">3</span></span> </span></span></span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html"
                                                                                               class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span
                                    class="m-menu__link-text">Reports</span></a></li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"
                        m-menu-link-redirect="1"><a href="javascript:" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span
                                    class="m-menu__link-text">Cases</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a
                                            href="inner.html" class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Pending</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a
                                            href="inner.html" class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Urgent</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a
                                            href="inner.html" class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Done</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a
                                            href="inner.html" class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Archive</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html"
                                                                                               class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span
                                    class="m-menu__link-text">Clients</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html"
                                                                                               class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span
                                    class="m-menu__link-text">Audit</span></a></li>
                </ul>
            </div>
        </ul>
    </div>

    <!-- END: Aside Menu -->
</div>
