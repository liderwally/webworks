<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
        body {
            width: auto;
            height: 200px;
            background-color: rgba(0, 0, 0, 0.4);
            color: black;
        }
    </style>

    <body>

    </body>

    <script src="/Web/devices.js"></script>

    <script>

        htmlbody = document.querySelector("body");
        device = createBinSwitch("frontBulb", 1234);
        device2 = createBinSwitch("backBulb", 1235);
        htmlbody.append(device);
        htmlbody.append(device2);
    </script>
</html>