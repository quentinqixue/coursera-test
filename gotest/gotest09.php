<?php
// defined('_JEXEC') or die('Restricted access');

// phpinfo();
?>
<!DOCTYPE html>
<!-- https://www.w3schools.com/graphics/svg_rect.asp -->
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script type="text/javascript" src="js/dump_src.js"></script>
</head>
<body>
    <h1>hello</ha1>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <svg id="body" class="ui-widget-content" width="300" height="200px">
      <g id="entry">
        <rect width="100" height="200" visibility="hidden" pointer-events="all"/>
        <rect class="entry-body" height="20" width="100" x="0" y="0"></rect>
        <rect class="entry-body" height="20" width="100" x="0" y="50"></rect>
      </g>
    </svg>
    <script>
        $("#entry").draggable();
        const xxx = document.getElementById("entry").childNodes;
        // dump([123,456,789], false);
        console.log('2726 - ' + xxx);
        for (node in xxx) {
            console.log('node: ' + node);
        }
    </script>
</body>
</html>

