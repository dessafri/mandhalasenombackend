<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
                <div class="sidebar-brand-text mx-3">Mandhala Senom Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Agenda
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-calendar-week"></i>
                    <span>Agenda</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('agenda.index')}}">Lihat Agenda</a>
                        <a class="collapse-item" href="{{route('agenda.create')}}">Tambah Agenda</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Mentor
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesmentor"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-user-friends"></i>
                    <span>Mentor</span>
                </a>
                <div id="collapsePagesmentor" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('mentor.index')}}">Lihat Mentor</a>
                        <a class="collapse-item" href="{{route('mentor.create')}}">Tambah Mentor</a>
                    </div>
                </div>
            </li>

            <div class="sidebar-heading">
                Dokumentasi
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesdokumentasi"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-camera"></i>
                    <span>Foto</span>
                </a>
                <div id="collapsePagesdokumentasi" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('dokumentasi.index')}}">Lihat Foto</a>
                        <a class="collapse-item" href="{{route('dokumentasi.create')}}">Tambah Foto</a>
                    </div>
                </div>
            </li>
            <div class="sidebar-heading">
                Artikel
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseartikel"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="far fa-newspaper"></i>
                    <span>Artikel</span>
                </a>
                <div id="collapseartikel" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('artikel.index')}}">Lihat Artikel</a>
                        <a class="collapse-item" href="{{route('artikel.create')}}">Tambah Artikel</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>