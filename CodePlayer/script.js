function update() {
    $("iframe").contents().find("html").html(("<html><head><style type='text/css'>")+ $("#cssPanel").val() + "</style></head><body>"+ $("#htmlPanel").val() + "</body></html>");

    document.getElementById("outputPanel").contentWindow.eval($("#jsPanel").val());
   
   
}

$(".toggle").hover(function(){
    $(this).addClass("highlight");
}, function() {
    $(this).removeClass("highlight");
});

$(".toggle").click(function() {
   $(this).toggleClass("active"); 

   $(this).removeClass("highlight");

    var panelId = $(this).attr("id") + "Panel";

    $("#"+panelId).toggleClass("hidden");

    var numberPanels = 4 - $(".hidden").length;

    $(".pan").width($(window).width() / numberPanels -10);

});

$(".pan").height($(window).height()-45);

$(".pan").width($(window).width() / 2 - 45);

$("#container").width($(window).width());

update();




$("textarea").on('change keyup paste', function(){

    update();
    
});
