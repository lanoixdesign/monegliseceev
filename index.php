<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MonÉgliseCeev.net</title>

    <link rel="icon" type="image/png" href="icon/ceevnet64-icon.png"/>

    <meta name="author" description="Micaël Lanoix">
    <meta name="description" content="Bienvenue sur Votre ÉgliseCeev.Net, la où le Dieu d'amour transforme la tristesse en joie ! Retrouvez toute l'actualité de votre ÉgliseCeev en quelque clic. À bientôt pour notre prochain live.">
    <meta name="keywords" content="église, évangélique, protestant, esprit & vie, actualité, culte en direct, culte en live, dons & offrandes, mdj, église en famille, pasteur mabouadi, bordeaux, ceev, ceev.tv ">


    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="MonÉgliseCeev.NET">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
  
    <meta name="application-name" content="MonÉgliseCeev.NET" />
    <meta name="msapplication-tooltip" content="MonÉgliseCeev.NET" />
    <meta name="msapplication-TileImage" content="https://monegliseceev.net/icon/ceevnet192-icon.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-tap-highlight" content="no" />
  
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="https://monegliseceev.net" />
    <meta property="og:title" content="Mon Église Ceev Internet" />
    <meta property="og:description" content="Bienvenue sur Votre ÉgliseCeev.Net, la où le Dieu d'amour transforme la tristesse en joie ! Retrouvez toute l'actualité de votre ÉgliseCeev en quelque clic. À bientôt pour notre prochain live." />
    <meta property="og:url" content="https://monegliseceev.net"/>
    <meta property="og:image" content="https://monegliseceev.net/icon/ceevnet192-icon.png" />
  
      <meta name="twitter:card" content="summary">
      <meta name="twitter:url" content="https://monegliseceev.net">
      <meta name="twitter:title" content="Mon Église Ceev Internet" />
      <meta name="twitter:description" content="Bienvenue sur Votre ÉgliseCeev.Net, la où le Dieu d'amour transforme la tristesse en joie ! Retrouvez toute l'actualité de votre ÉgliseCeev en quelque clic. À bientôt pour notre prochain live." />
      <meta name="twitter:image:src" content="https://monegliseceev.net/icon/ceevnet192-icon.png"  />
      <meta name="twitter:site" content="@ceevtv">
      <meta name="twitter:creator" content="@ceevtv">



   
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <link rel="manifest" href="monegliseceev.webmanifest.json">

    <link rel="stylesheet" href="asset/css/style.css">
    <script src="asset/js/addHome.js"></script>
    <script src="asset/js/script.js"></script>



</head>
<body>

<div id="capsule" class="">
    <div id="rond" class=" ">
        <div id="rond2" class="zoomer "></div>
    </div>
    <div class="byEphrataDesign">Bienvenue sur<br/>MonÉgliseCeev.Net</div>
</div>

<header>


<iframe id="vid_frame" width="100%" height="288" class="player_live" src="https://www.youtube.com/embed/live_stream?channel=UCt34B9T0UAI-Q-uocpb37yA" frameborder="0" gesture="media" allowfullscreen><img src="icon/ceevnet192-icon.png"></iframe>

<div class="urgent">
            
    <div id="welcome">
        <h4>Bienvenue sur MonÉgliseCeev.net</h4>
        <p><strong><span class="warning">À la une : </span></strong>Les églises en famille continuent...</p>
    <button class="btn">En savoir plus</button><button class="btn-addHome">Ajouter Ceev à mon écran d'accueil</button>
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

</header>
<main>

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

        <div id="cb" class="ko">
            <?php include_once('paiement/index.php');?>
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162721799-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162721799-1');
</script>
</html>