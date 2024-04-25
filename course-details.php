<?php

use function PHPSTORM_META\type;

include "include/preheader.php";
include "include/header.php";

if (isset($_GET['slug'])) {
    $param1_value = $_GET['slug'];
    // Corrected the SQL query to select columns
    $cdetails = $conn->query("SELECT * FROM courses where slug='".$param1_value."' AND status=1");
    if($cdetails->num_rows == 1){
        // Fetch the result row
        $course_details = $cdetails->fetch_assoc();
        // Output the course details
        // print_r($course_details['slug']);
    }else{
        // Redirect to index.php if the course is not found
        header("Location: index.php");
        exit(); 
    }
} else {
    // Redirect to index.php if slug parameter is not set
    header("Location: index.php");
    exit(); 
}
?>

<section class="about">
	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<div class="about-details">
					<div class="about-content">
						<h2><?= $course_details['title']; ?></h2>
                        <?= $course_details['details']; ?>
						<!-- <p>The Project Management Professional (PMP) certificate is highly valued in the field of
							project management & coordination. Project Management Certification is one of the
							fastest-growing and widely recognized professional certification, with over a million PMP
							Certification holders globally. An increasing number of organization are seeking to hire
							project managers or coordinator who certify as project management professionals offered
							through the Mindtree Incorporation.</p>
						<p>The Project Management Professional (PMP) certification is a globally recognized
							certification to candidates. The candidates who pass the PMP exam become globally recognized
							and certified associates in project management. The PMP Certification is applicabile in
							virtually any industry, including NGO Project, Non-profit Organization, Health, Information
							Technology (IT) and Construction.</p> -->
					</div>
				</div>

			</div>

			<div class="col-md-6">
				<div class="about-img">
					<img src="<?= 'https://sdf.mindtreeinc.com'.$course_details['cover_img']; ?>" onerror="this.src='images/cours_default.jpg'">
				</div>
			</div>

		</div>
	</div>
</section>


<section class="care">
	<div class="container">
		<div class="heading-care">
			<div class="type-head">
				<h2>Eligibility criteria of this course</h2>
			</div>
		</div>
        <?php $eligibility = ($course_details['eligibility']!="")? json_decode($course_details['eligibility']) : []; ?>
		<div class="eligibility-data">
			<div class="row justify-content-center">
                <?php
                foreach($eligibility as $elible){
                    if(trim($elible) != ""){
                        echo '<div class="col-md-4"><div class="media p-3">
                        <img src="images/checked.png" alt="checked" class="align-self-center mr-3 rounded-circle" style="width:30px;">
                        <div class="media-body">
                          <h6>'.$elible.'</h6>
                        </div>
                      </div></div>';
                    }
                }
                ?>
			</div>
		</div>

		<div style="clear: both;"></div>


		<div class="course">
			<div class="course-heading">
				<h2>Course Highlights</h2>
				<p>Skill Covered</p>
			</div>
            <?php $highlights = ($course_details['highlights']!="")? json_decode($course_details['highlights']) : []; ?>
			<div class="row justify-content-center">
                <?php
                foreach($highlights as $index => $skill){
                    if(trim($skill) != ""){
                        echo '<div class="col-md-4">
                            <div class="course-highlight">
                                <div class="course-img">
                                    <img src="images/service-'.($index+1).'.png" alt="a">
                                </div>
                                <div class="course-cont">
                                    <h3>'.$skill.'</h3>
                                </div>
                            </div>
                        </div>';
                    }
                    
                }
                ?>
			</div>

		</div>

		<div style="clear: both;"></div>

		<div class="heading-care">
			<div class="type-head">
				<h2>Who can take up this course?</h2>
			</div>
		</div>
        <?php $for_whom = ($course_details['for_whom']!="")? json_decode($course_details['for_whom']) : []; ?>
		<div class="eligibility-data">
			<div class="row justify-content-center">
                <?php
                foreach($for_whom as $whom){
                    if(trim($whom) != ""){
                        echo '<div class="col-md-4"><div class="media p-3">
                        <img src="images/checked.png" alt="checked" class="align-self-center mr-3 rounded-circle" style="width:30px;">
                        <div class="media-body">
                          <h6>'.$whom.'</h6>
                        </div>
                      </div></div>';
                    }
                    
                }
                ?>
			</div>
		</div>


	</div>
</section>

<section class="outline">
	<div class="container">
		<div class="outline-flex">
				<div class="out-line-con">
					<h3>Course Outline & Pricing</h3>
					<ul>
						<li>Live/Virtual Training</li>
						<li>Lifetime Access</li>
						<li>Online Exam</li>
						<li>Completion Certificate</li>
						<li>Accessible on Mobile & Laptop</li>
					</ul>
                    <?php
                    $discount = (int)$course_details['discount'];
                    $price = (float)$course_details['price'];
                    $payable = $price;
                    if($discount != 0){
                        $payable = $price*(1 - ($discount/100));
                    }
                    ?>
					<div class="price">
						<h4>₹<?= number_format($payable, 2, ',', ','); ?></h4>
						<a href="<?= 'https://sdf.mindtreeinc.com?token='.base64_encode($course_details['slug']);?>">Register Now</a>
					</div>
				</div>
				<div class="certificate">
					<img src="images/certificate.jpg" alt="">
				</div>
		</div>
	</div>
</section>


