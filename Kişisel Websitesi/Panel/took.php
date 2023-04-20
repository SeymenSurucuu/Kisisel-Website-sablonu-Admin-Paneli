<?php
include("db/db.php");

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Retrieve the input values
  $yourName = test_input($_POST["yourName"] ?? "");
  $headerAboutMeText = test_input($_POST["headerAboutMeTex"] ?? "");
  $mailText = test_input($_POST["mailText"] ?? "");
  $mailAddress = test_input($_POST["mailAddress"] ?? "");
  $changingText1 = test_input($_POST["changingText1"] ?? "");
  $changingText2 = test_input($_POST["changingText2"] ?? "");
  $aboutText = test_input($_POST["aboutText"] ?? "");

    //empty control
  if (empty($yourName)) {
    
  } else { 
    //sql Query
    $sql = "UPDATE panel SET name='$yourName' WHERE id=0";
      //we get the data
    if (mysqli_query($conn, $sql)) {
        $message = "Veri başarıyla kaydedildi.";
    } else {//if there is problem
        $message = "Hata: " . mysqli_error($conn); //give error
        echo $message; // write on screen 
        mysqli_close($conn); //close db connection
    }
  }  //and we will do it with all the data.

         if (empty($headerAboutMeText)) {
    
           } else {
                   $sql = "UPDATE panel SET headeraboutme='$headerAboutMeText' WHERE id=0";
   
                  if (mysqli_query($conn, $sql)) {
                     $message = "Veri başarıyla kaydedildi.";
                     
                       } else {
                           $message = "Hata: " . mysqli_error($conn);
                              echo $message;
                                mysqli_close($conn);
                               }
                   }


                   if (empty($mailText)) {
    
                   } else {
                           $sql = "UPDATE panel SET mailtext='$mailText' WHERE id=0";
           
                          if (mysqli_query($conn, $sql)) {
                             $message = "Veri başarıyla kaydedildi.";
                               } else {
                                   $message = "Hata: " . mysqli_error($conn);
                                      echo $message;
                                        mysqli_close($conn);
                                       }
                           }


                           if (empty($mailAddress)) {
    
                           } else {
                                   $sql = "UPDATE panel SET mailadress='$mailAddress' WHERE id=0";
                   
                                   if (mysqli_query($conn, $sql)) {
                                     $message = "Veri başarıyla kaydedildi.";
                                       } else {
                                           $message = "Hata: " . mysqli_error($conn);
                                              echo $message;
                                                mysqli_close($conn);
                                               }
                                   }


                                   if (empty($changingText1)) {
    
                                   } else {
                                           $sql = "UPDATE panel SET ctext1='$changingText1' WHERE id=0";
                           
                                           if (mysqli_query($conn, $sql)) {
                                             $message = "Veri başarıyla kaydedildi.";
                                               } else {
                                                   $message = "Hata: " . mysqli_error($conn);
                                                      echo $message;
                                                        mysqli_close($conn);
                                                       }
                                           }


                                           if (empty($changingText2)) {
    
                                           } else {
                                                   $sql = "UPDATE panel SET ctext2='$changingText2' WHERE id=0";
                                   
                                                   if (mysqli_query($conn, $sql)) {
                                                     $message = "Veri başarıyla kaydedildi.";
                                                       } else {
                                                           $message = "Hata: " . mysqli_error($conn);
                                                              echo $message;
                                                                mysqli_close($conn);
                                                               }
                                                   }



                                                   if (empty($aboutText)) {
                                                     
                                                   } else {
                                                           $sql = "UPDATE panel SET aboutme='$aboutText' WHERE id=0";
                                           
                                                           if (mysqli_query($conn, $sql)) {
                                                             $message = "Veri başarıyla kaydedildi.";
                                                               } else {
                                                                   $message = "Hata: " . mysqli_error($conn);
                                                                      echo $message;
                                                                        mysqli_close($conn);
                                                                       }
                                                           }
        
                                                          

}

// Helper function to sanitize the input values
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  


}
header("Location: index.php"); //return to index.php. If we don't do this, the page will remain white.
exit;
?>