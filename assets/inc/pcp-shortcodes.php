<?php

function search_form($args)
{
	$city = '';
	if ($args['city'] != '') {
		$city = $args['city'];
	}
	$state = '';
	if ($args['state'] != '') {
		$state = $args['state'];
	}
	$postal_code = '';
	if ($args['postal_code'] != '') {
		$postal_code = $args['postal_code'];
	}
	$address_purpose = '';
	if ($args['address_purpose'] != '') {
		$address_purpose = $args['address_purpose'];
	}
	$enumeration_type = '';
	if ($args['enumeration_type'] != '') {
		$enumeration_type = $args['enumeration_type'];
	}
	$npi_number = '';
	if ($args['npi_number'] != '') {
		$npi_number = $args['npi_number'];
	}
	$first_name = '';
	if ($args['first_name'] != '') {
		$first_name = $args['first_name'];
	}
	$last_name = '';
	if ($args['last_name'] != '') {
		$last_name = $args['last_name'];
	}

	$adv_sr_opn = 'adv_search_x';
	if ($_GET['first_name'] != '' || $_GET['last_name'] != '' || $_GET['npi_number'] != '') {
		$adv_sr_opn = 'adv_search_o';
	}

	ob_start();
	// echo '--' . $state . '||';
?>

	<form action="<?php echo get_site_url(); ?>/search-doctors" method="GET" class="custom_form <?= $adv_sr_opn ?>">
		<div class="elementor-row">
			<div class="elementor-column elementor-col-20">
				<label for="id_city">City:</label>
				<input type="text" id="id_city" name="city" class="full_width" value="<?= $city ?>">
			</div>

			<div class="elementor-column elementor-col-20">
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

				<script>
					document.getElementById('id_state').value = '<?= $state ?>';
				</script>
			</div>
			<div class="elementor-column elementor-col-10">
				<label class="control-label" for="id_postal_code">Postal Code <span class="nonbold"> </span></label>
				<input id="id_postal_code" class="form-control full_width" name="postal_code" type="text" value="<?= $postal_code ?>">
			</div>
			<div class="elementor-column elementor-col-20">
				<label class="" for="id_address_purpose">Address Purpose <span class="nonbold"> </span></label>
				<select name="address_purpose" class="form-control full_width" id="id_address_purpose">
					<option value="LOCATION" selected="">LOCATION</option>
					<option value="MAILING">MAILING</option>
					<option value="PRIMARY">PRIMARY</option>
					<option value="SECONDARY">SECONDARY</option>
				</select>
				<script>
					document.getElementById('id_address_purpose').value = '<?= $address_purpose ?>';
				</script>
			</div>
			<div class="elementor-column elementor-col-20">
				<label class="" for="id_entity_type">NPI Type <small>(Enumeration Type)</small><span class="nonbold"> </span></label>
				<select name="enumeration_type" class="form-control full_width" id="id_entity_type">
					<option selected="selected" value="">Any</option>
					<option value="NPI-1">Individual</option>
					<option value="NPI-2">Organization</option>
				</select>
				<script>
					document.getElementById('id_entity_type').value = '<?= $enumeration_type ?>';
				</script>
			</div>
			<div class="elementor-column elementor-col-10 adv_src_x">
				<label class="control-label" for="">&nbsp; <span class="nonbold"> </span></label>
				<input type="hidden" name="skip" value="0">
				<button type="submit" name="" class="wpforms-submit  full_width">
					<i aria-hidden="true" class="fas fa-search"></i>
				</button>
			</div>
		</div>
		<br>
		<div class="elementor-row">
			<div class="elementor-column elementor-col-20">
				<h6 class="advance_src">
					<a class="adv_src_tgl_o"><small>[Advance Search]</small></a>
					<a class="adv_src_tgl_x">[X]</a>
				</h6>
			</div>
			<div class="elementor-column elementor-col-30 adv_src_o">
				<label class="" for="npi_number">NPI Number <span class="nonbold"> </span></label>
				<input id="npi_number" class="form-control full_width" name="npi_number" type="number" value="<?= $npi_number ?>">
			</div>
			<div class="elementor-column elementor-col-20 adv_src_o">
				<label class="control-label" for="id_first_name">First Name <span class="nonbold"> </span></label>
				<input id="id_first_name" class="form-control full_width" name="first_name" type="text" value="<?= $first_name ?>">
			</div>
			<div class="elementor-column elementor-col-20 adv_src_o">
				<label class="control-label" for="id_last_name">Last Name <span class="nonbold"> </span></label>
				<input id="id_last_name" class="form-control full_width" name="last_name" type="text" value="<?= $last_name ?>">
			</div>
			<div class="elementor-column elementor-col-10 adv_src_o">
				<label class="control-label" for="">&nbsp; <span class="nonbold"> </span></label>
				<button type="submit" name="" class="wpforms-submit  full_width">
					<i aria-hidden="true" class="fas fa-search"></i>
				</button>
			</div>
		</div>
	</form>
<?php
	return ob_get_clean();
}

// Add Shortcode
function pcp_sc_doctor_searching_on_google_map()
{

	ob_start();

	return ob_get_clean();
}
// add_shortcode( 'pcp_sc_doctor_searching_on_google_map', 'pcp_sc_doctor_searching_on_google_map' );

function pcp_sc_banner_doctor_searching_inputs()
{
	return search_form([
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
add_shortcode('pcp_sc_banner_doctor_searching_inputs', 'pcp_sc_banner_doctor_searching_inputs');
/* ======================================================================== */
/* ======================================================================== */


function pcp_register_core_js4searchresult()
{
	global $post;
	if (is_a($post, 'WP_Post') && has_shortcode($post->post_content, 'pcp_sc_providers_src_results_with_gmap') || has_shortcode($post->post_content, 'pcp_sc_banner_prov_search_form')) {
		wp_enqueue_script('google-map-api-script2', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDmnI7-QHCE5Kw-tq8FmfKaKKDGRZTemOE&callback=initAutocomplete&libraries=places&v=weekly', 'jquery', time(), true);
	}
}
add_action('wp_enqueue_scripts', 'pcp_register_core_js4searchresult');

function pcp_enque_initMap()
{
	global $post;
	if (is_a($post, 'WP_Post') && has_shortcode($post->post_content, 'single_provider')) {
		wp_enqueue_script('google-map-api-script', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDmnI7-QHCE5Kw-tq8FmfKaKKDGRZTemOE&callback=initMap&libraries=&v=weekly', 'jquery', time(), true);
	}
}
add_action('wp_enqueue_scripts', 'pcp_enque_initMap');



// Shortcode
function pcp_sc_fnc_providers_src_results_with_gmap()
{

	$city = '';
	$state = '';
	$postal_code = $zip = '';
	$address_purpose = '';
	$enumeration_type = 'NPI-1';
	$first_name = '';
	$last_name = '';
	$speciality = '';
	$providerType = '';
	$npiNumber = '';
	$skip = '0';

	if (isset($_GET['city'])) {
		$city = $_GET['city'];
	}
	if (isset($_GET['state'])) {
		$state = $_GET['state'];
	}
	if (isset($_GET['zip'])) {
		$zip = $_GET['zip'];
	}
	if (isset($_GET['postal_code'])) {
		$zip = $_GET['postal_code'];
	}
	if (isset($_GET['address_purpose'])) {
		$address_purpose = $_GET['address_purpose'];
	}
	if (isset($_GET['enumeration_type'])) {
		$enumeration_type = $_GET['enumeration_type'];
	}
	if (isset($_GET['first_name'])) {
		$first_name = $_GET['first_name'];
	}
	if (isset($_GET['last_name'])) {
		$last_name = $_GET['last_name'];
	}
	if (isset($_GET['speciality'])) {
		$speciality = $_GET['speciality'];
	}
	if (isset($_GET['serviceType'])) {
		$providerType = $_GET['serviceType'];
	}
	if (isset($_GET['npiNumber'])) {
		$npiNumber = $_GET['npiNumber'];
	}
	if (isset($_GET['skip'])) {
		$skip = $_GET['skip'];
	}



	$url_with_npi_search_param = 'https://npiregistry.cms.hhs.gov/api/?enumeration_type=NPI-1&taxonomy_description=&use_first_name_alias=&organization_name=&address_purpose=&city=';
	$url_with_npi_search_param .= urlencode($city);
	$url_with_npi_search_param .= '&state=' . $state;
	$url_with_npi_search_param .= '&postal_code=' . $zip;
	$url_with_npi_search_param .= '&first_name=' . $first_name;
	$url_with_npi_search_param .= '&last_name=' . $last_name;
	$url_with_npi_search_param .= '&number=' . $npiNumber;
	$url_with_npi_search_param .= '&country_code=US&limit=10&skip=' . $skip . '&version=2.1';


	$npi_json = file_get_contents($url_with_npi_search_param);
	$npi_data_arr = json_decode($npi_json);



	$result_show = $npi_data_arr->result_count; 
	$page_no = '';
	if( isset($_GET['skip']) ){
		$page_no = $_GET['skip']*1 + 1;
	}

	global $wp;
	$current_url = home_url( $wp->request ); 
//	echo $current_url . '/?'. 'city=';
	$next_url_with_search_param = 'city=' . urlencode($city);
	$next_url_with_search_param .= '&state=' . $state;
	$next_url_with_search_param .= '&enumeration_type=' . $enumeration_type;
	$next_url_with_search_param .= '&first_name=' . $first_name;
	$next_url_with_search_param .= '&last_name=' . $last_name;
	$next_url_with_search_param .= '&number=' . $npiNumber;
	$next_url_with_search_param .= '&address_purpose=' . $address_purpose;
	$next_url_with_search_param .= '&postal_code=' . $postal_code;
	$skip_prev_val = $skip_next_val = '';
	if( isset($_GET['skip'])){
			$skip_next_val = $_GET['skip'] + 1;
			$skip_prev_val = $_GET['skip'] - 1;
	}





	ob_start();

	//	echo '<pre>';
	//	print_r($npi_json);
	//	echo '</pre>';
?>
	<style type="text/css">
		/* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
		#map {
			height: 500px;
			width: 100%;
		}
	</style>
	<script>
		//	console.log(<?php // echo $json; 
							?>);
		//	const practitionersJson = <?php // echo $json; 
										?>;
		// The following example creates complex markers to indicate beaches near
		// Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
		// to the base of the flagpole.


		/*
	 let map;

		function initMap() {
		  map = new google.maps.Map(document.getElementById("map"), {
			 center: { lat: -34.397, lng: 150.644 },
			 zoom: 8,
		  });
		}
		*/
		function arrayMatch(str1, str2) {
			var arr = [];
			str1 = str1.toLowerCase();
			str2 = str2.toLowerCase();
			const arr1 = str1.split(" ");
			const arr2 = str2.split(" ");

			//	console.log(arr1);
			// for array1 
			for (var i in arr1) {
				if (arr2.indexOf(arr1[i]) != -1)
					arr.push(arr1[i]);
			}
			//	console.log(arr);

			return arr.sort((x, y) => x - y);
		}




		function src_res_html(sValue) {
			console.log(sValue);
			return '<tr>' +
				'<td><b>' + sValue.firstName + ' ' + sValue.middleName + ' ' + sValue.lastName + '</b><br>' + sValue.address1 + '</td>' +
				'<td>' + sValue.speciality + '</td>' +
				'<td>' + sValue.npiNumber + '</td>' +
				'</tr>';
		}

		const fbDbRoot = firebase.database().ref().child('users/provider')
		const state = '<?= $state ?>';
		const zip = '<?= $zip ?>';
		const city = '<?= $city ?>';
		const firstName = '<?= $first_name ?>';
		const lastName = '<?= $last_name ?>';
		const providerType = '<?= $providerType ?>';
		const speciality = '<?= $speciality ?>';
		const npiNumber = '<?= $npiNumber ?>';
		const fbQuery = fbDbRoot.orderByChild('state').equalTo(state);
		const sResultV = {};


		/* ================================== NPI Data ================================== */
		loadJSON('<?php echo $url_with_npi_search_param; ?>',
			function(data) {
				console.log('url_with_npi_search_param: ', data);
			},
			function(xhr) {
				console.error(xhr);
			}
		);
		/* ==================================/NPI Data ================================== */





		fbQuery.on('value', (snap) => {
			var qryData = snap.val();
			var sResult = {};
			var sResultHTML = '';
			//	console.log('Data From Firebase: ',qryData);
			for (let [key, sValue] of Object.entries(qryData)) {
				sValue.dataFromNPI = 0;
				//	let str = sValue.city;

				if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip city firstName lastName providerType speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length
				) {
					console.log('zip city firstName lastName providerType speciality ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip city firstName lastName providerType  npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip city firstName lastName  speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip city firstName  providerType speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip city  lastName providerType speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip  firstName lastName providerType speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log(' city firstName lastName providerType speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length
				) {
					console.log('zip city firstName lastName providerType ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip city firstName lastName  npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip city firstName  speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip city  providerType speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip  lastName providerType speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log(' firstName lastName providerType speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length
				) {
					console.log(' city firstName lastName providerType speciality ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length
				) {
					console.log('zip city firstName lastName ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip city firstName  npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip city speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip  providerType speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log(' lastName providerType speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length
				) {
					console.log(' firstName lastName providerType speciality ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length
				) {
					console.log(' city firstName lastName providerType ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length
				) {
					console.log('zip city firstName ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip city  npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip  speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log(' providerType speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length
				) {
					console.log(' lastName providerType speciality ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length
				) {
					console.log(' firstName lastName providerType ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length
				) {
					console.log(' city firstName lastName ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					city != '' && arrayMatch(sValue.city, city).length
				) {
					console.log('zip city ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log('zip  npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					speciality != '' && arrayMatch(sValue.speciality, speciality).length &&
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log(' speciality npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					providerType != '' && arrayMatch(sValue.providerType, providerType).length &&
					speciality != '' && arrayMatch(sValue.speciality, speciality).length
				) {
					console.log(' providerType speciality ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					lastName != '' && arrayMatch(sValue.lastName, lastName).length &&
					providerType != '' && arrayMatch(sValue.providerType, providerType).length
				) {
					console.log(' lastName providerType ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					firstName != '' && arrayMatch(sValue.firstName, firstName).length &&
					lastName != '' && arrayMatch(sValue.lastName, lastName).length
				) {
					console.log(' firstName lastName ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					city != '' && arrayMatch(sValue.city, city).length &&
					firstName != '' && arrayMatch(sValue.firstName, firstName).length
				) {
					console.log(' city firstName ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					zip != '' && sValue.zipCode == zip
				) {
					console.log('zip ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					city != '' && arrayMatch(sValue.city, city).length
				) {
					console.log(' city');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					firstName != '' && arrayMatch(sValue.firstName, firstName).length
				) {
					console.log(' firstName ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					lastName != '' && arrayMatch(sValue.lastName, lastName).length
				) {
					console.log(' lastName ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					providerType != '' && arrayMatch(sValue.providerType, providerType).length
				) {
					console.log(' providerType ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					speciality != '' && arrayMatch(sValue.speciality, speciality).length
				) {
					console.log(' speciality ');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else if (
					npiNumber != '' && sValue.npiNumber == npiNumber
				) {
					console.log(' npiNumber');
					sResult[key] = sValue;
					sResultHTML += src_res_html(sValue);
				} else {
					console.log("Not any selected ...");
					//	sResult[key] = sValue;
					/*
					sResultHTML += '<tr>' +
						'<td><b>' + sValue.firstName + ' ' + sValue.middleName + ' ' + sValue.lastName + '</b><br>'+ sValue.address1 +'</td>' +
						'<td>' + sValue.speciality +'</td>' +
						'<td>' + sValue.npiNumber +' | ' + sValue.zipCode + ' | ' + sValue.state + '</td>' +
						'</tr>';
						*/
					//	sResultV = sValue;
					//	console.log(sValue);
				}

			}
			var npiJson = <?php echo $npi_json; ?>;
			//	console.log('npiJsonnpiJsonnpiJsonnpiJsonnpiJsonnpiJson:', npiJson.Errors);
			if (!npiJson.Errors) {
				for (let [npiJsonK, npiJsonV] of Object.entries(npiJson.results)) {
					sResult['npi_' + npiJsonK] = {

						firstName: npiJsonV.basic.first_name,
						middleName: '',
						lastName: npiJsonV.basic.last_name,
						address1: npiJsonV.addresses[0].address_1,
						city: npiJsonV.addresses[0].city,
						npiNumber: npiJsonV.number,
						dataFromNPI: 1
					};
					//	console.log('checking data inside of npiJsonV:',npiJsonV);
				}
			}

			//	console.log('checking data inside of sResult:',sResult);
			document.getElementById('search_result_provs').innerHTML = sResultHTML;
			//	initMap();

			initMap(sResult);

		});

		function initMap(sResult) {
			const map = new google.maps.Map(document.getElementById("map"), {
				center: {
					lat: 38.397,
					lng: -100.644
				},
			});

			//	console.log('jjjjjjjjjjjj',sResult);

			const geocoder = new google.maps.Geocoder();

			addr_to_latlong2(geocoder, map, sResult);
			initAutocomplete();
		}


		function addressToLocationLatLng(geocoder, map, address, key, nameTitle, addrAndCity, markIcon) {

			geocoder.geocode({
				address: address
			}, function(results, status) {
				console.log('results >>> ', results);
				//	console.log('status >>> ', status);
				//	console.log('ggg >>> ', ggg);

				if (status === "OK") {
					//	map.setCenter(results[0].geometry.location);

					//	contentString = infoData.basic.credential + ' ' + infoData.basic.first_name + ' ' + infoData.basic.last_name;

					const infowindow = new google.maps.InfoWindow({
						content: '<a href="<?php echo home_url("single-provider/?uid="); ?>' + key + '" ><b>' + nameTitle + '</b><br><small>' + addrAndCity + '</small></a>',
						maxWidth: 200,
					});

					console.log('Check lat lng:', results[0].geometry.location);
					positionLatLng = results[0].geometry.location;
					//	if( infoData.location.lat && infoData.location.lng ){
					//		positionLatLng = infoData.location;
					//	}

					marker = new google.maps.Marker({
						map: map,
						position: positionLatLng,
						icon: markIcon
					});
					marker.addListener("click", (function(marker, key) {
						return function() {
							//	map.setZoom(16);
							//	map.setCenter(marker.getPosition());
							map.panTo(marker.getPosition());
							infowindow.open(map, marker);
						}
					})(marker, key));
					//	 infowindow.open(map, marker);

					//	 marker.setMap(map);
					bounds.extend(marker.position);
					map.fitBounds(bounds);

				} else {
					alert(
						"Geocode was not successful for the following reason: " + status
					);
				}
			});
		}



		function addr_to_latlong2(geocoder, map, sResult) {

			const bounds = new google.maps.LatLngBounds();
			var marker, infoData, contentString;
			var positionLatLng;
			var markIcon = "<?php echo plugins_url('patientaccess-custom-plugin/assets/img/'); ?>location-icon-sm.png";
			for (let [key, sValue] of Object.entries(sResult)) {
				//	for (const [itmKey, itmVal] of Object.entries(sResult)) {
				//	for (let i = 0; i < Object.keys(sResult).length; i++) {
				// const beach = practitionersJson.results[i];
				infoData = sValue;
				console.log('itmVal', sValue);
				console.log('infoData.dataFromNPI', infoData.dataFromNPI);

				//	/*
				const addrAndCity = infoData.address1 + ', ' + infoData.city;

				const nameTitle = infoData.firstName + ' ' + infoData.middleName + ' ' + infoData.lastName;
				const npiNumber = infoData.npiNumber;
				//	console.log( 'nameTitle',nameTitle );

				const address = addrAndCity;

				const infowindow = new google.maps.InfoWindow({
					content: '<a href="<?php echo home_url("single-provider/?uid="); ?>' + key + '" ><b>' + nameTitle + '</b><br><small>' + addrAndCity + '</small></a>',
					maxWidth: 200,
				});

				if (infoData.dataFromNPI == 1) {
					markIcon = "<?php echo plugins_url('patientaccess-custom-plugin/assets/img/'); ?>location-icon-npi-sm.png";
				}

				console.log('markIcon --- ', markIcon);

				if (infoData.location) {
					console.log('markIcon location === ', markIcon);

					positionLatLng = infoData.location;
					marker = new google.maps.Marker({
						map: map,
						position: positionLatLng,
						icon: markIcon
					});
					marker.addListener("click", (function(marker, key) {
						return function() {
							//	map.setZoom(16);
							//	map.setCenter(marker.getPosition());
							map.panTo(marker.getPosition());
							infowindow.open(map, marker);
						}
					})(marker, key));
					bounds.extend(marker.position);
					map.fitBounds(bounds);
				} else {
					console.log('markIcon === ', markIcon);
					addressToLocationLatLng(geocoder, map, address, key, nameTitle, addrAndCity, markIcon);
				}

			} // for loop end 
		}



		//	console.log(GEOCODE_GOOGLE('Tongi'));
	</script>
	<br>
	<?php if ($state == '') {
		echo '<h4 style="color: red;">Please enter State</h4>';
	} ?>
	<h5>Result: </h5>
	<div id="map"></div>

	<?php
	if ($_GET['skip'] > 0) { ?>
		<a href="?<?php echo $next_url_with_search_param . '&skip=' . $skip_prev_val; ?>" class="" style="margin:5px 0;float: left;font-weight: bold;font-size:1.5em;border: 1px solid;padding: 5px 20px;">
			<i aria-hidden="true" class="fas fa-arrow-left"></i> Previus
		</a>
	<?php }

	if ($result_show > 9) { ?>
		<a href="?<?php echo $next_url_with_search_param . '&skip=' . $skip_next_val; ?>" class="" style="margin:5px 0;float: right;font-weight: bold;font-size:1.5em;border: 1px solid;padding: 5px 20px;">
			Next <i aria-hidden="true" class="fas fa-arrow-right"> </i>
		</a>
	<?php } ?>

	<table class="search_result_tbl">
		<thead>
			<th>Name</th>
			<th>Specialty </th>
			<th>NPI</th>
		</thead>
		<tbody id="search_result_provs">
			<tr>
				<td colspan="3">
					<center>Loading ....</center>
				</td>
			</tr>
		</tbody>
		<tbody id="">
			<?php
			if (isset($npi_data_arr->results)) {

				foreach ($npi_data_arr->results as $npi_res_k => $npi_res_v) { ?>
					<tr>
						<td><strong><?= $npi_res_v->basic->name ?></strong><span class="npm_lbl">NPI</span><br>
							<?php
							$addr_count = count($npi_res_v->addresses);
							foreach ($npi_res_v->addresses as $addr_k => $addr_v) {
								echo '- ' . $addr_v->address_1;
								if ($addr_k > 0 || $addr_k + 1 < $addr_count) {
									echo '<br>';
								}
							}
							?>
						</td>
						<td><?= $npi_res_v->taxonomies[0]->desc ?> </td>
						<td><?= $npi_res_v->number ?></td>
					</tr>
			<?php	}
			} ?>
		</tbody>
		<tfoot>
			<th>Name</th>
			<th>Specialty </th>
			<th>NPI</th>
		</tfoot>
	</table>
	<?php
	if ($_GET['skip'] > 0) { ?>
		<a href="?<?php echo $next_url_with_search_param . '&skip=' . $skip_prev_val; ?>" class="" style="float: left;font-weight: bold;font-size:1.5em;border: 1px solid;padding: 5px 20px;">
			<i aria-hidden="true" class="fas fa-arrow-left"></i> Previus
		</a>
	<?php }

	if ($result_show > 9) { ?>
		<a href="?<?php echo $next_url_with_search_param . '&skip=' . $skip_next_val; ?>" class="" style="float: right;font-weight: bold;font-size:1.5em;border: 1px solid;padding: 5px 20px;">
			Next <i aria-hidden="true" class="fas fa-arrow-right"> </i>
		</a>
	<?php } ?>
<?php
	return ob_get_clean();
}
add_shortcode('pcp_sc_providers_src_results_with_gmap', 'pcp_sc_fnc_providers_src_results_with_gmap');
