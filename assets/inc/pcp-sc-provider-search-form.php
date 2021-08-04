<?php 


function fb_search_form( $args ){

	$city =''; 					
	$state =''; 				
	$postal_code = $zip = ''; 		
	$address_purpose =''; 	
	$enumeration_type =''; 	
	$first_name =''; 	
	$last_name =''; 	
	$speciality =''; 	
	$providerType =''; 	
	$npiNumber =''; 	
	$skip ='0'; 	
	
	if(isset($_GET['city'])){$city = $_GET['city'];}
	if(isset($_GET['state'])){$state = $_GET['state'];}
	if(isset($_GET['zip'])){$zip = $_GET['zip'];}
	if(isset($_GET['postal_code'])){$zip = $_GET['postal_code'];}
	if(isset($_GET['address_purpose'])){$address_purpose = $_GET['address_purpose'];}
	if(isset($_GET['enumeration_type'])){$enumeration_type = $_GET['enumeration_type'];}
	if(isset($_GET['first_name'])){$first_name = $_GET['first_name'];}
	if(isset($_GET['last_name'])){$last_name = $_GET['last_name'];}
	if(isset($_GET['speciality'])){$speciality = $_GET['speciality'];}
	if(isset($_GET['serviceType'])){$providerType = $_GET['serviceType'];}
	if(isset($_GET['npiNumber'])){$npiNumber = $_GET['npiNumber'];}
	if(isset($_GET['skip'])){$skip = $_GET['skip'];}
	
	ob_start(); 
	// echo '--' . $state . '||';
	?>
	<form action="<?php echo get_site_url(); ?>/search-providers" method="GET" class="custom_form ">
	<?php 
	if( isset($_GET['form']) && $_GET['form'] == 'advs' ){
		 ?>
			<div class="elementor-row" style="margin-bottom: 15px;">
				<div class="elementor-column elementor-col-25">
					<label for="id_firstname">First Name:</label>
					<input type="text" id="id_firstname" name="first_name" class="full_width" value="<?=$first_name?>">
				</div>
				<div class="elementor-column elementor-col-25">
					<label for="id_lastname">Last Name:</label>
					<input type="text" id="id_lastname" name="last_name" class="full_width" value="<?=$last_name?>">
				</div>
				<div class="elementor-column elementor-col-25">
					<label for="id_servicetype">serviceType:</label>
					<input type="text" id="id_servicetype" name="serviceType" class="full_width" value="<?=$serviceType?>">
				</div>
				<div class="elementor-column elementor-col-25">
					<label class="" for="id_speciality">Specialty <span class="nonbold"> </span></label>
					<select name="speciality" class="form-control full_width" id="id_speciality">
						<option value="" >Any </option>
						<option value="Allergy and immunology" >Allergy and immunology </option>
						<option value="Anesthesiology" >Anesthesiology </option>
						<option value="Dermatology" >Dermatology</option>
						<option value="Diagnostic radiology" >Diagnostic radiology </option>
						<option value="Emergency medicine" >Emergency medicine </option>
						<option value="Family medicine" >Family medicine</option>
						<option value="Internal medicine" >Internal medicine</option>
						<option value="Medical genetics" >Medical genetics </option>
						<option value="Neurology" >Neurology</option>
						<option value="Nuclear medicine" >Nuclear medicine </option>
						<option value="Obstetrics and gynecology" >Obstetrics and gynecology</option>
						<option value="Ophthalmology" >Ophthalmology</option>
						<option value="Pathology" >Pathology</option>
						<option value="Pediatrics" >Pediatrics </option>
						<option value="Physical medicine and rehabilitation" >Physical medicine and rehabilitation </option>
						<option value="Preventive medicine" >Preventive medicine</option>
						<option value="Psychiatry" >Psychiatry </option>
						<option value="Radiation oncology" >Radiation oncology </option>
						<option value="Surgery" >Surgery</option>
						<option value="Urology" >Urology</option>
					</select>
					<script> document.getElementById('id_speciality').value = '<?=$speciality?>'; </script>
				</div>
			</div>
			<div class="elementor-row">
				<div class="elementor-column elementor-col-20">
					<label for="id_city">City:</label>
					<input type="text" id="id_city" name="city" class="full_width" value="<?=$city?>">
				</div>
				
				<div class="elementor-column elementor-col-20">
					<label class="" for="id_state">State <span class="nonbold"> </span></label>
					<select name="state" class="form-control full_width" id="id_state" required>
						<option value="" > - Select - </option>
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AS">American Samoa</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="AA">Armed Forces America</option>
						<option value="AE">Armed Forces Europe /Canada / Middle East / Africa</option>
						<option value="AP">Armed Forces Pacific</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District of Columbia</option>
						<option value="FM">Federated States of Micronesia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="GU">Guam</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MP">Mariana Islands, Northern</option>
						<option value="MH">Marshall Islands</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="PR">Puerto Rico</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VI">Virgin islands</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
					
					<script> document.getElementById('id_state').value = '<?=$state?>'; </script>
				</div>
				<div class="elementor-column elementor-col-20">
					<label class="control-label" for="id_postal_code">ZIP <span class="nonbold"> </span></label>
					<input id="id_postal_code" class="form-control full_width" name="zip" type="text"  value="<?=$zip?>">
				</div>
				<div class="elementor-column elementor-col-20">
					<label class="control-label" for="id_npiNumber">NIP Number <span class="nonbold"> </span></label>
					<input id="id_npiNumber" class="form-control full_width" name="npiNumber" type="text"  value="<?=$npiNumber?>">
				</div>
				<div class="elementor-column elementor-col-20 adv_src_x">
					<label class="control-label" for="">&nbsp; <span class="nonbold"> </span></label>
					<input type="hidden" name="form" value="advs">
					<input type="hidden" name="skip" value="0">
					<button type="submit" name="" class="wpforms-submit  full_width">
						<i aria-hidden="true" class="fas fa-search"></i>
					</button>
				</div>
			</div>
		<?php 
		
	}else{ ?>

			<div class="elementor-row">
				<div class="elementor-column elementor-col-25">
					<label for="id_city">City:</label>
					<input type="text" id="id_city" name="city" class="full_width" value="<?=$city?>">
				</div>
				
				<div class="elementor-column elementor-col-25">
					<label class="" for="id_state">State <span class="nonbold"> </span></label>
					<select name="state" class="form-control full_width" id="id_state">
						<option value="" selected="">Any</option>
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AS">American Samoa</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="AA">Armed Forces America</option>
						<option value="AE">Armed Forces Europe /Canada / Middle East / Africa</option>
						<option value="AP">Armed Forces Pacific</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District of Columbia</option>
						<option value="FM">Federated States of Micronesia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="GU">Guam</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MP">Mariana Islands, Northern</option>
						<option value="MH">Marshall Islands</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="PR">Puerto Rico</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VI">Virgin islands</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
					<script> document.getElementById('id_state').value = '<?=$state?>'; </script>
				</div>
				<div class="elementor-column elementor-col-15">
					<label class="control-label" for="id_postal_code">Postal Code <span class="nonbold"> </span></label>
					<input id="id_postal_code" class="form-control full_width" name="zip" type="text"  value="<?=$zip?>">
				</div>
				<div class="elementor-column elementor-col-25">
					<label class="" for="id_address_purpose">Specialty <span class="nonbold"> </span></label>
					<select name="speciality" class="form-control full_width" id="id_speciality">
						<option value="" >Any </option>
						<option value="Allergy and immunology" >Allergy and immunology </option>
						<option value="Anesthesiology" >Anesthesiology </option>
						<option value="Dermatology" >Dermatology</option>
						<option value="Diagnostic radiology" >Diagnostic radiology </option>
						<option value="Emergency medicine" >Emergency medicine </option>
						<option value="Family medicine" >Family medicine</option>
						<option value="Internal medicine" >Internal medicine</option>
						<option value="Medical genetics" >Medical genetics </option>
						<option value="Neurology" >Neurology</option>
						<option value="Nuclear medicine" >Nuclear medicine </option>
						<option value="Obstetrics and gynecology" >Obstetrics and gynecology</option>
						<option value="Ophthalmology" >Ophthalmology</option>
						<option value="Pathology" >Pathology</option>
						<option value="Pediatrics" >Pediatrics </option>
						<option value="Physical medicine and rehabilitation" >Physical medicine and rehabilitation </option>
						<option value="Preventive medicine" >Preventive medicine</option>
						<option value="Psychiatry" >Psychiatry </option>
						<option value="Radiation oncology" >Radiation oncology </option>
						<option value="Surgery" >Surgery</option>
						<option value="Urology" >Urology</option>
					</select>
					<script> document.getElementById('id_address_purpose').value = '<?=$speciality?>'; </script>
				</div>
				<div class="elementor-column elementor-col-10 adv_src_x">
					<label class="control-label" for="">&nbsp; <span class="nonbold"> </span></label>
					<input type="hidden" name="skip" value="0">
					<button type="submit" name="" class="wpforms-submit  full_width">
						<i aria-hidden="true" class="fas fa-search"></i>
					</button>
				</div>
			</div>
		<a href="<?php echo home_url('search-providers?form=advs'); ?>">Advance Search</a>
	<?php } ?>
	</form>
	<?php 
	return ob_get_clean(); 
}



function pcp_sc_banner_prov_search_form() {
	return fb_search_form([
				'city' => '',
				'state' => '',
				'postal_code' => '',
				'address_purpose' => '',
				'enumeration_type' => '',
				'fast_name' => '',
				'last_name' => '',
				'number' => ''
			]);
}
add_shortcode( 'pcp_sc_banner_prov_search_form', 'pcp_sc_banner_prov_search_form' );

