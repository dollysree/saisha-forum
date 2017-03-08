$(document).ready(function(){
      $(".share").click(function () {
        var postdata=$(this).data("post");
          swal({title:"Share @",
            html:true,
            text:'<p><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fawalk.co.in%2Fview-post.php?id='+postdata+'" class="btn waves-effect waves-light indigo">facebook</a>'+'</p>'+'<br>'+'<p>'+
            '<a href="https://twitter.com/intent/tweet?source=http://awalk.co.in/view-post.php?id='+postdata+'via=awalk | Creating Innovations " class="btn waves-effect waves-light cyan lighten-2">&nbsp&nbspTwitter&nbsp&nbsp</a>'+'</p>'+'<br>'+'<p>'+'<a class="btn waves-effect waves-light  red lighten-1">Google +</a>'+'</p>'+'<br>'+'<p>'+'<a class="btn waves-effect waves-light light-blue darken-4">&nbspLinkedIn&nbsp</a>'+'</p>',
            confirmButtonText: 'Close'})
        });

       $(".post-hit").click(function(){ 
        <?php if(!isset($_SESSION['type'])){?>
          swal("Rejected", "Please login and continue", "error")
          <?php }else {?>
            var post_id=$(this).data("id");
            $.ajax({
              url:"http://localhost/saisha-form/ci-user/hit-post.php",
              data:{uid:"<?php echo $email;?>",pid:post_id},
              success:function(response){
                if(response=="success"){
                  Materialize.toast('<span>You liked this post</span>', 1500);
                }else if(response=="deleted"){
                  Materialize.toast('<span>You disliked this post</span>', 1500);
                }else{
                  swal(response)
                }
              }
            });
         <?php  }?>
        });


        $("#logout").click(function(){
        window.location.href="http://localhost/saisha-form/logout.php";
         });

        $(".anssub").click(function(){
            var this_ansval=document.getElementById("post-answer").value;
            var this_post_type=$(this).data("type");
            var this_post_id=$(this).data("id");
            var this_ans_id="ans-"+this_post_id;
            var this_user_id="<?php echo $username;?>";
            var d = new Date();
            var n = d.getTime();
            if(this_ansval.length>18){
                $.ajax({
                  url:"http://localhost/saisha-form/post-ans-sub.php",
                  data:{postdesc:this_ansval,userid:this_user_id,ansid:this_ans_id,time:n},
                  success:function(response){
                    if(response=="success"){
                        swal("success"," You answered to this post","success")
                         setTimeout(function(){
                          window.location.reload();
                        },2000);
                    }
                    else{
                      swal(response)
                    }
                  }
                });
            }
            else{
              swal("Rejected","Minimum Answer length must be atleast 18")
            }
        });


        $(".comsub").click(function(){

            

            var this_com_id=$(this).data("comid");  
            var this_comval=document.getElementById(this_com_id).value;         
            var this_com_id="com-"+this_com_id;

            var this_user_id="<?php echo $username;?>";

            var d = new Date();
            var n = d.getTime();

              if(this_comval.length>9){
                $.ajax({
                  url:"http://localhost/saisha-form/post-com-sub.php",
                  data:{comdesc:this_comval,userid:this_user_id,comid:this_com_id,time:n},
                  success:function(response){
                    if(response=="success"){
                        swal("success"," You commented in this post","success")
                         setTimeout(function(){
                          window.location.reload();
                        },2000);
                    }
                    else{
                      swal(response)
                    }
                  }
                });
            }else{
              swal("Rejected","Minimum comment length must be atleast 18","error")
            }
         });

        $(".anshitpv").click(function(){
              var d = new Date();
            var n = d.getTime();
           <?php if(!isset($_SESSION['type'])){?>
          swal("Rejected", "Please login and continue", "error")
          <?php }else {?>
            var this_ans_id=$(this).data("ansid");
            $.ajax({
              url:"http://localhost/saisha-form/ci-user/hit-answer.php",
              data:{uid:"<?php echo $username;?>",aid:this_ans_id,type:"pv",time:n},
              success:function(response){
                 if(response=="successpv"){
                  Materialize.toast('<span>You liked this answer</span>', 1500);

                }else if(response=="alreadypv"){
                  Materialize.toast('<span>You already liked this answer</span>', 1500);
                }else if(response=="rejectedpv"){
                  Materialize.toast('<span>something went wrong. check your internet connections</span>', 1500);
                }
              }
            });
         <?php  }?>
      });

      $(".anshitnv").click(function(){
              var d = new Date();
            var n = d.getTime();
           <?php if(!isset($_SESSION['type'])){?>
          swal("Rejected", "Please login and continue", "error")
          <?php }else {?>
            var this_ans_id=$(this).data("ansid");
            $.ajax({
              url:"http://localhost/saisha-form/ci-user/hit-answer.php",
              data:{uid:"<?php echo $username;?>",aid:this_ans_id,type:"nv",time:n},
              success:function(response){
                if(response=="successpv"){
                  Materialize.toast('<span>You disliked this answer</span>', 1500);
                }else if(response=="alreadypv"){
                  Materialize.toast('<span>You already disliked this answer</span>', 1500);
                }else if(response=="rejectedpv"){
                  Materialize.toast('<span>something went wrong. check your internet connections</span>', 1500);
                }
              }
            });
         <?php  }?>
      });

      $(".answerfocus").focusin(function(){
        var postlinkid=$(this).data("id");
        
        window.location.href="http://localhost/saisha-form/view-post.php?id="+postlinkid;
      });
    
 });
    

    
    (function($) {
    $(function() {

$('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      hover: true, // Activate on hover
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'right' // Displays dropdown with edge aligned to the left of button
    }
  );

    }); // End Document Ready
})(jQuery); // End of jQuery name space
