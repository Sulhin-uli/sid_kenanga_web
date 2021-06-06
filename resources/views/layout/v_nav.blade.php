
					<ul class="nav">
						<li class="nav-item{{ request()->is('home') ? ' active' : ''}}">
							<a href="/home">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
								<i class="la la-copy"></i>
									<span class="menu-title">Data Master</span>
								<i class="menu-arrow"></i>
							</a>
							<div class="collapse" id="ui-basic">
								<ul class="nav flex-column sub-menu">
									{{-- <li class="nav-item"> <a class="nav-link" href="/agendakegiatan">Agenda Kegiatan</a></li> --}}
									<li class="nav-item"> <a class="nav-link" href="/visimisi">Visi & Misi</a></li>
									<li class="nav-item"> <a class="nav-link" href="/aparaturdesa">Aparatur Desa</a></li>
									<li class="nav-item"> <a class="nav-link" href="/gambar_lp">Gambar Halaman Depan</a></li>
								</ul>
							</div>
						</li>
						{{-- <li class="nav-item{{ request()->is('penduduk') ? ' active' : ''}}">
							<a href="/penduduk">
								<i class="la la-group"></i>
								<p>Data Penduduk</p>
							</a>
						</li> --}}
						<li class="nav-item">
							<a class="nav-link" data-toggle="collapse" href="#surat" aria-expanded="false" aria-controls="surat">
								<i class="la la-file-text-o"></i>
									<span class="menu-title">Surat</span>
								<i class="menu-arrow"></i>
							</a>
							<div class="collapse" id="surat">
								<ul class="nav flex-column sub-menu">
									<li class="nav-item{{ request()->is('surat') ? ' active' : ''}}">
										<a href="/surat">
											<p>Buat Surat</p>
										</a>
									</li>
									<li class="nav-item{{ request()->is('permintaan_surat') ? ' active' : ''}}">
										<a href="/permintaan_surat">
											<p>Permintaan Surat</p>
										</a>
									</li>
								</ul>
							</div>
						</li>
						{{-- <li class="nav-item{{ request()->is('surat') ? ' active' : ''}}">
							<a href="/surat">
								<i class="la la-file-text-o"></i>
								<p>Surat</p>
							</a>
						</li> --}}
						<li class="nav-item{{ request()->is('kabar_desa') ? ' active' : ''}}">
							<a href="/kabar_desa">
								<i class="la la-newspaper-o"></i>
								<p>Kabar Desa</p>
							</a>
						</li>
						<li class="nav-item{{ request()->is('pengaduan') ? ' active' : ''}}">
							<a href="/pengaduan">
								<i class="la la-envelope-o"></i>
								<p>Pengaduan</p>
							</a>
						</li>
						<li class="nav-item{{ request()->is('akun') ? ' active' : ''}}">
							<a href="/akun">
								<i class=" 
								la la-group"></i>
								<p>Akun</p>
							</a>
						</li>
					</ul>
				