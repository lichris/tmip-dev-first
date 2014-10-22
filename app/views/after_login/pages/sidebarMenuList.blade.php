<ul>
    @foreach($sub_menu as $next_level_menu)
    <li>
        @if($next_level_menu->isHasSubMenu())
        <a href="javascript:void(0);">
            <span class="expand-sign">+</span>
        @else
        <a href="#">
        @endif
            <span class="title">{{ $next_level_menu->getName(); }}</span>
        </a>
        @if($next_level_menu->isHasSubMenu())
            @include('after_login.pages.sidebarMenuList', array('sub_menu' => $next_level_menu->getSubMenu()))
        @endif
    </li>
    @endforeach
</ul>