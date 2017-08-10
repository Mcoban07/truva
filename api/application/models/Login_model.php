<?php 
class Login_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
        public function login_user($parameters){
                $i = 0;
                $k = 0;
                $mandatoryParameters = array("email","password"); 
                foreach ($mandatoryParameters as $mandatoryParameter) {
                        if(!array_key_exists($mandatoryParameter,$parameters)){
                                $k++;
                        }
                } 
                if($k>0){
                        $response = $this->globalfunctions->returnMessage(1000,"Invalid request. Mandatory parameter missing.",true);
                }else{
                        $availableParameters = array("email","password");
                        foreach ($parameters as $key => $parameter) {
                                if(!in_array($key,$availableParameters)){
                                        $i++;
                                }
                        }
                        if($i>0){
                                $response = $this->globalfunctions->returnMessage(1001,"Invalid request. You have entered unknown parameters",true);
                        }else{
                                $email = $parameters["email"];
                                $password = $parameters["password"];
                                if(!$email){
                                        $response = $this->globalfunctions->returnMessage(1,"Please enter your e-mail",true);
                                }else
                                if(!$password){
                                        $response = $this->globalfunctions->returnMessage(2,"Please enter your password",true);
                                }else{
                                        $query = $this->db->query("CALL USER_LOGIN('".$email."','".$password."')");
                                        $result = $query->row();
                                        $response = $this->globalfunctions->returnMessage($result->responseCode,$result->responseMessage,$result->isError);
                                        if(@$result->accessToken){
                                                $response["accessToken"] = $result->accessToken;
                                                $response["userId"] = $result->userId;
                                                $response["username"] = $result->userfullname;
                                                $response["currency"] = $result->currency;
                                                $response["currencyIso"] = $result->currencyIso;
                                                $response["userType"] = $result->userType;
                                                $response["age"] = $result->age;
                                                $response["mobileNumber"] = $result->mobileNumber;
                                                $response["userType"] = $result->address;
                                                if(@$result->language==null){
                                                        $response["language"] = "en";        
                                                }else{
                                                        $response["language"] = $result->language;
                                                }
                                        }
                                }
                        }
                }
                return $response;
        }
}
?>