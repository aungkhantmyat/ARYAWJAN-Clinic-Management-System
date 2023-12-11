$( document ).ready(function() {
  
  const changeText = function (el, text, color) {
    el.text(text).css('color', color);
  };
  






  // $('.nametext').keydown(function(){
  //   let len1 = this.value.length;
  //   const pbText1 = $('.form .dd');
      
  //   if (len1 < 1) {
  //     $(this).css('border-color', '#FF4B47');
  //     changeText(pbText1, 'Email is blank', '#FF4B47');
  //   } 
  //   else{
  //      $(this).css('border-color', '#2DAF7D');
  //     changeText(pbText1, '', '#2DAF7D');
  //   }
    
    
  // });
  



 
  $('.input-4').keyup(function(){
    let len = this.value.length;
    const pbText = $('.form .progress-bar_text');

    if (len === 0) {
      $(this).css('border-color', '#FF4B47');
      changeText(pbText, 'Password is blank', '#FF4B47');
    } else if (len > 0 && len < 8) {
      $(this).css('border-color', '#FF4B47');
      changeText(pbText, 'Password is less than 8 character', '#FF4B47');
    } else {
       $(this).css('border-color', '#2DAF7D');
      changeText(pbText, 'Strong Password', '#2DAF7D');
    }
  });

 


  
});

      function checkemp(){
        let namelen = $('.nametext').value.length;
        let pwlen = $('.input-4').value.length;

        if(namelen===0 || pwlen===0){
          alert("hello world error login");
        }
      }   
          


       $(".own").click(function(){
        $(".cov").fadeIn();
        $(".main-page-wrapper").hide();
        // $(".dcov").hide();
      });

       $(".cross").click(function(){
        $(".cov").hide();
        $(".main-page-wrapper").show('fade');
        // $(".dcov").hide();
       });


       $(".drive").click(function(){
        $(".dcov").fadeIn();
        $(".main-page-wrapper").hide();
        // $(".cov").hide();
      });

       $(".dcross").click(function(){
        $(".dcov").hide();
        $(".main-page-wrapper").show('fade');
        // $(".cov").hide();
       });


       $(".pare").click(function(){
        $(".pcov").fadeIn();
        $(".main-page-wrapper").hide();
        // $(".cov").hide();
      });

       $(".pcross").click(function(){
        $(".pcov").hide();
        $(".main-page-wrapper").show('fade');
        // $(".cov").hide();
       });



      