<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <style type="text/css">
        @import "css/style.css";
    </style>
    <title>24 Heures Chrono</title>
</head>
<body>
    <div id="clock"></div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
    <script type="text/javascript">
        $('#clock').countdown({until: $.countdown.UTCDate(+2, 2011, 8-1, 13, 14, 0, 0, 0), layout: '{d<}{dn} {dl} {d>}' + '{hnn}{sep}{mnn}{sep}{snn}'});
    </script>
</body>
</html>
<?php
