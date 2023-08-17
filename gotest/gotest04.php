<?php
// defined('_JEXEC') or die('Restricted access');

// phpinfo();
?>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 20" onload="makeDraggable(evt)">
  <style>
    .background {
      fill: #eee;
    }
    .static {
      cursor: not-allowed;
    }
    .draggable {
      cursor: move;
    }
  </style>
    
    <script type="text/javascript"><![CDATA[
      function makeDraggable(evt) {
        var svg = evt.target;
        svg.addEventListener('mousedown', startDrag);
        svg.addEventListener('mousemove', drag);
        svg.addEventListener('mouseup', endDrag);

        var selectedElement = null;
        function startDrag(evt) {
          if (evt.target.classList.contains('draggable')) {
            selectedElement = evt.target;
          }
        }

        function drag(evt) {
          if (selectedElement) {
            var x = parseFloat(selectedElement.getAttributeNS(null, "x"));
            selectedElement.setAttributeNS(null, "x", x + 0.1);
          }
        }

        function endDrag(evt) {
          selectedElement = null;
        }
      }
    ]]> </script>
    
  <rect x="0" y="0" width="30" height="20" class="background"/>
  <rect class="draggable" x="4" y="5" width="8" height="10" fill="#007bff"/>
  <rect class="static" x="18" y="5" width="8" height="10" fill="#888"/>
</svg>
