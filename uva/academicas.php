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

        <div class="section academicas">
            <div class="container" id="container">
                <div class="col-md-2" style="margin-right: -44px;">
                    <img src="imgs/academicas.png" style="margin-top: 59px; width: 46%;" />
                </div>                
                <div class="col-md-10">
                    <h2>ATIVIDADES ACADÊMICAS</h2>

                    <p>Em breve serão divulgadas as atividades acadêmicas que estão sendo organizadas pelos coordenadores de curso.<br>
Lembre-se: a sua formação faz toda a diferença para a sua carreira.</p>                    
                    
                </div>                
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>
