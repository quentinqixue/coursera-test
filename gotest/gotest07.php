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

        function getMousePosition(evt) {
          var CTM = svg.getScreenCTM();
          return {
            x: (evt.clientX - CTM.e) / CTM.a,
            y: (evt.clientY - CTM.f) / CTM.d
          };
        }

        var selectedElement, offset;

        function startDrag(evt) {
          if (evt.target.classList.contains('draggable')) {
            selectedElement = evt.target;
            offset = getMousePosition(evt);
            offset.x -= parseFloat(selectedElement.getAttributeNS(null, "x"));
            offset.y -= parseFloat(selectedElement.getAttributeNS(null, "y"));
          }
        }

        function drag(evt) {
          if (selectedElement) {
            var coord = getMousePosition(evt);
            selectedElement.setAttributeNS(null, "x", coord.x - offset.x);
            selectedElement.setAttributeNS(null, "y", coord.y - offset.y);
          }
        }

        function endDrag(evt) {
          selectedElement = null;
        }
      }
    ]]> </script>
    
  <rect x="0" y="0" width="30" height="20" class="background"/>
  <g>
  <rect class="draggable" x="4" y="5" width="8" height="10" fill="#007bff"/>
  <rect class="draggable" x="14" y="15" width="8" height="10" fill="#007bff"/>
  </g>
  <rect class="static" x="18" y="5" width="8" height="10" fill="#888"/>
</svg>
