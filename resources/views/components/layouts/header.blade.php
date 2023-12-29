<header class="header-area">
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="/">
                            <img height="80" src="assets/images/logos/svg-format.svg" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a onclick="scrollToSection('features')" class="page-scroll">
                                        <span class="text-grey">Hizmetlerimiz</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="/teams">
                                        <span class="text-grey">Ekibimiz</span>
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="page-scroll"  onclick="scrollToSection('footer')">
                                        <span class="text-grey">Bize Ulaşın</span>
                                    </a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->

    <script>
        function scrollToSection(sectionId) {
            var element = document.getElementById(sectionId);

            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    </script>
</header>
