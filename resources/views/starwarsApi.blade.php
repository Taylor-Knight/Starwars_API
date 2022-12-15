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
        <h1>StarWars API</h1>
    </div>
    <div style="margin-top:20px;>
        <label for="searchPeople">People Search:</label>
        <span><input type="text" id="searchPeople" name="searchPeople">
        <button type="button" onClick="peopleSearch()">Search</button></span>
    </div>
    <div id="peopleContainer"></div>

    <div style="margin-top:20px;>
        <label for="searchFilms">Film Search:</label>
        <span><input type="text" id="searchFilms" name="searchFilms">
        <button type="button" onClick="filmSearch()">Search</button></span>
    </div>
    <div id="filmContainer"></div>

    <div style="margin-top:20px;>
        <label for="searchPlanets">Planet Search:</label>
        <span><input type="text" id="searchPlanets" name="searchPlanets">
        <button type="button" onClick="planetSearch()">Search</button></span>
    </div>
    <div id="planetContainer"></div>

    <div style="margin-top:20px;>
        <label for="searchSpecies">Species Search:</label>
        <span><input type="text" id="searchSpecies" name="searchSpecies">
        <button type="button" onClick="speciesSearch()">Search</button></span>
    </div>
    <div id="speciesContainer"></div>

    <div style="margin-top:20px;>
        <label for="searchStarships">Starship Search:</label>
        <span><input type="text" id="searchStarships" name="searchStarships">
        <button type="button" onClick="starshipSearch()">Search</button></span>
    </div>
    <div id="starshipContainer"></div>

    <div style="margin-top:20px;>
        <label for="searchVehicles">Vehicle Search:</label>
        <span><input type="text" id="searchVehicles" name="searchVehicles">
        <button type="button" onClick="vehicleSearch()">Search</button></span>
    </div>
    <div id="vehicleContainer"></div>
    <!-- vehicles api searches dont appear to be working on the site -->
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
