<!doctype html>
<html lang="zh">
<head>
    <script src="raphael.2.1.0.min.js"></script>
    <script src="justgage.1.0.1.js"></script>
</head>

<body>
    <div id="g1"></div>

    <script src="js/raphael-2.1.4.min.js"></script>
    <script src="js/justgage.js"></script>
    <script>
      var g1;

      window.onload = function(){
        var g1 = new JustGage({
          id: "g1",
          value: getRandomInt(0, 100),
          min: 0,
          max: 100,
          title: "Big Fella",
          donut: true,
          gaugeWidthScale: 0.6,
          counter: true
        });
        setInterval(function() {
          g1.refresh(getRandomInt(50, 100));
        }, 2500);
      };
    </script>
</body>

</html>