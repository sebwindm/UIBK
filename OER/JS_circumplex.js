
// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }
function openFullChallenge(challengeID){
	challengeID.style.display = "block";
}
function closeThisModal(thisElement){
	thisElement.parentElement.parentElement.parentElement.style.display = "none";

}

// This allows the user to close modals by clicking anywhere outside the modal content
var allModals = document.getElementsByClassName('modal');

window.onclick = function(event) {
		for(var i = 0; i < allModals.length; i++){
		if (event.target == allModals[i]) {
			allModals[i].style.display = "none";
	}
		}
}
