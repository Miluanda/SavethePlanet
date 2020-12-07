<!-- Connect to image database to retrieve and store a row -->
<?php include_once '../db/dbopen.php';
    $result = $conn->query("SELECT * from pictures where subpages = 'Australia' ");
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
    <title>Australia</title>
       <!-- get outside scripts like jquery and bootstrap -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>
<link rel="stylesheet" href="australia.css">
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
                <li><a href="../alaska/Alaska.php">Alaska</a></li>	
                <li><a href="../brazil/brazil.php">Brazil</a></li>	
                <li><a href="../coralsea/coralsea.php">Coral Sea</a></li>	
                <li><a href="../greenland/greenland.php">Greenland</a></li>	
                <li><a href="../India/india.php">India</a></li>	
                <li><a href="../philippines/philippines.php">Philippines</a></li>	
                <li><a href="../westafrica/westafrica.php">West Africa</a></li>
            </ul>

            <ul class="menu">
                <li class="active"><a href="../index.html">Home</a></li>
                <li><a href="../index.html">About</a></li>		
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
                            <h1><strong>Australian Heat Wave</strong></h1>
                            <p style="color: #fff;">Confirming what had been widely suspected, researchers have found that human-caused climate change had an impact on Australia’s recent devastating wildfires, making the extremely high-risk conditions that led to widespread burning at least 30 percent more likely than in a world without global warming.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section2" style="background-color: #f5806cd0 ">
            <div class="section-2-title">
                <h1>EFFECTS CAUSED BY GLOBAL WARMING</h1>
            </div>
            <div class="section2-box-area">
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Heatwaves, fire and drought</strong></span>
                        <p>A warming and drying climate with increased incidence of heatwaves is projected to lead to an increase in extreme fire-danger days and bush fires in South Eastern Australia. Increased frequency and severity of heatwaves will lead to a significant increase in health risks. Droughts are projected to increase in length and geographical area, leading to increased water shortages, particularly in southern Australia. </p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Storms and more floods</strong></span>
                        <p>More frequent and intense storms and rainfall events are predicted with increases in storm and flood damage to ecosystems, housing and infrastructure. Sea level rise is also likely to increase the risk of tidal surges and flooding in coastal regions and communities. Regarding Australia’s climate change strategies They develop and administer the Australian Government’s domestic actions to reduce Australia’s greenhouse gas emissions and meet our obligations under the Paris Agreement.</p>
                    </div>
                </div>
                <div class="section2-single-box">
                    <div class="section2-img-area"></div>
                    <div class="section2-img-text">
                        <span class="section2-header-text"><strong>Government Regulations</strong></span>
                        <p> The government aim to develope and coordinate domestic climate change policy, 
                            to administer climate change programs to help reduce emissions,
                            to develope and coordinate renewable energy policy and regulation,
                            to engage with stakeholder groups and the community on climate priorities,
                            to supporting business and industry to innovate and adopt smarter practices and technologies,
                            and to help the land and agriculture sector reduce greenhouse gas emissions and adapt to the changing environment.
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
                                <p>
                                    Bushfires have always been part of Australia’s ecosystem. The extreme fires of recent years, however, is forcing the world to acknowledge that there’s more at play. Extreme heat and drought fuel the bushfires but climate change seems to be the root cause of it. If you’re among the many who are tired of being the passive onlooker, why not volunteer? Discover our volunteer opportunities to support the Australian bushfires. Rescue injured wildlife or join forces with other volunteers and assist with forest rehabilitation.
                                    <br><br> According to NOAA scientists, 500,000 acres of burnt forest emits the equivalent amount of CO2 as 6 coal power plants during an entire year. Consider that 15 million acres of Australian forests have gone up in smoke this year.
                                </p><br> <br>
                        </div>
                    </div>

                    <div class="section3-row">
                        <div class="section3-writing">
                            <h2> <strong> Help fight climate change</strong> </h2>
                            <p>Many areas of our planet need relief from the effects of climate change. To make an impact no matter where you live.<br> <br>
                                Fire also contributes to global warming. Until recently, forests in Australia would reabsorb the carbon released during a bushfire. This resulted in zero net emissions. The damage that has been done this season, however, may take years to reabsorb. <br><br> According to NOAA scientists, 500,000 acres of burnt forest emits the equivalent amount of CO2 as 6 coal power plants during an entire year. Consider that 15 million acres of Australian forests have gone up in smoke this year.
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
                            <p>There are many charities that the environment within australia. Online fundraising for environmental charities can be fun and easy, and is a great way to include family and friends in your efforts to protect the planet.  <br> <br>
                                Although recent cooler conditions and rain have brought some respite, more than 50 fires are still burning in the states of New South Wales and Victoria.

Hot and windy conditions are forecasting to return to many parts of New South Wales this weekend and authorities in the Australian Capital Territory (ACT) have declared a state of emergency as massive bushfires rage south of Canberra.

At least 33 people have been killed - including four firefighters - and more than 11 million hectares (110,000 sq km or 27.2 million acres) of bush, forest and parks across Australia were burned.
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