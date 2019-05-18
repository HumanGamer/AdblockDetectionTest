<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdBlock Detection Test</title>
    <link rel="stylesheet" type="text/css" href="./css/base.css?v=1" />

    <!-- Example Ad -->
    <link rel="stylesheet" type="text/css" href="./css/examplead.css?v=1" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <header>

    </header>
    <main>
        <div id="page_head">
            <h1>Ad Block Detection</h1>
        </div>
        <div id="content">
            <div class="row">
                <div class="block">
                    <h2>ads.js</h2>
                    <p>Some websites detect ad blockers by using a file called ads.js as ad blockers will block these.</p>
                    <div class="adtest">
                        <span id="adtest1"><i class="fas fa-spinner fa-pulse"></i>&nbsp;Checking</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="block">
                    <h2>adframe.js</h2>
                    <p>Some websites detect ad blockers by using a file called adframe.js as ad blockers will block these.</p>
                    <div class="adtest">
                        <span id="adtest2"><i class="fas fa-spinner fa-pulse"></i>&nbsp;Checking</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="block">
                    <h2>Banner Ad</h2>
                    <p>Some websites detect ad blockers by checking the height of a banner ad. If it loads it will have a height over 0.</p>
                    <div class="adtest">
                        <span id="adtest3"><i class="fas fa-spinner fa-pulse"></i>&nbsp;Checking</span>
                    </div>
                </div>
            </div>

            <!-- Example Ad -->
            <div class="adBanner">
                <div style="background: darkred; color: white;" class="blockForAd">
                    <h2>The Tea Store</h2>
                    <p>Hi, I'm an ad. Would you like to order a cup of tea?</p>

                    <div class="adexample">
                        <span class="ad-button-green"><a class="adtext" href="https://www.youtube.com/watch?v=6n3pFFPSlW4"><i class="fas fa-shopping-cart"></i>&nbsp;Order Now $9999.99</a></span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>

    <!-- Banner Ad Tester -->
    <div id="wrapfabtest"><div class="adBanner" id="adTester"></div></div>

    <script src="./js/ads.js" type="text/javascript"></script>
    <script type="text/javascript">var adblock = true;</script>
    <script src="./js/adframe.js" type="text/javascript"></script>
    <script src="./js/base.js" type="text/javascript"></script>
    <script src="http://tests.marblevortex.com/adtester/ads.js" type="text/javascript"></script>
</body>
</html>