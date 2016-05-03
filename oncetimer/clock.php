<DOCTYPE html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>tomatoplans</title>

#face { stroke-width: 2px; stroke: #fff; }
#hour, #min, #sec { stroke-width: 1px; fill: #333; stroke: #555; }
#sec { stroke: #f55; }


</head>

<body>

    <svg id="clock" viewBox="0 0 100 100">
        <circle id="face" cx="50" cy="50" r="45"/>
        <g id="hands">
        <rect id="hour" x="48.5" y="12.5" width="5" height="40" rx="2.5" ry="2.55" />
        <rect id="min" x="48" y="12.5" width="3" height="40" rx="2" ry="2"/>
        <line id="sec" x1="50" y1="50" x2="50" y2="16" />
        </g>
    </svg>

</body>

<script>

    setInterval(function() {
        function r(el, deg) {
            el.setAttribute('transform', 'rotate('+ deg +' 50 50)')
        }
        var d = new Date()
        r(sec, 6*d.getSeconds())
        r(min, 6*d.getMinutes())
        r(hour, 30*(d.getHours()%12) + d.getMinutes()/2)
    }, 1000)

</script>

</html>

