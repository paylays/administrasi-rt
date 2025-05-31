<div class="app-menu">

    <a href="{{ route('user.dashboard') }}" class="logo-box">
        <h1>
            Dashboard Warga RT.36
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
                <a href="{{ route('user.dashboard') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-dashboard-line"></i>
                    </span>
                    <span class="menu-text"> Dashboard </span>
                    <span class="badge bg-success rounded-full">2</span>
                </a>
            </li>
            
            <li class="menu-title">Administrasi Surat</li>
            
            <li class="menu-item">
                <a href="{{ route('user.ajukan-surat') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-mail-send-line"></i>
                    </span>
                    <span class="menu-text"> Ajukan Surat </span>
                </a>
            </li>

            <li class="menu-title">Lainnya</li>

            <li class="menu-item">
                <a href="{{ route('user.faqs-bantuan') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-question-line"></i>
                    </span>
                    <span class="menu-text"> FAQ & Bantuan </span>
                </a>
            </li>
        </ul>

    </div>
</div>
<!-- Sidenav Menu End  -->