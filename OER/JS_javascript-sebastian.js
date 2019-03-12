


/* 
---------------------------------------------------------------------
---------------------- Open popup on click --------------------------
---------------------------------------------------------------------
*/
// When the user clicks on <div>, open the popup
function openPopup() {
	var popup = document.getElementById("myPopup");
	popup.classList.toggle("show");
}
// When the user clicks on <div>, open the popup
// @param: enter name of the element 
function openPopupParam(selectedPopup) {
	var popup = document.getElementById(selectedPopup);
	popup.classList.toggle("show");
}

function openPopupTest() {
	var popup = document.getElementById("areaPopup");
	popup.classList.toggle("show");
}
/* 
---------------------------------------------------------------------
---------------------- See more button  -----------------------------
---------------------------------------------------------------------
*/
// 					<!-- HOW THE BUTTONS WORK: -->
// 					<!-- 1. Create the different DIVs that you want to switch between and assign IDs to them -->
// 					<!-- 2. In JavaScript, hide the desired elements when the page loads -->
// 					<!-- 3. The button calls the function toggleDetails(param1, param2, this) -->
// 					<!-- Parameters: "param1" = ID of the DIV to show; "param2" = ID of the DIV to hide; "this" = refers to this button and is necessary to change the button text -->
/* Initialize display and hiding of elements - default: show "see less" elements and hide "see more" elements */
/* 
	@param moreID - ID of the "show more" element; hidden when page loads
	@param lessID - ID of the "show less" element; this gets displayed as default when page loads
	@param thisButton - ID of the button that called the function; button needs to call toggleDetails('id','id',this) for it to work
	*/
	function toggleDetails(moreID, lessID, thisButton) {
		var moreText = document.getElementById(moreID);
		var lessText = document.getElementById(lessID);

		if (moreText.style.display == "none") {
			moreText.style.display = "inline";
			lessText.style.display = "none";
			thisButton.textContent = "Show less";
		} else {
			lessText.style.display = "inline";
			moreText.style.display = "none";
			thisButton.textContent = "Show more";
		}
	}


/* 
---------------------------------------------------------------------
-------------------------- Post-it voting ---------------------------
---------------------------------------------------------------------
/*

// this is the amount of votes that each user gets
var totalVotesRemaining = 10;
// these are the votes per idea
var ideaOneVoteCount = 0;
var ideaTwoVoteCount = 0;
var ideaThreeVoteCount = 0;
var ideaFourVoteCount = 0;
var ideaFiveVoteCount = 0;
var ideaSixVoteCount = 0;*/

/*function updateAllIncreaseButtonStyles(){
	// use getElementByClassNames to find the correct buttons of each type
	// then update the style

	// style the buttons that increase votes
	var allIncreaseButtons = document.getElementsByClassName("increase-button");
	if (totalVotesRemaining < 1){
		for (var i = 0; i < allIncreaseButtons.length; i++) {
	    	allIncreaseButtons[i].className = "increase-button card-button-greyed-out";
		}
	} else {
		for (var i = 0; i < allIncreaseButtons.length; i++) {
	    	allIncreaseButtons[i].className = "increase-button card-button";
		}
	}
}*/

/*function increaseVoteCount(increaseButtonID, thisVoteCounterID, decreaseButtonID){
	if  (totalVotesRemaining > 0){
		// get vote count of thisVoteCounterID and increase it by 1
		var votesForThisIdea = parseInt(document.getElementById(thisVoteCounterID).innerText);
		votesForThisIdea = votesForThisIdea + 1;
		document.getElementById(thisVoteCounterID).innerHTML = votesForThisIdea;

		// Receive the ID of the corresponding voteCounter, for example "idea-one-vote-counter" or "idea-two-vote-counter"
		// Goal: we want the substring that contains the number of the voteCounter
		// Create and update a new variable thisVoteCounterNumberAsText 
		// -> it contains the ID of the above mentioned voteCounter as a text, but only the first three letters of the number
		var thisVoteCounter = document.getElementById(thisVoteCounterID).id;
		var thisVoteCounterNumberAsText = "";
		for (var i=5; i<8;i++){
			thisVoteCounterNumberAsText = thisVoteCounterNumberAsText + thisVoteCounter.charAt(i);
		}
	
		// Now we can update the global variables that count the amount of votes per idea
		if (thisVoteCounterNumberAsText == "one"){ideaOneVoteCount = votesForThisIdea;}
		else if (thisVoteCounterNumberAsText == "two"){ideaTwoVoteCount = votesForThisIdea;}
		else if (thisVoteCounterNumberAsText == "thr"){ideaThreeVoteCount = votesForThisIdea;}
		else if (thisVoteCounterNumberAsText == "fou"){ideaFourVoteCount = votesForThisIdea;}
		else if (thisVoteCounterNumberAsText == "fiv"){ideaFiveVoteCount = votesForThisIdea;}
		else if (thisVoteCounterNumberAsText == "six"){ideaSixVoteCount = votesForThisIdea;}

	// update the amount of totalVotesRemaining
		totalVotesRemaining = totalVotesRemaining - 1;
		document.getElementById("total-votes-remaining-display").innerHTML = totalVotesRemaining;
	} else {
		// do nothing if the amount of totalVotesRemaining would become negative
	}

	// update style of the decrease button 
	document.getElementById(decreaseButtonID).className = "card-button";

	updateAllIncreaseButtonStyles();
			
}*/

/*function decreaseVoteCount(thisButtonID, thisVoteCounterID){
	var votesForThisIdea = parseInt(document.getElementById(thisVoteCounterID).innerText);
	if (votesForThisIdea < 1){
		// do nothing if the amount of votes for the respective idea would become negative
	} else if (totalVotesRemaining < 10){
	// get vote count of thisVoteCounterID and decrease it by 1
		votesForThisIdea = votesForThisIdea - 1;
		document.getElementById(thisVoteCounterID).innerHTML = votesForThisIdea;

		// Receive the ID of the corresponding voteCounter, for example "idea-one-vote-counter" or "idea-two-vote-counter"
		// Goal: we want the substring that contains the number of the voteCounter
		// Create and update a new variable thisVoteCounterNumberAsText 
		// -> it contains the ID of the above mentioned voteCounter as a text, but only the first three letters of the number
		var thisVoteCounter = document.getElementById(thisVoteCounterID).id;
		var thisVoteCounterNumberAsText = "";
		for (var i=5; i<8;i++){
			thisVoteCounterNumberAsText = thisVoteCounterNumberAsText + thisVoteCounter.charAt(i);
		}	
		// Now we can update the global variables that count the amount of votes per idea
		if (thisVoteCounterNumberAsText == "one"){ideaOneVoteCount = votesForThisIdea;}
		else if (thisVoteCounterNumberAsText == "two"){ideaTwoVoteCount = votesForThisIdea;}
		else if (thisVoteCounterNumberAsText == "thr"){ideaThreeVoteCount = votesForThisIdea;}
		else if (thisVoteCounterNumberAsText == "fou"){ideaFourVoteCount = votesForThisIdea;}
		else if (thisVoteCounterNumberAsText == "fiv"){ideaFiveVoteCount = votesForThisIdea;}
		else if (thisVoteCounterNumberAsText == "six"){ideaSixVoteCount = votesForThisIdea;}

		// update the amount of totalVotesRemaining
		totalVotesRemaining = totalVotesRemaining + 1;
		document.getElementById("total-votes-remaining-display").innerHTML = totalVotesRemaining;
	} else {
		// do nothing if the amount of totalVotesRemaining would become more than the initial value
	}

	// make decreaseVote button appear normal when there is at least one vote, else grey it out
	if (votesForThisIdea < 1){
		document.getElementById(thisButtonID).className = "card-button-greyed-out";
	} else {
		document.getElementById(thisButtonID).className = "card-button";
	}

	updateAllIncreaseButtonStyles();

}*/




