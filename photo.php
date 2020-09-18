
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">

	
  <head>
   <title>Uhinkle Store</title>
   
	 <meta>Uhinkle specializes in custom made hot press T-shirts.
	  We also carry products like women hand bags, women lingerie, pet supplies, men under clothings, scented candles, and books.<br>
	 <strong><em> "Uhinkle your one stop shopping site"</em></strong></meta>
	 <meta name="keywords" content="Custom Made T-shirts, Scented Candles, Candle Scents, Hand bags, Designer Bags, Lingerie, Women, Paper, Pets, Supplies" />
  
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=0.2, maximum-scale=0.8" >
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick-theme.css"/> 
  
  
 
  <style>
  

  
  
  	body{
  		background-color: #E2EAEF;
  		marginleft: -2cm;
  		margin: 16px -80px 120px -5px;
  		 background-size: 490em;
  		  background-size: 490px;
		height: 70em;
		width: 110em;
  }
  
  
   div.desc {
  text-align: center;
  font-family: Arial,sans-serif;
  font-size: 110%;
  font-weight: normal;
  width 120

  
}
    
  
  div.multiple-items {
    width:1300px;

    background-color:#E2EAEF;
    margin-right: 3cm;
    margin-top: 1cm;
     margin-bottom: 0cm;
    text-align:  center;
    color:white;
}


   
  

{

width: 2%;
}


.slider{
		width: 1450px;
		margin: -50px 50px 1px -30px;
		margin-top: 1cm;
		margin-bottom: -1cm;
		text-align:  center;
		background-color:#E2EAEF;
		
	}
	


	
	

	
	
	.slick-slide {
    background-color:#E2EAEF;
    color: green;
    padding: 40px 0;
    font-size: 30px;
    font-family: "Arial", "Helvetica";
    text-align: center;
  
}



.slick-dots {
   		 bottom: 50px;
    	margin-right: -100cm;
}

	
	
	h3{
		padding: 50px 30px;
		background: 
	}
	
	.slider div{
		margin-left:20px;
	
	}
	
	
	
		.slick-prev:before, 
		.slick-next:before{
   	 color: black; !important;
   	 position: absolute;
   	 font-size: 40px;
    line-height: 1;
    opacity: .75;
   	   
	}


	
	
	
.slick-slide:nth-child(odd) {
     background:#E2EAEF;
     
}


.slick-slide:nth-child(even) {
     background:#E2EAEF;
}

.slick-slide img
{
   
   margin: 1px 1px 1px ;
    float: left;
    
    
}

	
	
table,tr,td{ margintop: -200px;
			 marginleft: 0px;
				
	}
	
	
	table{
	
	margin: 7px 0px 0px;
	
	
	}
	
	
	th{
		font-size: 25px;
    font-family: "Arial", "Helvetica";
	
	}

	
	
</style>
 
  </head>
  
  
  
  
  
  <?php
 
	mysql_connect( "localhost", "prelaw","now2016" );
 	 mysql_select_db("myuhinkle", $con);
 
	 $data=mysqli_query("SELECT * FROM photos LIMIT 3"); 
	while($info = mysql_fetch_array( $data ))
 {
 
 //Outputs the image and other data
 Echo "<img src=images22/".$info['uploaded'] ."> <br>";
 Echo "<b>Name:</b> ".$info['name'] . "<br> ";
 Echo "<b>Email:</b> ".$info['email'] . " <br>";
 Echo "<b>Phone:</b> ".$info['phone'] . " <hr>";
 }
?>
 
<html>
<h2>Fetch image form mysql</h2>
</head>
<body>
 
<img src="<?php echo $path['pic'];?>" />
 
  
  <?php
  
    //header("Content-type: picture/jpeg");
  

//displayimage();

//function displayimage(){
  
  	 //$con = mysql_connect("localhost", "prelaw", "now2016") or die('Could not connect to server');
   //mysql_select_db("myuhinkle", $con) or die('Could not connect to database');
   
   //$id =addslashes($_REQUEST['id']);
  

  
   //$query = "SELECT * FROM photos WHERE id=$id";
	//$query = "SELECT * FROM photos";
	//$result = mysql_query($query);
	//$pic = $row['pic'];
	//$row = mysql_fetch_array($result,MYSQL_ASSOC);
	//while($row =  mysql_fetch_array($mysql)) 
	//$pic = $row['pic'];
	//$file = $_FILES['pic']['tmp_name'];
	
	//if(!isset($file))
	//echo "Please Select an Image";
	
	//else
	//{
		//$file = $_FILES['pic']['tmp_name'];
		//$pic = addslashes(file_get_contents($_FILES['pic']['tmp_name']));
		//$pic_name = addslashes($_FILES['pic']['name']);
		//$pic_size = getimagesize($_FILES['pic']['tmp_name']);
		
		//}
	
		
	//if(!isset($file))
	//echo "Please Select an Image";
	
	//else
	//{
	
		  //$id =addslashes($_REQUEST['id']);
		//$pic = addslashes(file_get_contents($_FILES['pic']['tmp_name']));
		
		//$pic_name = addslashes($_FILES['pic']['name']);
		//$pic_size = getimagesize($_FILES['pic']['tmp_name']);
		
	
	
		//$comment = $row['comment'];
	//while($row =  mysql_fetch_array($mysql)){
	
	
	//}
	
	//mysql_close($con);
	
	//}

	

	//echo $pic;
	
	
	


   
   		
   	
   		
   	//echo $pic;
  
   //?>

  <img src=<?php echo $pic; ?></img>
 
  <body>
  
  

	
  <section class="slider">
    <div><a target="_blank"href=index.php?content=buyproducts&cat=5>
    <img   width="1350"
  height="500px"></div></a>
     <div><a target="_blank" href=index.php?content=buyproducts&cat=2>
     <img src="/images/Graphic Design HandBagsStoreAd(Width).jpg" alt="Graphic Design HandBagsStoreAd(Width)"  width="1350px" height="500px"></div></a>
    <div><a target="_blank" href=index.php?content=buyproducts&cat=2>
    <img src="/images/Graphic Design Purses StoreAd(Width).jpg" alt="Graphic Design Purses StoreAd(Width)"  width="1350px" height="500px"></div></a>
     <div><a target="_blank" href=index.php?content=buyproducts&cat=6>
     <img src="/images/Graphic Design Candles StoreAd(Width2).jpg" alt="Graphic Design Candles StoreAd(Width2)"  width="1350px" height="500px"></div></a>
    <div><a target="_blank" href=index.php?content=buyproducts&cat=1>
    <img src="/images/Graphic Design Pets StoreAd(Width).jpg" alt="Graphic Design Pets StoreAd(Width)"  width="1350px" height="500px"></div></a>
     <div><a target="_blank" href=index.php?content=buyproducts&cat=7>
     <img src="/images/Graphic Design Hanes(Width).jpg" alt="Graphic Design Hanes(Width)"  width="1350px" height="500px"></div></a>
    <div><a target="_blank" href=index.php?content=buyproducts&cat=3&page=2>
    <img src="/images/Graphic Design ChildsBooksStoreAd(Wide).jpg" alt="Graphic Design ChildsBooksStoreAd(Wide)"  width="1350px" height="500px"></div></a>
    <div><a target="_blank" href=index.php?content=buyproducts&cat=3>
    <img src="/images/Graphic Design BooksStoreAd(Wide).jpg" alt="Graphic Design BooksStoreAd(Wide)."  width="1350px" height="500px"></div></a>
    <div><a target="_blank" href=index.php?content=buyproducts&cat=4>
    <img src="/images/Graphic Design LingerieStoreAd(Wide).jpg" alt="Graphic Design LingerieStoreAd(Wide)"  width="1350px" height="500px"></div></a>
  </section>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick.min.js"></script>

  <script type="text/javascript">
    	$(document).ready(function(){     		
		$('.slider').slick({
   			 autoplay: true,
    		dots: false,
    		arrows: true,
        	responsive: [{ 
        	breakpoint: 500,
        	settings: {
            dots: false,
            arrows: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            
        	}
    	}]
    });
});

  </script>
  
 
  
 <table width="100%" border="0">
 <tr><th><h2>Quality T-Shirts Starting at $22.95 with Print</h2> 	
<div>
 <a target="_blank" href=index.php?content=buyproducts&cat=5>
 <img src="/images/Graphic DesignWash21FootBallWide.jpg" alt="Graphic DesignWash21FootBallWide" width="710" height="310"></a>
 </div></th><br>
 



	
<th><div><h2>Or, Quality UnderShirts 3 for $27.99 with Print</h2>
 <a target="_blank" href=index.php?content=buyproducts&cat=5>
 <img src="/images/Graphic DesignBalti26BaseBallWide.jpg" alt="Graphic DesignBalti26BaseBallWide.jpg" width="710" height="310"></a>
 </div></th></tr><br><br>

 </table> 
  
  
  
  

 <div class="multiple-items">
    <div><a target="_blank"href=index.php?content=buyproducts&cat=5><img src="/images/YourDesignTShirt2ALR.jpg" alt="YourDesignTShirt2ALR" width="260"
  height="210"></div></a>
     <div><a target="_blank" href=index.php?content=buyproducts&cat=5><img src="/images/pictgreencloverDesign7.jpg" alt="pictgreencloverDesign7"  width="260px" height="210px"></div></a>
      <div><a target="_blank" href=index.php?content=buyproducts&cat=5><img src="/images/PicEasterBasketDesign8Set.jpg" alt="PicEasterBasketDesign8Set"  width="260px" height="210px"></div></a>
   	<div><a target="_blank" href=index.php?content=buyproducts&cat=5><img src="/images/pictLove2heartsDesign9.jpg" alt="pictLove2heartsDesign9"  width="260px" height="210px"></div></a>
     <div><a target="_blank" href=index.php?content=buyproducts&cat=5><img src="/images/pictHolloweenpumpkinDesign10.jpg" alt="pictHolloweenpumpkinDesign10"  width="260px" height="210px"></div></a>
   <div><a target="_blank" href=index.php?content=buyproducts&cat=5><img src="/images/pictgreencloverDesign11Set.jpg" alt="pictgreencloverDesign11Set"  width="260px" height="210px"></div></a>  
 	<div><a target="_blank" href=index.php?content=buyproducts&cat=5><img src="/images/PicChamGlassDesign12Set.jpg" alt="PicChamGlassDesign12Set"  width="260px" height="210px"></div></a>
    <div><a target="_blank" href=index.php?content=buyproducts&cat=5><img src="/images/YourDesignTshirt1Depphoto1A.jpg" alt="YourDesignTshirt1Depphoto1A"  width="260px" height="210px"></div></a>
      <div><a target="_blank" href=index.php?content=buyproducts&cat=5><img src="/images/YourDesignTshirt1Naomi1A.jpg" alt="YourDesignTshirt1Naomi1A"  width="260px" height="210px"></div></a>
      <div><a target="_blank" href=index.php?content=buyproducts&cat=5><img src="/images/TShirtDesignSweet16ALR.jpg" alt="TShirtDesignSweet16ALR"  width="260px" height="210px"></div></a>
    <div><a target="_blank" href=index.php?content=buyproducts&cat=5><img src="/images/TShirtDesignChampions1ALR.jpg" alt="TShirtDesignChampions1ALR"  width="260px" height="210px"></div></a>
   <div><a target="_blank" href=index.php?content=buyproducts&cat=5><img src="/images/TShirtDesignHappAnniv1ALR.jpg" alt="TShirtDesignHappAnniv1ALR"  width="260px" height="210px"></div></a>
  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick.min.js"></script>

  <script type="text/javascript">
    	$(document).ready(function () {
    $(".multiple-items").slick({
        dots: false,
        arrows: true,
        infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
    });
});
    		
  </script>
  
  
  
 
  <table width="100%" border="0">
<tr>
<th><h2>Quality T-Shirts $22.95 with Print</h2>
<div class="img">
 <a target="_blank" href=Designs.inc.php>
 <img src="/images/Graphic Design Family Reunion.jpg" alt="Graphic Design Family Reunion" width="710" height="310"></a>
 <div class=desc> Design #Family Reunion; See More Designs</div><br>
</div></th>








	


<th><h2> Or,Quality UnderShirts 3 for $27.99 with Print</h2>
<div class="img">
 <a target="_blank" href=Designs.inc.php>
 <img src="/images/Graphic Design Family ReunionMan.jpg" alt="Graphic Design Family ReunionMan" width="710" height="310"></a>
 <div class=desc>Design #Family Reunion; See More Designs</div><br>
</div></th><br><br>

</tr>

</table>





	<div>
 <div class="multiple-items">
    <div><a target="_blank"href=index.php?content=buyproducts&cat=8>
    <img src="/images/PicHammerMillSet.JPG" alt="PicHammerMillSet" width="260"
  height="210"></div></a>
     <div><a target="_blank" href=index.php?content=buyproducts&cat=8>
     <img src="/images/PicHammerMillRimSet.jpg" alt="PicHammerMillRimSet"  width="260px" height="210px"></div></a>
    <div><a target="_blank" href=index.php?content=buyproducts&cat=8>
    <img src="/images/PicAlliancePaperSet.jpg" alt="PicAlliancePaperSet"  width="260px" height="210px"></div></a>
     <div><a target="_blank" href=index.php?content=buyproducts&cat=8>
     <img src="/images/PicAllianceRimSet.jpg" alt="PicAllianceRimSet"  width="260px" height="210px"></div></a>
    <div><a target="_blank" href=index.php?content=buyproducts&cat=7>
    <img src="/images/TShirtAdHanesBoxers(4).jpg" alt="TShirtAdHanesBoxers(4)"  width="230px" height="213px"></div></a>
     <div><a target="_blank" href=index.php?content=buyproducts&cat=7>
     <img src="/images/TShirtAdHanes.jpg" alt="TShirtAdHanes"  width="260px" height="210px"></div></a>
    <div><a target="_blank" href=index.php?content=buyproducts&cat=4&page=4>
    <img src="/images/PicRedRobSet.JPG" alt="PicRedRobSet"  width="260px" height="210px"></div></a>
    <div><a target="_blank" href=index.php?content=buyproducts&cat=4&page=4>
    <img src="/images/PicPinkandWhiteSet.JPG" alt="PicPinkandWhiteSet"  width="260px" height="210px"></div></a>
    <div><a target="_blank" href=index.php?content=buyproducts&cat=4&page=4>
    <img src="/images/PicPinkRobSet.JPG" alt="PicPinkRobSet"  width="260px" height="210px"></div></a>
  <div><a target="_blank" href=index.php?content=buyproducts&cat=4&page=4>
  <img src="/images/PicRedandRedSet.JPG" alt="PicRedandRedSet"  width="260px" height="210px"></div></a>  
  <div><a target="_blank" href=index.php?content=buyproducts&cat=4&page=4>
  <img src="/images/PicPinkandRedSet.JPG" alt="PicPinkandRedSet"  width="260px" height="210px"></div></a>
 <div><a target="_blank" href=index.php?content=buyproducts&cat=4&page=4>
 <img src="/images/PicRedandWhiteSet.JPG" alt="PicRedandWhiteSet"  width="260px" height="210px"></div></a>
  </div>

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick.min.js"></script>

  <script type="text/javascript">
    	$(document).ready(function () {
    $(".multiple-items").slick({
        dots: false,
        arrows: true,
        infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
    });
});
    		
  </script>
  
  
</div>

	
  
  
 
  




 </body>
 </html>





				
 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
