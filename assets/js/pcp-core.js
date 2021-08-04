
var zipInput = document.getElementById('id_postal_code');

// Init a timeout variable to be used below
let timeout = null;
let locCity = '';
let locState = '';

	// Listen for keystroke events
	zipInput.addEventListener('keyup', function (e) {
		// Clear the timeout if it has already been set.
		// This will prevent the previous task from executing
		// if it has been less than <MILLISECONDS>
		clearTimeout(timeout);

		// Make a new timeout set to go off in 1000ms (1 second)
		timeout = setTimeout(function () {
			
			loadJSON('https://maps.googleapis.com/maps/api/geocode/json?address='+ zipInput.value +'&key=AIzaSyDmnI7-QHCE5Kw-tq8FmfKaKKDGRZTemOE',
				function(data) { 
			 	//	console.log(data); 
		  			
					if( data.status == "OK" ){
					//	console.log('postcode_localities:', data.results[0].postcode_localities);
						
						if( data.results[0].postcode_localities != undefined ){
							locCity = data.results[0].postcode_localities[0];
						}

						
						for (let [key, sValue] of Object.entries(data.results[0].address_components)) {
							if( sValue.types[0] == 'administrative_area_level_1' &&  sValue.types[1] == 'political' ){
								locState = sValue.short_name;
								locCity = sValue.long_name;
							}
						}
						
						if( data.results[0].postcode_localities != undefined ){
							locCity = data.results[0].postcode_localities[0];
						}
						
					}
					document.getElementById('id_state').value = locState;
					document.getElementById('id_city').value = locCity;
					
				},
					function(xhr) { console.error(xhr); } 
		  	);

			console.log('Input Value ZIP:', zipInput.value);
		}, 700);
	});




jQuery(document).ready(function($){
    "use strict";
	
});

/*
var placeSearch, autocomplete;
  var componentForm = {
    street_number: 'short_name',
   // route: 'long_name',
   /// locality: 'long_name',
   // administrative_area_level_1: 'short_name',
   // country: 'long_name',
    zip: 'short_name'
  };

function initAutocomplete() {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  autocomplete = new google.maps.places.Autocomplete(
    /// @type {!HTMLInputElement} 
	(document.getElementById('autocomplete')),
    {types: ['geocode']});

  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details
  // and fill the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}
*/








