<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MonÉgliseCeev.net</title>

    <meta name="author" description="Micaël Lanoix">
    <meta name="description" content="">

    <script src="/yts/jsbin/webcomponents-sd-vflBmTtv7/webcomponents-sd.js" type="text/javascript" name="webcomponents-sd/webcomponents-sd"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="asset/css/style.css">
    <script src="asset/js/script.js"></script>

</head>
<body>

<header>

<iframe id="vid_frame" width="100%" height="288"  src="https://www.youtube.com/embed/live_stream?channel=UCt34B9T0UAI-Q-uocpb37yA" frameborder="0" gesture="media" allowfullscreen></iframe>

</header>
<main>
    <section>
        <div class="urgent">
            <div>
                <h4>Bienvenue sur MonÉgliseCeev.net</h4>
                <p><strong><span class="warning">À la une : </span></strong>Les églises en famille continues...</p>
            <button class="btn">En savoir plus</button>
            </div>
            
            <div id="burger">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

        </div>
        
    </section>

    <section>
        <div id="supermenu">
            <?php require('common/_menu.php');?>
        </div>
        <div id="actu" class="ko">
            <?php include_once('common/_actu.php');?>
        </div>
        <div id="agenda" class="ko">
            <?php include_once('common/_agenda.php');?>
        </div>

        <div id="live" class="ko">
            <?php include_once('common/_live.php');?>
        </div>

        <div id="info" class="ko">
            <?php include_once('common/_info.php');?>
        </div>

        <div id="don" class="ko">
            <?php include_once('common/_don.php');?>
        </div>

        <div id="chant" class="ko">
            <?php include_once('common/_chant.php');?>
        </div>

        <div id="priere" class="ko">
            <?php include_once('common/_priere.php');?>
        </div>







    </section>    



</main>
<footer></footer>

</body>
</html>