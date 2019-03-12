// Initial values for page loading: show introduction, hide the others
// document.getElementById("intro-phase").style.display = "block";
document.getElementById("phase1").style.display = "block";
document.getElementById("phase2").style.display = "none";
document.getElementById("phase3").style.display = "none";
document.getElementById("phase4").style.display = "none";

// var introPhaseDisplay = document.getElementById("intro-phase");
var phaseOneDisplay = document.getElementById("phase1");
var phaseTwoDisplay = document.getElementById("phase2");
var phaseThreeDisplay = document.getElementById("phase3");
var phaseFourDisplay = document.getElementById("phase4");

// function showIntro() {
// 	// Show content of introduction and hide the other phases
// 	// introPhaseDisplay.style.display = "block";
// 	phaseOneDisplay.style.display = "none";
// 	phaseTwoDisplay.style.display = "none";
// 	phaseThreeDisplay.style.display = "none";
// 	phaseFourDisplay.style.display = "none";
// 	document.getElementById('imageIntroFile').src = './images/SVGs/intro.svg'
// 	document.getElementById('imageOneFile').src = './images/SVGs/phase1-blur.svg'
// 	document.getElementById('imageTwoFile').src = './images/SVGs/phase2-blur.svg'
// 	document.getElementById('imageThreeFile').src = './images/SVGs/phase3-blur.svg'
// 	document.getElementById('imageFourFile').src = './images/SVGs/phase4-blur.svg'
// }

function showPhaseOne() {
	// Show content of phase 1 and hide the other phases
	// introPhaseDisplay.style.display = "none";
	phaseOneDisplay.style.display = "block";
	phaseTwoDisplay.style.display = "none";
	phaseThreeDisplay.style.display = "none";
	phaseFourDisplay.style.display = "none";
	// document.getElementById('imageIntroFile').src = './images/SVGs/intro-blur.svg'
	document.getElementById('imageOneFile').src = './images/SVGs/phase1.svg'
	document.getElementById('imageTwoFile').src = './images/SVGs/phase2-blur.svg'
	document.getElementById('imageThreeFile').src = './images/SVGs/phase3-blur.svg'
	document.getElementById('imageFourFile').src = './images/SVGs/phase4-blur.svg'
}

function showPhaseTwo() {
	// introPhaseDisplay.style.display = "none";
	phaseOneDisplay.style.display = "none";
	phaseTwoDisplay.style.display = "block";
	phaseThreeDisplay.style.display = "none";
	phaseFourDisplay.style.display = "none";
	// document.getElementById('imageIntroFile').src = './images/SVGs/intro-blur.svg'
	document.getElementById('imageOneFile').src = './images/SVGs/phase1-blur.svg'
	document.getElementById('imageTwoFile').src = './images/SVGs/phase2.svg'
	document.getElementById('imageThreeFile').src = './images/SVGs/phase3-blur.svg'
	document.getElementById('imageFourFile').src = './images/SVGs/phase4-blur.svg'
}

function showPhaseThree() {
	// introPhaseDisplay.style.display = "none";
	phaseOneDisplay.style.display = "none";
	phaseTwoDisplay.style.display = "none";
	phaseThreeDisplay.style.display = "block";
	phaseFourDisplay.style.display = "none";
	// document.getElementById('imageIntroFile').src = './images/SVGs/intro-blur.svg'
	document.getElementById('imageOneFile').src = './images/SVGs/phase1-blur.svg'
	document.getElementById('imageTwoFile').src = './images/SVGs/phase2-blur.svg'
	document.getElementById('imageThreeFile').src = './images/SVGs/phase3.svg'
	document.getElementById('imageFourFile').src = './images/SVGs/phase4-blur.svg'
}

function showPhaseFour() {
	// introPhaseDisplay.style.display = "none";
	phaseOneDisplay.style.display = "none";
	phaseTwoDisplay.style.display = "none";
	phaseThreeDisplay.style.display = "none";
	phaseFourDisplay.style.display = "block";
	// document.getElementById('imageIntroFile').src = './images/SVGs/intro-blur.svg'
	document.getElementById('imageOneFile').src = './images/SVGs/phase1-blur.svg'
	document.getElementById('imageTwoFile').src = './images/SVGs/phase2-blur.svg'
	document.getElementById('imageThreeFile').src = './images/SVGs/phase3-blur.svg'
	document.getElementById('imageFourFile').src = './images/SVGs/phase4.svg'
}
// This function adds the responsive slider to choose the phases of the funnel
$(document).ready(function() {

	// This is the responsive slider for selecting the phases
	$('.responsive-slider').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 5,
		responsive: [

		{
			breakpoint: 1024,
			settings: {
				dots: false,
				slidesToShow: 3,
				slidesToScroll: 3,
					//           dots: true,
				}
			},
			{
				breakpoint: 600,
				settings: {
					dots: false,
					slidesToShow: 2,
					slidesToScroll: 2,
				}
			},
			{
				breakpoint: 480,
				settings: {
					dots: false,
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
			]
		});

});
