function peopleSearch(){
    $.ajax({
        url: "/people",
        type:'GET',
        data: {
            searchPeople: $("#searchPeople").val() //specifying user input data request
        }, success: function(data) { 
            const obj = JSON.parse(data);
            displayPerson(obj) //displaying the outcome on the front end
            
      },
      error: function(xhr) {
        //to handle error
      }
    });
}

function displayPerson(obj){ //apemding data from the api search to div within the blade
    var html = '';
    // html += obj;

    Object.keys(obj).forEach(key => {
        html += key + ' : ' + obj[key] + '<br>'
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
      error: function(xhr) {
       
      }
    });
}

function displayFilm(obj){
    var html = '';

    Object.keys(obj).forEach(key => {
        html += key + ' : ' + obj[key] + '<br>'
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
      error: function(xhr) {
       
      }
    });
}

function displayPlanet(obj){
    var html = '';

    Object.keys(obj).forEach(key => {
        html += key + ' : ' + obj[key] + '<br>'
    });
    
    var planetContainer = $(document.getElementById('planetContainer'))
    planetContainer.html(html)
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
      error: function(xhr) {
       
      }
    });
}

function displayStarships(obj){
    var html = '';

    Object.keys(obj).forEach(key => {
        html += key + ' : ' + obj[key] + '<br>'
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
      error: function(xhr) {
       
      }
    });
}

function displayVehicles(obj){
    var html = '';

    Object.keys(obj).forEach(key => {
        html += key + ' : ' + obj[key] + '<br>'
    });
    
    var vehicleContainer = $(document.getElementById('vehicleContainer'))
    vehicleContainer.html(html)
}