'use strict'

function searchData() {
    // creating the XMLHttpRequest object
    var request = new XMLHttpRequest();

    // installing the XMLHttpRequest object 
    request.open("POST", "search.php");

    // defining event listener for readystatechange event 
    request.onreadystatechange = function() {
        // check if the request was complete and was successful
        if(this.readyState === 4 && this.status === 200 ) {
            // inserting the response from the server 
            document.getElementById("result").innerHTML = this.responseText

        }
    };

    // retrieving the form data 
    var myForm = document.getElementById("myForm");
    var myForm = new FormData(myForm);

    // send the request to the server 
    request.send(FormData);

}