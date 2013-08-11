$(document).ready(function(){
    $(window).resize(function(){
	    $('#bookshelf-wrapper').css({
            top: ($(window).height() - $('#bookshelf-wrapper').outerHeight())/2,
        });
     }); // $(window).resize END

    $(window).resize();


    //_______ Tooltip_____
    $("#books a").tooltip({ 
        effect: "fade",
        opacity: 0.7 });
    //______ tooltip END____

    // ____ Sorting____
$("#books").sortable( {containment: '#bookshelf-wrapper'} );
$("#books").disableSelection();
    //_____ Sorting END____


    //_____ Dropdown top/left____
$("#books a").click( function () {
    $(this).tooltip().hide();
    var offset = $(this).offset();

        $(".dropdown").css({
            'left' : offset.left  });
        $(".dropdown").css({
            top: ($(window).height() - $(".dropdown").outerHeight() - 500)/2 + 460,
        });
        $(".dropdown").fadeIn();      } );
    //_____ Dropdown END____


    //_____ Dropdown hiding____
$("#books-wrapper").mouseleave( function() {
    timeout_menu = setTimeout(function(){ $(".dropdown").fadeOut();}, 400);
});

$(".dropdown").mouseenter(function(){
    clearTimeout(timeout_menu);
    $(this).fadeIn("slow");
}).mouseleave(function(){ $(".dropdown").fadeOut(); });
    //____ Dropdown hiding END_____


});    //____ $(document).ready END____


