
<!DOCTYPE html>
<html lang="en">
<head>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Smart Manager</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
$(document).ready(function(){
    $("#RecommendYes").click(function(){
	$("#YesOrNo").hide()
        $("#RecommendYesOptions").show();
		$("#submitButton").show();
		
    });
});
    </script>
	<script>
	$('#FormID').on('Submit', function(e){
    e.preventDefault();
    $.ajax({
       type: "POST",
       url: "GetData.php",
       data: $(this).serialize(),
       success: function() {
         alert('success');
       }
    });
});
	</script>
    <script>
$(document).ready(function(){
    $("#RecommendNo").click(function(){
	$("#YesOrNo").hide()
        $("#RecommendNoOptions").show();
		$("#submitButton").show();
    });
});
</script>
<script>
function sendData(data) {
  var XHR = new XMLHttpRequest();
  var FD  = new FormData();

  // We push our data into our FormData object
  for(name in data) {
    FD.append(name, data[name]);
  }

  // We define what will happen if the data are successfully sent
  XHR.addEventListener('load', function(event) {
    alert('Yeah! Data sent and response loaded.');
  });

  // We define what will happen in case of error
  XHR.addEventListener('error', function(event) {
    alert('Oups! Something goes wrong.');
  });

  // We setup our request
  XHR.open('POST', '/GetData.php');

  // We just send our FormData object, HTTP headers are set automatically
  XHR.send(FD);
}
</script>
 <script>
 $('HospitalityYes').click(function() {
    $(this).closest('div').find('input[type="checkbox"]').click();
});
 </script>
</head>
<body>

<form method="post" id="FormID" name="FormID">
    
    <div id="YesOrNo" class="container-fluid">
        <h1 align=Center>Hello, There!</h1>
        <b>
            <h2 align=center style="margin-bottom:1cm"> Did you like the Stay here? </h2>
            &nbsp;

        </b>
        <div class="container-fluid">

            <p>
                <div class="row-fluid">

                    <div class="col-md-7" align=center><input type="image" src="yes.jpg" name="RecommendYes" class="btTxt submit" id="RecommendYes" width=130 height=130 /></div>
                    <div class="col-md-3" align=center style="margin-top:20px"><input type="image" src="noroundpic.png" name="RecommendNo" class="btTxt submit" id="RecommendNo" width=110 height=110 /></div>

                </div>
            </p>
        </div>
    </div>

	

    <div id="RecommendYesOptions" class="container-fluid" align=center style="display:none">


        <h3 style="margin-bottom:2cm"> Happy to hear that. What did you like?</h3>
        <div class="row-fluid">

            <div class="row">
                <div class="col-sm-4">
                    <h4><input type="checkbox"   id="HospitalityYesCheck" name="HospitalityYesCheck" value="0" align=center />&nbsp;Hospitality</h4>
                    <h4>
					
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" align=center src="FrontDesk_Hospitality.png" name="HospitalityYes" class="btTxt submit" id="HospitalityYes" width=180 height=170 />
                  
					</h4>	
                </div>

                <div class="col-sm-4">
                    <h4><input type="checkbox" name="BreakFastYesCheck" value="" />&nbsp;BreakFast</h4>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" src="breakfast.png" name="BreakFastYes" class="btTxt submit" id="BreakFastYes" width=180 height=170 /></p>
                </div>
				
                <div class="col-sm-4">
                    <h4><input type="checkbox" name="AffordableYesCheck" value="" />&nbsp;Affordable</h4>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" src="lessmoney.png" name="AffordableYes" class="btTxt submit" id="AffordableYes" width=180 height=150 /></p>
                </div>
            </div>

            <div class="row" style="margin-top:1cm">
                <div class="col-sm-4">
                    <h4><input type="checkbox" name="ACYesCheck" value="" align=center />&nbsp;AC</h4>
                    <h4>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" align=center src="AirConditioning.png" name="ACyes" class="btTxt submit" id="ACyes" width=180 height=170 />
                    </h4>
                </div>

                <div class="col-sm-4">
                    <h4><input type="checkbox" name="FreeParkingYesCheck" value="" />&nbsp;Free Parking</h4>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" src="FreeParking.png" name="FreeParkingYes" class="btTxt submit" id="FreeParkingYes" width=180 height=170 /></p>
                </div>
                <div class="col-sm-4">
                    <h4><input type="checkbox" name="BedYesCheck" value="" />&nbsp; Bed</h4>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" src="bed.png" name="BedYes" class="btTxt submit" id="BedYes" width=180 height=170 /></p>
                </div>
            </div>
			
            <div class="row" style="margin-top:2cm">
                <div class="col-sm-4">
                    <h4><input type="checkbox" name="WiFiYesCheck" value="" align=center />&nbsp;WiFi</h4>
                    <h4>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" align=center src="WiFi.png" name="WiFiYes" class="btTxt submit" id="WiFiYes" width=180 height=170 />
                    </h4>
                </div>

                <div class="col-sm-4">
                    <h4><input type="checkbox" name="LaundryFacilitiesYesCheck" value="" />&nbsp;Laundry Facilities</h4>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" src="LaundryFacilitiesround.png" name="LaundryYes" class="btTxt submit" id="LaundryYes" width=180 height=170 /></p>
                </div>
				
                <div class="col-sm-4">
                    <h4><input type="checkbox" name="LocationYesCheck" value="" />&nbsp;Location</h4>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" src="locationround.png" name="locationYes" class="btTxt submit" id="locationYes" width=180 height=170 /></p>
                </div>
            </div>

            <div class="row" style="margin-top:1cm;">
                <div class="col-sm-4">
                    <h4><input type="checkbox" name="DetailedReviewChecked" value="" align=center />&nbsp;Detailed Review</h4>
                    <h4 style="width:4cm">
                        <textarea id="DetailedReview" name="DetailedReview"  class="span6" rows="6" placeholder="Write here" cols=70  ></textarea>  
					</h4>
                </div>

            </div>
			
			
            
        </div>

		
    </div><!-- end of RecommendYesOptions -->
	

	
	
        <div id="RecommendNoOptions" class="container-fluid" align=center style="display:none">

            <p>
                <h3> We genuinely like to improve your experience.</h3>

            </p>
            <p><h3>What areas can we improve?</h3></p>
           
            <div class="row-fluid">

               <div class="row">
                    <div class="col-sm-4">
                        <h4><input type="checkbox" value="" align=center />&nbsp;Bad Hospitality</h4>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" align=center src="FrontDesk_Hospitality.png" name="badHospitality" class="btTxt submit" id="badHospitality" width=180 height=170 />
                       
                    </div>

                    <div class="col-sm-4">
                        <h4><input type="checkbox" value="" />&nbsp;Unsatisfactory BreakFast</h4>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" src="breakfast.png" name="breakFastNo" class="btTxt submit" id="breakFast" width=180 height=170 /></p>
                    </div>
					
                    <div class="col-sm-4">
                        <h4><input type="checkbox" value="" />&nbsp;Expensive</h4>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" src="Expensive.jpg" name="Expensive" class="btTxt submit" id="Expensive" width=180 height=150 /></p>
                    </div>
                </div>

                <div class="row" style="margin-top:1cm">
                    <div class="col-sm-4">
                        <h4><input type="checkbox" value="" align=center />&nbsp;Bad AC</h4>
                        <h4>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" align=center src="BadAC.jpg" name="badAC" class="btTxt submit" id="badAC" width=180 height=170 />
                        </h4>
                    </div>

                    <div class="col-sm-4">
                        <h4><input type="checkbox" name="DirtyRoomcheck "value="" />&nbsp;Dirty Room</h4>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" src="notclean.jpg" name="dirtyRoom" class="btTxt submit" id="dirtyRoom" width=180 height=170 /></p>
                    </div>
                    <div class="col-sm-4">
                        <h4><input type="checkbox" value="" />&nbsp;Unsatisfactory Room Facilities</h4>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" src="unsatisfactoryroom.jpg" name="RoomFacilitiesbad" class="btTxt submit" id="RoomFacilitiesbad" width=180 height=170 /></p>
                    </div>
                </div>

                <div class="row" style="margin-top:1cm">
                    <div class="col-sm-4">
                        <h4><input type="checkbox" value="" align=center />&nbsp;WiFi</h4>
                        <h4>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" align=center src="WiFi.png" name="wifi" class="btTxt submit" id="saveForm" width=180 height=170 />
                        </h4>
                    </div>

                    <div class="col-sm-4">
                        <h4><input type="checkbox" value="" />&nbsp;Laundry Facilities</h4>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" src="LaundryFacilities.jpg" name="LaundryFacilitiesBAD" class="btTxt submit" id="LaundryFacilitiesBAD" width=180 height=170 /></p>
                    </div>
                    <div class="col-sm-4">
                        <h4><input type="checkbox" value="" />&nbsp;Location</h4>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" src="unsatisfactoryroom.jpg" name="BadRoom" class="btTxt submit" id="BadRoom" width=180 height=170 /></p>
                    </div>
                </div>

                <div class="row" style="margin-top:1cm">
                    <div class="col-sm-4">
                        <h4><input type="checkbox" name="OtherReasonCheckBox" value="" align=center />&nbsp;Other Reason</h4>
                        <h4 style="width:4cm">
                            
                    
							<textarea id="otherreasonID" name="OtherReasonBad" class="span6" rows="6" placeholder="Write here" cols=70  required></textarea>
                        </h4>
                    </div>
                </div>
            </div>

            
        </div>
  
  <div id="submitButton" style="margin-top:2cm;margin-bottom:4cm;display:None;" class="row-fluid" align=center>
  <input type="Submit" name="Submit" value="Submit" onclick="sendData({test:'ok'})"/>
  </div>
  
</form>

    
</body>
</html>