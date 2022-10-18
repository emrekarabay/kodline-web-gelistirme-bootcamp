<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>emre</title>
</head>
<body>



<div class="disDiv">

    <input type="password" placeholder="password" id="password">
    <input type="password" placeholder="confirm password " id="confirmpassword" onblur="kontrol()">

    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="text">

    <button onclick="mavi()">MAVİ</button>

</div>


<script>
    var renk=1;

    setInterval(function mavi() {
            if (renk==1){
                for(var i=0;document.getElementsByTagName("input").length;i++){
                    document.getElementsByTagName("input")[i].style.background = "blue";
                    renk=0;
                }
            }
            else{
                for(var i=0;document.getElementsByTagName("input").length;i++){
                    document.getElementsByTagName("input")[i].style.background = "red";
                    renk=1;

                }
            }
        },500);

</script>






</body>
</html>