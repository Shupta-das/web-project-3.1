<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="checkbox">
        <input type="checkbox" name="checkbox" id="checkbox" checked> Check
    </label>
    <button id="btn" onclick="cc();">show</button>
</body>
<script>
    function cc(){
        const cp = document.getElementById("checkbox");
        console.log(cp.checked);
    }
    
</script>
</html>