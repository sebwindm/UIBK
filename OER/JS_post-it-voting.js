/*
---------------------------------------------------------------------
-------------------------- Post-it voting ---------------------------
---------------------------------------------------------------------
*/
// this is the amount of votes that each user gets
var totalVotesRemaining = 10;
// these are the votes per idea
var ideaOneVoteCount = 0;
var ideaTwoVoteCount = 0;
var ideaThreeVoteCount = 0;
var ideaFourVoteCount = 0;
var ideaFiveVoteCount = 0;
var ideaSixVoteCount = 0;
var ideaSevenVoteCount = 0;
var ideaEightVoteCount = 0;
var ideaNineVoteCount = 0;


function updateAllIncreaseButtonStyles(){
	// use getElementByClassNames to find the correct buttons of each type
	// then update the style

	// style the buttons that increase votes
	var allIncreaseButtons = document.getElementsByClassName("increase-button");
	if (totalVotesRemaining < 1){
		for (var i = 0; i < allIncreaseButtons.length; i++) {
	    	allIncreaseButtons[i].className = "increase-button standard-button-greyed-out";
		}
	} else {
		for (var i = 0; i < allIncreaseButtons.length; i++) {
	    	allIncreaseButtons[i].className = "increase-button standard-button";
		}
	}
}

function increaseVoteCount(increaseButtonID, thisVoteCounterID, decreaseButtonID){
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
		else if (thisVoteCounterNumberAsText == "sev"){ideaSevenVoteCount = votesForThisIdea;}
		else if (thisVoteCounterNumberAsText == "eig"){ideaEightVoteCount = votesForThisIdea;}
		else if (thisVoteCounterNumberAsText == "nin"){ideaNineVoteCount = votesForThisIdea;}

	// update the amount of totalVotesRemaining
		totalVotesRemaining = totalVotesRemaining - 1;
		document.getElementById("total-votes-remaining-display").innerHTML = totalVotesRemaining;
	} else {
		// do nothing if the amount of totalVotesRemaining would become negative
	}

	// update style of the decrease button
	if  (totalVotesRemaining > 0){
	document.getElementById(decreaseButtonID).className = "standard-button";
	}

	updateAllIncreaseButtonStyles();

	document.getElementById("1").value = ideaOneVoteCount;
	document.getElementById("2").value = ideaTwoVoteCount;
	document.getElementById("3").value = ideaThreeVoteCount;
	document.getElementById("4").value = ideaFourVoteCount;
	document.getElementById("5").value = ideaFiveVoteCount;
	document.getElementById("6").value = ideaSixVoteCount;
	document.getElementById("7").value = ideaSevenVoteCount;
	document.getElementById("8").value = ideaEightVoteCount;
	document.getElementById("9").value = ideaNineVoteCount;

}
function decreaseVoteCount(thisButtonID, thisVoteCounterID){
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
		else if (thisVoteCounterNumberAsText == "sev"){ideaSevenVoteCount = votesForThisIdea;}
		else if (thisVoteCounterNumberAsText == "eig"){ideaEightVoteCount = votesForThisIdea;}
		else if (thisVoteCounterNumberAsText == "nin"){ideaNineVoteCount = votesForThisIdea;}

		// update the amount of totalVotesRemaining
		totalVotesRemaining = totalVotesRemaining + 1;
		document.getElementById("total-votes-remaining-display").innerHTML = totalVotesRemaining;
	} else {
		// do nothing if the amount of totalVotesRemaining would become more than the initial value
	}

	// make decreaseVote button appear normal when there is at least one vote, else grey it out
	if (votesForThisIdea < 1){
		document.getElementById(thisButtonID).className = "standard-button-greyed-out";
	} else {
		document.getElementById(thisButtonID).className = "standard-button";
	}

	updateAllIncreaseButtonStyles();

	document.getElementById("1").value = ideaOneVoteCount;
	document.getElementById("2").value = ideaTwoVoteCount;
	document.getElementById("3").value = ideaThreeVoteCount;
	document.getElementById("4").value = ideaFourVoteCount;
	document.getElementById("5").value = ideaFiveVoteCount;
	document.getElementById("6").value = ideaSixVoteCount;
	document.getElementById("7").value = ideaSevenVoteCount;
	document.getElementById("8").value = ideaEightVoteCount;
	document.getElementById("9").value = ideaNineVoteCount;
}
		/*
---------------------------------------------------------------------
---------------------- See more button  -----------------------------
---------------------------------------------------------------------
*/
/* Initialize display and hiding of elements - default: show "see less" elements and hide "see more" elements */
document.getElementById("more1").style.display = "none";
document.getElementById("less1").style.display = "inline";
document.getElementById("more2").style.display = "none";
document.getElementById("less2").style.display = "inline";
document.getElementById("more3").style.display = "none";
document.getElementById("less3").style.display = "inline";
document.getElementById("more4").style.display = "none";
document.getElementById("less4").style.display = "inline";
document.getElementById("more5").style.display = "none";
document.getElementById("less5").style.display = "inline";
document.getElementById("more6").style.display = "none";
document.getElementById("less6").style.display = "inline";
document.getElementById("more7").style.display = "none";
document.getElementById("less7").style.display = "inline";
document.getElementById("more8").style.display = "none";
document.getElementById("less8").style.display = "inline";
document.getElementById("more9").style.display = "none";
document.getElementById("less9").style.display = "inline";
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
