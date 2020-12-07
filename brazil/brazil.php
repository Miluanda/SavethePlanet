<!-- Connect to image database to retrieve and store a row -->
<?php include_once '../db/dbopen.php';
    $result = $conn->query("SELECT * from pictures where subpages = 'Brazil' ");
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
    <title>Brazil</title>
          <!-- get outside scripts like jquery and bootstrap -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>
<link rel="stylesheet" href="brazil.css">
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
                <li><a href="../alaska/Alaska.php">Alaska</a></li>	
                <li><a href="../coralsea/coralsea.php">Coral Sea</a></li>	
                <li><a href="../greenland/greenland.php">Greenland</a></li>	
                <li><a href="../India/india.php">India</a></li>	
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
                            <h1><strong>Amazon - <em>"Key buffer against Climate Change"</em> </strong></h1>
                            <p style="color: #fff;">In 2019, record fires in the Amazon sparked international outrage and capped a decade that saw the rainforest lose an area the size of 8.4 million soccer fields to deforestation. <br><br>

                                But authors of a new study warn that as the climate becomes hotter and drier, future fires could be far more damaging.
                                They project that the amount of forest burned could double by 2050 and consume 16 percent of the rainforest -- an area nearly the size of the entire state of Michigan, according to Paulo Brando, a professor at the University of California-Irvine and a lead author of the study.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section2" style="background-color: #3b7522 ">
            <div class="section-2-title">
                <h1>The Consequences</h1>
            </div>
            <div class="section2-box-area">
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>What happens next?</strong></span>
                        <p>Large areas of forest create their own weather. If wildfires ravage them, a delicate balance is upset. Water released by rainforests influences the water cycle of the entire planet. The Amazon alone contributes to 20% of the world's oxygen through the process of photosynthesis. As the rainforest decreases, so does its ability to support the rest of the planet. Large forests absorb carbon from the atmosphere, slowing the pace of climate change. Burning the Amazon means humanity is sabotaging its own life support system.</p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>On the forest floor</strong></span>
                        <p>Once a fire destroys a habitat, every animal that relied on it suffers as well, losing shelter and food.

                            A lot of carbon in a big forest is contained in its soil. Layers or organic matter sit on top of soil, which in turn provide a vital home for small invertebrates. All this organic matter burns up in a wildfire's high heat. <br> <br>
                            
                            That soil can also move around after a fire into places it isn't supposed to be – including into waterways from uncontrolled run-off.</p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong> Effects on biodiversity</strong></span>
                        <p>A tropical forest's trees and understory can be devastated by raging fires. Trees suffer badly, but plants and animals living closer to the ground are also extremely vulnerable. Much of the Amazon rainforest is particularly vulnerable because it is made up of lowland, wetland forests which are not well-equipped to deal with fire. <br><br> Experts believe that there are many species deep in the Amazon that are still unknown to science - and once gone, they will remain unknown forever.
                        </p>
                    </div>
                </div>
            </div>
        </section>

 <!-- section 3  -->
        <div class="section3">
            <div class="section3-container-left">
                <div class="section-3-title">
                    <h1>TAKE INITIATIVE TODAY!</h1>
                </div>
                <section class="section3-container">
                    <div class="section3-row">
                        <div class="section3-picture">
                        <img src="<?php echo $row['pic5'] ;?>">
                        </div>
                        <div class="section3-writing">
                            <h2> <strong> Volunteer your time</strong> </h2>
                                <p>The volunteer firefighters battling to save Brazil’s rainforest.<br> <br>
                                    Thousands of fires are ravaging the Amazon rainforest in Brazil - the most intense blazes for almost a decade.
 
One group of nature lovers has taken matters into its own hands. <br> <br>

When the volunteer firefighters of Alter do Chão learn of a fire in their area, they head there armed with rudimentary equipment.

Often they are the first to arrive on the scene which can buy vital time until the professionals arrive, and also provide them with invaluable information.
                                </p><br> <br>
                        </div>
                    </div>

                    <div class="section3-row">
                        <div class="section3-writing">
                            <h2> <strong> Help fight climate change</strong> </h2>
                            <p>As habitat destruction trends interact with climate change, the concern is that the Amazon will be caught up in a set of “feedback loops” that could dramatically speed up the pace of forest lost and degradation and bring the Amazon Biome to a point of no return. This threshold, also referred to as a tipping point, may occur when Amazonian forests die and are progressively replaced by fireprone brush and savanna (ecological tipping point), and rainfall is inhibited on a regional scale (climatic tipping point). <br> <br>Coupled with land-use changes, we can expect the degradation of freshwater systems, loss of ecologically and agriculturally valuable soils, increased erosion, decreased agricultural yields, increased insect infestation, and spread of infectious diseases.
                            </p>
                        </div>
                        <div class="section3-picture">
                        <img src="<?php echo $row['pic6'] ;?>">
                        </div>
                        
                    </div>
                    <div class="section3-row">
                        <div class="section3-picture">
                        <img src="<?php echo $row['pic7'] ;?>">
                        </div>
                        <div class="section3-writing">
                            <h2> <strong>Spread Awareness</strong> </h2>
                            <p>The forest currently accounts for around a quarter of the CO2 removal service provided by the world’s forests each year, according to the Washington Post. In total, the Amazon rainforest holds the equivalent of 10 years’ worth of global greenhouse gas emissions, it added: <br><br>

                                “However, the ability of the rainforest to pull in more carbon than it releases is diminishing, weakened by changing weather patterns, deforestation and increasing tree mortality, among other factors. The ongoing fires will further degrade its function as a carbon sink.”
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