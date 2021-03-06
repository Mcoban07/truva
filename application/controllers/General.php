<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata("token")){
			redirect(base_url());
		}
	}
	public function getCitiesByCountryId(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$countryId = $this->input->post("countryId");
		$cities = $this->general_model->getCitiesByCountryId($countryId);
		echo json_encode($cities);
	}
	public function getDistrictsByCityId(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$countryId = $this->input->post("cityId");
		$districts = $this->general_model->getDistrictsByCityId($countryId);
		echo json_encode($districts);
	}
	public function getAreasByDistrictId(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$districtId = $this->input->post("districtId");
		$areas = $this->general_model->getAreasByDistrictId($districtId);
		echo json_encode($areas);
	}
	public function getCompanyByHoldingId(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$holdingId = $this->input->post("holdingId");
		$companies = $this->general_model->getCompanyByHoldingId($holdingId);
		echo json_encode($companies);
	}
	public function getBarsByCompanyId(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$companyId = $this->input->post("companyId");
		$bars = $this->general_model->getBarsByCompanyId($companyId);
		echo json_encode($bars);
	}
	
	public function getHoldingById()
	{
		$formFields= [
	          [
	            "name"=>"Holding Adı",
	            "id"=>"HoldingName",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Holding Adresi",
	            "id"=>"HoldingAdress",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Fatura Adresi",
	            "id"=>"InvoiceAddress",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Vergi numarası",
	            "id"=>"TaxNo",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Vergi dairesi",
	            "id"=>"TaxAdministrationName",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Fatura Telefon",
	            "id"=>"InvoiceTelephone",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Fatura Mobil Telefon",
	            "id"=>"InvoiceMobile",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Fatura E-mail",
	            "id"=>"InvoiceEmail",
	            "type"=>"email"
	          ],
	          [
	            "name"=>"Holding Telefon",
	            "id"=>"HoldingTelephone",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Holding Mobil Telefon",
	            "id"=>"HoldingMobile",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Holding Fax",
	            "id"=>"HoldingFax",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Holding e-mail",
	            "id"=>"HoldingEmail",
	            "type"=>"email"
	          ],
	          [
	            "name"=>"Holding Tabela Adı",
	            "id"=>"HoldingSign",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Ülke seçin",
	            "id"=>"CountryID",
	            "type"=>"select",
	            "disabled"=>"",
	            "class"=>"countriesinmodal"
	          ],
	          [
	            "name"=>"Şehir seçin",
	            "id"=>"CityID",
	            "type"=>"select",
	            "disabled"=>"",
	            "class"=>"citiesinmodal",
	          ],
	          [
	            "name"=>"İlçe seçin",
	            "id"=>"CountyID",
	            "type"=>"select",
	            "disabled"=>"",
	            "class"=>"districtsinmodal",
	          ],
	          [
	            "name"=>"Semt seçin",
	            "id"=>"AreaID",
	            "type"=>"select",
	            "disabled"=>"",
	            "class"=>"areasinmodal",
	          ],
	          [
	            "name"=>"Holding ID",
	            "id"=>"HoldingID",
	            "type"=>"hidden"
	          ]
	          ];
		$this->load->model("general_model");
		$holdingId = $this->input->post("holdingId");
		$holding = $this->general_model->getHoldingById($holdingId);
		$countries = $this->general_model->getCountries();
		$cities = $this->general_model->getCitiesByCountryId($holding[0]->CountryID);
		$counties = $this->general_model->getDistrictsByCityId($holding[0]->CityID);
		$areas = $this->general_model->getAreasByDistrictId($holding[0]->CountyID);
		$companies = $this->general_model->getCompanyByHoldingId($holding[0]->HoldingID);
		$i=0;
		echo '<div class="row">';
		foreach ($formFields as $key => $field) {
			$i++;
			$message = "Bu alan zorunludur";
			if($field["type"] == "email"){
				$message = "Lütfen geçerli bir mail adresi giriniz.";
			}
			$class = "";
			if($field["type"] == "hidden"){
				$class ="unvisible";
			}
			if($i%2==1 && $i!=1){
				echo '</div><div class="row">';
			}
			if($field["type"]!="select"){
				echo '<div class="col-sm-6">
				<div class="form-group form-group-default required '.$class.' ">
					<label>'.$field["name"].':</label>
					<div class="controls">
						<input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'" value="'.$holding[0]->{$field["id"]}.'">
					</div>
				</div>
			</div>';
			}else{
				if($field["id"] == "CountryID"){
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>';
						foreach ($countries as $key => $country) {
							$selected = '';
							if($country->CountryID == $holding[0]->CountryID){
								$selected = 'selected = "selected"';
							}
							echo '<option '.$selected.' value='.$country->CountryID.'>'.$country->CountryName.'</option>';
						}
						echo '</select>
					</div></div>';
				}else
				if($field["id"] == "CityID"){
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>';
						foreach ($cities as $key => $city) {
							$selected = '';
							if($city->CityID == $holding[0]->CityID){
								$selected = 'selected = "selected"';
							}
							echo '<option '.$selected.' value='.$city->CityID.'>'.$city->CityName.'</option>';
						}
						echo '</select>
					</div></div>';
				}else
				if($field["id"] == "CountyID"){
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>';
						foreach ($counties as $key => $county) {
							$selected = '';
							if($county->CountyID == $holding[0]->CountyID){
								$selected = 'selected = "selected"';
							}
							echo '<option '.$selected.' value='.$county->CountyID.'>'.$county->CountyName.'</option>';
						}
						echo '</select>
					</div></div>';
				}else
				if($field["id"] == "AreaID"){
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>';
						foreach ($areas as $key => $area) {
							$selected = '';
							if($area->AreaID == $holding[0]->AreaID){
								$selected = 'selected = "selected"';
							}
							echo '<option '.$selected.' value='.$area->AreaID.'>'.$area->AreaName.'</option>';
						}
						echo '</select>
					</div></div>';
				}else
				if($field["id"] == "CompanyID"){
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>';
						foreach ($companies as $key => $company) {
							$selected = '';
							if($company->CompanyID == $user[0]->CompanyID){
								$selected = 'selected = "selected"';
							}
							echo '<option '.$selected.' value='.$company->CompanyID.'>'.$company->CompanyName.'</option>';
						}
						echo '</select>
					</div></div>';
				}else
				{
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" '.$field["disabled"].' data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>
					</select>
				</div></div>';
				}
			}
		}
	}

	public function getHoldingByCountryId(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$countryId = $this->input->post("countryId");
		$holdings = $this->general_model->getHoldingByCountryId($countryId);
		echo json_encode($holdings);
	}

	public function getHoldingByCityId()
	{
		header("Content-type:application/json");
		$this->load->model("general_model");
		$cityId = $this->input->post("cityId");
		$holdings = $this->general_model->getHoldingByCityId($cityId);
		echo json_encode($holdings);
	}

	public function getHoldingByCountyId(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$countyId = $this->input->post("countyId");
		$holdings = $this->general_model->getHoldingByCountyId($countyId);
		echo json_encode($holdings);
	}

	public function getHoldingByAreaId(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$areaId = $this->input->post("areaId");
		$holdings = $this->general_model->getHoldingByAreaId($areaId);
		echo json_encode($holdings);
	}

	public function getHoldings(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$holdings = $this->general_model->getHoldings();
		echo json_encode($holdings);
	}

	public function getCompanyById()
	{
		$formFields= [
	          [
	            "name"=>"Şirket Adı",
	            "id"=>"CompanyName",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Şirket Adresi",
	            "id"=>"CompanyAdress",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Fatura Adresi",
	            "id"=>"InvoiceAddress",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Vergi numarası",
	            "id"=>"TaxNo",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Vergi dairesi",
	            "id"=>"TaxAdministrationName",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Fatura Telefon",
	            "id"=>"InvoiceTelephone",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Fatura Mobil Telefon",
	            "id"=>"InvoiceMobile",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Fatura E-mail",
	            "id"=>"InvoiceEmail",
	            "type"=>"email"
	          ],
	          [
	            "name"=>"Şirket Telefon",
	            "id"=>"CompanyTelephone",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Şirket Mobil Telefon",
	            "id"=>"CompanyMobile",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Şirket Fax",
	            "id"=>"CompanyFax",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Şirket e-mail",
	            "id"=>"CompanyEmail",
	            "type"=>"email"
	          ],
	          [
	            "name"=>"Şirket Tabela Adı",
	            "id"=>"CompanySign",
	            "type"=>"text"
	          ],
	          [
	            "name"=>"Ülke seçin",
	            "id"=>"CountryID",
	            "type"=>"select",
	            "disabled"=>"",
	            "class"=>"countriesinmodal"
	          ],
	          [
	            "name"=>"Şehir seçin",
	            "id"=>"CityID",
	            "type"=>"select",
	            "disabled"=>"",
	            "class"=>"citiesinmodal"
	          ],
	          [
	            "name"=>"İlçe seçin",
	            "id"=>"CountyID",
	            "type"=>"select",
	            "disabled"=>"",
	            "class"=>"districtsinmodal"
	          ],
	          [
	            "name"=>"Semt seçin",
	            "id"=>"AreaID",
	            "type"=>"select",
	            "disabled"=>"",
	            "class"=>"areasinmodal"
	          ],
	          [
	            "name"=>"Holding",
	            "id"=>"HoldingID",
	            "type"=>"select",
	            "disabled"=>"",
	            "class"=>"holdingsinmodal"
	          ],
	          [
	            "name"=>"Şirket Tipi",
	            "id"=>"CompanyTypeID",
	            "type"=>"select",
	            "disabled"=>"",
	            "class"=>"companytypeinmodal"
	          ],
	          [
	            "name"=>"id",
	            "id"=>"CompanyID",
	            "type"=>"hidden"
	          ]
	          ];
	          	$this->load->model("general_model");
		$companyId = $this->input->post("companyId");
		$company = $this->general_model->getCompanyById($companyId);
		$countries = $this->general_model->getCountries();
		$cities = $this->general_model->getCitiesByCountryId($company[0]->CountryID);
		$counties = $this->general_model->getDistrictsByCityId($company[0]->CityID);
		$areas = $this->general_model->getAreasByDistrictId($company[0]->CountyID);
		$holdings = $this->general_model->getHoldings();
		$companyTypes = $this->general_model->getCompanyTypes();
		$i=0;
		echo '<div class="row">';
		foreach ($formFields as $key => $field) {
			$i++;
			$message = "Bu alan zorunludur";
			if($field["type"] == "email"){
				$message = "Lütfen geçerli bir mail adresi giriniz.";
			}
			$class = "";
			if($field["type"] == "hidden"){
				$class ="unvisible";
			}
			if($i%2==1 && $i!=1){
				echo '</div><div class="row">';
			}
			if($field["type"]!="select"){
				echo '<div class="col-sm-6">
				<div class="form-group form-group-default required '.$class.' ">
					<label>'.$field["name"].':</label>
					<div class="controls">
						<input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'" value="'.@$company[0]->{$field["id"]}.'">
					</div>
				</div>
			</div>';
			}else{
				if($field["id"] == "CountryID"){
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>';
						foreach ($countries as $key => $country) {
							$selected = '';
							if($country->CountryID == $company[0]->CountryID){
								$selected = 'selected = "selected"';
							}
							echo '<option '.$selected.' value='.$country->CountryID.'>'.$country->CountryName.'</option>';
						}
						echo '</select>
					</div></div>';
				}else
				if($field["id"] == "CityID"){
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>';
						foreach ($cities as $key => $city) {
							$selected = '';
							if($city->CityID == $company[0]->CityID){
								$selected = 'selected = "selected"';
							}
							echo '<option '.$selected.' value='.$city->CityID.'>'.$city->CityName.'</option>';
						}
						echo '</select>
					</div></div>';
				}else
				if($field["id"] == "CountyID"){
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>';
						foreach ($counties as $key => $county) {
							$selected = '';
							if($county->CountyID == $company[0]->CountyID){
								$selected = 'selected = "selected"';
							}
							echo '<option '.$selected.' value='.$county->CountyID.'>'.$county->CountyName.'</option>';
						}
						echo '</select>
					</div></div>';
				}else
				if($field["id"] == "AreaID"){
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>';
						foreach ($areas as $key => $area) {
							$selected = '';
							if($area->AreaID == $company[0]->AreaID){
								$selected = 'selected = "selected"';
							}
							echo '<option '.$selected.' value='.$area->AreaID.'>'.$area->AreaName.'</option>';
						}
						echo '</select>
					</div></div>';
				}else
				if($field["id"] == "HoldingID"){
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>';
						foreach ($holdings as $key => $holding) {
							$selected = '';
							if($holding->HoldingID == $company[0]->HoldingID){
								$selected = 'selected = "selected"';
							}
							echo '<option '.$selected.' value='.$holding->HoldingID.'>'.$holding->HoldingName.'</option>';
						}
						echo '</select>
					</div></div>';
				}else
				if($field["id"] == "CompanyTypeID"){
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>';
						foreach ($companyTypes as $key => $companyType) {
							$selected = '';
							if($companyType->Name == $company[0]->CompanyType){
								$selected = 'selected = "selected"';
							}
							echo '<option '.$selected.' value='.$companyType->CompanyTypeID.'>'.$companyType->Name.'</option>';
						}
						echo '</select>
					</div></div>';
				}else{
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" '.$field["disabled"].' data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>
					</select>
				</div></div>';
				}
			}
		}
	}

	public function getCompanyByCountryId()
	{
		header("Content-type:application/json");
		$this->load->model("general_model");
		$countryId = $this->input->post("countryId");
		$holding = $this->general_model->getCompanyByCountryId($countryId);
		echo json_encode($holding);
	}

	public function getCompanyByCityId()
	{
		header("Content-type:application/json");
		$this->load->model("general_model");
		$cityId = $this->input->post("cityId");
		$holding = $this->general_model->getCompanyByCityId($cityId);
		echo json_encode($holding);
	}

	public function getCompanies(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$companies = $this->general_model->getCompanies();
		echo json_encode($companies);
	}

	public function getCountryById(){
		$formFields= [
		[
		"name"=>"Country Id",
		"id"=>"CountryID",
		"type"=>"hidden"
		],
		[
		"name"=>"Binary Code",
		"id"=>"BinaryCode",
		"type"=>"text"
		],
		[
		"name"=>"Triple Code",
		"id"=>"TripleCode",
		"type"=>"text"
		],
		[
		"name"=>"Ülke Adı",
		"id"=>"CountryName",
		"type"=>"text"
		],
		[
		"name"=>"Telefon Kodu",
		"id"=>"PhoneCode",
		"type"=>"text"
		]
		];
		$this->load->model("general_model");
		$countryId = $this->input->post("countryId");
		$country = $this->general_model->getCountryById($countryId);
		foreach ($formFields as $key => $field) {
			$message = "Bu alan zorunludur";
			if($field["type"] == "email"){
				$message = "Lütfen geçerli bir mail adresi giriniz.";
			}
			if($field["type"]!="select"){
				$class = "";
				if($field["type"] == "hidden"){
					$class ="unvisible";
				}
				echo '<div class="row"><div class="col-sm-12">
				<div class="form-group form-group-default '.$class.' required">
					<label>'.$field["name"].':</label>
					<div class="controls">
						<input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'" value="'.$country[0]->{$field["id"]}.'">
					</div>
				</div>
			</div></div>';
			}
		}
	}

	public function getCityById(){
		$formFields= [
			[
		            "name"=>"Id",
		            "id"=>"CityID",
		            "type"=>"hidden"
		          	],
		          	[
		            "name"=>"Şehir Adı",
		            "id"=>"CityName",
		            "type"=>"text"
		          	],
		          	[
		            "name"=>"Plaka",
		            "id"=>"PlateNo",
		            "type"=>"text"
		          	],
		          	[
		            "name"=>"Telefon Kodu",
		            "id"=>"PhoneCode",
		            "type"=>"text"
		          	],
		          	[
		            "name"=>"Ülke seçin",
		            "id"=>"CountryID",
		            "type"=>"select",
		            "disabled"=>"",
		            "class"=>""
		          	]
	          	];
		$this->load->model("general_model");
		$cityId = $this->input->post("cityId");
		$city = $this->general_model->getCityById($cityId);
		$countries = $this->general_model->getCountries();
		foreach ($formFields as $key => $field) {
			$message = "Bu alan zorunludur";
			if($field["type"] == "email"){
				$message = "Lütfen geçerli bir mail adresi giriniz.";
			}
			if($field["type"]!="select"){
				$class = "";
				if($field["type"] == "hidden"){
					$class ="unvisible";
				}
				echo '<div class="row"><div class="col-sm-12">
				<div class="form-group form-group-default '.$class.' required">
					<label>'.$field["name"].':</label>
					<div class="controls">
						<input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'" value="'.$city[0]->{$field["id"]}.'">
					</div>
				</div>
			</div></div>';
			}else{
				echo '<div class="form-group form-group-default form-group-default-select2 required">
		                        <label class="">'.$field["name"].'</label>
		                          <select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Şehir seçin" data-init-plugin="select2">
		                          <option value="0">Lütfen seçin</option>';
		                            foreach ($countries as $key => $country) {
		                            	$selected = '';
					if($country->CountryID == $city[0]->CountryID){
						$selected = 'selected = "selected"';
					}
		                              echo '<option '.$selected.' value='.$country->CountryID.'>'.$country->CountryName.'</option>';
		                            }
		                          echo '</select>
		                        </div>';
			}
		}
	}

	public function getCountyById(){
		$formFields= [
			[
		            "name"=>"Id",
		            "id"=>"CountyID",
		            "type"=>"hidden"
		          	],
		          	[
		            "name"=>"İlçe Adı",
		            "id"=>"CountyName",
		            "type"=>"text"
		          	],
		          	[
		            "name"=>"Şehir seçin",
		            "id"=>"CityID",
		            "type"=>"select",
		            "disabled"=>"",
		            "class"=>""
		          	]
	          	];
		$this->load->model("general_model");
		$countyId = $this->input->post("countyId");
		$county = $this->general_model->getDistrictsById($countyId);
		$cities = $this->general_model->getCities();
		foreach ($formFields as $key => $field) {
			$message = "Bu alan zorunludur";
			if($field["type"] == "email"){
				$message = "Lütfen geçerli bir mail adresi giriniz.";
			}
			if($field["type"]!="select"){
				$class = "";
				if($field["type"] == "hidden"){
					$class ="unvisible";
				}
				echo '<div class="row"><div class="col-sm-12">
				<div class="form-group form-group-default '.$class.' required">
					<label>'.$field["name"].':</label>
					<div class="controls">
						<input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'" value="'.$county[0]->{$field["id"]}.'">
					</div>
				</div>
			</div></div>';
			}else{
				echo '<div class="form-group form-group-default form-group-default-select2 required">
		                        <label class="">'.$field["name"].'</label>
		                          <select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Şehir seçin" data-init-plugin="select2">
		                          <option value="0">Lütfen seçin</option>';
		                            foreach ($cities as $key => $city) {
		                            	$selected = '';
					if($city->CityID == $county[0]->CityID){
						$selected = 'selected = "selected"';
					}
		                              echo '<option '.$selected.' value='.$city->CityID.'>'.$city->CityName.'</option>';
		                            }
		                          echo '</select>
		                        </div>';
			}
		}
	}

	public function getAreaById(){
		$formFields= [
			[
		            "name"=>"Id",
		            "id"=>"AreaID",
		            "type"=>"hidden"
		          	],
		          	[
		            "name"=>"Semt Adı",
		            "id"=>"AreaName",
		            "type"=>"text"
		          	],
		          	[
		            "name"=>"İlçe seçin",
		            "id"=>"CountyID",
		            "type"=>"select",
		            "disabled"=>"",
		            "class"=>""
		          	]
	          	];
		$this->load->model("general_model");
		$areaId = $this->input->post("areaId");
		$counties = $this->general_model->getDistricts();
		$area = $this->general_model->getAreaById($areaId);
		foreach ($formFields as $key => $field) {
			$message = "Bu alan zorunludur";
			if($field["type"] == "email"){
				$message = "Lütfen geçerli bir mail adresi giriniz.";
			}
			if($field["type"]!="select"){
				$class = "";
				if($field["type"] == "hidden"){
					$class ="unvisible";
				}
				echo '<div class="row"><div class="col-sm-12">
				<div class="form-group form-group-default '.$class.' required">
					<label>'.$field["name"].':</label>
					<div class="controls">
						<input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'" value="'.$area[0]->{$field["id"]}.'">
					</div>
				</div>
			</div></div>';
			}else{
				echo '<div class="form-group form-group-default form-group-default-select2 required">
		                        <label class="">'.$field["name"].'</label>
		                          <select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Şehir seçin" data-init-plugin="select2">
		                          <option value="0">Lütfen seçin</option>';
		                            foreach ($counties as $key => $county) {
		                            	$selected = '';
					if($county->CountyID == $area[0]->CountyID){
						$selected = 'selected = "selected"';
					}
		                              echo '<option '.$selected.' value='.$county->CountyID.'>'.$county->CountyName.'</option>';
		                            }
		                          echo '</select>
		                        </div>';
			}
		}
	}

	public function getAlcoholGroups(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$alcoholGroups = $this->general_model->getAlcoholGrouplist();
		echo json_encode($alcoholGroups);
	}
	public function getAlcoholGroupById(){
		$formFields= [
		[
		            "name"=>"Kod",
		            "id"=>"Code",
		            "type"=>"text"
		          	],
		          	[
		            "name"=>"Adı",
		            "id"=>"Name",
		            "type"=>"text"
		          	],
		          	[
		            "name"=>"Id",
		            "id"=>"AlcoholGroupID",
		            "type"=>"hidden"
		          	]
		];
		$this->load->model("general_model");
		$alcoholGroupId = $this->input->post("alcoholGroupId");
		$alcoholGroup = $this->general_model->getAlcoholGroupById($alcoholGroupId);
		foreach ($formFields as $key => $field) {
			$message = "Bu alan zorunludur";
			if($field["type"] == "email"){
				$message = "Lütfen geçerli bir mail adresi giriniz.";
			}
			if($field["type"]!="select"){
				$class = "";
				if($field["type"] == "hidden"){
					$class ="unvisible";
				}
				echo '<div class="row"><div class="col-sm-12">
				<div class="form-group form-group-default '.$class.' required">
					<label>'.$field["name"].':</label>
					<div class="controls">
						<input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'" value="'.$alcoholGroup[0]->{$field["id"]}.'">
					</div>
				</div>
			</div></div>';
			}
		}
	}
	public function getAlcoholTypeById(){
		$formFields= [
		[
		            "name"=>"Kod",
		            "id"=>"Code",
		            "type"=>"text"
		          	],
		          	[
		            "name"=>"Adı",
		            "id"=>"Name",
		            "type"=>"text"
		          	],
		          	[
		            "name"=>"Alkol Grubu seçin",
		            "id"=>"AlcoholGroupID",
		            "type"=>"select",
		            "disabled"=>"",
		            "class"=>""
		          	],
		          	[
		            "name"=>"Id",
		            "id"=>"AlcoholTypeID",
		            "type"=>"hidden"
		          	]
		];
		$this->load->model("general_model");
		$alcoholTypeId = $this->input->post("alcoholTypeId");
		$alcoholType = $this->general_model->getAlcoholTypeById($alcoholTypeId);
		$alcoholGroups = $this->general_model->getAlcoholGrouplist();
		foreach ($formFields as $key => $field) {
			$message = "Bu alan zorunludur";
			if($field["type"] == "email"){
				$message = "Lütfen geçerli bir mail adresi giriniz.";
			}
			if($field["type"]!="select"){
				$class = "";
				if($field["type"] == "hidden"){
					$class ="unvisible";
				}
				echo '<div class="row"><div class="col-sm-12">
				<div class="form-group form-group-default '.$class.' required">
					<label>'.$field["name"].':</label>
					<div class="controls">
						<input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'" value="'.$alcoholType[0]->{$field["id"]}.'">
					</div>
				</div>
			</div></div>';
			}else{
				echo '<div class="form-group form-group-default form-group-default-select2 required">
		                        <label class="">'.$field["name"].'</label>
		                          <select class="full-width '.$field["class"].' '.$field["disabled"].'" name="'.$field["id"].'" id="'.$field["id"].'" data-placeholder="Alkol grubu seçin" data-init-plugin="select2">
		                          <option value="0">Lütfen seçin</option>';
		                            foreach ($alcoholGroups as $key => $alcoholGroup) {
		                            	$selected = '';
					if($alcoholGroup->AlcoholGroupID == $alcoholType[0]->AlcoholGroupID){
						$selected = 'selected = "selected"';
					}
		                              echo '<option '.$selected.' value='.$alcoholGroup->AlcoholGroupID.'>'.$alcoholGroup->Name.'</option>';
		                            }
		                          echo '</select>
		                        </div>';
			}
		}
	}
	public function getAlcoholTypes(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$alcoholTypes = $this->general_model->getAlcoholTypelist();
		echo json_encode($alcoholTypes);
	}
	public function getAlcoholBrandById(){
		$formFields= [
		[
		            "name"=>"Kod",
		            "id"=>"Code",
		            "type"=>"text"
		          	],
		          	[
		            "name"=>"Adı",
		            "id"=>"Name",
		            "type"=>"text"
		          	],
		          	[
		            "name"=>"Alkol Tipi seçin",
		            "id"=>"AlcoholTypeID",
		            "type"=>"select",
		            "disabled"=>"",
		            "class"=>""
		          	],
		          	[
		            "name"=>"Id",
		            "id"=>"AlcoholBrandID",
		            "type"=>"hidden"
		          	]
		];
		$this->load->model("general_model");
		$alcoholBrandId = $this->input->post("alcoholBrandId");
		$alcoholBrand = $this->general_model->getAlcoholBrandById($alcoholBrandId);
		$alcoholTypes = $this->general_model->getAlcoholTypelist();
		foreach ($formFields as $key => $field) {
			$message = "Bu alan zorunludur";
			if($field["type"] == "email"){
				$message = "Lütfen geçerli bir mail adresi giriniz.";
			}
			if($field["type"]!="select"){
				$class = "";
				if($field["type"] == "hidden"){
					$class ="unvisible";
				}
				echo '<div class="row"><div class="col-sm-12">
				<div class="form-group form-group-default '.$class.' required">
					<label>'.$field["name"].':</label>
					<div class="controls">
						<input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'" value="'.$alcoholBrand[0]->{$field["id"]}.'">
					</div>
				</div>
			</div></div>';
			}else{
				echo '<div class="form-group form-group-default form-group-default-select2 required">
		                        <label class="">'.$field["name"].'</label>
		                          <select class="full-width '.$field["class"].' '.$field["disabled"].'" name="'.$field["id"].'" id="'.$field["id"].'" data-placeholder="Alkol grubu seçin" data-init-plugin="select2">
		                          <option value="0">Lütfen seçin</option>';
		                            foreach ($alcoholTypes as $key => $alcoholType) {
		                            	$selected = '';
					if($alcoholType->AlcoholTypeID == $alcoholBrand[0]->AlcoholTypeID){
						$selected = 'selected = "selected"';
					}
		                              echo '<option '.$selected.' value='.$alcoholType->AlcoholTypeID.'>'.$alcoholType->Name.'</option>';
		                            }
		                          echo '</select>
		                        </div>';
			}
		}
	}
	public function getAlcoholBrands(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$alcoholBrands = $this->general_model->getAlcoholBrandlist();
		echo json_encode($alcoholBrands);
	}
	public function getCollectorList(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$collectors= $this->general_model->getCollectorList();
		echo json_encode($collectors);
	}
	public function getCollectorById(){
		$formFields= [
		[
	            "name"=>"Bildirim maili",
	            "id"=>"notification_email",
	            "type"=>"text"
	          	],
	          	[
	            "name"=>"Ethernet MAC Adresi",
	            "id"=>"eth_mac_address",
	            "type"=>"text"
	          	],
	          	[
	            "name"=>"Wifi MAC Adresi",
	            "id"=>"wifi_mac_address",
	            "type"=>"text"
	          	],
	          	[
	            "name"=>"Barcode",
	            "id"=>"Barcode",
	            "type"=>"text"
	          	],
	          	[
	            "name"=>"Latitude",
	            "id"=>"Latitude",
	            "type"=>"text"
	          	],
	          	[
	            "name"=>"Longitude",
	            "id"=>"Longitude",
	            "type"=>"text"
	          	],
	          	[
	            "name"=>"id",
	            "id"=>"collector_id",
	            "type"=>"hidden"
	          	]
		];
		$this->load->model("general_model");
		$collectorId = $this->input->post("CollectorId");
		$collector = $this->general_model->getCollectorById($collectorId);
		foreach ($formFields as $key => $field) {
			$message = "Bu alan zorunludur";
			if($field["type"] == "email"){
				$message = "Lütfen geçerli bir mail adresi giriniz.";
			}
			if($field["type"]!="select"){
				$class = "";
				if($field["type"] == "hidden"){
					$class ="unvisible";
				}
				echo '<div class="row"><div class="col-sm-12">
				<div class="form-group form-group-default '.$class.' required">
					<label>'.$field["name"].':</label>
					<div class="controls">
						<input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'" value="'.@$collector[0]->{$field["id"]}.'">
					</div>
				</div>
			</div></div>';
			}
		}
	}
	public function getBarGroupById(){
		$formFields= [
		[
	            "name"=>"Kod",
	            "id"=>"Code",
	            "type"=>"text"
	          	],
	          	[
	            "name"=>"Adı",
	            "id"=>"Name",
	            "type"=>"text"
	          	],
	          	[
	            "name"=>"Id",
	            "id"=>"BarGroupID",
	            "type"=>"hidden"
	          	]
		];
		$this->load->model("general_model");
		$BarGroupID = $this->input->post("BarGroupID");
		$barGroup = $this->general_model->getBarGroupById($BarGroupID);
		foreach ($formFields as $key => $field) {
			$message = "Bu alan zorunludur";
			if($field["type"] == "email"){
				$message = "Lütfen geçerli bir mail adresi giriniz.";
			}
			if($field["type"]!="select"){
				$class = "";
				if($field["type"] == "hidden"){
					$class ="unvisible";
				}
				echo '<div class="row"><div class="col-sm-12">
				<div class="form-group form-group-default '.$class.' required">
					<label>'.$field["name"].':</label>
					<div class="controls">
						<input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'" value="'.$barGroup[0]->{$field["id"]}.'">
					</div>
				</div>
			</div></div>';
			}else{
				echo '<div class="form-group form-group-default form-group-default-select2 required">
		                        <label class="">'.$field["name"].'</label>
		                          <select class="full-width '.$field["class"].' '.$field["disabled"].'" name="'.$field["id"].'" id="'.$field["id"].'" data-placeholder="Alkol grubu seçin" data-init-plugin="select2">
		                          <option value="0">Lütfen seçin</option>';
		                            foreach ($companies as $key => $company) {
		                            	$selected = '';
					if($company->CompanyID == $barGroup[0]->CompanyID){
						$selected = 'selected = "selected"';
					}
		                              echo '<option '.$selected.' value='.$company->CompanyID.'>'.$company->CompanyName.'</option>';
		                            }
		                          echo '</select>
		                        </div>';
			}
		}
	}
	public function getBarGroups(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$getBarGroups = $this->general_model->getBarGroups();
		echo json_encode($getBarGroups);
	}
	public function getCountries(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$countries = $this->general_model->getCountries();
		echo json_encode($countries);
	}
	public function getCities(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$cities = $this->general_model->getCities();
		echo json_encode($cities);
	}
	public function getCounties(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$counties = $this->general_model->getDistricts();
		echo json_encode($counties);
	}
	public function getAreas(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$areas = $this->general_model->getAreas();
		echo json_encode($areas);
	}
	public function getConsumptionByDate(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$dateBegin = $this->input->post("dateBegin");
		$dateEnd = $this->input->post("dateEnd");
		$reports = $this->general_model->getDailyConsumedAlcoholFilteredByDate($dateBegin,$dateEnd);
		echo json_encode($reports);
	}
	public function getTechnicalServiceById(){
		$formFields= [
		[
		"name"=>"Servis Adı",
		"id"=>"ServiceName",
		"type"=>"text"
		],
		[
		"name"=>"Adres",
		"id"=>"Adress",
		"type"=>"text"
		],
		[
		"name"=>"Fatura Adresi",
		"id"=>"InvoiceAddress",
		"type"=>"text"
		],
		[
		"name"=>"Vergi numarası",
		"id"=>"TaxNo",
		"type"=>"text"
		],
		[
		"name"=>"Vergi dairesi",
		"id"=>"TaxAdministrationName",
		"type"=>"text"
		],
		[
		"name"=>"Fatura Telefon",
		"id"=>"InvoiceTelephone",
		"type"=>"text"
		],
		[
		"name"=>"Fatura Mobil Telefon",
		"id"=>"InvoiceMobile",
		"type"=>"text"
		],
		[
		"name"=>"Fatura E-mail",
		"id"=>"InvoiceEmail",
		"type"=>"email"
		],
		[
		"name"=>"Ülke seçin",
		"id"=>"CountryID",
		"type"=>"select",
		"disabled"=>"",
		"class"=>"countriesinmodal"
		],
		[
		"name"=>"Şehir seçin",
		"id"=>"CityID",
		"type"=>"select",
		"disabled"=>"disabled",
		"class"=>"citiesinmodal",
		],
		[
		"name"=>"İlçe seçin",
		"id"=>"CountyID",
		"type"=>"select",
		"disabled"=>"disabled",
		"class"=>"districtsinmodal",
		],
		[
		"name"=>"Semt seçin",
		"id"=>"AreaID",
		"type"=>"select",
		"disabled"=>"disabled",
		"class"=>"areasinmodal",
		],
	          	[
	            "name"=>"Id",
	            "id"=>"TechnicalServiceListID",
	            "type"=>"hidden"
	          	]
		];
		$this->load->model("general_model");
		$TechnicalServiceId = $this->input->post("TechnicalServiceId");
		$technicalService = $this->general_model->getTechnicalServiceById($TechnicalServiceId);
		$countries = $this->general_model->getCountries();
		$cities = $this->general_model->getCitiesByCountryId($technicalService[0]->CountryID);
		$counties = $this->general_model->getDistrictsByCityId($technicalService[0]->CityID);
		$areas = $this->general_model->getAreasByDistrictId($technicalService[0]->CountyID);
		$i=0;
		echo '<div class="row">';
		foreach ($formFields as $key => $field) {
			$i++;
			$message = "Bu alan zorunludur";
			if($field["type"] == "email"){
				$message = "Lütfen geçerli bir mail adresi giriniz.";
			}
			$class = "";
			if($field["type"] == "hidden"){
				$class ="unvisible";
			}
			if($i%2==1 && $i!=1){
				echo '</div><div class="row">';
			}
			if($field["type"]!="select"){
				echo '<div class="col-sm-6">
				<div class="form-group form-group-default required '.$class.' ">
					<label>'.$field["name"].':</label>
					<div class="controls">
						<input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'" value="'.@$technicalService[0]->{$field["id"]}.'">
					</div>
				</div>
			</div>';
			}else{
				if($field["id"] == "CountryID"){
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>';
						foreach ($countries as $key => $country) {
							$selected = '';
							if($country->CountryID == $technicalService[0]->CountryID){
								$selected = 'selected = "selected"';
							}
							echo '<option '.$selected.' value='.$country->CountryID.'>'.$country->CountryName.'</option>';
						}
						echo '</select>
					</div></div>';
				}else
				if($field["id"] == "CityID"){
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>';
						foreach ($cities as $key => $city) {
							$selected = '';
							if($city->CityID == $technicalService[0]->CityID){
								$selected = 'selected = "selected"';
							}
							echo '<option '.$selected.' value='.$city->CityID.'>'.$city->CityName.'</option>';
						}
						echo '</select>
					</div></div>';
				}else
				if($field["id"] == "CountyID"){
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>';
						foreach ($counties as $key => $county) {
							$selected = '';
							if($county->CountyID == $technicalService[0]->CountyID){
								$selected = 'selected = "selected"';
							}
							echo '<option '.$selected.' value='.$county->CountyID.'>'.$county->CountyName.'</option>';
						}
						echo '</select>
					</div></div>';
				}else
				if($field["id"] == "AreaID"){
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>';
						foreach ($areas as $key => $area) {
							$selected = '';
							if($area->AreaID == $technicalService[0]->AreaID){
								$selected = 'selected = "selected"';
							}
							echo '<option '.$selected.' value='.$area->AreaID.'>'.$area->AreaName.'</option>';
						}
						echo '</select>
					</div></div>';
				}else{
					echo '<div class="col-sm-6"><div class="form-group form-group-default form-group-default-select2 required">
					<label class="">'.$field["name"].'</label>
					<select class="full-width '.$field["class"].' '.$field["disabled"].' required" name="'.$field["id"].'" data-msg="'.$message.'" '.$field["disabled"].' data-placeholder="Ülke seçin" data-init-plugin="select2">
						<option value="0">Lütfen seçin</option>
					</select>
				</div></div>';
				}
			}
		}
	}
	public function getCompanyDailyGuestById(){
		$formFields= [
		[
	            "name"=>"Tarih",
	            "id"=>"Date",
	            "type"=>"text"
	          	],
	          	[
	            "name"=>"Toplam Kişi",
	            "id"=>"TotalGuest",
	            "type"=>"text"
	          	],
	          	[
	            "name"=>"Şirket seçin",
	            "id"=>"CompanyID",
	            "type"=>"select",
	            "disabled"=>"",
	            "class"=>""
	          	],
	          	[
	            "name"=>"Id",
	            "id"=>"TotalDailyGuestID",
	            "type"=>"hidden"
	          	]
		];
		$this->load->model("general_model");
		$TotalDailyGuestID = $this->input->post("CompanyDailyGuestId");
		$totalDailyGuest = $this->general_model->getTotalDailyGuestById($TotalDailyGuestID);
		$companies = $this->general_model->getCompanies();
		foreach ($formFields as $key => $field) {
			$message = "Bu alan zorunludur";
			if($field["type"] == "email"){
				$message = "Lütfen geçerli bir mail adresi giriniz.";
			}
			if($field["type"]!="select"){
				$class = "";
				if($field["type"] == "hidden"){
					$class ="unvisible";
				}
				echo '<div class="row"><div class="col-sm-12">
				<div class="form-group form-group-default '.$class.' required">
					<label>'.$field["name"].':</label>
					<div class="controls">
						<input type="'.$field["type"].'" class="form-control" name="'.$field["id"].'" id="'.$field["id"].'" required data-msg="'.$message.'" value="'.$totalDailyGuest[0]->{$field["id"]}.'">
					</div>
				</div>
			</div></div>';
			}else{
				echo '<div class="form-group form-group-default form-group-default-select2 required">
		                        <label class="">'.$field["name"].'</label>
		                          <select class="full-width '.$field["class"].' '.$field["disabled"].'" name="'.$field["id"].'" id="'.$field["id"].'" data-placeholder="Alkol grubu seçin" data-init-plugin="select2">
		                          <option value="0">Lütfen seçin</option>';
		                            foreach ($companies as $key => $company) {
		                            	$selected = '';
					if($company->CompanyID == $totalDailyGuest[0]->CompanyID){
						$selected = 'selected = "selected"';
					}
		                              echo '<option '.$selected.' value='.$company->CompanyID.'>'.$company->CompanyName.'</option>';
		                            }
		                          echo '</select>
		                        </div>';
			}
		}
	}
	public function getCompanyDailyGuest(){
		header("Content-type:application/json");
		$this->load->model("general_model");
		$dailyGuests = $this->general_model->getTotalDailyGuests();
		echo json_encode($dailyGuests);
	}
	public function getCompanyBarGroupByCompanyId(){
		$this->load->model("general_model");
		$CompanyID = $this->input->post("CompanyID");
		$companyBarGroup = $this->general_model->getCompanyBarGroupByCompanyId($CompanyID);
		$barGroups = $this->general_model->getBarGroups();
		echo '<div class="row">
		<div class="col-md-12">
		<div class="<div class="form-group form-group-default form-group-default-select2 required">
		<select class="full-width" id="multiple" multiple data-init-plugin="select2">';
		foreach ($barGroups as $key => $barGroup) {
				$selected = '';
				foreach ($companyBarGroup as $key => $bar) {
					if($barGroup->BarGroupID == $bar->BarGroupID){
						$selected = 'selected = "selected"';
					}	
				}
				echo '<option '.$selected.' value="'.$barGroup->BarGroupID.'">'.$barGroup->Name.'</option>';
			}	
		echo '</select>
		</div>
		</div>
		</div>';
	}
}