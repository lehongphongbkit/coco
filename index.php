<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>CÔ CÔ XINH ĐẸP</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
  <script type="text/javascript" charset="utf-8">
    function hasClassName(inElement, inClassName)
    {
        var regExp = new RegExp('(?:^|\\s+)' + inClassName + '(?:\\s+|$)');
        return regExp.test(inElement.className);
    }

    function addClassName(inElement, inClassName)
    {
        if (!hasClassName(inElement, inClassName))
            inElement.className = [inElement.className, inClassName].join(' ');
    }

    function removeClassName(inElement, inClassName)
    {
        if (hasClassName(inElement, inClassName)) {
            var regExp = new RegExp('(?:^|\\s+)' + inClassName + '(?:\\s+|$)', 'g');
            var curClasses = inElement.className;
            inElement.className = curClasses.replace(regExp, ' ');
        }
    }

    function toggleClassName(inElement, inClassName)
    {
        if (hasClassName(inElement, inClassName))
            removeClassName(inElement, inClassName);
        else
            addClassName(inElement, inClassName);
    }

    function toggleShape()
    {
      var shape = document.getElementById('shape');
      if (hasClassName(shape, 'ring')) {
        removeClassName(shape, 'ring');
        addClassName(shape, 'cube');
      } else {
        removeClassName(shape, 'cube');
        addClassName(shape, 'ring');
      }
      
      var stage = document.getElementById('stage');
      if (hasClassName(shape, 'ring'))
        stage.style.webkitTransform = 'translateZ(-200px)';
      else
        stage.style.webkitTransform = '';
    }
  </script>
</head>
<body>

  <div class="controls">
    <div style="text-align: center;"><button onclick="toggleShape()">Chuyển hiệu ứng</button></div>
  </div>

  <div id="container">
    <div id="stage">
      <div id="shape" class="cube backfaces">
        <div class="plane one"></div>
        <div class="plane two"></div>
        <div class="plane three"></div>
        <div class="plane four"></div>
        <div class="plane five"></div>
        <div class="plane six"></div>
        <div class="plane seven"></div>
        <div class="plane eight"></div>
        <div class="plane nine"></div>
        <div class="plane ten"></div>
        <div class="plane eleven"></div>
        <div class="plane twelve"></div>
      </div>
    </div>
  </div>
  <!--// https://www.facebook.com/nhquyet //-->
</body>
</html>
