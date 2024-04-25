
<footer class="footer-back">
        <div class="footer-top">
            <div class="row">

             <div class="col-md-12 col-lg-3">
                <div class="last-menu Useful">
                    <img src="images/logo-2.png">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta in magnam possimus sapiente sunt obcaecati temporibus, voluptates qui pariatur consectetur sit quas cupiditate placeat nostrum. Officiis non voluptas sit quos!</p>
                </div>
            </div>  



        <div class="col-md-12 col-lg-3">
            <div class="Useful">
                <h3>SHORT COURSES</h3>
                <div class="footer-menu">
                    <?php
                        $short_courses = $conn->query("SELECT slug, title FROM `short_courses` WHERE status=1");
                    ?>  
                    <ul class="normal-menu">
                        <?php
                            if($short_courses->num_rows > 0){
                                while ($scourse = $short_courses->fetch_assoc()) { // corrected variable name here
                                    echo '<li><a href="#" class="advance">'.$scourse['title'].'</a></li>';
                                }
                            }else{
                                echo '<li><a href="#" class="advance">Project Management Professional</a></li>
                                <li><a href="#" class="advance">Certificate in Project</a></li>
                                <li><a href="#" class="advance">Management</a></li>
                                <li><a href="#" class="advance">Centiloid Project Coordinator</a></li>
                                <li><a href="#" class="advance">Project Manager Accredited</a></li>
                                <li><a href="#" class="advance">Certification</a></li>
                                <li><a href="#" class="advance">Project Quality Manager Accredited</a></li>
                                <li><a href="#" class="advance">Certification</a></li>
                                <li><a href="#" class="advance">Product Manager Accredited</a></li>
                                <li><a href="#" class="advance">Certification</a></li>
                                <li><a href="#" class="advance">Certified Project Coordinator</a></li>';
                            }
                        ?> 
                    </ul>
                </div>
            </div>
        </div>




        <div class="col-md-12 col-lg-3">
            <div class="Useful">
                <h3>COURSES</h3>
                <div class="Contact-menu">
                    <?php
                        $main_courses = $conn->query("SELECT slug, title FROM courses where status=1 LIMIT 8");
                    ?> 
                    <ul class="Contact-icon">
                        <?php
                            if($main_courses->num_rows > 0){
                                while ($course = $main_courses->fetch_assoc()) { // corrected variable name here
                                    echo '<li><a href="course-details.php?slug='.$course['slug'].'" class="advance">'.$course['title'].'</a></li>';
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        




        <div class="col-md-12 col-lg-3">
            <div class="Contact Useful">
                <h3>QUICK LINKS</h3>
                <div class="Contact-menu">
                    <ul class="Contact-icon">
                        <li><a href="#" class="advance">Home</a></li>
                        <li><a href="#" class="advance">About Us</a></li>
                        <li><a href="#" class="advance">Course</a></li>
                        <li><a href="#" class="advance">Short Courses</a></li>
                        <li><a href="#" class="advance">Privacy Policy</a></li>
                        <li><a href="#" class="advance">Terms & Condition</a></li>
                    </ul>
                </div> 
                <br>
                <h3>SOCIAL MEDIA</h3>
                <div class="sun">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</footer>

<div class="footer-end">
    <p>Copyright © 2024 Mindtree INC</p>
</div>






<!-- ===========================our carousel=========================== -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js
" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- =====================bootstrap============================= -->

<script src="js/bootstrap.min.js"></script>

<!-- =========================pic zoom========================== -->



<!-- ==================================counter===================================== -->

<script type="text/javascript">
   // Counter To Count Number Visit
let a = 0;
$(window).scroll(function() {

  let oTop = $('#counter').offset().top - window.innerHeight;
  // Md.Asaduzzaman Muhid
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter').each(function() {
        let $this = $(this);
        jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
            duration: 2000,
            easing: 'swing',
            step: function () {
                $this.text(Math.ceil(this.Counter));
            }
        });
    });
    a = 1;// Md.Asaduzzaman Muhid
  }
});
</script>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>



<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
        }
    }
    })
</script>












</body>