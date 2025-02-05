<!-- Connect to image database to retrieve and store a row -->
<?php include_once '../db/dbopen.php';
    $result = $conn->query("SELECT * from pictures where subpages = 'Fiji' ");
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
    <title>Coral Sea</title>
          <!-- get outside scripts like jquery and bootstrap -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>
<link rel="stylesheet" href="coralsea.css">
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
                <li><a href="../alaska/Alaska.php">Alaska</a></li>	
                <li><a href="../greenland/greenland.php">Greenland</a></li>	
                <li><a href="../India/india.php">India</a></li>	
                <li><a href="../philippines/philippines.php">Philippines</a></li>	
                <li><a href="../westafrica/westafrica.php">West Africa</a></li>
            </ul>

            <ul class="menu">
                <li class="active"><a href="../index.html">Home</a></li>
                <li><a href="../index.html#about">About</a></li>		
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
                            <h1 style="color: rgb(175, 226, 241);"><strong>What is Coral Bleaching?</strong></h1>
                            <p style="color: #fff;">Coarl Bleaching is an event that happens as a result of warmer water temperatures. Corals get their coloring by giving the algae Zooxanthellae a place to live(their tissues). <br><br>When the water temperature rises too much the corals expel the algae from their tissues turning themselves white. This bleaching of color does not kill the coral but they will be under more stress and will die slowly as the algae produce the food. Corals will bleach for other reasons but warming water temperatures are causing worldwide coral bleaching. .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section2" style="background-color: #176772 ">
            <div class="section-2-title">
                <h1>BLEACHING IMPACTS</h1>
            </div>
            <div class="section2-box-area">
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>The Fiji Island Reefs</strong></span>
                        <p>Fiji is a coral island surrounded by coral reefs and since 2008 have been monitored aggressively by the Fiji government. Geographically Fiji is surrounded by the largest coral reef system in the SouthWest Pacific (3869sq miles). In 2018, Prime Minister Frank Bainimarama said “on present indications, we are losing the battle” and the governemnt had banned the sale of live coral</p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Threaten Livelyhood</strong></span>
                        <p>Reefs damaged by coral bleaching can quickly lose many of the features that underpin the aesthetic appeal that is fundamental to reef tourism. The resultant loss of revenue from reduced tourist activity can threaten the livelihoods of local communities. Coral reefs are biodiverse and productive ecosystems but are threatened by local and global stresses. The resulting loss of coral reefs is threatening coastal food and livelihoods.</p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Effect on Fishes</strong></span>
                        <p>Nearly everything in a coral-reef ecosystem depends on corals, or on the reef structure in some way. Coral colonies provide a source of food and shelter for countless reef-associated organisms and their health is of critical importance to the ecology of the reef community. Scientists are discovering that the ecological impacts of coral decline can have detrimental effects on fish communities.
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
                                <p>Volunteering for a coral reef conservation project is the perfect way for all ocean lovers and passionate scuba divers to help and protect their surroundings. Coral reefs play a vital part in our marine ecosystems and suffer greatly from water pollution, unsustainable diving and fishing. <br><br>
                                    From the beautiful island Hawaii to Australia and even Norway, coral reefs can be found all over the world. They are some of the most diverse ecosystems in the world, housing tens of thousands of marine species. And even though the total area of the world's coral reefs amounts to less than a quarter of 1% of the entire marine environment, coral reefs are home to 25% of all marine life on the planet. 
                                </p><br> <br>
                        </div>
                    </div>

                    <div class="section3-row">
                        <div class="section3-writing">
                            <h2> <strong> Help fight climate change</strong> </h2>
                            <p>The leading cause of coral bleaching is climate change. A warming planet means a warming ocean, and a change in water temperature—as little as 2 degrees Fahrenheit—can cause coral to drive out algae. Coral may bleach for other reasons, like extremely low tides, pollution, or too much sunlight.
                                <br><br>
                                Coral bleaching matters because once these corals die, reefs rarely come back. With few corals surviving, they struggle to reproduce, and entire reef ecosystems, on which people and wildlife depend, deteriorate.

Bleaching also matters because it’s not an isolated phenomenon. According to the National Oceanic and Atmospheric Association, between 2014 and 2017 around 75% of the world’s tropical coral reefs experienced heat-stress severe enough to trigger bleaching. For 30% of the world’s reefs, that heat-stress was enough to kill coral.
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
                            <h2> <strong> Spread Awareness</strong> </h2>
                            <p>Bonefish Grill supports the Conservancy’s Plant a Million Corals Initiative and is helping The Nature Conservancy raise awareness about the importance of coral reefs. You can also share this page with your friends using the hashtag #CoralOn to let them know that coral reefs are critically important. <br> <br>
                                Demand they take action to protect coral reefs, stop sewage pollution of our oceans, expand marine protected areas and take steps to reverse climate change.    
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