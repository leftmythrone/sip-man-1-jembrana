<div class="sidebar">
  <nav>
      <ul class="mcd-menu">
        @if ( auth()->user()->roles->level === 'Admin' )

          {{-- Halaman Dashboard --}}
          <li>
            <a href="/dashboard" class="@if ( $title === 'Dashboard' ) {{ 'active' }} @endif">
              <i class="fa fa-home"></i>
              <strong>Dashboard</strong>
              <small>Home page</small>
            </a>
          </li>

          {{-- Halaman Jurusan --}}
          <li>
            <a href="/jurusan" class="@if ( $title === 'Jurusan' ) {{ 'active' }} @endif">
              <i class="fa fa-university"></i>
              <strong>Jurusan</strong>
              <small>Manajemen Data Jurusan</small>
            </a>
          </li>

          {{-- Halaman Kelas --}}
          <li>
            <a href="/kelas" class="@if ( $title === 'Kelas' ) {{ 'active' }} @endif">
              <i class="fa fa-graduation-cap"></i>
              <strong>Data Kelas</strong>
              <small>Manajemen Data Kelas</small>
            </a>
          </li>

          {{-- Halaman Mapel --}}
          <li>
            <a href="/mapel" class="@if ( $title === 'Mapel' ) {{ 'active' }} @endif">
              <i class="fa fa-file-text-o"></i>
              <strong>Data Mapel</strong>
              <small>Manajemen Data Mata Pelajaran</small>
            </a>
          </li>

          {{-- Halaman Guru --}}
          <li>
            <a href="/guru" class="@if ( $title === 'Guru' ) {{ 'active' }} @endif">
              <i class="fa fa-user"></i>
              <strong>Guru</strong>
              <small>Manajemen Data Guru</small>
            </a>
            <ul>
              <li><a href="/guru/data"><i class="fa fa-globe"></i>Data Guru</a></li>
              <li><a href="/guru/penugasan"><i class="fa fa-trophy"></i>Penugasan Guru</a></li>
              <li><a href="/guru/request"><i class="fa fa-certificate"></i>Request Jadwal</a></li>
              {{-- <li>
                <a href="#"><i class="fa fa-group"></i>Our Team</a>
                <ul>
                  <li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
                  <li>
                    <a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
                    <ul>
                      <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                      <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
                </ul>
              </li> --}}
            </ul>
          </li>

          {{-- Halaman Jadwal --}}
          <li>
            <a href="/jadwal" class="@if ( $title === 'Jadwal' ) {{ 'active' }} @endif">
              <i class="fa fa-calendar-check-o "></i>
              <strong>Jadwal</strong>
              <small>Manajemen Data Penjadwalan</small>
            </a>
            <ul>
              <li><a href="/jadwal/rentang"><i class="fa fa-globe"></i>Rentang Jam</a></li>
              <li><a href="/jadwal/khusus"><i class="fa fa-trophy"></i>Jadwal Khusus</a></li>
              <li><a href="/jadwal/penjadwalan"><i class="fa fa-certificate"></i>Penjadwalan</a></li>
            </ul>
          </li>

        @else
          
          {{-- Halaman Dashboard --}}
          <li>
            <a href="/dashboard" class="@if ( $title === 'Dashboard' ) {{ 'active' }} @endif">
              <i class="fa fa-home"></i>
              <strong>Dashboard</strong>
              <small>Home page</small>
            </a>
          </li>
        @endif

        {{-- Fitur Logout --}}
        <li>
          <a href="/logout">
            <i class="fa fa-power-off"></i>
            <strong>Logout</strong>
            <small>Keluar Aplikasi</small>
          </a>
        </li>
      </ul>
    </nav>
  </div>