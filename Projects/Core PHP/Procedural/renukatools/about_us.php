<?php

    include('include/header.php');
    $MenuName = basename($_SERVER['PHP_SELF']);
    $ProductCategory = $_REQUEST['product_category'];

?>

<style type="text/css">
    .atpb-5{
        transition: transform 0.5s;
    }
    .atpb-5 img:hover{
         transform: scale(1.1); 
    }
</style>
    <body>
        <!-- main wrapper start -->
        <main>
            <!-- page main wrapper start -->

            <!-- breadcrumb area start -->
            <div class="breadcrumb-area breadcrumb-area-style_2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <h1>About Us</h1>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" style="color: #2a80b9;">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><a style="cursor: default;" >About Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb area end -->

            <div class="pt-25 pb-50">
                <div class="container">


                    <div class="about-us-wrapper">

                        <div class="about-us-block">
                            <div class="row">
                                    <div class="col-md-3 atpb-5">
                                        <img src="include/img/About Us/Company Profile.jpg" alt="Company Profile" >
                                    </div>
                                    <div class="col-md-9">
                                        <h5 class="entry-title">Company Profile</h5>
                                        <div class="about-us-show-text">
                                            <p>Renuka Tools was founded in the year 2000 in Aurangabad, India with its vision to be the preferred special cutting tools provider. We now successfully cater to both domestic and international markets with our wide range of solutions. We ensure that we remain nimble and agile by continually investing in technology & R&D to stay ahead of time & keep pace with the changing technology in the industry</p>  
                                        </div>
                                        <div class="about-us-hide-text">
                                            <p> Renuka Tools with its state-of-the-art manufacturing unit manufactures high quality special indexable cutting tools with utmost precision using the latest technology and highly skilled and technical manpower. All cutting tools manufactured at our unit come with a Zoller Report, ensuring that the global export quality standards are met, guaranteeing complete customer satisfaction.</p>
                                            <p> At Renuka Tools, our core expertise is in manufacturing special customized cutting tools. With over 20 years of technical expertise and continual R&D efforts, we also offer standard products such as:</p>
                                            <ul>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Micro Bore Units</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; BCA Finish Boring Bars</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Boring Kits</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Eccentric Fine Boring Tools</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Adjustable Boring Tools</li>
                                            </ul>
                                            <p> Kindly go through our products segment to know more about them. <a href="product_page.php" target="_blank"  style="text-decoration: underline;" >Click here to view our products.</a></p>
                                        </div>
                                        <a href="javascript:void(0)" class="toggle" style="text-decoration: underline;" >Read More</a>
                                    </div>
                            </div>
                        </div>


                        <div class="about-us-block">
                            <div class="row">
                                    <div class="col-md-9 order-2 order-lg-1">
                                        <h5 class="entry-title">Our Team</h5>
                                        <div class="about-us-show-text">
                                            <h6 class="tab_heading">Management</h6>
                                            <p>Headed by Mr. Anand Mulay (B.E. Mechanical; MBA Marketing) - We wish to be your most preferred vendor / supplier for 3 reasons:</p>  
                                            
                                                
                                        </div>
                                        <div class="about-us-hide-text">
                                            <ol>
                                                <li>  &nbsp; We do not compromise on quality.</li>
                                                <li>  &nbsp; We are the best at what we do.</li>
                                                <li>  &nbsp; We keep learning and improvising every day.</li>
                                            </ol>
                                            <div class="row">
                                                <div class="col-md-4 atpb-5"><img src="include/img/About Us/Our Team/2Design.jpg" alt="Design"></div>
                                                <div class="col-md-8">
                                                    <h6 class="tab_heading">Design</h6>
                                                    <p>We have in-house design team that helps us facilitate the right design for the required application. To achieve the same, we have all the latest licensed software required so that the skill & technology goes hand-in-hand.</p> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 order-2 order-lg-1">
                                                    <h6 class="tab_heading">Planning</h6>
                                                    <p>We at Renuka Tools believe that planning is the key to execution and to realize this, we plan and implement & execute so that our customers are happy with the lead-times and also ensuring zero-defects</p> 
                                                </div>
                                                <div class="col-md-4 atpb-5 order-1 order-lg-2"><img src="include/img/About Us/Our Team/3Planning.jpg" alt="Planning"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 atpb-5"><img src="include/img/About Us/Our Team/4Production.jpg" alt="Production"></div>
                                                <div class="col-md-8">
                                                    <h6 class="tab_heading">Production</h6>
                                                    <p>The production team at Renuka Tools is highly skilled as we believe that shop-floor is where the magic happens in any manufacturing unit.</p> 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 order-2 order-lg-1">
                                                    <h6 class="tab_heading">Quality Control</h6>
                                                    <p>Quality is the key to our success. At Renuka Tools, our QC department plays a very crucial role in maintaining quality at all stages of production. This is closely monitored to ensure that the end result is total customer satisfaction.</p> 
                                                </div>
                                                <div class="col-md-4 atpb-5 order-1 order-lg-2"><img src="include/img/About Us/Our Team/5Quality Control.jpg" alt="Quality Control"></div>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="toggle" style="text-decoration: underline;" >Read More</a>
                                    </div>
                                    <div class="col-md-3 atpb-5 order-1 order-lg-2">
                                        <img src="include/img/About Us/Our Team/1Management.jpg" alt="Management" >
                                    </div>
                            </div>
                        </div>


                        <div class="about-us-block">
                            <div class="row">
                                    <div class="col-md-3 atpb-5">
                                        <img src="include/img/About Us/Vision.jpg" alt="Vision" >
                                    </div>
                                    <div class="col-md-9">
                                        <h5 class="entry-title">Our Vision</h5>
                                        <div class="about-us-show-text">
                                            <p>At Renuka Tools, our vision is to be the most preferred tooling solution provider ensuring highest quality with zero defects, excellent service and total customer satisfaction.</p>  
                                        </div>
                                    </div>
                            </div>
                        </div>


                        <div class="about-us-block">
                            <div class="row">
                                    <div class="col-md-9 order-2 order-lg-1">
                                        <h5 class="entry-title">Mission Statement</h5>
                                        <div class="about-us-show-text">
                                            <p>Our primary focus is the manufacturing of indexable metal cutting tools in the domain of Boring, Drilling, Milling, Turning, Grooving & Parting and other customized requirements. We provide innovative tooling solution to our clients, consistently outperform our peers in the industry with high quality products and unmatched service to customers, and offer a dynamic and challenging environment for our employees.</p>  
                                        </div>
                                        <div class="about-us-hide-text">
                                            <p></p>
                                            <p>Renuka Tools is committed to:</p> 
                                            <ul>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Empower our customers with highest quality products and exceptional services which help them gain competitive advantage in their markets. Renuka Tools' employees are expected to serve the customer with the highest level of technical knowledge in the industry</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Constantly seek innovation and improvisation via continuous learning and R&D, and the application of new technologies and best business practice to maintain its position as a leader in the Cutting Tools industry.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; To provide a safe and growth-oriented environment where our employees can nurture their skills, be highly productive and grow personally and professionally.</li>
                                            </ul>
                                        </div>
                                        <a href="javascript:void(0)" class="toggle" style="text-decoration: underline;" >Read More</a>
                                    </div>
                                    <div class="col-md-3 atpb-5 order-1 order-lg-2">
                                        <img src="include/img/About Us/Mission Statement.jpg" alt="Mission Statement" >
                                    </div>
                            </div>
                        </div>


                        <div class="about-us-block">
                            <div class="row">
                                    <div class="col-md-3 atpb-5">
                                        <img src="include/img/About Us/Business Philosophy.jpg" alt="Business Philosophy" >
                                    </div>
                                    <div class="col-md-9">
                                        <h5 class="entry-title">Business Philosophy</h5>
                                        <div class="about-us-show-text">
                                            <ul>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>Create : </b> Work as a thinking partner with customers to offer the best-fit solutions to their manufacturing needs through R&D and concept designing.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>Deliver : </b> Deliver complete tooling solutions to our customers.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>Empower : </b> Empower our customers with high quality tooling products.</li>
                                            </ul> 
                                        </div>
                                    </div>
                            </div>
                        </div>


                        <div class="about-us-block">
                            <div class="row">
                                    <div class="col-md-9 order-2 order-lg-1">
                                        <h5 class="entry-title">Core Values</h5>
                                        <div class="about-us-show-text">
                                            <p></p>
                                            <p>Our core values form the foundation of our conduct and act as a guide to all our employees.</p>  
                                            <ul>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>Respect for all :</b> Renuka Tools believes in respect of all stakeholders – internal and external. We believe that mutual respect forms the foundation of a trusted and long-lasting relationship.</li>
                                            </ul>
                                        </div>
                                        <div class="about-us-hide-text">
                                            <ul>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>Team-work :</b> We believe in team play and promote all our employees to work in close cooperation with our customers as well as with each other.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>Diversity :</b> Renuka Tools promotes diversity and pursues active recruitment plans which help us maintain this value. We believe that diversity brings us the best of talent and skills. We have a strong team of employees from different age, culture, skills, education and professional background which helps us achieve diversity in not just our workforce but also in thinking and problem-solving.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>Passion towards excellence :</b> We, at Renuka tools, believe in maintaining excellence in all spheres of our lives. Our employees do not only try and deliver solutions as per stated guidelines but continuously strive to achieve excellent results.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>Out-of-the box thinking :</b> We believe in thinking beyond acceptable and acting beyond permissible. We at Renuka Tools genuinely believe that every problem has a solution and every manufacturing need has a tooling solution. Our R&D efforts continually work in making impossible things become possible and offer best-fit solutions to every manufacturing problem.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>Responsive :</b> We believe that a good customer service starts with a timely response. We ensure that we maintain minimum response time to all queries.</li>
                                            </ul>
                                        </div>
                                        <a href="javascript:void(0)" class="toggle" style="text-decoration: underline;" >Read More</a>
                                    </div>
                                    <div class="col-md-3 atpb-5 order-1 order-lg-2">
                                        <img src="include/img/About Us/Core Values.jpg" alt="Core Values" >
                                    </div>
                            </div>
                        </div>


                        <div class="about-us-block">
                            <div class="row">
                                    <div class="col-md-3 atpb-5">
                                        <img src="include/img/About Us/Quality Policy.jpg" alt="Quality Policy" >
                                    </div>
                                    <div class="col-md-9">
                                        <h5 class="entry-title">Quality Policy</h5>
                                        <div class="about-us-show-text">
                                            <p>“We all at RENUKA TOOLS are committed to produce and timely supply the Cutting Tools, fulfilling customer requirements by using state of the art technology, safe working environment and active involvement of all employees. We shall take proactive approach towards risk those affect our product quality.</p>  
                                            <p> We shall strive to exceed customer expectations through continual improvement in all areas of operations and services without compromise.”</p>
                                            <p>To aspire for the above, we are ISO 9001 certified with DAkkS accreditation. <a style="text-decoration: underline;" href="include/About_us_PDF/1ISO Certificate on letterhead.pdf" target="_blank" >Click here to view our certificate.</a></p>
                                        </div>
                                    </div>
                            </div>
                        </div>



                        <div class="about-us-block">
                            <div class="row">
                                    <div class="col-md-9 order-2 order-lg-1">
                                        <h5 class="entry-title">Company History & Important Milestones</h5>
                                        <div class="about-us-show-text">
                                            <ul>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp;&nbsp; <b>2000 :</b> Renuka Tools was founded in the year 2000 in Aurangabad, India as a startup venture by Dr. Vilas Mulay as an angel investor.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>2009 :</b> We participated in an export promotion program organized by CBI (Centre for the Promotion of Imports), an agency of the Netherlands Ministry of Foreign Affairs. CBI conducts classroom training by experts, factory visits by European experts and counsels on manufacturing and marketing of products. </li>                                            
                                            </ul>
                                        </div>
                                        <div class="about-us-hide-text">

                                            <ul>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>2010 :</b> From September 28 – October 2, we participated in the AMB International Exhibition held in Stuttgart Germany. AMB is recognized as one of the highly specialized exhibitions for metal working.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>2011 :</b> We visited HAAS Company, an Automation manufacturer in the United States of America. Haas Automation Inc. is the largest machine tool builder in the Western World. We purchased Haas Automation Inc.'s Vertical Machining Center (VMC) - TM1P, to meet our quality standards.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>2013 :</b> The company was taken over by Mr. Anand Mulay from his father and the company is now led under his able guidance.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>2014 :</b> An exciting start to the year. We expanded and improvised our existing product line with five more tooling categories namely Drilling, Milling, Turning, Adaptors & Customized Tools. We also made addition to our production capacity by investing into another Haas Automation Inc's Vertical Machining Center (VMC)VF3-YT, to meet our tool-room's manufacturing & machining needs.<br>
                                                We expanded our production range and we now also cater to other manufacturing needs such as die & mold machining, critical components manufacturing etc.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>2015 :</b> Participated in IMTEX Tool Tech 2015 and got overwhelming response to our new launches. It also gave us recognition and increased our Brand Value.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>2016 :</b> We made addition to our production capacity by investing into another Haas Automation Inc's 5 axis Vertical Machining Center (VMC), to meet our tool-room's manufacturing & machining needs.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>2017 :</b> After the enormous success of Tool Tech 2015, we again participated in IMTEX Tool Tech 2017 and got similar overwhelming response to our new launches. We launched our Micro Bore Unit in the exhibition and received appreciation in terms of customer orders.<br>
                                                We also added a Zoller make Pre-setter to further improvise on our product quality and now on all our tools come with a Zoller report that stands valid world-wide.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>2018 :</b> We implemented ERP throughout the organization to integrate CRM, SCM & Accounts with Inventory & Production. Now on, all our data is synchronized & we have successfully become a process – driven organization. In the process we also became a green company as we have almost stopped taking print-outs of the product drawings and we have them all on the system.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>2019 :</b> We added another 5 axis Vertical Machining center to increase our production capacity.
                                                Received our first overseas order and we are now exporting to different parts of the world.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <b>2020 :</b> We launched new products such as Boring Kit, Eccentric Fine Boring Tools, Duo Boring Bars & BCA Boring Bars. Although we had been manufacturing these kinds of tools, we developed a standard product range to cater to customer needs faster & in a more economical way.<br>
                                                Received our first Order from the Government Sector – Indian Railways. We are now supplying to many of the Indian Government PSU’s such as Ordinance Factory Board, Indian Railways, Diesel Loco Works etc.</li>
                                            </ul>
                                        </div>
                                        <a href="javascript:void(0)" class="toggle" style="text-decoration: underline;" >Read More</a>
                                    </div>
                                    <div class="col-md-3 atpb-5 order-1 order-lg-2">
                                        <img src="include/img/About Us/Company History & Important Milestones.jpg" alt="Company History & Important Milestones" >
                                    </div>
                            </div>
                        </div>



                        <div class="about-us-block">
                            <div class="row">
                                    <div class="col-md-3 atpb-5">
                                        <img src="include/img/About Us/Corporate Social Responsibility.jpg" alt="Corporate Social Responsibility" >
                                    </div>
                                    <div class="col-md-9">
                                        <h5 class="entry-title">Corporate Social Responsibility</h5>
                                        <div class="about-us-show-text">
                                            <ul>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp;<b>We Care : </b> At Renuka Tools, we firmly believe in contributing to the society and creating value in our own small ways.We believe in creating a greener environment and plant trees to promote sustainable development and serve the society.</li>
                                                
                                            </ul> 
                                        </div>
                                        <div class="about-us-hide-text">
                                            <ul>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp;<b>We Recycle : </b> At Renuka Tools, we take it as our Corporate Social Responsibility to use recyclable paper only for all our internal printing purposes as well as for all our marketing collaterals including catalogues, flyers, client communications etc. We also try and keep our office environment as paper-free as possible.</li>
                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp;<b>We Nurture : </b> We believe in offering a healthy working environment to our employees and take pride in offering them a challenging and rewarding career with us. We actively pursue learning opportunities for them to build their professional and personal skills. We also arrange health camps at our office for our employees and their families.</li>
                                            </ul>
                                        </div>
                                        <a href="javascript:void(0)" class="toggle" style="text-decoration: underline;" >Read More</a>
                                    </div>
                            </div>
                        </div>



                        <div class="about-us-block">
                            <div class="row">
                                <div class="col-md-9 order-2 order-lg-1">
                                    <h5 class="entry-title">Our Credentials</h5>
                                    <div class="about-us-show-text">
                                        <p></p>
                                        <p>Click on any of the below credentials to view them full screen:</p>
                                        <ul>
                                            <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <a style="text-decoration: underline;" href="include/About_us_PDF/1ISO Certificate on letterhead.pdf" target="_blank" >ISO Certificate – 9001:2015</a></li>
                                            <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <a style="text-decoration: underline;" href="include/About_us_PDF/2NSIC Certificate - Renuka Tools, Aurangabad 001.pdf" target="_blank">NSIC Registration Certificate</a></li>
                                            
                                        </ul> 
                                    </div>
                                    <div class="about-us-hide-text">
                                         <ul>
                                            <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <a style="text-decoration: underline;" href="include/About_us_PDF/3UDYAM REG RENUKA TOOLS.pdf" target="_blank">Udyam Registration Certificate</a></li>
                                            <li> <i class="fa fa-dot-circle-o"></i> &nbsp; <a style="text-decoration: underline;" href="include/About_us_PDF/4GST Certificate.pdf" target="_blank">GST Certificate</a></li>
                                        </ul>
                                    </div>
                                    <a href="javascript:void(0)" class="toggle" style="text-decoration: underline;" >Read More</a>
                                </div>
                                <div class="col-md-3 atpb-5 order-1 order-lg-2">
                                    <img src="include/img/About Us/Certificates.jpg" alt="Quality Policy" >
                                </div>
                            </div>
                        </div>





                    </div>

                </div>
            </div>
            <!-- page main wrapper end -->
        </main>
        <!-- main wrapper end -->



    <?php 
          include ('include/footer.php');
    ?>

    </body>

    </html>