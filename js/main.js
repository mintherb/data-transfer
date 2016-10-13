$(document).ready(function() {
    $(".menu-btn").each(function(index){
       $(this).on("click", function() {
            var targetMenu = "#" + $(this).attr("target-menu");
            console.log("I've hidden " + targetMenu);
            $(targetMenu).toggleClass("menu-hidden");
       });
    });
    
    $(".audio-btn").each(function(index){
        console.log($(this).attr('id')+"-audio");
        var slider = document.getElementById($(this).attr('id')+"-slider")
        var audioPlayer = document.getElementById($(this).attr('id')+"-audio");
        slider.noUiSlider.on('update', function(){
            audioPlayer.volume = parseFloat(slider.noUiSlider.get());
        });
        
        $(this).find(".pause-btn").on("click", function() {
            
            if(!audioPlayer.paused) {
                var i = audioPlayer.volume;                     

                function lowerVol () {           
                   setTimeout(function () {    
                      audioPlayer.volume = i;
                      i-=0.01;                     
                      if (i > 0) {          
                         lowerVol();             
                      }else{
                        audioPlayer.pause();
                      }                      
                   }, 10)
                }
                lowerVol(); 
                
                console.log("Audio now stopped");
                $(this).parent().toggleClass("blur").parent().find(".pause-overlay").toggleClass("hidden"); 
            }
        });
        
        $(this).find(".pause-overlay").on("click", function() {
            if(audioPlayer.paused) {
                audioPlayer.play();
                var i = audioPlayer.volume;                     
                function raiseVol () {           
                   setTimeout(function () {    
                      audioPlayer.volume = i;
                      i+=0.01;                     
                      if (i < parseFloat(slider.noUiSlider.get())) {          
                         raiseVol();             
                      }else{
                        
                      }                      
                   }, 10)
                }
                raiseVol(); 
                console.log("Audio now playing");
                $(this).toggleClass("hidden").parent().find(".btn-content").toggleClass("blur");
            }
        });
    });
});
