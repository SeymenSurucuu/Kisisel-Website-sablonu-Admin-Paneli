<?php
include("db/db.php");

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Retrieve the input values
  $link1 = test_input($_POST["link1"] ?? "");
  $link2 = test_input($_POST["link2"] ?? "");
  $link3 = test_input($_POST["link3"] ?? "");
  $icon1 = test_input($_POST["icon1"] ?? "");
  $icon2 = test_input($_POST["icon2"] ?? "");
  $icon3 = test_input($_POST["icon3"] ?? "");
  $aboutText = test_input($_POST["aboutText"] ?? "");

    //empty control
  if (empty($link1)) {
    
  } else { 
    //sql Query
    $sql = "UPDATE panel SET link1='$link1' WHERE id=0";
      //we get the data
    if (mysqli_query($conn, $sql)) {
        $message = "Veri başarıyla kaydedildi.";
    } else {//if there is problem
        $message = "Hata: " . mysqli_error($conn); //give error
        echo $message; // write on screen 
        mysqli_close($conn); //close db connection
    }
  }  //and we will do it with all the data.

         if (empty($link2)) {
    
           } else {
                   $sql = "UPDATE panel SET link2='$link2' WHERE id=0";
   
                  if (mysqli_query($conn, $sql)) {
                     $message = "Veri başarıyla kaydedildi.";
                     
                       } else {
                           $message = "Hata: " . mysqli_error($conn);
                              echo $message;
                                mysqli_close($conn);
                               }
                   }


                   if (empty($link3)) {
    
                   } else {
                           $sql = "UPDATE panel SET link3='$link3' WHERE id=0";
           
                          if (mysqli_query($conn, $sql)) {
                             $message = "Veri başarıyla kaydedildi.";
                               } else {
                                   $message = "Hata: " . mysqli_error($conn);
                                      echo $message;
                                        mysqli_close($conn);
                                       }
                           }


                           if (empty($icon1)) {
    
                           } else {
                                   $sql = "UPDATE panel SET icon1='$icon1' WHERE id=0";
                   
                                   if (mysqli_query($conn, $sql)) {
                                     $message = "Veri başarıyla kaydedildi.";
                                       } else {
                                           $message = "Hata: " . mysqli_error($conn);
                                              echo $message;
                                                mysqli_close($conn);
                                               }
                                   }


                                   if (empty($icon2)) {
    
                                   } else {
                                           $sql = "UPDATE panel SET icon2='$icon2' WHERE id=0";
                           
                                           if (mysqli_query($conn, $sql)) {
                                             $message = "Veri başarıyla kaydedildi.";
                                               } else {
                                                   $message = "Hata: " . mysqli_error($conn);
                                                      echo $message;
                                                        mysqli_close($conn);
                                                       }
                                           }


                                           if (empty($icon3)) {
    
                                           } else {
                                                   $sql = "UPDATE panel SET icon3='$icon3' WHERE id=0";
                                   
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
header("Location: iPage2.php"); //return to index.php. If we don't do this, the page will remain white.
exit;
?>