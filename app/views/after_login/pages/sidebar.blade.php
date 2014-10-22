<div id="sidebar">
	<div class="sidebar-back"></div>
	<div class="sidebar-content">
		<div class="nav-brand">
			<a class="main-brand" href="../../html/dashboards/dashboard.html">
				~ Your logo goes here ~
			</a>
		</div>

		<ul class="main-menu">
		@foreach($menu_list as $top_level_menu_list)
		    <li>
		    @if($top_level_menu_list->isHasSubMenu())
		        <a href="javascript:void(0);" class="active">
		    @else
		        <a href="#">
		    @endif
                    <i class=""></i><span class="title">{{ $top_level_menu_list->getName(); }}</span>
                    @if($top_level_menu_list->isHasSubMenu())
                        <span class="expand-sign">+</span>
                        @include('after_login.pages.sidebarMenuList', array('sub_menu' => $top_level_menu_list->getSubMenu()))
                    @endif
                </a>
		    </li>
		@endforeach
		</ul>
	</div>
</div>