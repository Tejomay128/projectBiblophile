<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>SIGNUP</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	  <style type="text/css">
	  	body	{
					background-image: url(additionalpics/signup.jpg);
					background-size:contain;
					
		}
		#styles	{
					background-color: white; 
					padding: 50px; 
					border-radius: 25px;
					-webkit-box-shadow: 1px 2px 13px 7px rgba(0,0,0,0.81); 
					box-shadow: 1px 2px 13px 7px rgba(0,0,0,0.81);
		}
		input[type=text] {
  							width: 100%;
  							padding: 20px 20px;
  							margin: 8px 0;
  							box-sizing: border-box;
  							border: 1px solid rgb(230, 230, 230);
  							-webkit-transition: 0.5s;
  							transition: 0.5s;
  							outline: none;
		}
		input[type=text]:focus {
  								border: 2px solid rgb(255, 153, 128);
		}
		input[type=email] {
  							width: 100%;
  							padding: 20px 20px;
  							margin: 8px 0;
  							box-sizing: border-box;
  							border: 1px solid rgb(230, 230, 230);
  							-webkit-transition: 0.5s;
  							transition: 0.5s;
  							outline: none;
		}
		input[type=email]:focus {
  								border: 2px solid rgb(255, 153, 128);
		}
		.label {
				font-family: veradana;
		}
		#select_options	{
  							padding: 5px 20px;
  							margin: 8px 0;
  							border: 2px solid rgb(230, 230, 230);
		}
		#select_options:focus {
				border: 3px solid rgb(255, 153, 128);
		}
		input[type=password] {
  							width: 100%;
  							padding: 20px 20px;
  							margin: 8px 0;
  							box-sizing: border-box;
  							border: 1px solid rgb(230, 230, 230);
  							-webkit-transition: 0.5s;
  							transition: 0.5s;
  							outline: none;
		}
		input[type=password]:focus {
  								border: 2px solid rgb(255, 153, 128);
		}
		.container {
  					display: flex;
  					justify-content: center;
  					align-items: center;
  					align-content: center;
  					flex-wrap: wrap;
  					width: 80vw;
  					margin: 0 auto;
  					min-height: 100vh;
  		}
		.btn {
  				width: 100%;
  				flex: 1 1 auto;
  				margin: 10px;
  				padding: 15px;
  				text-align: center;
  				text-transform: uppercase;
  				transition: 0.5s;
  				background-size: 200% auto;
 	 			color: white;
 				/* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
  				box-shadow: 0 0 20px #eee;
  				border-radius: 10px;
 		}
 		.btn:hover {
  				background-position: right center; /* change the direction of the change here */
		}
		.btn-1 {
  				background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
		}
		
	  </style>

	</head>
	
	<body>

    <?php error_reporting (E_ALL ^ E_NOTICE); ?>
    
  <?php
  if(isset($_POST["sign_up_submit"]))
  {  
  $username_err = "";
  $name_err = "";
  $email_err = "";
  $country_err = "";
  $phone_err = "";
  $pwd_err = "";
  $pwdr_err = "";

   $message = "";
  
  $servername = "localhost";
  $usrname = "root";
  $password = "";
  $dbname = "user_info";

  function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


  $username = test_input($_POST["username"]);
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $country = test_input($_POST["country"]);
  $phone = test_input($_POST["phone"]);
  $pwd = test_input($_POST["pwd"]);
  $pwdr = test_input($_POST["pwdr"]);

  

  if(empty($username)) 
  {
      $username_err = "*Username is required";
    } 

    if(empty($name)) 
  {
      $name_err = "*Name is required";
    } 

  if(empty($email)) 
  {
      $email_err = "*Email is required";
    } 

    if(empty($phone)) 
  {
      $phone_err = "*Phone no. is required";
    } 

    if(empty($pwd)) 
  {
      $pwd_err = "*password is required";
    } 
    if(empty($pwdr)) 
  {
      $pwdr_err = "*Password is required";
    } 
    if(strlen($pwd) < 8)
    {
      $pwd_err = "*Password atleast 8 characters long";
    }
    if(strlen($pwdr) < 8)
    {
      $pwdr_err = "*Password atleast 8 characters long";
    }
    if($pwd != $pwdr)
    {
      $pwdr_err = "*Passwords dont match";
    }
    if(strlen($phone) != 10)
    {
      $phone_err = "*Invalid phone no.";
    }
    if(strlen($username) > 100)
    {
      $username_err = "*Username too long";
    }

  if(empty($username_err) && empty($name_err) && empty($email_err) && empty($phone_err) && empty($pwd_err) && empty($pwdr_err))
  {                                   // Create connection
    $conn = mysqli_connect($servername, $usrname, $password, $dbname);
                                        // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $hash_pwd = password_hash($pwd, PASSWORD_DEFAULT);
   
    $sql = "INSERT INTO userdata (username,name, email, country_code, phone_no, passwd)
    VALUES ('$username','$name', '$email', '$country', '$phone', '$hash_pwd')";
    if (mysqli_query($conn, $sql)) 
    {
        header("Location: login.php");
    } 
    else 
    {
        $message = "Couldn't sign up,Please try again!";
    }
    mysqli_close($conn);
  }
  }
?>

	<div class="container" >
  	<div class="col-md-3"></div>         <!--page is divided into three parts in 1:2:1 ratio,middle part contains a bootstrap form-->
  	<div class="col-md-6" id="styles">
	    <h2 style="text-align: center; padding-bottom: 10px; color: rgb(64, 64, 64);"><b>SIGN UP TO BIBLIOPHILE</b></h2>
      <div style="color: red;"><?php if($message!="") { echo $message; } ?></div>
	    <form name="signup" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style=" padding: 20px">   
	     <div class="form-group" >
	        <label for="name">Name(Must contain less than 100 characters):</label>
	        <input type="text" class="form-control" placeholder="Your Name" name="name">
          <span style="color: red;"><?php echo "$name_err"; ?></span>
	     </div>	
	     <div class="form-group">	
        <label for="name">Userame(Must contain less than 100 characters):</label>	     
		 <input type="text" class="form-control" placeholder="Your Username" name="username">
     <span style="color: red;"><?php echo "$username_err"; ?></span>
		    </div>
		    
	     <div class="form-group">
         <label for="name">Email(Must be a valid and existing ID):</label>
	        <input type="email" class="form-control" placeholder="Your Email" name="email">
          <span style="color: red;"><?php echo "$email_err"; ?></span>
	     </div>
		    
	     <div class="form-group">
	        <label for="country">Country Code: &nbsp</label>
	        <select name="country" id="select_options">
	        	<option value="Afganistan">Afghanistan</option>
     			<option value="Albania">Albania</option>
     			<option value="Algeria">Algeria</option>
     			<option value="American Samoa">American Samoa</option>
     			<option value="Andorra">Andorra</option>
     			<option value="Angola">Angola</option>
     			<option value="Anguilla">Anguilla</option>
     			<option value="Antigua & Barbuda">Antigua & Barbuda</option>
     			<option value="Argentina">Argentina</option>
     			<option value="Armenia">Armenia</option>
     			<option value="Aruba">Aruba</option>
   			  <option value="Australia">Australia</option>
         <option value="Austria">Austria</option>
         <option value="Azerbaijan">Azerbaijan</option>
         <option value="Bahamas">Bahamas</option>
         <option value="Bahrain">Bahrain</option>
         <option value="Bangladesh">Bangladesh</option>
         <option value="Barbados">Barbados</option>
         <option value="Belarus">Belarus</option>
         <option value="Belgium">Belgium</option>
         <option value="Belize">Belize</option>
         <option value="Benin">Benin</option>
         <option value="Bermuda">Bermuda</option>
         <option value="Bhutan">Bhutan</option>
         <option value="Bolivia">Bolivia</option>
         <option value="Bonaire">Bonaire</option>
         <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
         <option value="Botswana">Botswana</option>
         <option value="Brazil">Brazil</option>
         <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
         <option value="Brunei">Brunei</option>
         <option value="Bulgaria">Bulgaria</option>
         <option value="Burkina Faso">Burkina Faso</option>
         <option value="Burundi">Burundi</option>
         <option value="Cambodia">Cambodia</option>
         <option value="Cameroon">Cameroon</option>
         <option value="Canada">Canada</option>
         <option value="Canary Islands">Canary Islands</option>
         <option value="Cape Verde">Cape Verde</option>
         <option value="Cayman Islands">Cayman Islands</option>
         <option value="Central African Republic">Central African Republic</option>
         <option value="Chad">Chad</option>
         <option value="Channel Islands">Channel Islands</option>
         <option value="Chile">Chile</option>
         <option value="China">China</option>
         <option value="Christmas Island">Christmas Island</option>
         <option value="Cocos Island">Cocos Island</option>
         <option value="Colombia">Colombia</option>
         <option value="Comoros">Comoros</option>
         <option value="Congo">Congo</option>
         <option value="Cook Islands">Cook Islands</option>
         <option value="Costa Rica">Costa Rica</option>
         <option value="Cote DIvoire">Cote DIvoire</option>
         <option value="Croatia">Croatia</option>
         <option value="Cuba">Cuba</option>
         <option value="Curaco">Curacao</option>
         <option value="Cyprus">Cyprus</option>
         <option value="Czech Republic">Czech Republic</option>
         <option value="Denmark">Denmark</option>
         <option value="Djibouti">Djibouti</option>
         <option value="Dominica">Dominica</option>
         <option value="Dominican Republic">Dominican Republic</option>
         <option value="East Timor">East Timor</option>
         <option value="Ecuador">Ecuador</option>
         <option value="Egypt">Egypt</option>
         <option value="El Salvador">El Salvador</option>
         <option value="Equatorial Guinea">Equatorial Guinea</option>
         <option value="Eritrea">Eritrea</option>
         <option value="Estonia">Estonia</option>
         <option value="Ethiopia">Ethiopia</option>
         <option value="Falkland Islands">Falkland Islands</option>
         <option value="Faroe Islands">Faroe Islands</option>
         <option value="Fiji">Fiji</option>
         <option value="Finland">Finland</option>
         <option value="France">France</option>
         <option value="French Guiana">French Guiana</option>
         <option value="French Polynesia">French Polynesia</option>
         <option value="French Southern Ter">French Southern Ter</option>
         <option value="Gabon">Gabon</option>
         <option value="Gambia">Gambia</option>
         <option value="Georgia">Georgia</option>
         <option value="Germany">Germany</option>
         <option value="Ghana">Ghana</option>
         <option value="Gibraltar">Gibraltar</option>
         <option value="Great Britain">Great Britain</option>
         <option value="Greece">Greece</option>
         <option value="Greenland">Greenland</option>
         <option value="Grenada">Grenada</option>
         <option value="Guadeloupe">Guadeloupe</option>
         <option value="Guam">Guam</option>
         <option value="Guatemala">Guatemala</option>
         <option value="Guinea">Guinea</option>
         <option value="Guyana">Guyana</option>
         <option value="Haiti">Haiti</option>
         <option value="Hawaii">Hawaii</option>
         <option value="Honduras">Honduras</option>
         <option value="Hong Kong">Hong Kong</option>
         <option value="Hungary">Hungary</option>
         <option value="Iceland">Iceland</option>
         <option value="Indonesia">Indonesia</option>
         <option value="India" selected>India</option>
         <option value="Iran">Iran</option>
         <option value="Iraq">Iraq</option>
         <option value="Ireland">Ireland</option>
         <option value="Isle of Man">Isle of Man</option>
         <option value="Israel">Israel</option>
         <option value="Italy">Italy</option>
         <option value="Jamaica">Jamaica</option>
         <option value="Japan">Japan</option>
         <option value="Jordan">Jordan</option>
         <option value="Kazakhstan">Kazakhstan</option>
         <option value="Kenya">Kenya</option>
         <option value="Kiribati">Kiribati</option>
         <option value="Korea North">Korea North</option>
         <option value="Korea Sout">Korea South</option>
         <option value="Kuwait">Kuwait</option>
         <option value="Kyrgyzstan">Kyrgyzstan</option>
         <option value="Laos">Laos</option>
         <option value="Latvia">Latvia</option>
         <option value="Lebanon">Lebanon</option>
         <option value="Lesotho">Lesotho</option>
         <option value="Liberia">Liberia</option>
         <option value="Libya">Libya</option>
         <option value="Liechtenstein">Liechtenstein</option>
         <option value="Lithuania">Lithuania</option>
         <option value="Luxembourg">Luxembourg</option>
         <option value="Macau">Macau</option>
         <option value="Macedonia">Macedonia</option>
         <option value="Madagascar">Madagascar</option>
         <option value="Malaysia">Malaysia</option>
         <option value="Malawi">Malawi</option>
         <option value="Maldives">Maldives</option>
         <option value="Mali">Mali</option>
         <option value="Malta">Malta</option>
         <option value="Marshall Islands">Marshall Islands</option>
         <option value="Martinique">Martinique</option>
         <option value="Mauritania">Mauritania</option>
         <option value="Mauritius">Mauritius</option>
         <option value="Mayotte">Mayotte</option>
         <option value="Mexico">Mexico</option>
         <option value="Midway Islands">Midway Islands</option>
         <option value="Moldova">Moldova</option>
         <option value="Monaco">Monaco</option>
         <option value="Mongolia">Mongolia</option>
         <option value="Montserrat">Montserrat</option>
         <option value="Morocco">Morocco</option>
         <option value="Mozambique">Mozambique</option>
         <option value="Myanmar">Myanmar</option>
         <option value="Nambia">Nambia</option>
         <option value="Nauru">Nauru</option>
         <option value="Nepal">Nepal</option>
         <option value="Netherland Antilles">Netherland Antilles</option>
         <option value="Netherlands">Netherlands (Holland, Europe)</option>
         <option value="Nevis">Nevis</option>
         <option value="New Caledonia">New Caledonia</option>
         <option value="New Zealand">New Zealand</option>
         <option value="Nicaragua">Nicaragua</option>
         <option value="Niger">Niger</option>
         <option value="Nigeria">Nigeria</option>
         <option value="Niue">Niue</option>
         <option value="Norfolk Island">Norfolk Island</option>
         <option value="Norway">Norway</option>
         <option value="Oman">Oman</option>
         <option value="Pakistan">Pakistan</option>
         <option value="Palau Island">Palau Island</option>
         <option value="Palestine">Palestine</option>
         <option value="Panama">Panama</option>
         <option value="Papua New Guinea">Papua New Guinea</option>
         <option value="Paraguay">Paraguay</option>
         <option value="Peru">Peru</option>
         <option value="Phillipines">Philippines</option>
         <option value="Pitcairn Island">Pitcairn Island</option>
         <option value="Poland">Poland</option>
         <option value="Portugal">Portugal</option>
         <option value="Puerto Rico">Puerto Rico</option>
         <option value="Qatar">Qatar</option>
         <option value="Republic of Montenegro">Republic of Montenegro</option>
         <option value="Republic of Serbia">Republic of Serbia</option>
         <option value="Reunion">Reunion</option>
         <option value="Romania">Romania</option>
         <option value="Russia">Russia</option>
         <option value="Rwanda">Rwanda</option>
         <option value="St Barthelemy">St Barthelemy</option>
         <option value="St Eustatius">St Eustatius</option>
         <option value="St Helena">St Helena</option>
         <option value="St Kitts-Nevis">St Kitts-Nevis</option>
         <option value="St Lucia">St Lucia</option>
         <option value="St Maarten">St Maarten</option>
         <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
         <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
         <option value="Saipan">Saipan</option>
         <option value="Samoa">Samoa</option>
         <option value="Samoa American">Samoa American</option>
         <option value="San Marino">San Marino</option>
         <option value="Sao Tome & Principe">Sao Tome & Principe</option>
         <option value="Saudi Arabia">Saudi Arabia</option>
         <option value="Senegal">Senegal</option>
         <option value="Seychelles">Seychelles</option>
         <option value="Sierra Leone">Sierra Leone</option>
         <option value="Singapore">Singapore</option>
         <option value="Slovakia">Slovakia</option>
         <option value="Slovenia">Slovenia</option>
         <option value="Solomon Islands">Solomon Islands</option>
         <option value="Somalia">Somalia</option>
         <option value="South Africa">South Africa</option>
         <option value="Spain">Spain</option>
         <option value="Sri Lanka">Sri Lanka</option>
         <option value="Sudan">Sudan</option>
         <option value="Suriname">Suriname</option>
         <option value="Swaziland">Swaziland</option>
         <option value="Sweden">Sweden</option>
         <option value="Switzerland">Switzerland</option>
         <option value="Syria">Syria</option>
         <option value="Tahiti">Tahiti</option>
         <option value="Taiwan">Taiwan</option>
         <option value="Tajikistan">Tajikistan</option>
         <option value="Tanzania">Tanzania</option>
         <option value="Thailand">Thailand</option>
         <option value="Togo">Togo</option>
         <option value="Tokelau">Tokelau</option>
         <option value="Tonga">Tonga</option>
         <option value="Trinidad & Tobago">Trinidad & Tobago</option>
         <option value="Tunisia">Tunisia</option>
         <option value="Turkey">Turkey</option>
         <option value="Turkmenistan">Turkmenistan</option>
         <option value="Turks & Caicos Is">Turks & Caicos Is</option>
         <option value="Tuvalu">Tuvalu</option>
         <option value="Uganda">Uganda</option>
         <option value="United Kingdom">United Kingdom</option>
         <option value="Ukraine">Ukraine</option>
         <option value="United Arab Erimates">United Arab Emirates</option>
         <option value="United States of America">United States of America</option>
         <option value="Uraguay">Uruguay</option>
         <option value="Uzbekistan">Uzbekistan</option>
         <option value="Vanuatu">Vanuatu</option>
         <option value="Vatican City State">Vatican City State</option>
         <option value="Venezuela">Venezuela</option>
         <option value="Vietnam">Vietnam</option>
         <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
         <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
         <option value="Wake Island">Wake Island</option>
         <option value="Wallis & Futana Is">Wallis & Futana Is</option>
         <option value="Yemen">Yemen</option>
         <option value="Zaire">Zaire</option>
         <option value="Zambia">Zambia</option>
         <option value="Zimbabwe">Zimbabwe</option>
	        </select>
	     </div>
	     <div class="form-group">
         <label for="name">Phone no.(Must be a valid number of 10 digits):</label>
	        <input type="number" class="form-control" placeholder="Your Phone no." name="phone">
          <span style="color: red;"><?php echo "$phone_err"; ?></span>
	     </div>
	     <div class="form-group">
         <label for="name">Password(Must contain ateast 8 characters):</label>
	        <input type="password" class="form-control" name="pwd" placeholder="Type Password">
          <span style="color: red;"><?php echo "$pwd_err"; ?></span>
     	</div>
     	<div class="form-group">
         <label for="name">Re-type password(Same as the above password):</label>
	        <input type="password" class="form-control" name="pwdr" placeholder="Retype Password">
          <span style="color: red;"><?php echo "$pwdr_err"; ?></span>
     	</div>
      	
      	<div align="center">
      	<button type="submit" class="btn btn-1" name="sign_up_submit"><b>Sign Up</b></button>
      	</div>
    	</form>
  	</div>
  	<div class="col-md-3"></div>
	</div>

	</body>
</html>