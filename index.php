<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ocrad</title>
</head>
<body>
    <script src="ocrad.js"></script>
    <img id="img" src="<?php echo $_GET['image']; ?>"></img>

    <script> 

    
    var delayInMilliseconds = 3000; //3 second
    let image =document.getElementById("img");
    setTimeout(function() {
   let string =  OCRAD(image); 
    alert(string);
}, delayInMilliseconds);


    
  
  
    </script> 

</body>
</html>