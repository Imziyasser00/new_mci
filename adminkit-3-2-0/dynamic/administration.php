<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="lol">
        helloooo
    </div>
    <div id="koko">lolololo</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slidetoggle@3.3.2/dist/slidetoggle.min.js">
    </script>

    <script>
    $(document).ready(function() {
        $("#lol").click(function() {
            $("#koko").slideToggle("slow");
        });
    });
    </script>
</body>


</html>