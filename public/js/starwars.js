function starwarsApi(){
    $.ajax({
        url: "/people",
        type:'GET',
        data: {
            searchPeople: $("#searchPeople").val() //specifying user input data request
        }, success: function(data) { 
            const obj = JSON.parse(data);
            displayData(obj) //displaying the outcome on the front end
            
      },
      error: function(xhr) {
        //Do Something to handle error
      }
    });
}

function displayData(obj){ //apemding data from the api search to div within the blade
    var html = '';
    // html += obj;

    Object.keys(obj).forEach(key => {
        html += key + ' : ' + obj[key] + '<br>'
    });
    
    var peopleContainer = $(document.getElementById('peopleContainer'))
    peopleContainer.append(html)
  
}
