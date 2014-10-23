<ul>
    @foreach($sub_menu as $next_level_menu)
    @if($next_level_menu->getIsExpand() && $next_level_menu->isHasSubMenu())
    <li class="expanded">
    @else
    <li>
    @endif

        <table>
            @if($next_level_menu->getIsActive())
            <tr class="active">
            @else
            <tr>
            @endif
                @if($next_level_menu->isHasSubMenu())
                <td class="col-xs-4 sub-menu-dark contains-expand-sign text-center">
                    <i class="fa fa-ellipsis-v"></i>
                </td>
                @else
                <td class="col-xs-4 sub-menu-dark">

                </td>
                @endif
                <td class="col-xs-8">
                    <a class="title" href="{{ URL::route($next_level_menu->getUrl()); }}">
                        <i class=""></i>{{ $next_level_menu->getName(); }}
                    </a>
                </td>
            </tr>
        </table>
        @if($next_level_menu->isHasSubMenu())
            @include('after_login.pages.sidebarMenuList', array('sub_menu' => $next_level_menu->getSubMenu()))
        @endif
    </li>
    @endforeach
</ul>