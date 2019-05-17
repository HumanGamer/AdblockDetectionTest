<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdBlock Detection Test</title>
    <link rel="stylesheet" type="text/css" href="./css/base.css" />
</head>
<body>
    <header>

    </header>
    <main>
        <div id="page_head">
            <h1>Ad Block Detection</h1>
        </div>
        <div id="content">
            <div class="block">
                <h2>ads.js</h2>
                <p>Some websites attempt to block ads by using a file called ads.js as ad blockers will block these.</p>
                <div class="adtest">
                    <span id="adtest1">N/A</span>
                </div>
            </div>
            <div class="block">
                <h2>Test</h2>
            </div>
            <div class="block">
                <h2>Test</h2>
            </div>
            <div class="block">
                <h2>Test</h2>
            </div>
        </div>
    </main>
    <footer>

    </footer>

    <script src="./js/ads.js" type="text/javascript"></script>
    <script type="text/javascript">

        if (document.getElementById('0Wna5W3mpo'))
            document.getElementById('adtest1').innerHTML = "Unblocked";
        else
            document.getElementById('adtest1').innerHTML = "Blocked";

    </script>
</body>
</html>