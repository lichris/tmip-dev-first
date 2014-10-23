<div class="sidebar-back"></div>
<div class="sidebar-content">
    <div class="nav-brand">
        <a class="main-brand" href="../../html/dashboards/dashboard.html">
            {{ HTML::image('img/logos/logo_sidebar_top.png', '', array('id' => 'tmip-sidebar-logo')) }}
        </a>
    </div>
    {{--{{ var_dump($current_url); }}--}}
    <ul class="main-menu">
    @foreach($menu_list as $top_level_menu_list)
        @if($top_level_menu_list->getIsExpand() && $top_level_menu_list->isHasSubMenu())
        <li class="expanded">
        @else
        <li>
        @endif
            <table>
                @if($top_level_menu_list->getIsActive())
                <tr class="active">
                @else
                <tr>
                @endif
                    @if($top_level_menu_list->isHasSubMenu())
                    <td class="col-xs-3 sub-menu-dark contains-expand-sign text-center">
                        <i class="fa fa-ellipsis-v"></i>
                    </td>
                    @else
                    <td class="col-xs-3 sub-menu-dark">

                    </td>
                    @endif
                    <td class="col-xs-9">
                        <a class="title" href="{{ URL::route($top_level_menu_list->getUrl()); }}">
                            <i class=""></i>{{ $top_level_menu_list->getName(); }}
                        </a>
                    </td>
                </tr>
            </table>
            @if($top_level_menu_list->isHasSubMenu())
                @include('after_login.pages.sidebarMenuList', array('sub_menu' => $top_level_menu_list->getSubMenu()))
            @endif
        </li>
    @endforeach
    </ul>
</div>