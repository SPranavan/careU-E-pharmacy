<?php require APPROOT . '/views/inc/main_header.php'; ?>

<head>
<script>
        "use strict";
    
        function initMap() {
          const CONFIGURATION = {
            "ctaTitle": "Checkout",
            "mapOptions": {"center":{"lat":37.4221,"lng":-122.0841},"fullscreenControl":true,"mapTypeControl":false,"streetViewControl":true,"zoom":11,"zoomControl":true,"maxZoom":22,"mapId":""},
            "mapsApiKey": "AIzaSyBxaZ9SAoN7CISs1W75ajz6ExfsE_9oP9A",
            "capabilities": {"addressAutocompleteControl":true,"mapDisplayControl":true,"ctaControl":true}
          };
          const componentForm = [
            'location',
            'locality',
            'administrative_area_level_1',
            'country',
            'postal_code',
          ];
    
          const getFormInputElement = (component) => document.getElementById(component + '-input');
          const map = new google.maps.Map(document.getElementById("gmp-map"), {
            zoom: CONFIGURATION.mapOptions.zoom,
            center: { lat: 37.4221, lng: -122.0841 },
            mapTypeControl: false,
            fullscreenControl: CONFIGURATION.mapOptions.fullscreenControl,
            zoomControl: CONFIGURATION.mapOptions.zoomControl,
            streetViewControl: CONFIGURATION.mapOptions.streetViewControl
          });
          const marker = new google.maps.Marker({map: map, draggable: false});
          const autocompleteInput = getFormInputElement('location');
          const autocomplete = new google.maps.places.Autocomplete(autocompleteInput, {
            componentRestrictions: { country: 'lk' },
            fields: ["address_components", "geometry", "name"],
            types: ["address"],
          });
          
          autocomplete.addListener('place_changed', function () {
            marker.setVisible(false);
            const place = autocomplete.getPlace();
            if (!place.geometry) {
              // User entered the name of a Place that was not suggested and
              // pressed the Enter key, or the Place Details request failed.
              window.alert('No details available for input: \'' + place.name + '\'');
              return;
            }
            
            const addressComponents = place.address_components;
            const isInColomboDistrict = addressComponents.some(component => {
              return component.long_name === 'Colombo' && component.types.includes('administrative_area_level_2');
            });
            
            if (!isInColomboDistrict) {
              window.alert('Please enter an address within the Colombo district.');
              getFormInputElement('location').value = '';
              return;
            }
            
            renderAddress(place);
            fillInAddress(place);
          });
          
    
          function fillInAddress(place) {  // optional parameter
            const addressNameFormat = {
              'street_number': 'short_name',
              'route': 'long_name',
              'locality': 'long_name',
              'administrative_area_level_1': 'short_name',
              'country': 'long_name',
              'postal_code': 'short_name',
            };
            const getAddressComp = function (type) {
              for (const component of place.address_components) {
                if (component.types[0] === type) {
                  return component[addressNameFormat[type]];
                }
              }
              return '';
            };
            getFormInputElement('location').value = getAddressComp('street_number') + ' '
                      + getAddressComp('route');
            for (const component of componentForm) {
              // Location field is handled separately above as it has different logic.
              if (component !== 'location') {
                getFormInputElement(component).value = getAddressComp(component);
              }
            }
          }
    
          function renderAddress(place) {
            map.setCenter(place.geometry.location);
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);
          }
        }
        </script>

</head>

<main class="content"> 

<div class="body-left">


    
</div>

     
    <div class="body-right">
             

    <div class="container-2">

                <h3 class="para-3">First time to join ?</h3>
                <p class="para-4">Fill the following information to upload prescription.</p>
                <form action="<?php echo URLROOT; ?>/users/register" method="POST">
                    
                    <div class="row">
                      <div class="col-25">
                        <label for="fname">First Name:<span style="color:red;">*</span></label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="fname" name="fName" value="<?php echo $data['fName']; ?>">
                        <span style="color: red;"><?php echo $data['fName_err'];?></span>
                        <br><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="lname">Last Name:<span style="color:red;">*</span></label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="lname" name="lName" value="<?php echo $data['lName']; ?>">
                        <span style="color: red;"><?php echo $data['lName_err'];?></span>
                        <br><br>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="birthDate">Birth Date:</label>
                    </div>
                    <div class="col-75">
                        <input type="date" id="birthDate" name="birthDate" value="<?php echo $data['birthDate']; ?>" ><br>
                        <span style="color: red;"><?php echo $data['birthDate_err'];?></span>
                        <br><br>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="telNo">Mobile Number:<span style="color:red;">*</span></label>
                      </div>
                      <div class="col-75">
                        <input type="tel" id="telNo" name="mobile" value="<?php echo $data['mobile']; ?>">
                        <span style="color: red;"><?php echo $data['mobile_err'];?></span>
                        <br><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="mail">Email:<span style="color:red;">*</span></label>
                      </div>
                      <div class="col-75">
                        <input type="email" id="mail" name="email" value="<?php echo $data['email']; ?>">
                        <span style="color: red;"><?php echo $data['email_err'];?></span>
                        <br><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="sa">Street Address:<span style="color:red;">*</span></label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="location-input" name="address" value="<?php echo $data['address']; ?>"/>
                        <span style="color: red;"><?php echo $data['address_err'];?></span>
                        <br><br>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-25">
                        <label for="city">city:<span style="color:red;">*</span></label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="locality-input" name="city" value="<?php echo $data['city']; ?>"/>
                        <span style="color: red;"><?php echo $data['city_err'];?></span>
                        <br><br>
                      </div>
                    </div>
                    <!-- <div class="row">
                      <div class="col-25">
                        <label for="city">City<span style="color:red;">*</span></label>
                      </div>
                      <div class="col-75">
                        <select name="city" id="locality-input" value="">
                          <option value="Kandy">Kandy</option>
                          <option value="Colombo">Colombo</option>
                          <option value="Jaffna">Jaffna</option>
                        </select>
                        <span style="color: red;"><?php echo $data['city_err'];?></span>
                        <br><br>
                      </div>
                    </div> -->
                    <div class="row">
                      <div class="col-25">
                        <label for="pw">Password:<span style="color:red;">*</span></label>
                      </div>
                      <div class="col-75">
                        <input type="password" id="pw" name="password" value="<?php echo $data['password']; ?>">
                        <span style="color: red;"><?php echo $data['password_err'];?></span>
                        <br><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="cpw">Confirm Password:<span style="color:red;">*</span></label>
                      </div>
                      <div class="col-75">
                        <input type="password" id="cpw" name="confirm_password" value="<?php echo $data['confirm_password']; ?>">
                        <span style="color: red;"><?php echo $data['confirm_password_err'];?></span>
                        <br>
                      </div>
                    </div>
                    
                    <br>
                    
                    <br>
                    <div class="row">

                     <button type="submit" name="register" class="button-3" style="vertical-align:middle"><span>Create</span></button>
                     <a href="#" class="cancel-btn"><span>Cancel</span></a>

                     
                    </div>
                    </form>
                
            </div>
        
    </div>

    <br>

</main>
<div class="map" id="gmp-map"></div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxaZ9SAoN7CISs1W75ajz6ExfsE_9oP9A&libraries=places&callback=initMap&solution_channel=GMP_QB_addressselection_v1_cABC" async defer></script>


<?php require APPROOT . '/views/inc/footer.php'; ?>

    