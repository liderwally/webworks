<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        width: auto;
        height: 200px;
        background-color:rgba(0,0,0,0.4);
        color:black;
    }
    .container{
        width:100px;height:100px;font-size:20px;position: relative;
    }
    .outcover{
        width:120%;height:120%;background-color:grey;display:block;position: relative;padding:20px;transition:.8s;border: 4px ridge #fff8;padding:10px;z-index: 10;
    }
    .incover{
        width:100px;height:100px;float:left;background-color:red;border-radius:50%;transition:0.3s linear;position:absolute;border: 2px ridge #0008;box-shadow: inset 2px 4px 3px 5px #000;z-index: 11;top:0;left:0;text-align:center;line-height:25px;
    }
    #$id1{
        background-color:green;
    }


</style>
<body>

</body>
<script src="/Web/devices.js"></script>
<script>
htmlbody = document.querySelector("body");
device = createButton("frontBulb", "used for lighting infront of the house",1234);
device2 = createButton("backBulb", "used for lighting at behind of the house",1235);
htmlbody.append(device);
htmlbody.append(device2);







//[<methodtobecalled>,<nametodisplay>,<specificId>, <name>,<details>,<id>,<widows>,<min>,<max>,<steps>]





</script>
</html>



       