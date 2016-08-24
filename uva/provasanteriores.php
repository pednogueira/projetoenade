<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Enade | Atividades Acadêmicas</title>

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

        <div class="section provas">
            <div class="container" id="container">
                <div class="col-md-2" style="margin-right: -44px;">
                    <img src="imgs/provas.png" style="margin-top: 70px; width: 46%;" />
                </div>                
                <div class="col-md-10">
                    <h2>PROVAS ANTERIORES</h2>

                    <p>Veja as provas anteriores e como você e seu curso serão avaliados.<br>
Clique no ano desejado e confira as provas e respectivos gabaritos do seu curso.</p>
                    
                <button class="btn btn-primary"><a href="http://portal.inep.gov.br/web/guest/enade/provas-e-gabaritos-2007">2007</a></button>
                <button class="btn btn-primary"><a href="http://portal.inep.gov.br/web/guest/enade/provas-e-gabaritos-2010">2010</a></button>
                <button class="btn btn-primary"><a href="http://portal.inep.gov.br/web/guest/enade/provas-e-gabaritos-2013">2013</a></button>
                </div>                
            </div>

        </div>
    <?php include_once './includes/footer.php'; ?>
</body>
</html>
