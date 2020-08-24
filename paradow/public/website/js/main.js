   window.onload=function()
   { 
    // strat card
$(function() {
    $('.material-card > .mc-btn-action').click(function () {
        var card = $(this).parent('.material-card');
        var icon = $(this).children('i');
        icon.addClass('fa-spinner');

        if (card.hasClass('mc-active')) {
            card.removeClass('mc-active');

            window.setTimeout(function() {
                icon
                    .removeClass('fas fa-arrow-left')
                    .removeClass('fa-spinner')
                    .addClass('fa-bars');

            }, 800);
        } else {
            card.addClass('mc-active');

            window.setTimeout(function() {
                icon
                    .removeClass('fa-bars')
                    .removeClass('fa-spinner')
                    .addClass('fas fa-arrow-left');

            }, 800);
        }
    });
});

// end card   
    $('#owl-demo').owlCarousel({
    loop: true,
    margin: 50,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 2,
            nav: false
        },
        768: {
            items: 2,
            nav: false
        },
        1000: {
            items: 5,
            nav: true,
            loop: true
        }
    }
});

/* Start Fixed Menu */
$(window).on("scroll",function(){
    if($(window).scrollTop())
    {  
        $(".navv").addClass('fixed');
    }
    else
    {
        $(".navv").removeClass('fixed');

    } 
});
/* End Fixed Menu */

$('#search, #search2').click(function()
{   
        $('.searchBox').show(1000);

    $('#cancel').show(1000);
});

$("#cancel").click(function()
{    
    $(".searchBox").hide(1000);
    $(this).hide(1000);

});

// tabs
// $(".nav-pills, .nav-tabs").tabdrop();

// Search filter gallery

$("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".col-sm-4").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
// end search filter


// strat see more button 
$(".btnMore1").click(function()
{
   
    $(this).hide();
    $(".txtMore1").show(600);
    $(".txtLess1").show();
      
});
$(".txtLess1").click(function()
{
   
    $(this).hide();
    $(".txtMore1").hide(600);
    $(".btnMore1").show();
      
});


$(".btnMore2").click(function()
{
   
    $(this).hide();
    $(".txtMore2").show(600);
    $(".txtLess2").show();
      
});
$(".txtLess2").click(function()
{
   
    $(this).hide();
    $(".txtMore2").hide(600);
    $(".btnMore2").show();
      
});
// End see more button
// $(".msgBox").click(function(){
//     $(".box").show(1000);
// });
// $(".closeBox").click(function(){
//     $(".box").hide(1000);
// });
// $(".fa-bars").click(function(){
//     $(".fa-bars").hide(1000);
//     $("#mySidebar").css("display","block");
//     $("#mySidebar").css("backgroundColor","red");
//     $("#mySidebar").css("width","200px");
//     $(".fa-times").show(1000);

//   });

//   $(".fa-times").click(function(){
//     $("#mySidebar").css("display","none");
//     $("#mySidebar").css("width","0px");
//     $(".fa-times").hide(1000);
//     $(".fa-bars").show(1000);    
//   });

$("#animal").click(function(){
    $(".animal").css("display","block");
    $(".other").css("display","none");
    $(".people").css("display","none");
    $(".nature").css("display","none");
});
    $("#nature").click(function(){
        $(".nature").css("display","block");
        $(".other").css("display","none");
        $(".people").css("display","none");
        $(".animal").css("display","none");
    });

    $("#other").click(function(){
        $(".other").css("display","block");
        $(".people").css("display","none");
        $(".nature").css("display","none");
        $(".animal").css("display","none");
    });

    $("#people").click(function(){
        $(".people").css("display","block");
        $(".other").css("display","none");
        $(".nature").css("display","none");
        $(".animal").css("display","none");

    });

$(".dish-main").mouseenter(function(){
    $(".imghover").css("visibility","visible");
    $(".imghover").css("height","150px");
    $(".imghover").css("position","relative");
    $(".imghover").css("top","-298px");
    $(".imghover").css("background-color","#fdfdfb85");
    $(".fa-heart").css("visibility","visible");
});

    // $(window).on("scroll",function(){
    //     if($(window).scrollTop())
    //     {  
    //         $(".navbar").addClass('fixed');
    //     }
    //     else
    //     {
    //         $(".navbar").removeClass('fixed');
    
    //     } 
    // });


    // $(".navbar .nav-item .nav-link").click(function (e) {
    //     e.preventDefault();
    //     $(this).addClass("jQstyle").parent().siblings().find(".nav-link").removeClass("jQstyle");

    // });

    // $(".navbar .nav-item .nav-link").click(function(){
        
    //     $("html,body").animate({

    //         scrollTop : $("#" + $(this).data('scroll')).offset().top-80,

    //     },500);
    // });

//     $(window).scroll(function(){

//         $(".root").each(function(){

//             if($(window).scrollTop() >= $(this).offset().top-80)
//             {
//                 var  id = $(this).attr("id");
//                 $(".navbar .nav-item .nav-link").removeClass("jQstyle");
//                 $(".navbar .nav-item .nav-link[data-scroll='"+ id +"']").addClass("jQstyle");
//             }
//     });
// });


// $(".fa-bars").click(function()
// {   
//     $(".fa-times").show(1000);
//     $(".side-bar").animate({
//         left :'0px'
//     },1000);
//     $(this).hide(1000);
// });
// $(".fa-times").click(function()
// {    
//     $(".side-bar").animate({
//         left :'-137px'
//     },1000);
//     $(".fa-bars").show(1000);
//     $(this).hide(1000);

// });



// Start nav highlight
$(function(){
    var current=location.pathname;

    $(".vertical-breadcrumb a, .navbar-collapse a").each(function(){
        var $this=$(this);
        if($this.attr('href').indexOf(current) !== -1) 
        {

            $this.addClass('active');
        }
        if(current =='/ar' || current == '/en' || current == '/')
            {
                            console.log(current);

                $this.removeClass('active');
                $('.homePageCrum').addClass('active');

            
            }
    });



});



// ENd


$(".form-control").each(function(){
    $(this).css({
        left:$(this).find(this).innerWidth() -20,

    })
});

$(".speed").each(function(){
    $(".spin").fadeIn();
$(this).animate({
   width:"100%",
},1000,function(){
 $(".mainn").fadeIn(300);
 $(".speed").fadeOut();
$(".spin").fadeOut();

});
});


  // btn top //

  $(window).scroll(function(){
    if($(this).scrollTop() >= 700){

        $(".btn-top").show(300);
    }else{
        $(".btn-top").hide(300);

    }

  });
   $(".btn-top").click(function(){
    $("html,body").animate({
        scrollTop:(0),
    },500);
   });



//   Strat interval of counter


var counter=1;
var timer=setInterval(function(){
if(counter<10)
{
    counter++;
    $("#about-num1").text(counter);
}
if(counter <80)
{
    counter++;
    $("#about-num2").text(counter);
}
else{
    clearInterval(timer);
}

},80);
// signin & signup
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});


var counter2=1;
var timer2=setInterval(function(){
    if(counter2 <800)
    {
        counter2++;
        $("#about-num4").text(counter2+ '+');
    }
    else{
        clearInterval(timer2);
    }
    
    },9);

    $('.fancybox').fancybox();

   }
   
function openImg(imgs) {
    // Get the expanded image
    var expandImg = document.getElementById("expandedImg");
    // Get the image text
    var imgText = document.getElementById("imgtext");
    // Use the same src in the expanded image as the image being clicked on from the grid
    expandImg.src = imgs.src;
    // Use the value of the alt attribute of the clickable image as text inside the expanded image
    //imgText.innerHTML = imgs.alt;
    // Show the container element (hidden with CSS)
    expandImg.parentElement.style.display = "block";
  }




  //Buying modal
function OpenProduct(i){
    var i = $('.product-image[item-data="'+i+'"] img');
    var lbi = $('.lightbox-blanket .product-image img');
    console.log($(i).attr("src"));
    $(lbi).attr("src", $(i).attr("src"));
   // var price =  $(i).attr("price-data");
   // var lbprice = $('.lightbox-blanket .product-info .product-price');
   // if(lbprice){
   //   price = price.split["."];
   //   $(lbprice).html("$" + price[0] + "<span class='product-price-cents'>"+price[1] +"</span>");
   //}
    
    $(".navbar").toggle();
    
    
    $("#product-quantity-input").val("0");
    CalcPrice (0);
    
  }
 
  
  function CalcPrice (qty){
    var price = $(".product-price").attr("price-data");
    var total = parseFloat((price * qty)).toFixed(2);
    $(".product-checkout-total-amount").text(total);
  }
  
  
  $(document).on("click", ".product-quantity-subtract", function(e){
    var value = $("#product-quantity-input").val();
    //console.log(value);
    var newValue = parseInt(value) - 1;
    if(newValue < 0) newValue=0;
    $("#product-quantity-input").val(newValue);
    CalcPrice(newValue);
  });
  
  
  $(document).on("click", ".product-quantity-add", function(e){
    var value = $("#product-quantity-input").val();
    var newValue = parseInt(value) + 1;
    $("#product-quantity-input").val(newValue);
    CalcPrice(newValue);
  });
  
  $(document).on("blur", "#product-quantity-input", function(e){
    var value = $("#product-quantity-input").val();
    CalcPrice(value);
  });
  
  
//   function AddToCart(e){
//     e.preventDefault();
//     var qty = $("#product-quantity-input").val();
//     if(qty === '0'){return;}
//     var toast = '<div class="toast toast-success">Added '+ qty +' to cart.</div>';  
//     $("body").append(toast);
//     setTimeout(function(){ 
//     $(".toast").addClass("toast-transition");
//       }, 100);
//     setTimeout(function(){      
//       $(".toast").remove();
//     }, 3500);
//   }



