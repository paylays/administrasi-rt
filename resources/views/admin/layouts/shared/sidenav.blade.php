<div class="app-menu">

    <a href="#" class="logo-box">
        <!-- Light Logo -->
        <div class="logo-light">
            <img src="/images/logo.png" class="logo-lg h-[22px]" alt="Light logo">
            <img src="/images/logo-sm.png" class="logo-sm h-[22px]" alt="Small logo">
        </div>

        <!-- Dark Logo -->
        <div class="logo-dark">
            <img src="/images/logo-dark.png" class="logo-lg h-[22px]" alt="Dark logo">
            <img src="/images/logo-sm.png" class="logo-sm h-[22px]" alt="Small logo">
        </div>
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
                    <span class="badge bg-success rounded-full">2</span>
                </a>
            </li>
            
            <li class="menu-title">Manajemen Surat</li>
            
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-calendar-event-line"></i>
                    </span>
                    <span class="menu-text"> Pengajuan Surat </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
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
        </ul>

    </div>
</div>
<!-- Sidenav Menu End  -->