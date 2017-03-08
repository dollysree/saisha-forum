
        <div class="container"><br>

        <!-- start of row -->

        <div class="row">
          <?php foreach( $posts as $post ): ?>
              <?php extract( $post ); ?>
               <div id="profile-page-wall" class="col s12 m5">
                <!-- profile-page-wall-posts -->
                <div id="profile-page-wall-posts"class="row">
                  <div class="col s12">
                      <!-- medium -->
                      <div id="profile-page-wall-post" class="card">
                        <div class="card-profile-title">
                          <div class="row p-row">
                            <div class="col s2">
                              <img src="assets/images/dummy.jpg" alt="" class="circle responsive-img valign profile-post-uer-image">                        
                            </div>
                            <div class="col s9">
                              <p class="grey-text text-darken-4 margin bold">
                                <?php echo $user_id; ?> <i class="mdi-hardware-keyboard-arrow-right grey-text text-darken-1"></i>
                             <a href="http://localhost/saisha-form/ci-user/tag.php?tag=Sensors" >  <?php echo $category; ?></a></p>
                                 
                              <span class="grey-text text-darken-1 ultra-small">Posted publicly  - <a target="_BLANK" href="http://localhost/saisha-form/view-post.php?id=b584b1aa62d91ef625b61fd108064b09-1479117752063" class="ultra-small"> <?php echo $date_of_post; ?></a></span>
                            </div>
                          </div>
                          <div class="row p-row">
                             
                            <div class="col s12 p-row">
                             <p class="p-row"><?php echo $title; ?> </p>

                          <div class="row ultra-small">
                         <p class="ultra-small col s11 offset-1"><b>Tags: </b><?php echo $tags; ?> </p>
                        </div>
                              <p><b>Description: </b>
                                <?php echo $description; ?></p>
                            </div>
                          </div>
                        
                        <a href="view-post.php?id=b584b1aa62d91ef625b61fd108064b09-1479117752063" class="right tooltipped" data-position="bottom" data-delay="50" data-tooltip="Click to view post" target="_BLANK" >View this post <wbr>   </a>
                        <br></div><div class="divider"></div>

                        <div class="row ultra-small data-card">

                          <!-- total number of post hits -->
                        <div class="col s12 m3 center" >
                          <a class="btn-floating btn-flat waves-effect waves-light  post-hit" data-type="hit" data-id="b584b1aa62d91ef625b61fd108064b09-1479117752063" data-postedby="sunil"><i class="mdi-hardware-keyboard-arrow-up grey-text text-darken-1"></i></a> <span id="posthit">
                          1</span>
                        </div>
                        <!--end of total hits-->

                        <!-- start of number of views -->
                        <div class="col s12 m3 center">
                          <a class="btn-floating btn-flat waves-effect waves-light   "><i class=" mdi-action-visibility grey-text text-darken-1"></i></a> <?php echo $no_of_views; ?>
                        </div>
                        <!-- end of number of views -->

                        <!-- start of number of answers -->
                        <div class="col s12 m3 center">
                           <a class="btn-floating btn-flat waves-effect waves-light   "><i class="mdi-action-question-answer grey-text text-darken-1"></i></a> 
                              <span id="">  
                            1</span>
                        </div>
                        <!-- end of number of answers -->

                        <div class="col s12 m3 center">
                           <a class="btn-floating btn-flat waves-effect waves-light share" href="#!" data-post="b584b1aa62d91ef625b61fd108064b09-1479117752063" ><i class="mdi-social-share grey-text text-darken-1"></i></a>
                        </div>
                      </div>

                      <div class="row col s11 offset-s1">
                        <div class=" ">
                          <div class="row"></div>
                             <div class="deep-purple-text text-darken-4 ultra-small"><b>Answer</b></div>
                              <div class="input-field col s10">
                                <input id="profile-comments" type="text" class="validate margin answerfocus" data-id="b584b1aa62d91ef625b61fd108064b09-1479117752063" placeholder="write your answer....">
                              </div> 
                              <!-- share starts --> 
                              <div>
                               <a class="btn-floating btn-flat waves-effect waves-light grey lighten-4" id="anssub" data-type="answer" data-postid="b584b1aa62d91ef625b61fd108064b09-1479117752063"><i class="mdi-content-send grey-text text-darken-1"></i></a>   
                             </div>  
                             <!-- share ends -->                                        
                        </div> 
                      </div>


                    <div class="card-action row grey-text text-lighten-1 grey lighten-4 center p-row">Be the first to answer correct. </div>
                                            
                      

                    </div>
                </div>
              </div>
          </div>        
         <?php endforeach; ?>
      </div>
        <!-- end of row -->
      </div>

        <!--end container-->
      <!-- END CONTENT -->
  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer deep-purple darken-4">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2016 <a class="grey-text text-lighten-4" target="_blank">Awalk</a> All rights reserved.</span>
        </div>
    </div>
  </footer>
  <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="assets/js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <!--prism
    <script type="text/javascript" src="assets/js/prism/prism.js"></script>-->
    <!--scrollbar-->
    <script type="text/javascript" src="assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="assets/js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="assets/js/custom-script.js"></script>
    <!--sweetalert -->
    <script type="text/javascript" src="assets/js/plugins/sweetalert/sweetalert.min.js"></script>  

<script type="text/javascript" src="assets/js/ci-user-home.js"></script>
</body>

</html>