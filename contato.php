<!doctype html>
<html class="no-js" lang="pt-BR">

<?php include 'head.php'; ?>

<body>
    <div class="main-content">
    
        <!-- Start Header -->
        <?php include 'header.php'; ?>
        <!-- Start Header -->

        <!-- Start Breadcrumb Area -->
        <div class="axil-breadcrumb-area breadcrumb-style-default pt--170 pb--70 theme-gradient">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner">
                            <ul class="axil-breadcrumb liststyle d-flex">
                                <li class="axil-breadcrumb-item"><a href="home-01.html">Home</a></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">Contato</li>
                            </ul>
                            <h1 class="axil-page-title">Contato</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-images">
                <i class="shape shape-1 icon icon-bcm-01"></i>
                <i class="shape shape-2 icon icon-bcm-02"></i>
                <i class="shape shape-3 icon icon-bcm-03"></i>
            </div>
        </div>
        <!-- End Breadcrumb Area -->

        <main class="main-wrapper">

            <!-- Start Contact Area  -->
            <div class="axil-contact-area axil-shape-position ax-section-gap bg-color-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-xl-5 col-12">
                            <div class="contact-form-wrapper">
                                <!-- Start Contact Form -->
                                <div class="axil-contact-form contact-form-style-1">
                                    <h3 class="title">Fale conosco!</h3>

                                    <form id="contact-form" method="POST" action="http://axilthemes.com/demo/template/keystroke/mail.php">
                                        <div class="form-group">
                                            <input name="con_name" type="text">
                                            <label>Nome</label>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="form-group">
                                            <input name="con_email" type="email">
                                            <label>Email</label>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text">
                                            <label>Telefone</label>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="con_message"></textarea>
                                            <label>Mensagem</label>
                                            <span class="focus-border"></span>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" value="Enviar">
                                            <p class="form-messege"></p>
                                        </div>
                                    </form>

                                </div>
                                <!-- End Contact Form -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xl-6 offset-xl-1 col-12 mt_md--40 mt_sm--40">
                            <div class="axil-address-wrapper">
                                <!-- Start Single Address  -->
                                <div class="axil-address wow move-up">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Fone</h4>
                                            <p>Atendemos de Seg a Sex <br> 
                                            Das 9:00 às 19:00</p>
                                            <p><a class="axil-link" href="tel:11949401690">(11) 94940-1690</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Address  -->
                                <!-- Start Single Address  -->
                                <div class="axil-address wow move-up mt--60 mt_sm--30 mt_md--30">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Email</h4>
                                            <p>Entraremos em contato
                                            </p>
                                            <p><a class="axil-link" href="mailto:contato@aquarelaweb.com.br">contato@aquarelaweb.com.br</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Address  -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-group">
                    <div class="shape shape-01">
                        <i class="icon icon-contact-01"></i>
                    </div>
                    <div class="shape shape-02">
                        <i class="icon icon-contact-02"></i>
                    </div>
                    <div class="shape shape-03">
                        <i class="icon icon-contact-03"></i>
                    </div>
                </div>
            </div>
            <!-- End Contact Area  -->

            <!-- Start Office Location  -->
            <div class="axil-office-location-area ax-section-gap bg-color-lightest">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <span class="sub-title extra04-color wow" data-splitting>Onde estamos</span>
                                <h2 class="title wow mb--0" data-splitting>Nosso Escritório</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--30">

                        <!-- Start Single Location  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="axil-office-location mt--30 wow move-up">
                                <div class="thumbnail">
                                    <img src="assets/images/inner-image/contact/contact-01.jpg" alt="Location Images">
                                </div>
                                <div class="content">
                                    <h4 class="title">Santo André - SP</h4>
                                    <p>Rua Chapada Diamantina 212 <br /> Jardim Mirante</p>
                                    <a class="axil-button btn-transparent" href="https://goo.gl/maps/S8PccaP5gCkvxJ4X9" target="blank"><span class="button-text">Ver o mapa</span><span class="button-icon"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Location  -->
                    </div>
                </div>
            </div>
            <!-- End Office Location  -->


        </main>

        <!-- Start Footer Area -->
        <?php include 'footer.php'; ?>
        <!-- End Footer Area -->
    </div>
    <!-- JS ============================================ -->

    <?php include 'scripts.php'; ?>

</body>

</html>