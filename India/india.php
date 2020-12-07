<!-- Connect to image database to retrieve and store a row -->
<?php include_once '../db/dbopen.php';
    $result = $conn->query("SELECT * from pictures where subpages = 'India' ");
    $row = mysqli_fetch_assoc($result);
    $result2 = $conn->query("SELECT * from pictures where subpages = 'Main'");
    $main = mysqli_fetch_assoc($result2);
?>
<!-- start of the html code -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>India</title>
    <!-- get outside scripts like jquery and bootstrap -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>
<link rel="stylesheet" href="india.css">
<!-- get php code into the background images -->
<style>
    .section1-container-left {
  background: url(<?php echo $row['pic1']; ?>) no-repeat center / cover;
}
        .section2-single-box:nth-child(1) .section2-img-area{
        background-image: url(<?php echo $row['pic2']; ?>);
    }

    .section2-single-box:nth-child(2) .section2-img-area{
        background-image: url(<?php echo $row['pic3']; ?>);
    }

    .section2-single-box:nth-child(3) .section2-img-area{
        background-image: url(<?php echo $row['pic4']; ?>);
    }

    </style>
<div id="info-box"></div>
</head>
<body>
    <section id="main">
        <!--navigation-------------------------------->
        <nav>
            <!--logo--->
            <a href="../index.html" class="logo">
            <img src="<?php echo $main['banner']; ?>" alt="Logo" width="20%" >
            </a>
            <!--menu--------->
            <div class="toggle"></div>
            
            <ul class="menu" id="menu">
                <li><a href="../australia/Australia.php">Australia</a></li>	
                <li><a href="../brazil/brazil.php">Brazil</a></li>	
                <li><a href="../coralsea/coralsea.php">Coral Sea</a></li>	
                <li><a href="../greenland/greenland.php">Greenland</a></li>	
                <li><a href="../alaska/Alaska.php">Alaska</a></li>	
                <li><a href="../philippines/philippines.php">Philippines</a></li>	
                <li><a href="../westafrica/westafrica.php">West Africa</a></li>
            </ul>

            <ul class="menu">
                <li class="active"><a href="../index.html">Home</a></li>
                <li><a href="../aboutus.html">About</a></li>		
                <li><a href="#">Forum</a></li>		
            </ul>
	
        </nav>
        <div class="banner">
        <img src="<?php echo $row['banner']; ?>" alt="">
        </div>
<!-- section 1 -->
        <section class="section1">
            <div class="section-1">
                <div class="section1-container">
                    <div class="section1-container-left"></div>
                    <div class="section1-container-right">
                        <div class="content">
                            <h1><strong>Climatic Desasters in India</strong></h1>
                            <p style="color: rgb(47, 53, 14);">India the second most populous country in the world exhibits a wide diversity of temperatures.
                                The climate of India is dominated by monsoon season, which is the most important season of India providing 80% of the annual rainfall. The effect of global warming on the climate of India has led to climate disasters in recent years resulting in heat weaves, floods, cyclones, etc. <br><br> In June 2019, an intense heatwave dried up northern India. Tropical cyclone is a regular occurrence in some Indian states such as Tamil Nadu, West Bengal, Kerala, etc. On top of that, some states have been dealing with devastating floods every year because of climate change.
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- section 2 -->
        <section class="section2" style="background-color: #9fa103 ">
            <div class="section-2-title">
                <h1>EFFECTS OF CLIMATIC DISASTERS ACROSS INDIA</h1>
            </div>
            <div class="section2-box-area">
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong></strong></span>
                        <p>Temperature has reached 48 degree Celsius in New Delhi on June 10, 2019 after an intense heatwave scorched the country for more than a Month: </p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Endangerment</strong></span>
                        <p>Cyclone Amphan caused widespread damage in Eastern India, especially West Bengal and also Bangladesh in May 2020
                        </p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong></strong></span>
                        <p>In August 2018, severe floods affected the south Indian state Kerala, due to unusually high rainfall during the monsoon season. </p>
                    </div>
                </div>
                
            </div>
        </section>

 <!-- section 3  -->
        <div class="section3">
            <div class="section3-container-left">
                <div class="section-3-title">
                    <h1>OUTLOOK</h1>
                </div>
                <section class="section3-container">
                    <div class="section3-row">
                        <div class="section3-picture">
                        <img src="<?php echo $row['pic5'] ;?>">
                        </div>
                        <div class="section3-writing">
                            <h2> <strong> Floods in Kerala</strong> </h2>
                                <p>In Indian state of Kerala climate-change-induced floods has become an annual affair.
                                    In August 2018, this state experienced heavy rain falls for couple of days which resulted in river overflowing. Many low-lying areas have been inundated. It was reported as one of the worst floods in Kerala’s history. The casualties of this were heavy where 483 people died 140 are missing. Exactly after a year it has experienced another similar heavy rainfall resulting in floods in August 2019. This time it has taken away more than 100 lives and affected many more. Kerala has encountered another flood this year again which has severely damaged the coastal communities and claimed many lives.
                                    
                                </p><br> <br>
                        </div>
                    </div>

                    <div class="section3-row">
                        <div class="section3-writing">
                            <h2> <strong> Impact of Global Warming</strong> </h2>
                            <p>As the world getting warmer day by day, the differential heating between land and oceans and between polar and tropical regions has affected global circulation patterns. The response of this warming climate leads to extreme weather events such as floods, droughts, storms, etc. Kerala is known as “God’s own country” because of its unique climate, land cover and biodiversity. Despite that Kerala has witnessed some distressing droughts in last few decades along with devastating floods. The north Indian ocean is warming at a higher rate. As a result, the number of cyclones and their intensity have increased recently.
                            </p>
                        </div>
                        <div class="section3-picture">
                        <img src="<?php echo $row['pic6']; ?>">
                        </div>
                        
                    </div>
                    <div class="section3-row">
                        <div class="section3-picture">
                        <img src="<?php echo $row['pic7']; ?>">
                        </div>
                        <div class="section3-writing">
                            <h2> <strong>The Present is Bad, and The Future is Worse</strong> </h2>
                            <p>India is most likely to face life threatening climate change effects including killer heat waves and sever floods in the next 80 years according to a study that calls for urgent steps to reduce greenhouse gas emissions. Annual mean temperature may increase up to 4.5 degree Celsius by the end of this century. These changes will put a large part of India’s population at high risk.
                            </p>
                        </div>
                    </div>
                </section>
            </div>

        </div><br><br>


<!-- back to top link -->
        <div class="backtotop">
            <a href="#main">Back to Top
                <i class='fas fa-arrow-alt-circle-up'></i>
            </a>
        </div> <br><br> 

<!-- Footer  -->
        <footer>
            <div class="footer">
                <div class="footer-logo">
                    <a href="../index.html" class="logo">
                    <img src="<?php echo $row['pic8']; ?>" alt="Logo" width="20%" >
                    </a>
                </div>
                <div class="sub-text">
                    <ul>
                        <h4>Other topics</h4>
                        <li class="polar"><a href="../alaska/Alaska.php"> Alaska</a></li>
                        <li class="ice"><a href="../greenland/greenland.php">Greenland</a> </li>
                        <li class="crop"><a href="../westafrica/westafrica.php"> West Africa</a></li>
                        <li class="natural"><a href="../India/india.php"> India</a></li>
                        <li class="wild"><a href="../brazil/brazil.php"> Brazil</a></li>
                        <li class="rise"><a href="../philippines/philippines.php"> Philippines</a></li>
                        <li class="heat"><a href="../australia/Australia.php"> Australia</a></li>
                        <li class="coral"><a href="../coralsea/coralsea.php"> Coral Sea</a></li>
                    </ul>
                </div>
                <div class="sub-text">
                    <ul>
                        <h4>Developers</h4>
                        <li><a href="../aboutus.html">About Us</a></li>
                        <li><a href="">Forum</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
            </div>
               
        </footer>
    </section>
</body>
</html><?php $result.close(); ?>