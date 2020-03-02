<!-- Sidebar Menu -->
<nav class="mt-2">
	<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		<!-- Add icons to the links using the .nav-icon class
				 with font-awesome or any other icon font library -->
					<li class="nav-item">
			<router-link to="/dashboard" class="nav-link">
				<i class="nav-icon fas fa-th green"></i>
				<p>
					Dashboard
				</p>
			</router-link>      </li>
		<li class="nav-item has-treeview">
			<a href="#" class="nav-link ">
				<i class="nav-icon fas fa-tachometer-alt"></i>
				<p>
					Starter Pages
					<i class="right fas fa-angle-left"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<router-link to="/users" class="nav-link ">
						<i class="fa fa-users nav-icon purple"></i>
						<p>Users</p>
					</router-link>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Inactive Page</p>
					</a>
				</li>
			</ul>
		</li>
		<li class="nav-item">
			<router-link to="/profile" class="nav-link">
				<i class="nav-icon fas fa-user orange"></i>
				<p>
					Profile
				</p>
			</router-link>
		</li>
		<li class="nav-item">
			<a href="{{route('levels.index')}}" class="nav-link">
				<i class="nav-icon fa fa-user orange"></i>
				<p>
					Уровни
				</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="{{route('groups.index')}}" class="nav-link">
				<i class="fa fa-circle nav-icon"></i>
				<p>Группы</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="{{route('admission.index')}}" class="nav-link">
				<i class="fa fa-circle nav-icon"></i>
				<p>Студенты</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="{{route('traffic.index')}}" class="nav-link">
				<i class="fa fa-circle nav-icon"></i>
				<p>Траффик(реклама)</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="{{route('service.index')}}" class="nav-link">
				<i class="fa fa-circle nav-icon"></i>
				<p>Услуги</p>
			</a>
		</li>
		<li class="nav-item">

			<a class="nav-link " href="{{ route('logout') }}"
			onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
										<i class="fa fa-power-off red"></i>
			 <p>{{ __('Logout') }}</p>
	 </a>

	 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			 @csrf
	 </form>
		</li>
	</ul>
</nav>
<!-- /.sidebar-menu -->