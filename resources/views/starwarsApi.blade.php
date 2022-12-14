<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="js/starwars.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starwars</title>

    <style>
        body{
            background-color:black;
            /* text-align: center; */
            color: yellow
        }
    </style>
</head>
<body>
    <div>
        <h1>StarWars</h1>
        <label for="searchPeople">Starwars People Search:</label>
        <span><input type="text" id="searchPeople" name="searchPeople">
        <button type="button" onClick="starwarsApi()">Search</button></span>
    </div>
    <div id="peopleContainer"></div>
</body>
</html>

<!-- <script type="text/javascript"> // struggled with linking a js file to the blade at first.
    function starwarsApi(){
        $.ajax({
            url: "/people",
            data: $("#searchPeople").val()
        }).done(function() {

        });
    }
</script> -->
