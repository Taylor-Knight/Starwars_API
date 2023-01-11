function capitalizeWords(element) { //function to capitalise the fist letter of every key
    // return arr.map(element => {
      return element.charAt(0).toUpperCase() + element.slice(1).toLowerCase();
    // }); tried as a loop but removed this due to there only 1 word on the keys so it didn't need to loop
  }

function peopleSearch(){
    $.ajax({
        url: "/people",
        type:'GET',
        data: {
            searchPeople: $("#searchPeople").val() //specifying user input data request
        }, success: function(data) { 
            const obj = JSON.parse(data); // initially the data comes through as a string and I had to pars the data to change it to an object which allows me to loop through it
            displayPerson(obj) //displaying the outcome on the front end
            
      },
      error: function(error) {
        alert("Error: ID Doesn't Exist") //error message
      }
    });
}

function displayPerson(obj){ //apending data from the api search to div within the blade
    var html = '';
    // html += obj;

    Object.keys(obj).forEach(key => {
        html += capitalizeWords(key) + ' : ' + obj[key] + '<br>' //loopng through the json object and setting how I want it to be desplayed
    });
    
    var peopleContainer = $(document.getElementById('peopleContainer'))
    peopleContainer.html(html) //this initially was written 'peopleContainer.apend(html)' 
    //but changed it so the new searches weren't being printed under the old
}

function filmSearch(){
    $.ajax({
        url: "/films",
        type:'GET',
        data: {
            searchFilms: $("#searchFilms").val()
        }, success: function(data) { 
            const obj = JSON.parse(data);
            displayFilm(obj)
            
      },
      error: function(error) {
        alert("Error: ID Doesn't Exist")
      }
    });
}

function displayFilm(obj){
    var html = '';

    Object.keys(obj).forEach(key => {
        html += capitalizeWords(key) + ' : ' + obj[key] + '<br>'
    });
    
    var filmContainer = $(document.getElementById('filmContainer'))
    filmContainer.html(html)
}

function planetSearch(){
    $.ajax({
        url: "/planets",
        type:'GET',
        data: {
            searchPlanets: $("#searchPlanets").val()
        }, success: function(data) { 
            const obj = JSON.parse(data);
            displayPlanet(obj)
            
      },
      error: function(error) {
        alert("Error: ID Doesn't Exist")
      }
    });
}

function displayPlanet(obj){
    var html = '';

    Object.keys(obj).forEach(key => {
        html += capitalizeWords(key) + ' : ' + obj[key] + '<br>'
    });
    
    var planetContainer = $(document.getElementById('planetContainer'))
    planetContainer.html(html)
}

function speciesSearch(){
    $.ajax({
        url: "/species",
        type:'GET',
        data: {
            searchSpecies: $("#searchSpecies").val()
        }, success: function(data) { 
            const obj = JSON.parse(data);
            displaySpecies(obj)
            
      },
      error: function(error) {
        alert("Error: ID Doesn't Exist")
      }
    });
}

function displaySpecies(obj){
    var html = '';

    Object.keys(obj).forEach(key => {
        html += capitalizeWords(key) + ' : ' + obj[key] + '<br>'
    });
    
    var speciesContainer = $(document.getElementById('speciesContainer'))
    speciesContainer.html(html)
}

function starshipSearch(){
    $.ajax({
        url: "/starships",
        type:'GET',
        data: {
            searchStarships: $("#searchStarships").val()
        }, success: function(data) { 
            const obj = JSON.parse(data);
            displayStarships(obj)
            
      },
      error: function(error) {
        alert("Error: ID Doesn't Exist - 1 and 4 don't exist") // entry 1 and 4 don't exist
      }
    });
}

function displayStarships(obj){
    var html = '';

    Object.keys(obj).forEach(key => {
        html += capitalizeWords(key) + ' : ' + obj[key] + '<br>'
    });
    
    var starshipContainer = $(document.getElementById('starshipContainer'))
    starshipContainer.html(html)
}

function vehicleSearch(){
    $.ajax({
        url: "/vehicles",
        type:'GET',
        data: {
            searchVehicles: $("#searchVehicles").val()
        }, success: function(data) { 
            const obj = JSON.parse(data);
            displayVehicles(obj)
            
      },
      error: function(error) {
        alert("Error: ID Doesn't Exist - start at 4") // entries 1, 2 and 3 don't exist on the SWAPI site
      }
    });
}

function displayVehicles(obj){
    var html = '';

    Object.keys(obj).forEach(key => {
        html += capitalizeWords(key) + ' : ' + obj[key] + '<br>'
    });
    
    var vehicleContainer = $(document.getElementById('vehicleContainer'))
    vehicleContainer.html(html)
}