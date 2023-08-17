<?php
// defined('_JEXEC') or die('Restricted access');

// phpinfo();
?>
<!DOCTYPE html>
<!-- https://www.w3schools.com/graphics/svg_rect.asp -->
<html>
<head>
    <script>
      function makeDraggable(evt) {
        var svg = evt.target;
        svg.addEventListener('mousedown', startDrag);
        svg.addEventListener('mousemove', drag);
        svg.addEventListener('mouseup', endDrag);

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


        function startMove(evt, moveType){
           alert("12233" + evt);
           x1 = evt.clientX;
           y1 = evt.clientY;
           document.documentElement.setAttribute("onmousemove","moveIt(evt)")
           
           if (moveType == 'single'){
            C = evt.target;
           }
           else {
            C = evt.target.parentNode;
           }
        }

        function moveIt(evt){
            translation = C.getAttributeNS(null, "transform").slice(10,-1).split(' ');
          sx = parseInt(translation[0]);
          sy = parseInt(translation[1]);

          C.setAttributeNS(null, "transform", "translate(" + (sx + evt.clientX - x1) + " " + (sy + evt.clientY - y1) + ")");
          x1 = evt.clientX;
          y1 = evt.clientY;
        }

        function endMove(){
          document.documentElement.setAttributeNS(null, "onmousemove",null)
        }
    }
    </script>
</head>
<body>

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 400 300" onload="makeDraggable(evt)">
    <rect x="0" y="0" width="100%" height="100%" fill="dodgerblue"/>

    <g transform="translate(0 0)">
      <circle id="circle1" 
          onmousedown="startMove(evt, 'single')" onmouseup="endMove()"
          transform="translate(60 200)" cx="0" cy="0" r="22"
          fill="blue" stroke="black" stroke-width="8"/>
      <circle id="circle2" 
          onmousedown="startMove(evt, 'single')" onmouseup="endMove()"
          transform="translate(200 200)" cx="0" cy="0" r="22"
          fill="grey" stroke="black" stroke-width="8"/>
      <circle id="circle3" 
          onmousedown="startMove(evt, 'group')" onmouseup="endMove()"
          transform="translate(50 50)" cx="0" cy="0" r="22"
          fill="orange" stroke="black" stroke-width="8"/>
    </g>

    </svg>

</body>
</html>

