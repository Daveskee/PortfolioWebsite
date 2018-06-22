<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome!</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/Welcome.css">



</head>
<body>

<div id="splashscreen">
    <div class="banner-pic">
        <div class="container">
            <div class="main-content">
                <ul class="fly-in-text hidden">
                    <li>Welcome</li>
                    <li>to</li>
                    <li>my</li>
                    <li>website</li>
                </ul>
<!--                <h1>Welcome to my website!</h1>-->
            </div>
        </div>
    </div>
</div>

<div class="container">
    <ul>
        <li>
            <a class='animated-arrow' href='home.php'>
                <div class='the-arrow -left'>
                  <div class='shaft'></div>
                </div>
                <div class='main'>
                    <div class='text'>
                        Continue Exploring
                    </div>
                    <div class='the-arrow -right'>
                        <div class='shaft'></div>
                    </div>
                </div>
            </a>
        </li>
    </ul>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
        setTimeout(function(){
            $(".fly-in-text").removeClass("hidden");
        }, 300);
    });
</script>

</body>
</html>
