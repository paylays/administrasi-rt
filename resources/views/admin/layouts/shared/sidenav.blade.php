<div class="app-menu">

    <a href="{{ route('admin.dashboard') }}" class="logo-box">
        <h1>
            Admin Panel
        </h1>
    </a>

    <!-- Sidenav Menu Toggle Button -->
    <button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5 z-50">
        <span class="sr-only">Menu Toggle Button</span>
        <i class="ri-checkbox-blank-circle-line text-xl"></i>
    </button>

    <!--- Menu -->
    <div class="scrollbar" data-simplebar>
        <ul class="menu" data-fc-type="accordion">
            
            <li class="menu-item">
                <a href="{{ route('admin.dashboard') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-home-4-line"></i>
                    </span>
                    <span class="menu-text"> Dashboard </span>

                    
                </a>
            </li>
            
            <li class="menu-title">Manajemen Surat</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-calendar-event-line"></i>
                    </span>
                    <span class="menu-text"> Pengajuan Surat </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('admin.pengajuan-surat') }}" class="menu-link">
                            <span class="menu-text">Sedang Diverifikasi</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.pengajuan-surat.selesai') }}" class="menu-link">
                            <span class="menu-text">Selesai</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.pengajuan-surat.ditolak') }}" class="menu-link">
                            <span class="menu-text">Ditolak</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="menu-item">
                <a href="{{ route('admin.jenis-surat') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-calendar-event-line"></i>
                    </span> 
                    <span class="menu-text"> Jenis Surat </span>
                </a>
            </li>

            <li class="menu-title">Manajemen Data</li>
            
            <li class="menu-item">
                <a href="{{ route('admin.kartu-keluarga') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-group-line"></i>
                    </span>
                    <span class="menu-text"> Kartu Keluarga </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('admin.data-warga') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-account-box-line"></i>
                    </span>
                    <span class="menu-text"> Warga </span>
                </a>
            </li>

            <li class="menu-title">Pengguna</li>
            
            <li class="menu-item">
                <a href="{{ route('admin.manajemen-akun') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-account-circle-line"></i>
                    </span>
                    <span class="menu-text"> Manajemen Akun </span>
                </a>
            </li>
            
            <li class="menu-title">Lainnya</li>
            
            <li class="menu-item">
                <a href="{{ route('admin.pengumuman') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-megaphone-line"></i>
                    </span>
                    <span class="menu-text"> Pengumuman </span>
                </a>
            </li>
        </ul>

    </div>
</div>
<!-- Sidenav Menu End  -->