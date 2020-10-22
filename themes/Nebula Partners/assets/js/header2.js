$(document).ready(function() {
    $("#heading_box").delay(600).css("opacity","1");
    $("#contact-cta-banner").delay(600).css("opacity","1");
});


$(".mobmenu").click(function(){
    $("nav").toggleClass("appear");
    $("nav").toggleClass("disappear");
    $(".ovalcon").toggleClass("expandcon");
    $(".mobmenu").toggleClass("xit");
    $(".bg-circle ").toggleClass("fadeout");
    $("nav").removeClass("onload");
});


$("#link-one").click(function(){
	$("#link-one").addClass("active");
	$("#link-two").removeClass("active");
	$("#link-three").removeClass("active");
	$("#link-four").removeClass("active");
 
    $(".box-one").addClass("visible");
    $(".box-two").removeClass("visible");
    $(".box-three").removeClass("visible");
    $(".box-four").removeClass("visible");

    $(".sidebox-one").addClass("visible");
    $(".sidebox-two").removeClass("visible");
    $(".sidebox-three").removeClass("visible");
    $(".sidebox-four").removeClass("visible");
});

$("#link-two").click(function(){
	$("#link-one").removeClass("active");
	$("#link-two").addClass("active");
	$("#link-three").removeClass("active");
	$("#link-four").removeClass("active");

    $(".box-one").removeClass("visible");
    $(".box-two").addClass("visible");
    $(".box-three").removeClass("visible");
    $(".box-four").removeClass("visible");

    $(".sidebox-one").removeClass("visible");
    $(".sidebox-two").addClass("visible");
    $(".sidebox-three").removeClass("visible");
    $(".sidebox-four").removeClass("visible");
});

$("#link-three").click(function(){
	$("#link-one").removeClass("active");
	$("#link-two").removeClass("active");
	$("#link-three").addClass("active");
	$("#link-four").removeClass("active");

    $(".box-one").removeClass("visible");
    $(".box-two").removeClass("visible");
    $(".box-three").addClass("visible");
    $(".box-four").removeClass("visible");

    $(".sidebox-one").removeClass("visible");
    $(".sidebox-two").removeClass("visible");
    $(".sidebox-three").addClass("visible");
    $(".sidebox-four").removeClass("visible");
});

$("#link-four").click(function(){
	$("#link-one").removeClass("active");
	$("#link-two").removeClass("active");
	$("#link-three").removeClass("active");
	$("#link-four").addClass("active");
	
	$(".box-one").removeClass("visible");
    $(".box-two").removeClass("visible");
    $(".box-three").removeClass("visible");
    $(".box-four").addClass("visible");

	$(".sidebox-one").removeClass("visible");
    $(".sidebox-two").removeClass("visible");
    $(".sidebox-three").removeClass("visible");
    $(".sidebox-four").addClass("visible");
});


$(".dep_btn").click(function(){
    $(".all_dep").css("opacity","1");
    $(".description").removeClass("appear");
    $(".fa-plus").removeClass("hide");
    $(".fa-minus").addClass("hide");
});







$("#all_dep_btn").click(function(){
    $("#priv_dep_btn, #alt_dep_btn, #comm_dep_btn, #prof_dep_btn").removeClass("active");    
    $("article.all_dep, article.no_dep, .team-text-intro").fadeIn(150);
    $("a.close_btn").fadeOut(150).css("display","block");
    $("div.prof_dep, div.comm_dep, div.alt_dep, div.priv_dep, div.no_dep").fadeOut(150);
    $(".all_dep").css("opacity","1");
});

$("#prof_dep_btn, #comm_dep_btn, #alt_dep_btn, #priv_dep_btn").click(function(){
    $("a.close_btn").fadeIn(150).css("display","block");
    $(".team-text-intro").fadeOut(150);
    $(".all_dep").removeClass("grey"); 
});

$("#prof_dep_btn").click(function(){
    $(this).addClass("active");
    $("#priv_dep_btn, #alt_dep_btn, #comm_dep_btn").removeClass("active");
    $(".comm_dep, .alt_dep, .priv_dep, .no_dep").fadeOut(150);
    $(".prof_dep").fadeIn(150);
    $("a.close_btn").removeClass("center_left center_right right").addClass("left");
});
$("#comm_dep_btn").click(function(){
    $(this).addClass("active");
    $("#prof_dep_btn, #alt_dep_btn, #priv_dep_btn").removeClass("active");
    $(".prof_dep, .alt_dep, .priv_dep, .no_dep").fadeOut(150);
    $(".comm_dep").fadeIn(150);
    $("a.close_btn").removeClass("left center_right right").addClass("center_left");
});
$("#alt_dep_btn").click(function(){
    $(this).addClass("active");
    $("#prof_dep_btn, #comm_dep_btn, #priv_dep_btn").removeClass("active");
    $(".comm_dep, .prof_dep, .priv_dep, .no_dep").fadeOut(150);
    $(".alt_dep").fadeIn(150);
    $("a.close_btn").removeClass("left center_left right").addClass("center_right");
});
$("#priv_dep_btn").click(function(){
    $(this).addClass("active");
    $("#prof_dep_btn, #alt_dep_btn, #comm_dep_btn").removeClass("active");
    $(".comm_dep, .prof_dep, .alt_dep, .no_dep").fadeOut(150);
    $(".priv_dep").fadeIn(150);
    $("a.close_btn").removeClass("left center_left center_right").addClass("right");
});




$("#prof_exp_btn").click(function(){
    $(this).addClass("active");
    $("#priv_exp_btn, #alt_exp_btn, #comm_exp_btn").removeClass("active");
    $(".comm_blurb, .alt_blurb, .priv_blurb").fadeOut(150);
    $(".prof_blurb").delay(200).fadeIn(0);
});
$("#comm_exp_btn").click(function(){
    $(this).addClass("active");
    $("#prof_exp_btn, #alt_exp_btn, #priv_exp_btn").removeClass("active");
    $(".prof_blurb, .alt_blurb, .priv_blurb").fadeOut(150);
    $(".comm_blurb").delay(200).fadeIn(0);
});
$("#alt_exp_btn").click(function(){
    $(this).addClass("active");
    $("#prof_exp_btn, #comm_exp_btn, #priv_exp_btn").removeClass("active");
    $(".comm_blurb, .prof_blurb, .priv_blurb").fadeOut(150);
    $(".alt_blurb").delay(200).fadeIn(0);
});
$("#priv_exp_btn").click(function(){
    $(this).addClass("active");
    $("#prof_exp_btn, #alt_exp_btn, #comm_exp_btn").removeClass("active");
    $(".comm_blurb, .prof_blurb, .alt_blurb").fadeOut(150);
    $(".priv_blurb").delay(200).fadeIn(0);
});





$(".expand").click(function() {
    $(this).parents(".all_dep").removeClass("grey");
    $(this).siblings(".description").toggleClass("appear").parents(".all_dep").siblings(".all_dep").children(".content").children(".details").children(".description").removeClass("appear");
    $(this).children(".fa-plus").toggleClass("hide");
    $(this).children(".fa-minus").toggleClass("hide");
    $(this).parents(".all_dep").siblings(".all_dep").children(".content").children(".details").children(".expand").children(".fa-plus").removeClass("hide");
    $(this).parents(".all_dep").siblings(".all_dep").children(".content").children(".details").children(".expand").children(".fa-minus").addClass("hide");
});

$(".no_dep .expand").click(function() {
    $(this).parents(".all_dep").siblings(".all_dep").addClass("grey");
    $(this).parents(".no_dep").siblings(".no_dep").removeClass("grey");
});
$(".prof_dep .expand").click(function() {
    $(this).parents(".all_dep").siblings(".all_dep").addClass("grey");
    $(this).parents(".prof_dep").siblings(".prof_dep").removeClass("grey");
});
$(".comm_dep .expand").click(function() {
    $(this).parents(".all_dep").siblings(".all_dep").addClass("grey");
    $(this).parents(".comm_dep").siblings(".comm_dep").removeClass("grey");
});
$(".alt_dep .expand").click(function() {
    $(this).parents(".all_dep").siblings(".all_dep").addClass("grey");
    $(this).parents(".alt_dep").siblings(".alt_dep").removeClass("grey");
});
$(".priv_dep .expand").click(function() {
    $(this).parents(".all_dep").siblings(".all_dep").addClass("grey");
    $(this).parents(".priv_dep").siblings(".priv_dep").removeClass("grey");
});

















$("#constellation_three .constellation_box .star_one").click(function() {
    $("#constellation_three .star_text_box .star_text").children(".star_text_one").fadeIn(150);
    $("#constellation_three .star_text_box .star_text").children(".star_text_two, .star_text_three, .star_text_four").fadeOut(150);
    $("#constellation_three .star_text_box .star_text").children(".star_circle").fadeIn(150);
    $("#constellation_three .constellation_box").css({"opacity":"0.9"});
});
$("#constellation_three .constellation_box .star_two").click(function() {
    $("#constellation_three .star_text_box .star_text").children(".star_text_two").fadeIn(150);
    $("#constellation_three .star_text_box .star_text").children(".star_text_one, .star_text_three, .star_text_four").fadeOut(150);
    $("#constellation_three .star_text_box .star_text").children(".star_circle").fadeIn(150);
    $("#constellation_three .constellation_box").css({"opacity":"0.9"});
});
$("#constellation_three .constellation_box .star_three").click(function() {
    $("#constellation_three .star_text_box .star_text").children(".star_text_three").fadeIn(150);
    $("#constellation_three .star_text_box .star_text").children(".star_text_two, .star_text_one, .star_text_four").fadeOut(150);
    $("#constellation_three .star_text_box .star_text").children(".star_circle").fadeIn(150);
    $("#constellation_three .constellation_box").css({"opacity":"0.9"});
});
$("#constellation_three .star_text a.close").click(function() {
    $("#constellation_three .star_text_box .star_text").children(".star_text_one, .star_text_two, .star_text_three, .star_text_four").fadeOut(150);
    $("#constellation_three .star_text_box .star_text").children(".star_circle").fadeOut(150);
    $("#constellation_three .constellation_box").css({"opacity":"1"});
});


$("#constellation .constellation_box .star_one").click(function() {
    $("#constellation .star_text_box .star_text").children(".star_text_one").fadeIn(150);
    $("#constellation .star_text_box .star_text").children(".star_text_two, .star_text_three, .star_text_four").fadeOut(150);
    $("#constellation .star_text_box .star_text").children(".star_circle").fadeIn(150);
    $("#constellation .constellation_box").css({"opacity":"0.9"});
});
$("#constellation .constellation_box .star_two").click(function() {
    $("#constellation .star_text_box .star_text").children(".star_text_two").fadeIn(150);
    $("#constellation .star_text_box .star_text").children(".star_text_one, .star_text_three, .star_text_four").fadeOut(150);
    $("#constellation .star_text_box .star_text").children(".star_circle").fadeIn(150);
    $("#constellation .constellation_box").css({"opacity":"0.9"});
});
$("#constellation .constellation_box .star_three").click(function() {
    $("#constellation .star_text_box .star_text").children(".star_text_three").fadeIn(150);
    $("#constellation .star_text_box .star_text").children(".star_text_two, .star_text_one, .star_text_four").fadeOut(150);
    $("#constellation .star_text_box .star_text").children(".star_circle").fadeIn(150);
    $("#constellation .constellation_box").css({"opacity":"0.9"});
});
$("#constellation .constellation_box .star_four").click(function() {
    $("#constellation .star_text_box .star_text").children(".star_text_four").fadeIn(150);
    $("#constellation .star_text_box .star_text").children(".star_text_two, .star_text_three, .star_text_one").fadeOut(150);
    $("#constellation .star_text_box .star_text").children(".star_circle").fadeIn(150);
    $("#constellation .constellation_box").css({"opacity":"0.9"});
});
$("#constellation .star_text a.close").click(function() {
    $("#constellation .star_text_box .star_text").children(".star_text_one, .star_text_two, .star_text_three, .star_text_four").fadeOut(150);
    $("#constellation .star_text_box .star_text").children(".star_circle").fadeOut(150);
    $("#constellation .constellation_box").css({"opacity":"1"});
});





$(document).ready(function() {
    var offset=250, // At what pixels show Back to Top Button
    scrollDuration=300; // Duration of scrolling to top
        $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
                $('.top a').fadeIn(700); // Time(in Milliseconds) of appearing of the Button when scrolling down.
                } else {
        $('.top animation').fadeOut(700); // Time(in Milliseconds) of disappearing of Button when scrolling up.
        }
});

    // Smooth animation when scrolling
$('.top').click(function(event) {
    event.preventDefault();
            $('html, body').animate({
            scrollTop: 0}, scrollDuration);
                })
 });


$('.anchor-link a').click(function(e){
  e.preventDefault();
  var target = $($(this).attr('href'));
  if(target.length){
    var scrollTo = target.offset().top;
    $('body, html').animate({scrollTop: scrollTo+'px'}, 700);
  }
});


$(document).ready(function() { 

    // Whenever the window is scrolled ... 
    $(window).scroll( function(){
    
        // Check the location of the object
        $('.hideme').each( function(){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            // If the object is inside the window, fade it in!
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},700); // time is in milliseconds
            }
        }); 
    });
})

