<nav class="main-header navbar navbar-expand navbar-white navbar-light custom-background-2">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button" id="navclosebutton"><i class="fas fa-bars custom-text"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index.php" id="logo" class="nav-link custom-text">MAXIMUS</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index.php" class="nav-link custom-text">
                Home
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="subscribe.php" class="nav-link custom-text">
                Assinar
            </a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">


        <li class="nav-item">
            <a class="nav-link" href="#" role="button" id="darkmode">
                <i class="fas fa-moon custom-text"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt custom-text"></i>
            </a>
        </li>
    </ul>
</nav>

<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<script>
    function addStyles(url) {
        $('<link href="' + url + '" rel="stylesheet"/>').appendTo('head');
    }

    function removeStyles() {
        $('link[rel="stylesheet"]').each(function() {
            if ($(this).attr('href').includes('darkmode')) {
                $(this).remove();
            }
        });
    }

    if (localStorage.getItem('dark_mode') === 'true') {
        addStyles('css/darkmode.css');
    } else if (localStorage.getItem('dark_mode') === 'false') {
        removeStyles();
    } else {
        localStorage.setItem('dark_mode', 'true');
    }

    document.getElementById('darkmode').addEventListener('click', () => {
        if (localStorage.getItem('dark_mode') === 'true') {
            localStorage.setItem('dark_mode', 'false');
            removeStyles();
        } else {
            localStorage.setItem('dark_mode', 'true');
            addStyles('css/darkmode.css');
        }
        console.log(localStorage.getItem('dark_mode'));
    });
</script>