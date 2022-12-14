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
            /* text-align: center; chose to style each div differently */ 
            color: yellow
        }
    </style>
</head>
<body>
    <div>
        <h1>StarWars API</h1>
    </div>
    <div style="margin-top:20px;>
        <label for="searchPeople">People Search:</label>
        <span><input type="text" id="searchPeople" name="searchPeople">
        <button type="button" onClick="peopleSearch()">Search</button></span>
        <!-- creating the text entry fields, id, label, button, and on click function -->
    </div>
    <div id="peopleContainer" style="margin-top:10px";></div>

    <div style="margin-top:20px;>
        <label for="searchFilms">Film Search:</label>
        <span><input type="text" id="searchFilms" name="searchFilms">
        <button type="button" onClick="filmSearch()">Search</button></span>
    </div>
    <div id="filmContainer" style="margin-top:10px";></div>

    <div style="margin-top:20px;>
        <label for="searchPlanets">Planet Search:</label>
        <span><input type="text" id="searchPlanets" name="searchPlanets">
        <button type="button" onClick="planetSearch()">Search</button></span>
    </div>
    <div id="planetContainer" style="margin-top:10px";></div>

    <div style="margin-top:20px;>
        <label for="searchSpecies">Species Search:</label>
        <span><input type="text" id="searchSpecies" name="searchSpecies">
        <button type="button" onClick="speciesSearch()">Search</button></span>
    </div>
    <div id="speciesContainer" style="margin-top:10px";></div>

    <div style="margin-top:20px;>
        <label for="searchStarships">Starship Search:</label>
        <span><input type="text" id="searchStarships" name="searchStarships">
        <button type="button" onClick="starshipSearch()">Search</button></span>
    </div>
    <div id="starshipContainer" style="margin-top:10px";></div>
    <!-- as with vehicles, starship 1 doesn't exist but only noticed after I found the issue with vehicles-->

    <div style="margin-top:20px;>
        <label for="searchVehicles">Vehicle Search:</label>
        <span><input type="text" id="searchVehicles" name="searchVehicles">
        <button type="button" onClick="vehicleSearch()">Search</button></span>
    </div>
    <div id="vehicleContainer" style="margin-top:10px";></div>
    <!-- vehicles api searches does't appear to be working on my site for 1, 2 and 3. thought that there was an issue with my code,
     but realised the enties didn't exist-->
</body>
</html>

<!-- <script type="text/javascript"> // struggled with linking a js file to the blade at first. first also relates to the point made 
    // in the file web.php around not having set up laravel correctly. once fixed I create the starwars.js file.
    function starwarsApi(){
        $.ajax({
            url: "/people",
            data: $("#searchPeople").val()
        }).done(function() {

        });
    }
</script> -->
