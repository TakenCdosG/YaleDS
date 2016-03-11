<?php
/**
 * File used for homepage static page content module
 *
 * @package WordPress
 */
    $mainImg = get_field('main_image');
    $dateBucketText = get_field('date_buckets_text');
    $dateBucketText2 = get_field('date_buckets_text2');
    $dateBucketText3 = get_field('date_buckets_text3');
    $dateBucketLocation = get_field('date_buckets_location');
    /* Quote Section */
    $quoteImg = get_field('quote_image');
    $quoteText = get_field('quote_text');
    /* Side Buckets Info */
    $bucketInfo1 = get_field('side_bucket1');
    $bucketImg1 = get_field('bucket_img1');
    $bucketInfoUrl1 = get_field('bucket_url1');
    $bucketInfo2 = get_field('side_bucket2');
    $bucketInfoUrl2 = get_field('bucket_url2');
    $bucketImg2 = get_field('bucket_img2');
    $bucketInfo3 = get_field('side_bucket3');
    $bucketInfoUrl3 = get_field('bucket_url3');
    $bucketImg3 = get_field('bucket_img3');
?>

  <!-- +++++ Welcome Section +++++ -->
  <div id="ww">
      <div class="main-image" style="background-image: url(<?php echo esc_url( $mainImg['url']); ?>); background-size: cover; width: 100%; height: 390px; margin: auto; background-position: center; background-repeat: no-repeat; margin-top: -70px">
          <div class="container">
                  <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 sdbinfo" style="float: right;">
                        <div class="dates-buckets">
                            <div class="bucket-date">
                                <div class="bucket1"><?php echo $dateBucketText; ?></div>
                                <div class="bucket2"><?php echo $dateBucketText2; ?></div>
                                <div class="bucket3"><?php echo $dateBucketText3; ?></div>
                            </div>
                            <div class="separator"> </div>
                            <div class="bucket-location"> <?php echo $dateBucketLocation; ?>  </div>
                        </div>
                      </div>
                  </div>
          </div>
      </div>
      <div class="container">
          <div class="row">
              <div>
                  <div class="col-lg-8 col-md-8 col-sm-8 imginfo">
                      <div class="image-quote">
                          <div class="imgqt" style="background-image: url(<?php echo esc_url( $quoteImg['url']); ?>); height: 206px; margin-top: -33px; background-repeat: no-repeat;"></div>
                          <div class="quotext col-lg-7 col-md-7 col-xs-6">
                              <div class="quote"><?php echo '"'.$quoteText.'"'; ?></div>
                          </div>
                      </div>
                      <div class="quoinftext">
                          <?php while( have_posts() ) : the_post(); ?>
                              <?php the_content(); ?>
                          <?php endwhile; ?>
                      </div><!-- /col-lg-8 -->
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 sdbinfo">
                      <div class="side-buckets-info">
                          <div class="buckets-container">
                              <div class="sideBucket1">
                                  <div class="bucketImg" style="background-image: url(<?php echo esc_url( $bucketImg1['url']); ?>); height: 174px; background-repeat: no-repeat;">
                                      <div class="bucketTitle"><?php echo $bucketInfo1; ?></div>
                                  </div>
                              </div>
                              <div class="sideBucket2">
                                  <div class="bucketImg" style="background-image: url(<?php echo esc_url( $bucketImg2['url']); ?>); height: 174px; background-repeat: no-repeat;">
                                      <div class="bucketTitle"><?php echo $bucketInfo2; ?></div>
                                  </div>
                              </div>
                              <div class="sideBucket3">
                                  <div class="bucketImg" style="background-image: url(<?php echo esc_url( $bucketImg3['url']); ?>); height: 174px; background-repeat: no-repeat;">
                                      <div class="bucketTitle"><?php echo $bucketInfo3; ?></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
           </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /ww -->
     

  
      
     