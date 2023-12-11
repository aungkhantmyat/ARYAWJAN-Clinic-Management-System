// edit profile start ----------------




		$jq=jQuery.noConflict();
         $jq(document).ready(function(e) {
          
            

           $jq('.profilenext').click(function(){
            $jq('.profilesubmit').show();
            $jq('.profileback').show();
            $jq('.profilebox').hide();
            $jq('.hideprofiletable').slideDown();
            $jq('.profilenext').hide();
        });



        $jq('.profileback').click(function(){
            $jq('.profilesubmit').hide();
            $jq('.profileback').hide();
            $jq('.profilebox').slideDown();
            $jq('.hideprofiletable').hide();
            $jq('.profilenext').show();
        });


        $jq('.profilenext').on("click",function(e){
            e.preventDefault();
        });

        $jq('.profileback').on("click",function(e){
            e.preventDefault();
        });

        $jq('.backbut').click(function(){
            e.preventDefault();
        });   
         });







		// edit profile end--------------------