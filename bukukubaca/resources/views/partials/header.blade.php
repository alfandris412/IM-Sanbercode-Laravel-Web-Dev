<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box" style="padding: 10px;">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					
					<a class="navbar-brand logo_h" href="/"><img src="{{asset('tamplate/img/logo.png')}}" alt="" style="
					width: auto;
					height: 100%;
					max-height: 50px;
					"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="/">Home</a></li>
							<li class="nav-item">
								<a class="nav-link" href="/buku">Buku</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/genre">Genre</a>
							</li>
							@auth
							<li class="nav-item">
								<a class="nav-link" href="/profil">Profil</a>
							</li>
							@endauth
								@guest
								<li class="nav-item submenu dropdown">
								<span href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Akun</span>

								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="/register">Daftar</a></li>
									<li class="nav-item"><a class="nav-link" href="/login">Masuk</a></li>
								</ul>
								</li>
								@endguest
								
								@auth
								<li class="nav-item">
									<form action="/logout" method="post">
										@csrf
										<button class="nav-link" style="
										background-color: transparent;
										border: none;
										">
											Keluar
										</button>
									</form></li>
								@endauth
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!-- End Header Area -->
