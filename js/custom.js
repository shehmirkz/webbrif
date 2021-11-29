$(document).ready(function(){
    $('#brief_forms').submit(function(e) {
        
           e.preventDefault();
                $.ajax({
                        type:"POST",
                        url: "library/brief.php",
                        data: $(this).serialize(), // get all form field value in serialize form
                        success: function(){
                        console.log("success");
                        $("#show_message_brief").fadeIn();
                        $("html, body").animate({ scrollTop: 0 }, "slow");
                        $("#brief_forms").fadeOut();
                    }
               }); 
            
        });
});