<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Enade | Dicas de Estudo</title>

        <!--CSS-->
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>


        <!--Javascript-->
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-27837585-1', 'auto');
            ga('send', 'pageview');

        </script>

    </head>
    <body>
        <?php include_once './includes/header.php'; ?>
        <?php include_once './includes/nav.php'; ?>

        <div class="section dicas">
            <div class="container" id="container">
                <div class="col-md-2" style="margin-right: -44px;">
                    <img src="imgs/dicas.png" style="margin-top: 96px; width: 46%;" />
                </div>                
                <div class="col-md-10">
                    <h2>DICAS DE ESTUDO</h2>

                    <!-- <p>A realização da prova do ENADE é uma etapa avaliativa onde todas as habilidades e competências desenvolvidas ao longo do seu curso serão avaliadas. Para que você tenha um melhor desempenho, confira as dicas de estudo e de como realizar uma boa prova.</p> -->
                    
                    <center><a href="http://viz-wcs.voxeldigital.com.br/visualizador.aspx?CodTransmissao=463069#transcript" target="_blank"><img src="imgs/dica1.png" style="margin-right: 15%; width: 15%;" /></a> <a href="http://viz-wcs.voxeldigital.com.br/visualizador.aspx?CodTransmissao=473406#transcript" target="_blank"><img src="imgs/dica2.png" style="width: 15%;" /></a></center>
                </div>                
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>
