<body>

    <header>
        <nav>
            <a href="#" class="logo">
                <h1>Cine Box</h1>
            </a>

            <ul class="menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Filmes</a></li>
                <li><a href="#">Sobre</a></li>
            </ul>

            <ul class="menu-icones">
                <li><a href="#"><i class="bi bi-search"></i></a></li>
                <li><a href="#"><i class="bi bi-heart"></i></a></li>
                <li><a href="#"><i class="bi bi-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-person-circle"></i></i></a></li>
            </ul>

            <button class="menu-oculto" onclick="javascript:abrirNav()">
                <i class="bi bi-list"></i>
            </button>

            <div id="offcanvas" class="menu-oculto">
                <button class="fechar" onclick="javascript:fecharnav()">
                    <i class="bi bi-x"></i>
                </button>
                <a href="index.html">Inicio</a>
                <a href="#">Filmes</a>
                <a href="#">Sobre</a>

            </div>
        </nav>
    </header>