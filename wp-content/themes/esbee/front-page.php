<?php
get_header();

wp_reset_query();
$aboutParams = get_field('about_section');
$featureParams = get_field('feature_section');
$serviceParams = get_field('service_section');
$processParams = get_field('process_section');
$rvParams = get_field('reviews_section');
$dirParams = get_field('directors_section');
echo ThemeElement::aboutSection($aboutParams, $featureParams);
echo ThemeElement::serviceSection($serviceParams);
echo ThemeElement::processSection($processParams);
echo ThemeElement::clientSection($rvParams);
echo ThemeElement::directorSection($dirParams);
?>


    <section class="call-section" id="call-section">
           <div class="container">
          <div class="clearfix">
             <div class="col-lg-8 col-12 text pull-left">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pharetra, eros nec imperdiet hendrerit, tellus mi venenatis mi, quis vulputate purus urna quis leo.</p>

             </div>
             <div class="col-lg-4 col-12 pull-right">
                <form action="">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter your email">
                 <button type="submit" class="btn btn-submit">Submit</button>
              </div>

            </form>
             </div>
          </div>
           </div>
        </section>
   <!-- Subcribe section End -->
<?php get_footer();?>