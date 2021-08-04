<?php 

function pcp_sc_single_provider() {
			$uid = '';
			if( isset($_GET['uid']) ){
				$uid = $_GET['uid'];
			}
			
			$url_with_search_param = 'https://npiregistry.cms.hhs.gov/api/?number='	. $uid . '&version=2.1';
			
			$json = file_get_contents($url_with_search_param);
			$search_obj = json_decode($json);
			$result_show = $search_obj->result_count; 
			$p_data = $search_obj->results[0];
	ob_start();
	?> 
	<script>
		function fbDataTosho(profileData,elmID){
			if( profileData ){ document.getElementById(elmID).textContent =  profileData }
		}
		firebase.database().ref('users/provider/<?= $uid ?>').on('value',(snap)=>{
				//	var totalRecord =  snap.numChildren();
				//	console.log("totalRecord : ", totalRecord);
					var profileData = snap.val();
					console.log("profileData::: ",profileData);
					fbDataTosho(profileData.firstName,'firstName');
					fbDataTosho(profileData.middleName,'middleName');
					fbDataTosho(profileData.lastName,'lastName');
					fbDataTosho(profileData.npiNumber,'npiNumber');
					fbDataTosho(profileData.email,'email');
					fbDataTosho(profileData.officeNumber,'officeNumber');
					fbDataTosho(profileData.phoneNumber,'phoneNumber');
					fbDataTosho(profileData.suffix,'suffix');
					fbDataTosho(profileData.serviceType,'serviceType');
					fbDataTosho(profileData.speciality,'speciality');
					fbDataTosho(profileData.prefix,'prefix');
					fbDataTosho(profileData.address1,'address1');
					fbDataTosho(profileData.address2,'address2');
					fbDataTosho(profileData.city,'city');
					fbDataTosho(profileData.state,'state');
					fbDataTosho(profileData.zipCode,'zipCode');
					if( profileData.profileImage ){ document.getElementById('profileImage').src =  profileData.profileImage }

					initMap(profileData);
			  });
			  
			  function initMap(profileData){
					const myLatLng = { lat: profileData.location.lat, lng: profileData.location.lng };
					const map = new google.maps.Map(document.getElementById("map"), {
						zoom: 10,
						center: myLatLng,
						icon: "<?php echo plugins_url( 'patientaccess-custom-plugin/assets/img/' ); ?>location-icon-sm.png"
					});
					new google.maps.Marker({
						position: myLatLng,
						map,
						title: profileData.firstName + ' ' + profileData.middleName + ' ' + profileData.lastName,
					});
				}
	</script>
	
					<table class="single_prov_data"> 
						<tr>
							<td colspan="2">
								<h4>
									<span id="firstName"></span> 
									<span id="middleName"></span> 
									<span id="lastName"></span> 
								</h4>
								<p>
									suffix<b>: <span id="suffix"></span></b> &nbsp; | &nbsp; 
									Service Type: <b><span id="serviceType"></span></b><br>
									Speciality: <b><span id="speciality"></span></b> &nbsp; | &nbsp; 
									Prefix: <b><span id="prefix"></span></b>
								</p>
							</td>
    						<td rowspan="2" style="vertical-align: middle;text-align: center;"><img src="" id="profileImage" alt="Profile Pic" style="max-width: 300px;"></td>
						</tr>
						<tr>
							<td>
								<p>
									NPI: <b><span id="npiNumber"></span></b><br>
									Email: <b><span id="email"></span></b><br>
									Office Phone: <b><span id="officeNumber"></span></b><br>
									Other Phone: <b><span id="phoneNumber"></span></b>
								</p>
								<p>
									Address 1: <b><span id="address1"></span></b><br>
									Address 2: <b><span id="address2"></span></b><br>
									City: <b><span id="city"></span></b> &nbsp; | &nbsp; 
									State: <b><span id="state"></span></b> &nbsp; | &nbsp; 
									ZipCode: <b><span id="zipCode"></span></b>
								</p>
							</td>
						</tr>
					</table>
				<div id="map" style="width: 100%;height: 500px;"></div>
	<?php 
	return ob_get_clean();
}
add_shortcode( 'single_provider', 'pcp_sc_single_provider' );

