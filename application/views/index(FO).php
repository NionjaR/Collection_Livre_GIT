<!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Book Store">
<meta name="abstract" content="Book Store">

<title>Book Store
<?php 
            if(isset ($page)) echo $page;            
        ?>  
</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo base_url(); ?>/assets/css/templatemo_style.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>/assets/css/css-sprites.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div class="sprite7">
    	<ul>
            <li><a href="indexFO.html" class="current">Home</a></li>                        
    	</ul>
    </div> <!-- end of menu -->    
    
	<div class="sprite5">
		<div class="sprite">
		</div>
	</div>
	<!-- end of header -->
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
        	<div class="templatemo_content_left_section">
            	<h1>Categories</h1>
                <ul>
                    <?php foreach($data_categorie as $data_categorie){?>
                    <li><a href="Produit_Categorie-<?php echo $data_categorie['ID']; ?>.html"><?php echo $data_categorie['CATEGORIE'];?></a></li>
                    <?php } ?>
            	</ul>
            </div>		                
        </div> <!-- end of content left -->
        
        <div id="templatemo_content_right">
        <?php 
            if(isset ($page)) include $page.".php";
            else include "ListProduit.php";  
        ?>    
		<div class="sprite1">
		
		</div>
		
        </div>

    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    <div id="templatemo_footer">
           <h3>Nionja Ravelojaona N°: 48</h3>
	       <br>
        Copyright © 2024 <a href="indexFO.html"><strong>Your Company Name</strong></a> 
        <!-- Credit: www.templatemo.com -->	</div> 
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
	</div> <!-- end of container -->
<!-- templatemo 086 book store -->
<!-- 
Book Store Template 
http://www.templatemo.com/preview/templatemo_086_book_store 
-->
</body>
</html>