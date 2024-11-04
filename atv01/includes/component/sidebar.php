<aside class="main-sidebar sidebar-dark-primary elevation-4 custom-background-2">
    <div class="sidebar">
        <nav class="mt-2 h-100">
            <ul class="nav nav-pills nav-sidebar flex-column h-100" role="menu" data-accordion="false">
                <li class="nav-item pt-2">
                    <a href="index.php" class="nav-link custom-text">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Início</p>
                    </a>
                </li>
                <li class="nav-item pt-3">
                    <a href="contents.php" class="nav-link custom-text">
                        <i class="nav-icon fas fa-film"></i>
                        <p>Conteúdos</p>
                    </a>
                </li>
                <!-- favoritos-->
                <li class="nav-item pt-3">
                    <a href="contents.php?favoritos=true" class="nav-link custom-text">
                        <i class="nav-icon fas fa-heart"></i>
                        <p>Favoritos</p>
                    </a>
                </li>
                <li class="nav-item pt-3">
                    <a href="form_page.php" class="nav-link custom-text">
                        <i class="nav-icon fas fa-pencil-alt"></i>
                        <p>Assine Agora</p>
                    </a>
                </li>
                <li class="nav-item pt-3">
                    <a href="index.php#devices" class="nav-link custom-text">
                        <i class="nav-icon fas fa-mobile-alt"></i>
                        <p>Dispositivos</p>
                    </a>
                </li>
                <li class="nav-item pt-3">
                    <a href="index.php#stats" class="nav-link custom-text">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Estatísticas</p>
                    </a>
                </li>
                <li class="nav-item pt-3">
                    <a href="index.php#services" class="nav-link custom-text">
                        <i class="nav-icon fas fa-stream"></i>
                        <p>Serviços Suportados</p>
                    </a>
                </li>
                <li class="nav-item pt-3">
                    <a href="mailto:contato@maximus.com.br" class="nav-link custom-text">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Contato</p>
                    </a>
                </li>
                <li class="nav-item mt-auto">
                    <a class="nav-link custom-text" data-widget="pushmenu" id="toggleSidebar" role="button">
                        <i class="fas fa-chevron-right ml-1 mr-2" id="toggleIcon"></i>
                        <p id="toggleText">Abrir</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<script>
    const sidebar = document.querySelector('.main-sidebar');
    const toggleButton = document.getElementById('toggleSidebar');
    const navbarCloseButton = document.getElementById('navclosebutton');
    const toggleText = document.getElementById('toggleText');
    const toggleIcon = document.getElementById('toggleIcon');

    let isSidebarOpen = false;

    toggleButton.addEventListener('click', () => {
        isSidebarOpen = !isSidebarOpen;
        toggleText.textContent = isSidebarOpen ? 'Fechar' : 'Abrir';
        toggleIcon.style.transform = isSidebarOpen ? 'rotate(180deg)' : 'rotate(0deg)';

    });

    navbarCloseButton.addEventListener('click', () => {
        isSidebarOpen = !isSidebarOpen;
        toggleText.textContent = isSidebarOpen ? 'Fechar' : 'Abrir';
        toggleIcon.style.transform = isSidebarOpen ? 'rotate(180deg)' : 'rotate(0deg)';
    });
</script>