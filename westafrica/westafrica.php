<!-- Connect to image database to retrieve and store a row -->
<?php include_once '../db/dbopen.php';
    $result = $conn->query("SELECT * from pictures where subpages = 'Westafrica' ");
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
    <title>West Africa</title>
    <!-- get outside scripts like jquery and bootstrap -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>
<link rel="stylesheet" href="westafrica.css">
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
                <li><a href="../India/india.php">India</a></li>	
                <li><a href="../philippines/philippines.php">Philippines</a></li>	
                <li><a href="../alaska/Alaska.php">Alaska</a></li>
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
                            <h1><strong>Agricultural Risk </strong></h1>
                            <p style="color: #fff;">Achieving food security goals in West Africa will depend on the capacity of the agricultural sector to feed the rapidly growing population and to moderate the adverse impacts of climate change. Indeed, a number of studies anticipate a reduction of the crop yield of the main staple food crops in the region in the coming decades due to global warming.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- section 2 -->
        <section class="section2" style="background-color: #d49042 ">
            <div class="section-2-title">
                <h1>EFFECTS OF CLIMATE CHANGE </h1>
            </div>
            <div class="section2-box-area">
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Climate-stressed African agriculture</strong></span>
                        <p>Changes in climate such as higher temperatures and reduced water supplies, along with other factors like biodiversity loss and ecosystems degradation, affect agriculture. According to Science, a leading international research journal, by 2030 Southern Africa and South Asia will be the two regions in the world whose crop production is most affected by climate change. </p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Protecting water resources</strong></span>
                        <p>Increasing crop production amidst climate change has been done before, and analysts believe that African countries need to incorporate this knowledge in their planning. They will also need to protect and fortify their water resources, which are critical to food security.

                            In the coming years, water for agriculture will be stretched to a painful extent. In Africa, 95% of agriculture relies on rainfall for water, according to the United Nations Environment Programme (UNEP). The World Bank notes it is very likely that by 2100 the total availability of water in all of Africa could decline by more than 10%.</p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Biodiversity</strong></span>
                        <p>Biodiversity losses and ecosystem degradation will affect the quality of the soil and the vegetation upon which livestock depends, states the World Bank, adding that potential reductions in water, biodiversity and crops should compel Africa to pay closer attention to its current food system. In short, Africa needs an approach that works with nature, not against it.
                        </p>
                    </div>
                </div>
            </div>
        </section>

 <!-- section 3  -->
        <div class="section3">
            <div class="section3-container-left">
                <div class="section-3-title">
                    <h1>Impact of Risks</h1>
                </div>
                <section class="section3-container">
                    <div class="section3-row">
                        <div class="section3-picture">
                        <img src="<?php echo $row['pic5'] ;?>">
                        </div>
                        <div class="section3-writing">
                            <h2> <strong>  Impacts on producers</strong> </h2>
                           <p>Agricultural risks are among the major reasons for poverty traps and low growth, as they could influence
                            decisions of smallholders in favour of subsistence production with low risks/low returns. Production
                            and price shocks compromise the food and nutrition security of poor consumers in urban areas,
                            while discouraging investment in the supply chain of food and agricultural products. <br><br> Different studies
                            have shown that there is a strong negative relationship between GDP growth and shocks, and that the
                            impact is larger in developing countries with less developed financial systems</p> 
                        </div>
                    </div>

                    <div class="section3-row">
                        <div class="section3-writing">
                            <h2> <strong>  Impact on consumers (households and communities)</strong> </h2>
                            <p>Most high-income consumers are only marginally affected by a rise in food commodity prices since only
                                a small share of their incomes is spent on food. Moreover, they consume processed products in which the
                                share of raw commodities, such as wheat, in the final consumption basket is small. <br><br> Naturally, the situation
                                is very different for poor families in developing countries, where the share of food in their total expenditure
                                is very high, and consumption of processed products limited. Shocks such as droughts and food price spikes
                                can affect individuals who normally have sufficient access to food, threatening the stability of food security. 
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
                            <h2> <strong>The nature of agricultural risks in Africa </strong> </h2>
                            <p>Africa is one of the regions in the world most affected by food price volatility and production variability.
                                Spiking and volatile food prices have created uncertainty and risks for producers, traders and processors,
                                and resulted in increased food insecurity for consumers.  <br> <br>The continent’s recurrent and long history
                                of rainfall fluctuations of varying lengths and intensities along with inadequate infrastructure, limited
                                storage facilities and market imperfections are among the major causes for food price and supply variability. Food and agricultural production in sub-Saharan African countries is highly exposed to a wide range
                                of natural disasters, with hydro-meteorological hazards affecting the largest number of people. 
                                
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
                        <li><a href="">Feedback</a></li>
                    </ul>
                </div>
            </div>
               
        </footer>
    </section>
</body>
</html><?php $result.close(); ?>