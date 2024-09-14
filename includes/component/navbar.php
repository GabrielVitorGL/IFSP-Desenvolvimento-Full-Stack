<?php

// admin users
$admin_menu_items = ['Dashboard', 'Pedidos', 'Relatórios', 'Clientes', 'Vendas', 'Contas', 'Configurações', 'Perfil'];

// seller 
$seller_menu_items = ['Dashboard', 'Pedidos', 'Clientes', 'Vendas', 'Perfil'];

// dynamic choose logged in user
$menu_items = rand(0, 1) == 0 ? $admin_menu_items : $seller_menu_items;

?>


<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        <?php for ($i = 0; $i < count($menu_items); $i++) : ?>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="./adminlte/index<?= $i ?>.html" class="nav-link">
                    <?= $menu_items[$i] ?>
                </a>
            </li>
        <?php endfor ?>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>

        <a href="virus.com.br" class="user-panel ml-4 mr-3 pt-0.5 d-flex text-black-50">
           
                <i class="bi bi-person-circle my-auto fs-1 ml-1"></i>

                <div class="info">
                    <span class="d-block">Alexander Pierce</span>
                </div>
            
        </a>
    </ul>
</nav>