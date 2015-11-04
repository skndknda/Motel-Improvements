
<?php
if (isset($_POST["LocationYesCheck"])) 
{
  echo "location is set";
    
} 
else 
{
echo "location is not set";
}
if (isset($_POST["DetailedReview"])) 
{
  echo $_POST['DetailedReview'];
    
    
} 
else 
{
echo "Detailed Revuew is not set";
}

if (isset($_POST["DirtyRoomcheck"])) 
{
  echo "Room is dirty";
    
} 
else 
{
echo "dirty room isnot set";
}
if (isset($_POST["OtherReasonBad"])) 
{
  echo $_POST['OtherReasonBad'];
    
    
} 
else 
{
echo "bad reason not set";
}


?>
