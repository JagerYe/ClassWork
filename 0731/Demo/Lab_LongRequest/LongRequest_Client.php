<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Insert title here</title>
</head>

<body>
    Test: <input type="text" id="txtTest" />
    <hr>
    <div id="debug"></div>

    <script>
        // var data = " \r\n";
        // var xhr = new XMLHttpRequest();
        // xhr.open("GET", "LongRequest_Server.php", true);
        // xhr.onprogress = function(e) {
        //     // document.getElementById("debug").innerHTML = xhr.responseText;
        //     responseText = xhr.responseText;
        //     lastEvent = responseText.replace(data, "");
        //     document.getElementById("debug").innerHTML = lastEvent;
        //     data = responseText;

        // }
        // xhr.send(null);


        // function displayTime(){
        //     debug.innerHTML = Date();
        //     setTimeout(displayTime,1000);
        // }
        // displayTime();

        setInterval(function() {
            debug.innerHTML = Date();
        }, 1000);
    </script>

</body>

</html>