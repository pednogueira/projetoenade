<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Enade | O Enade no seu curso</title>

        <!--CSS-->
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>        

        <!--caroiussel slider-->
        <link rel="stylesheet" type="text/css" href="./slick/slick.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
        <style type="text/css">
            html, body {
                margin: 0;
                padding: 0;
            }

            * {
                box-sizing: border-box;
            }

            .slider {
                width: 80%;
                margin: 100px auto;
            }

            .slick-slide {
                margin: 0px 20px;
            }

            .slick-slide img {
                width: 100%;
            }

            .slick-prev:before,
            .slick-next:before {
                color: #39a5cd;
            }
        </style>
        
        <!--modal-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript" charset="utf-8"></script>        
        <link rel="stylesheet" href="modal/jquery.modal.css" type="text/css" media="screen" />
        <style type="text/css" media="screen">
            body > .modal {
                display: none;
            }
            .part {
                display: none;
            }
        </style>
    </head>
    <body>
        <?php include_once './includes/header.php'; ?>
        <?php include_once './includes/nav.php'; ?>        

        <div class="section noseu">
            <div class="container cursos_enade" id="container">
                <div class="col-md-2" style="margin-right: -44px;">
                    <img src="imgs/noseu.png" style="margin-top: 60px; width: 40%;" />
                </div>                
                <div class="col-md-10">
                    <h2>O ENADE NO SEU CURSO</h2>
                <!--     <p>Conheça os coordenadores e projetos pedagógicos dos seus cursos:</p> -->
                </div>

            </div>
            <section class="regular slider">
                <div>
                    <a href="#curso1"><img src="imgs/icon/icon1.png" border="0" onmouseover="this.src = 'imgs/icon/icon1a.png'" onmouseout="this.src = 'imgs/icon/icon1.png'"></a>
                </div>
                <div>
                    <a href="#curso2"><img src="imgs/icon/icon2.png" border="0" onmouseover="this.src = 'imgs/icon/icon2a.png'" onmouseout="this.src = 'imgs/icon/icon2.png'"></a>
                </div>
                <div>
                    <a href="#curso3"><img src="imgs/icon/icon3.png" border="0" onmouseover="this.src = 'imgs/icon/icon3a.png'" onmouseout="this.src = 'imgs/icon/icon3.png'"></a>
                </div>
                <div>
                    <a href="#curso4"><img src="imgs/icon/icon4.png" border="0" onmouseover="this.src = 'imgs/icon/icon4a.png'" onmouseout="this.src = 'imgs/icon/icon4.png'"></a>
                </div>
                <div>
                    <a href="#curso5"><img src="imgs/icon/icon5.png" border="0" onmouseover="this.src = 'imgs/icon/icon5a.png'" onmouseout="this.src = 'imgs/icon/icon5.png'"></a>
                </div>
                <div>
                    <a href="#curso6"><img src="imgs/icon/icon6.png" border="0" onmouseover="this.src = 'imgs/icon/icon6a.png'" onmouseout="this.src = 'imgs/icon/icon6.png'"></a>
                </div>
                <div>
                    <a href="#curso7"><img src="imgs/icon/icon7.png" border="0" onmouseover="this.src = 'imgs/icon/icon7a.png'" onmouseout="this.src = 'imgs/icon/icon7.png'"></a>
                </div>
                <div>
                    <a href="#curso8"><img src="imgs/icon/icon8.png" border="0" onmouseover="this.src = 'imgs/icon/icon8a.png'" onmouseout="this.src = 'imgs/icon/icon8.png'"></a>
                </div>
            </section> 
        </div>
        <?php include_once './includes/footerbranco.php'; ?>
        <?php include_once './includes/cursos.php'; ?>
    </body>

    <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
                        $(document).on('ready', function () {
                            $(".regular").slick({
                                dots: true,
                                infinite: true,
                                slidesToShow: 4,
                                slidesToScroll: 4
                            });
                            $(".center").slick({
                                dots: true,
                                infinite: true,
                                centerMode: true,
                                slidesToShow: 4,
                                slidesToScroll: 4
                            });
                            $(".variable").slick({
                                dots: true,
                                infinite: true,
                                variableWidth: true
                            });
                        });
    </script>
    
    <!--modal-->    
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script src="modal/jquery.modal.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
                        $(function () {

                            function log_modal_event(event, modal) {
                                if (typeof console != 'undefined' && console.log)
                                    console.log("[event] " + event.type);
                            }

                            $('a[href="#curso1"]').click(function (event) {
                                event.preventDefault();
                                $(this).modal({
                                    fadeDuration: 250
                                });
                            });

                            $('a[href="#curso2"]').click(function (event) {
                                event.preventDefault();
                                $(this).modal({
                                    fadeDuration: 250
                                });
                            });

                            $('a[href="#curso3"]').click(function (event) {
                                event.preventDefault();
                                $(this).modal({
                                    fadeDuration: 250
                                });
                            });

                            $('a[href="#curso4"]').click(function (event) {
                                event.preventDefault();
                                $(this).modal({
                                    fadeDuration: 250
                                });
                            });

                            $('a[href="#curso5"]').click(function (event) {
                                event.preventDefault();
                                $(this).modal({
                                    fadeDuration: 250
                                });
                            });

                            $('a[href="#curso6"]').click(function (event) {
                                event.preventDefault();
                                $(this).modal({
                                    fadeDuration: 250
                                });
                            });

                            $('a[href="#curso7"]').click(function (event) {
                                event.preventDefault();
                                $(this).modal({
                                    fadeDuration: 250
                                });
                            });

                            $('a[href="#curso8"]').click(function (event) {
                                event.preventDefault();
                                $(this).modal({
                                    fadeDuration: 250
                                });
                            });

                            $('a[href="#curso9"]').click(function (event) {
                                event.preventDefault();
                                $(this).modal({
                                    fadeDuration: 250
                                });
                            });

                            $('a[href="#curso10"]').click(function (event) {
                                event.preventDefault();
                                $(this).modal({
                                    fadeDuration: 250
                                });
                            });

                            $('a[href="#curso11"]').click(function (event) {
                                event.preventDefault();
                                $(this).modal({
                                    fadeDuration: 250
                                });
                            });

                            $('a[href="#curso12"]').click(function (event) {
                                event.preventDefault();
                                $(this).modal({
                                    fadeDuration: 250
                                });
                            });

                        });
    </script>
</html>