<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="">
                        <div class="brand-logo"><img class="logo" src="<?php echo url('/'); ?>/Backend/images/logo/logo.png" /></div>
                        <h1 class="brand-text mb-0 ">Binarial</h1>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
                <li class=" nav-item"><a href="<?php echo url('/'); ?>/html/ltr/vertical-menu-template/index.html"><i class="menu-livicon" data-icon="desktop"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge-light-danger badge-pill badge-round float-right mr-2"></span></a>
                    <ul class="menu-content">
                        <li ><a href=""><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="eCommerce">Principal</span></a>
                        </li>
                        <li><a href=""><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header"><span>Inmobiliaria</span>   </li>

                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="home"></i><span class="menu-title" data-i18n="Projects">Proyectos
                    
                </span></a>
                    <ul class="menu-content">
                        <li ><a href={{ route('empresa.proyectos') }}><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Projets List">Mis Proyectos</span></a>
                        </li>
                        <li ><a href={{ route('empresa.solicitar') }}><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice">AgregarProyecto</span></a>
                        </li>
                        
                    </ul>
                </li>

                <li class=" navigation-header"><span>Cuenta</span>   </li>

                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="user"></i><span class="menu-title" data-i18n="Projects">Perfil</span></a>
                    <ul class="menu-content">
                        <li><a href={{ route('empresa.perfil') }}><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Projets List">Mi Perfil</span></a>
                        </li>
                        <li><a href=""><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice">Cambiar Contraseña</span></a>
                        </li>
                        
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="settings"></i><span class="menu-title" data-i18n="Projects">Soporte</span></a>
            
                </li>
                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="wrench"></i><span class="menu-title" data-i18n="Projects">Configuración</span></a>
            
                </li>


            </ul>
        </div>
    </div>