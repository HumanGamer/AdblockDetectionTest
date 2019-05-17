<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdBlock Detection Test</title>
    <link rel="stylesheet" type="text/css" href="./css/base.css?v=1" />
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
                    <h2>Test</h2>
                    <p>Test 3</p>
                    <div class="adtest">
                        <span id="adtest3"><i class="fas fa-spinner fa-pulse"></i>&nbsp;Checking</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="block">
                    <h2>Test</h2>
                    <p>Test 4</p>
                    <div class="adtest">
                        <span id="adtest4"><i class="fas fa-spinner fa-pulse"></i>&nbsp;Checking</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>

    <script src="./js/ads.js" type="text/javascript"></script>
    <script type="text/javascript">var adblock = true;</script>
    <script src="./js/adframe.js" type="text/javascript"></script>
    <script src="./js/base.js" type="text/javascript"></script>
</body>
</html>