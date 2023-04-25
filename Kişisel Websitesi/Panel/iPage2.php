<?php 
include("db/db.php");
  
function bilgiler($conn){
    $sql = "SELECT * FROM panel";
    $result = mysqli_query($conn, $sql);
    $veriler = array(); 
    if (mysqli_num_rows($result) > 0) { //if the line number is greater than 0, there is data.
        while($row = mysqli_fetch_assoc($result)) {
           
            $veriler[] = array(
                "link1" => $row["link1"],
                "link2" => $row["link2"],
                "link3" => $row["link3"],
                "icon1" => $row["icon1"],
                "icon2" => $row["icon2"],
                "icon3" => $row["icon3"],
                "ad7" => $row["aboutme"]
            );
        }
    } else {
        echo "no valid value found.";
    }
    return $veriler; 
}
?>

<html lang="en">
    <head>
        <title>Admin Panel</title>
        
        <link rel="stylesheet" href="../css/new-skin/new-skin.css" />
        <link rel="stylesheet" href="css/panel.css" />
        <link rel="stylesheet" href="css/checkbox.css" />
        <link rel="stylesheet" href="css/input.css" />
        <link rel="stylesheet" href="css/infobox.css" />
        <script src="Js/infobox.js"></script>

        <?php $veri=bilgiler($conn);  ?>
    </head>    
    <body>
        
	<!-- preloader -->
    <div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- background -->
		<div class="background gradient">
        <div class ="Contentiki">
                    <div class ="panelmenu">
                        <div class="sayfa"><a href="index.php">Home</a></div>
                        <div class="sayfa"><a href="gallery.php">Gallery</a></div>
                        <div class="sayfa"><a href="blog.php">Blog</a></div>
                        <div class="sayfa "><a href="chat.php">Chat</a></div>

                    </div>
                   
                    <div class="panelicerik">
                   
                         <!--blur box starting -->
                        <div class ="cart bir"><div class="tit">   
                            <!--infobox start -->
                                    <img src="img/info.png" onmouseover="showInfo()" onmouseout="hideInfo()" class="img1" width="16px" height="16px">
                                                         <div class="infoBox">
                                                         <?php echo"Current Value: ". $veri[0]["link1"]; ?>
                                                         </div> <!-- infobox end--><!--title text -->Link 1</div>                              
                                                   
                                                         <!--text input start -->
                                                        <div class="inputs"> 
                                                                <form action="iPage2Took.php" method="post"> 
                                                                <input type="text" placeholder="Write here..." name="link1" class="input">         
                                                        </div>  <!--text input end -->                       
                            </div> <!--blur box end -->
                        
                        
                        <div class ="cart bir">  <div class="tit"> 
                        <img src="img/info.png" onmouseover="showInfo()" onmouseout="hideInfo()" class="img2" width="16px" height="16px">
                                            <div class="infoBox">
                                            <?php echo"Current Value: ". $veri[0]["link2"]; ?>
                                    </div>Link 2 </div>

                                  <div class="inputs"> 
                                 <input type="text" placeholder="Write here..." name="link2" class="input"> 
                                </div> 
                    
                        </div>
                        

                        <div class ="cart bir">  <div class="tit">
                        <img src="img/info.png" onmouseover="showInfo()" onmouseout="hideInfo()" class="img3" width="16px" height="16px">
                                            <div class="infoBox">
                                            <?php echo"Current Value: ". $veri[0]["link3"]; ?>
                                    </div>Link 3 </div>
                        
                                <div class="inputs"> 
                                    <input type="text" placeholder="Write here..." name="link3" class="input"> 
                                 </div> 
                        </div>
                       
                        <div class ="cart bir">  <div class="tit"> 
                        <img src="img/info.png" onmouseover="showInfo()" onmouseout="hideInfo()" class="img4" width="16px" height="16px">
                                            <div class="infoBox">
                                            <?php echo"Current Value: ". $veri[0]["icon1"]; ?>
                                    </div>İcon 1 </div>

                                <div class="inputs"> 
                                    <input type="text" placeholder="Write here..." name="icon1" class="input"> 
                                 </div> 
                        </div>

                        <div class ="cart bir">  <div class="tit"> 
                        <img src="img/info.png" onmouseover="showInfo()" onmouseout="hideInfo()" class="img5" width="16px" height="16px">
                                            <div class="infoBox">
                                            <?php echo"Current Value: ". $veri[0]["icon2"]; ?>
                                    </div>İcon 2 </div>

                                <div class="inputs"> 
                                    <input type="text" placeholder="Write here..." name="icon2" class="input"> 
                                 </div> 
                        </div>
                       
                        <div class ="cart bir">  <div class="tit"> 
                        <img src="img/info.png" onmouseover="showInfo()" onmouseout="hideInfo()" class="img6" width="16px" height="16px">
                                            <div class="infoBox">
                                            <?php echo"Current Value: ". $veri[0]["icon3"]; ?>
                                            </div>İcon 3 </div>

                                <div class="inputs"> 
                                    <input type="text" placeholder="Write here..." name="icon3" class="input"> 
                                 </div> 
                        </div>

                        <div class ="cart iki"><div class="tit2"> Explain yourself in detail </div>

                        <div class="input2">
                                        <textarea name="aboutText" id="#" cols="145" rows="7" class="input"></textarea>
                                        </div>
                                        <div class="input3">
                                        <input type="submit" value="Save All Form" class="input2"></form>   
                                        </div>

                        </div>
                        
                       <!--  <div class="checkbox-apple">
                                                <input class="yep" id="check-apple" type="checkbox">
                                                 <label for="check-apple"></label> </div>-->
                   
                   
                    
                                               

                        

                    </div>

            </div>
            
	
                   
		    </div>
      
             
             
          
             </body>

           
</html>