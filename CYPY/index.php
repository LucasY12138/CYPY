<?php
    require_once 'config.php';

    $photo = $_GET["p"] ?? null;
    $photo_url = $domainname."/". "upload/" . $photo;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="<?php echo $photo_url; ?>">
    <!-- self css -->
    <link href="css/style.css" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <title>CYPY Share Photo</title>
    <style>
    html, body {
        margin: 0;
        position: relative;
        min-height: 100%;
        height: 100%;
    }
    body {
        background-color: #E7EEEE;
    }
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }
    a {
        text-decoration: none;
        color: currentColor;
    }
    .header {
        background-image: url(./img/flags.png);
        background-position: 0 0;
        background-repeat: repeat-x;
        background-size: auto 50%;
    }
    .header .banner {
        text-align: center;
    }
    .header .banner img {
        height: 100px;
    }
    .content {
        text-align: center;
        padding: 20px 10px;
    }
    .footer {
        padding: 40px 20px;
        background-color: #fff;
    }
    .footer img {
        height: 60px;
    }

    .flex-wrapper {
        display: flex;
    }
    .flex-wrapper.vertical {
        flex-direction: column;
        height: 100%;
    }
    .flex-wrapper > .flex-space,
    .flex-wrapper > .flex-grow1
    {
        flex-grow: 1;
    }
    .btn-share {
        cursor: pointer;
        margin-bottom:20px;
    }
    .btn-share img {
        width: 300px;
    }

    .btn-download {
        cursor: pointer;
        margin-bottom:20px;
        margin-top:12px;

    }
    .btn-download img {
        width: 300px;
    }
    .photo-container {
        max-width: 100%;
        background: #fff;
    }
    .photo-container img {
        max-width: 100%;
        padding: 12px;
    }

    .btns-container {
        display: grid;
    }

    .socialmedias-container{
        display: flex;
        width: fit-content;
        margin: auto;
    }

    .socialmedias-icon{
        width: 50px;
        margin: 10px;
    }

    .wording {
        max-width: 100%;
        margin: 0px 42px 20px 42px;
    }
    </style>
    <script>
    share = function(){
        url = `https://www.facebook.com/sharer.php?display=popup&u=${window.location.href}&p[image][0]=<?php echo $photo_url; ?>`;
        options = 'toolbar=0,status=0,resizable=1,width=626,height=436';
        window.open(url,'sharer',options);
    }
    </script>
</head>
<body>

    <div class="flex-wrapper vertical">

        <section class="content flex-grow1">

            <?php if ($photo !== null && file_exists($base_path . "upload/" . $photo)) { ?>

            <div class="wording">
                <img src="./img/wording_1.svg"/>
            </div>

            <figure class="photo-container">
                <img src="<?php echo $photo_url; ?>" alt="Photo to be shared" class="photo" />
            </figure>

            <div class="btns-container">
                <button type="button" class="btn btn-primary btn-lg"><a href="https://facebook.com/hkhselderly" class="socialmedias-icon" target="_blank">分享到facebook</a></button>
            </div>
            
            <?php } else { ?>
                <p>
                    找不到你的圖片, 請再次上載。
                </p>
            <?php } ?>
        </section>
    </div>
    <script>
   
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>