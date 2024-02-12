
// document.getElementsByClassName('but').onclick = function(){
    
//     // alert('fwnhwnowf');
    
//     window.location.href = '/includes/card.php';
// };

$(".but").click
(
	function()
	{
		let id = $(this).data('id');	
		
		location.assign("card.php?id="+id);
				
	}

);
$(".cart").click
(
	function()
	{		
		location.assign("/includes/cart.php");
				
	}

);
$(".cart2").click
(
	function()
	{		
		location.assign("/includes/cart.php");
				
	}

);
$("#but3").click
(
	function()
	{		
		location.assign("/includes/catalog.php");
				
	}

);


$("#btn_text").click
(
	function()
	{		
		let id = $(this).data('id');
		
		$.post("/includes/card.php", {'id_': id}, function(data){console.log(data);});
		
	// $.ajax({
    //   url: '/includes/card.php',
    //   method: 'post',
    //   dataType: 'json',
    //   data: {id_: id},
    //   success: function(data){
    //     console.log(data);
    //   }
    // });
	}
);

$(".plus").click
(
	function()
	{		
		let id = $(this).data('id');
		alert(id);
		$.post("/includes/cart.php", {'id_p': id}, function(data){console.log(data);});
		
	}
);
$(".minus").click
(
	function()
	{		
		let id = $(this).data('id');
		alert(id);
		$.post("/includes/cart.php", {'id_m': id}, function(data){console.log(data);});
		
	}
);


$("#sort").click
(
	function()
	{
		
		if($(".sort_item").css("display")=="block")
		{
			$(".sort_item").css("display", "none")
		}
		else{
			$(".sort_item").css("display", "block")
		}
		
	}

);


/// слайдео
const wrpper = document.querySelector('.section-4 #slider');
const carousel = document.querySelector('.slider__content')
const arrowBtns = document.querySelectorAll('.navigation span')
const firstCardWidth = carousel.querySelector('.slide').offsetWidth;
const carouselChildrens = [...carousel.children];

let isDragging = false, startX, startScrollLeft, timeoutId;

let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

var i = 1;

carouselChildrens.slice(-cardPerView).reverse().forEach(slide => {
carousel.insertAdjacentHTML('afterbegin', slide.outerHTML)
});
carouselChildrens.slice(0, cardPerView).forEach(slide => {
carousel.insertAdjacentHTML('beforeend', slide.outerHTML)
});

arrowBtns.forEach(btn => {
btn.addEventListener('click', () => {
carousel.scrollLeft += btn.id === 'prev' ? -firstCardWidth : firstCardWidth;
})
})

const dragStart = (e) => {
isDragging = true;
carousel.classList.add("dragging");
startX = e.pageX;
startScrollLeft = carousel.scrollLeft;
}

const dragStop = () => {
isDragging = false;
carousel.classList.remove("dragging");
}

const dragging = (e) => {
if (!isDragging) return;
carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const autoPlay = () => {
timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500)
if (carousel.scrollLeft == 1281) {
i = 1;
document.querySelector('.navigation div p:first-child').innerText = i;
}
switch (carousel.scrollLeft) {
case 1281:
i = 1
document.querySelector('.navigation div p:first-child').innerText = i;;
break;
case 1709:
i = 2
document.querySelector('.navigation div p:first-child').innerText = i;; break;
case 2136:
i = 3
document.querySelector('.navigation div p:first-child').innerText = i;;
break;
case 2563:
i = 4
document.querySelector('.navigation div p:first-child').innerText = i;;
break;
case 2991:
i = 5
document.querySelector('.navigation div p:first-child').innerText = i;;
break;
case 3418:
i = 6
document.querySelector('.navigation div p:first-child').innerText = i;;
break;
}

}
const idPlus = () => {
i++;
if (i > 6) i = 1;
document.querySelector('.navigation div p:first-child').innerText = i;
}
const idMinus = () => {
i--;
if (i < 1) i = 6;
document.querySelector('.navigation div p:first-child').innerText = i;
}
autoPlay();
const infinityScroll = () => {
if (carousel.scrollLeft === 0) {
carousel.classList.add('no-transition');
carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
carousel.classList.remove('no-transition');
} else if (Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
carousel.classList.add('no-transition');
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove('no-transition');
}
clearTimeout(timeoutId);
if (!wrpper.matches(":hover")) autoPlay();
}

carousel.addEventListener("mousemove", dragging)
carousel.addEventListener("mousedown", dragStart);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infinityScroll);
wrpper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrpper.addEventListener("mouseleave", autoPlay);