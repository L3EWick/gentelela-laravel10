<div class="top_nav">
	<div class="nav_menu">
		<nav>
			<div class="nav toggle">
				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
			</div>
			
			<div id="app">
				<ul class="nav navbar-nav navbar-right">
					<li class="">
						<a href="#" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							{{Auth::user()->name}} 
							<span class=" fa fa-angle-down"></span>
						</a>
						<ul class="dropdown-menu dropdown-usermenu pull-right">
							<li>
								<a href="{{ url("/alterasenha") }}">
									<i class="material-icons pull-right">lock_outline</i> Alterar Senha
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
									<i class="fa fa-sign-out pull-right"></i> Sair do sistema
								</a>
							</li>
							<form style="display: none" role="form" method="post" action="{{ route('logout') }}" id="logout-form">
								@csrf
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
									class="btn btn-outline-dark w-100">
									Sair
								</a>
							</form>
						</ul>
					</li>
					{{-- <Notificacoes></Notificacoes> --}}
				</ul>
			</div>
		</nav>
	</div>
</div>

