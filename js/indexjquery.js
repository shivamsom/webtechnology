 $(document).ready(function(){
          $(".emphead").mouseenter(function(){
            $(".empbody").slideDown(500);
              
                $(".empfa").css({"-webkit-transition" : "0.6s","-moz-transition":"0.6s","-o-transition" : "0.6s","transition" : "0.6s" ,"-webkit-transform" : "rotate(-90deg)","-moz-transform" : "rotate(-90deg)","-o-transform" : "rotate(-90deg)", "transform" : "rotate(-90deg)"});
                     
            
    });  
           $(".empbody").mouseleave(function(){
            $(".empbody").slideUp(500);
              
                $(".empfa").css({"-webkit-transition" : "0.6s","-moz-transition" : "0.6s","-o-transition" : "0.6s","transition" : "0.6s" ,"-webkit-transform" : "rotate(0deg)","-moz-transform" : "rotate(0deg)","-o-transform" : "rotate(0deg)", "transform" : "rotate(0deg)"});
                    
            
    });  
  
        $(".customerhead").mouseenter(function(){
		  $(".customerbody").slideDown(500);
				$(".customerfa").css({"-webkit-transition" : "0.6s","-moz-transition":"0.6s","-o-transition" : "0.6s","transition" : "0.6s" ,"-webkit-transform" : "rotate(-90deg)","-moz-transform" : "rotate(-90deg)","-o-transform" : "rotate(-90deg)", "transform" : "rotate(-90deg)"});
		});

		$(".customerbody").mouseleave(function(){
		   $(".customerbody").slideToggle(500);
               $(".customerfa").css({"-webkit-transition" : "0.6s","-moz-transition" : "0.6s","-o-transition" : "0.6s","transition" : "0.6s" ,"-webkit-transform" : "rotate(0deg)","-moz-transform" : "rotate(0deg)","-o-transform" : "rotate(0deg)", "transform" : "rotate(0deg)"});		   
		});
		
		
		$(".rephead").mouseenter(function(){
            $(".repbody").slideDown(500);
              
                $(".repfa").css({"-webkit-transition" : "0.6s","-moz-transition":"0.6s","-o-transition" : "0.6s","transition" : "0.6s" ,"-webkit-transform" : "rotate(-90deg)","-moz-transform" : "rotate(-90deg)","-o-transform" : "rotate(-90deg)", "transform" : "rotate(-90deg)"});
                     
            
    });  
           $(".repbody").mouseleave(function(){
            $(".repbody").slideUp(500);
              
                $(".repfa").css({"-webkit-transition" : "0.6s","-moz-transition" : "0.6s","-o-transition" : "0.6s","transition" : "0.6s" ,"-webkit-transform" : "rotate(0deg)","-moz-transform" : "rotate(0deg)","-o-transform" : "rotate(0deg)", "transform" : "rotate(0deg)"});
                    
            
    });  
           $(".deposithead").mouseenter(function(){
            $(".depositbody").slideDown(500);
              
                $(".depositfa").css({"-webkit-transition" : "0.6s","-moz-transition":"0.6s","-o-transition" : "0.6s","transition" : "0.6s" ,"-webkit-transform" : "rotate(-90deg)","-moz-transform" : "rotate(-90deg)","-o-transform" : "rotate(-90deg)", "transform" : "rotate(-90deg)"});
                     
            
    });  
           $(".depositbody").mouseleave(function(){
            $(".depositbody").slideUp(500);
              
                $(".depositfa").css({"-webkit-transition" : "0.6s","-moz-transition" : "0.6s","-o-transition" : "0.6s","transition" : "0.6s" ,"-webkit-transform" : "rotate(0deg)","-moz-transform" : "rotate(0deg)","-o-transform" : "rotate(0deg)", "transform" : "rotate(0deg)"});
                    
            
    });

        

            $(".inthead").mouseenter(function(){
            $(".intbody").slideDown(500);
              
                $(".intfa").css({"-webkit-transition" : "0.6s","-moz-transition":"0.6s","-o-transition" : "0.6s","transition" : "0.6s" ,"-webkit-transform" : "rotate(-90deg)","-moz-transform" : "rotate(-90deg)","-o-transform" : "rotate(-90deg)", "transform" : "rotate(-90deg)"});
                     
            
    });  
           $(".intbody").mouseleave(function(){
            $(".intbody").slideUp(500);
              
                $(".intfa").css({"-webkit-transition" : "0.6s","-moz-transition" : "0.6s","-o-transition" : "0.6s","transition" : "0.6s" ,"-webkit-transform" : "rotate(0deg)","-moz-transform" : "rotate(0deg)","-o-transform" : "rotate(0deg)", "transform" : "rotate(0deg)"});
                    
            
    }); 

   $(".intrhead").mouseenter(function(){
            $(".intrbody").slideDown(500);
              
                $(".intrfa").css({"-webkit-transition" : "0.6s","-moz-transition":"0.6s","-o-transition" : "0.6s","transition" : "0.6s" ,"-webkit-transform" : "rotate(-90deg)","-moz-transform" : "rotate(-90deg)","-o-transform" : "rotate(-90deg)", "transform" : "rotate(-90deg)"});
                     
            
    });  
           $(".intrbody").mouseleave(function(){
            $(".intrbody").slideUp(500);
              
                $(".intrfa").css({"-webkit-transition" : "0.6s","-moz-transition" : "0.6s","-o-transition" : "0.6s","transition" : "0.6s" ,"-webkit-transform" : "rotate(0deg)","-moz-transform" : "rotate(0deg)","-o-transform" : "rotate(0deg)", "transform" : "rotate(0deg)"});
                    
            
    }); 



       	  $(".navleft").mouseleave(function(){
			  $(".empbody,.repbody, .customerbody, .depositbody, .intrbody, .intbody").slideUp(500);
			  
		       $(".empfa, .customerfa, .repfa, .depositfa, .intrfa, .intfa").css({"-webkit-transition" : "0.6s","-moz-transition" : "0.6s","-o-transition" : "0.6s","transition" : "0.6s" ,"-webkit-transform" : "rotate(0deg)","-moz-transform" : "rotate(0deg)","-o-transform" : "rotate(0deg)", "transform" : "rotate(0deg)"});
		  });
	
		

		
});

