$(document).ready(function() {

   // hide, show & toggle effects
   $("#hide").click(function(){
      $("#hst").hide();
   });

   $("#show").click(function(){
      $("#hst").show();
   });

   $("#toggle").click(function(){
      $("#hst").toggle();
   });

   // fadeIn, fadeOut & fadeToggle
   let fade = $(".fade-effect");
   $("#fade").click(function(){
      fade.fadeIn(1000);
   });

   $("#fade-out").click(function(){
      fade.fadeOut(1000);
   });

   $("#fade-toggle").click(function(){
      fade.fadeToggle(1000);
   });

   // slideDown, slideUp & slideToggle
   $("#slide-down").click(function(){
      $(".sdut").slideDown();
   });

   $("#slide-up").click(function(){
      $(".sdut").slideUp();
   });

   $("#slide-toggle").click(function(){
      $(".sdut").slideToggle();
   });

   // Animate method
   $("#animate").click(function(){
      $(".animated-box").animate({
         left: '250px',
         opacity: '0.5',
         height: '250px',
         width: '250px'
      });
   });

   // jQuery Get & Set Content
   var text = $(".text-html").text();
   var html = $(".text-html").html();
   var value = $("#name").val();

   $("#show-text").click(function(){
      $(".gs-result").text(text);
   });

   $("#show-html").click(function(){
      $(".gs-result").html(html);
   });

   $("#show-value").click(function(){
      $(".gs-result").html(value);
   });

   // append, prepend, before, after
   $("#append").click(function(){
      $("#add-content").append("<li>Appended item</li>");
   });

   $("#prepend").click(function(){
      $("#add-content").prepend("<li>Prepended item</li>");
   });

   $("#before").click(function(){
      $("#add-content").before("Some text before ul element");
   });

   $("#after").click(function(){
      $("#add-content").after("Some text after ul element");
   });

   // Empty & Remove
   $("#empty").click(function(){
      $(".for-er").empty();
   });

   $("#remove").click(function(){
      $(".for-er").remove();
   });

   // Add, Remove & Toggle class
   $("#add-class").click(function(){
      $("#art").addClass("red");
   });

   $("#rm-class").click(function(){
      $("#art").removeClass("red");
   });

   $("#toggle-class").click(function(){
      $("#art").toggleClass("red");
   });

   // Add CSS
   $("#single-property").click(function(){
      $(".add-css").css("color", "red");
   });

   $("#multi-properties").click(function(){
      $(".add-css").css({
         "background-color": "green",
         "color": "white",
         "border": "3px solid red"
      });
   });

   // Dimensions
   var output = $("#dimension-output");
   var box = $(".dimension-box");

   $("#wh").click(function(){
      output.html( "Width: " + box.width() + "px<br>Height: " + box.height() + "px" );
   });

   $("#iwh").click(function(){
      output.html( "Inner Width: " + box.innerWidth() + "px<br>Inner Height: " + box.innerHeight() + "px" );
   });

   $("#owh").click(function(){
      output.html( "Outer Width: " + box.outerWidth() + "px<br>Outer Height: " + box.outerHeight() + "px" );
   });

   $("#owhm").click(function(){
      output.html( "Outer Width with Margin: " + box.outerWidth(true) + "px<br>Outer Height with Margin: " + box.outerHeight(true) + "px" );
   });

});