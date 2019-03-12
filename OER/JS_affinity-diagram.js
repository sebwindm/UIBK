/*
---------------------------------------------------------------------
-------------------- Dragging HTML elements -------------------------
---------------------------------------------------------------------
*/
function allowDrop(event) {
	event.preventDefault();
}

function drag(event) {
	event.dataTransfer.setData("text", event.target.id);
}

function drop(event) {
	event.preventDefault();
	var data = event.dataTransfer.getData("text");
	event.target.appendChild(document.getElementById(data));
}

/*function deleteInputObject(event) {
	// this function gets called by the garbage bin when an object gets dropped on it
	var garbageBin = document.getElementById('garbage-bin');
	event.preventDefault();
	var data = event.dataTransfer.getData("text");
	// if categories contain ideas, warn about deleting them
	// ERROR: it counts the direct children of the category, but it should count children of <div class="drop-off-area">
	if (document.getElementById(data).childElementCount > 3) {
		alert("Hello! I am an alert box!!");
	} else {
		event.target.appendChild(document.getElementById(data));
	}
	// if there are any elements in the garbage bin, delete them
	if (garbageBin.childElementCount > 1) {
		garbageBin.removeChild(garbageBin.lastElementChild);
	}
}*/
/*
---------------------------------------------------------------------
------------- Affinity diagram:make categories editable -------------
---------------------------------------------------------------------
*/
// here we set all existing categories and ideas to be editable when the page loads
var allCategories = document.getElementsByClassName('category-name');
for (var i = 0; i < allCategories.length; i++) {
	allCategories[i].contentEditable = 'false';
}
var allIdeaTitles = document.getElementsByClassName('idea-name');
for (var i = 0; i < allIdeaTitles.length; i++) {
	allIdeaTitles[i].contentEditable = 'false';
}
/*
---------------------------------------------------------------------
------------- Affinity diagram: add categories/ideas ----------------
---------------------------------------------------------------------
*/
// count the existing categories and ideas to assign IDs based on the count for new objects later on
var categoryCounter = document.getElementById('container-for-all-categories').childElementCount;
var ideaCounter = document.getElementById('container-for-new-ideas').childElementCount + document.querySelectorAll('#container-for-all-categories .draggable-idea').length;

function addCategory(categoryName,categoryColour) {
	// if no argument for categoryName or categoryColour is passed, select default values
	if (typeof(categoryName) == "undefined")
   {categoryName = "Category (click button to edit)";}
	if (typeof(categoryColour) == "undefined")
   {categoryColour = "";}
	// create new category and place it in the container for all categories
	var newCategory = document.createElement("div");
	categoryCounter = categoryCounter + 1;
	// category ID is set based on the amount of already existing categories
	var categoryID = "categoryID" + categoryCounter;
	newCategory.setAttribute("id", categoryID);
	newCategory.setAttribute("class", "container-to-drop-idea");
	// uncomment the following code to allow dragging of the categories
	// newCategory.setAttribute("draggable", "true");
	// newCategory.setAttribute("ondragstart", "drag(event)");
	document.getElementById('container-for-all-categories').appendChild(newCategory);
	// add title to the category element
	var newCategoryTitleContainer = document.createElement("div"); //outer div
	newCategoryTitleContainer.setAttribute("class","container-for-category-name");
	var newCategoryTitle = document.createElement("span"); //category name span
	newCategoryTitle.setAttribute("class", "category-name");
	var titleText = document.createTextNode(categoryName);
	newCategoryTitle.appendChild(titleText);
	// create button to close/remove category
	var newRemoveButton = document.createElement("button");
	newRemoveButton.setAttribute("class", "close-button");
	newRemoveButton.setAttribute("onclick", "removeElement(this)");
	newRemoveButton.setAttribute("title", "Delete this category");
	var removeButtonText = document.createTextNode("X");
	newRemoveButton.appendChild(removeButtonText);
	// append child elements to container element
	newCategoryTitleContainer.appendChild(newCategoryTitle);
	newCategory.appendChild(newCategoryTitleContainer);
	// create color picker
	var newContainerForColorPicking = document.createElement("div");
	var newColorPicker = document.createElement("input");
	var colorPickerID = "categoryID" + categoryCounter + "ColorPicker";
	newColorPicker.setAttribute("id", colorPickerID);
	newColorPicker.setAttribute("class", "color-chooser");


	newColorPicker.setAttribute("type", "color"); //<-- this is only needed if the browser built-in color picker gets used
	newColorPicker.setAttribute("value", "#e66465"); //<-- this is only needed if the browser built-in color picker gets used
	newColorPicker.setAttribute("title", "Pick a color");

	// create the button that applies the selected color
	var newChooseColorButton = document.createElement("button");
	newChooseColorButton.setAttribute("onclick", "changeColor(" + colorPickerID + ", " + categoryID + ")");
	newChooseColorButton.setAttribute("class","	apply-color-button");
	newChooseColorButton.setAttribute("title", "Apply the color from the color picker");
	var buttonText = document.createTextNode("Apply color");
	newChooseColorButton.appendChild(buttonText);

	// create button to rename the category title
	var newCategoryRenameButton = document.createElement("span");
	newCategoryRenameButton.setAttribute("style", "font-size:18px;");
	newCategoryRenameButton.setAttribute("onclick", "editCategoryTitle(this)");
	newCategoryRenameButton.setAttribute("title", "Rename this category");

	// this is the button icon for the "edit idea title" button
	// taken from Google Icons
	// Find more documentation at https://www.w3schools.com/icons/google_icons_intro.asp
	var buttonIcon = document.createElement("i");
	buttonIcon.setAttribute("class", "material-icons");
	var buttonIconText = document.createTextNode("mode_edit");
	buttonIcon.appendChild(buttonIconText);


	newCategoryRenameButton.appendChild(buttonIcon);



	newContainerForColorPicking.appendChild(newCategoryRenameButton);
	newContainerForColorPicking.appendChild(newRemoveButton);

	newContainerForColorPicking.appendChild(newColorPicker);
	newContainerForColorPicking.appendChild(newChooseColorButton);
	newCategory.appendChild(newContainerForColorPicking);

	// create container where ideas can be dropped
	var dropOffArea = document.createElement("div");
	dropOffArea.setAttribute("class", "drop-off-area");
	dropOffArea.setAttribute("ondrop", "drop(event)");
	dropOffArea.setAttribute("ondragover", "allowDrop(event)");
	dropOffArea.style.backgroundColor = categoryColour;

	newCategory.appendChild(dropOffArea);
	//make all category titles editable
	var allCategories = document.getElementsByClassName('category-name');
	for (var i = 0; i < allCategories.length; i++) {
		allCategories[i].contentEditable = 'false';
	}
	var allApplycolorButtons = document.getElementsByClassName('apply-color-button');
	for (var i = 0; i < allApplycolorButtons.length; i++) {
		allApplycolorButtons[i].contentEditable = 'false';
	}
	var allDeleteCategoryButtons = document.getElementsByClassName('close-button');
	for (var i = 0; i < allDeleteCategoryButtons.length; i++) {
		allDeleteCategoryButtons[i].contentEditable = 'false';
	}
}


function removeElement(thisElement){
	thisElement.parentElement.parentElement.style.display = 'none';
}




// consider using https://bgrins.github.io/spectrum/ - a nice jQuery color picker
// pick color for categories
function changeColor(colorPickerID, categoryID) {
	var theColor = colorPickerID.value;
	categoryID.getElementsByClassName("drop-off-area")[0].style.backgroundColor = theColor;
}



function addIdea(ideaName) {
	// if no argument for ideaName is passed, select default value
	if (typeof(ideaName) == "undefined")
   {ideaName = " Idea (click button to edit)";}
	// create new idea element
	var newIdea = document.createElement("div");
	ideaCounter = ideaCounter + 1;
	newIdea.setAttribute("class", "draggable-idea");
	newIdea.setAttribute("id", "ideaID" + ideaCounter);
	newIdea.setAttribute("draggable", "true");
	newIdea.setAttribute("ondragstart", "drag(event)");
	// create container that contains idea-name and remove-button
	var newContainerForIdeaTitle = document.createElement("div");
	// create child element for idea-name
	var newIdeaTitle = document.createElement("span");
	newIdeaTitle.setAttribute("class", "idea-name");
	var titleText = document.createTextNode(ideaName);
	newIdeaTitle.appendChild(titleText);

	//create child element for button to remove the respective idea
	var newRemoveButton = document.createElement("span"); // remove-button span
	newRemoveButton.setAttribute("class", "close-idea-button");
	newRemoveButton.setAttribute("onclick", "removeElement(this)");
	newRemoveButton.setAttribute("title", "Delete this idea");
	var buttonText = document.createTextNode("x");
	newRemoveButton.appendChild(buttonText);

	// create child element for button to edit the idea title
	var newRenameButton = document.createElement("span");
	newRenameButton.setAttribute("style", "font-size:2px;");
	newRenameButton.setAttribute("onclick", "editIdeaTitle(this)");
	newRenameButton.setAttribute("title", "Rename this idea");
	newRenameButton.setAttribute("class", "idea-rename-button");

	// this is the button icon for the "edit idea title" button
	// taken from Google Icons
	// Find more documentation at https://www.w3schools.com/icons/google_icons_intro.asp
	var buttonIcon = document.createElement("i");
	buttonIcon.setAttribute("class", "material-icons");
	var buttonIconText = document.createTextNode("mode_edit");
	buttonIcon.appendChild(buttonIconText);
	newRenameButton.appendChild(buttonIcon);

	// create container element for edit/delete buttons for ideas
	var newIdeaButtonContainer = document.createElement("span");
	newIdeaButtonContainer.setAttribute("class", "idea-button-container");
	newIdeaButtonContainer.appendChild(newRemoveButton);
	newIdeaButtonContainer.appendChild(newRenameButton);




	// newContainerForIdeaTitle.appendChild(newIdeaTitle);

	newIdea.appendChild(newIdeaTitle);
	newIdea.appendChild(newIdeaButtonContainer);

	document.getElementById('container-for-new-ideas').appendChild(newIdea);
	// make all idea titles editable
	var allIdeaTitles = document.getElementsByClassName('idea-name');
	for (var i = 0; i < allIdeaTitles.length; i++) {
		allIdeaTitles[i].contentEditable = 'false';
	}
	var allDeleteIdeaButtons = document.getElementsByClassName('close-idea-button');
	for (var i = 0; i < allDeleteIdeaButtons.length; i++) {
		allDeleteIdeaButtons[i].contentEditable = 'false';
	}
}


function confirmResetCategories(){
	if (confirm("This will also delete any ideas which are placed inside categories. Continue?")) {
        resetCategories();
    }
}

function resetCategories(){
	// delete all existing categories
	var myNode = document.getElementById("container-for-all-categories");
	while (myNode.firstChild) {
    myNode.removeChild(myNode.firstChild);
	}
	// create a couple of new ones
	for (var i=0;i<4;i++){
	addCategory();
	}
}
function resetIdeas(){
	// delete all existing ideas
	var myNode = document.getElementById("container-for-new-ideas");
	while (myNode.firstChild) {
    myNode.removeChild(myNode.firstChild);
	}
	// create a couple of new ones
	for (var i=0;i<8;i++){
	addIdea();
	}
}
function addExampleIdeas(){
	addIdea("Run2learn");
	addIdea("Immerse.Now!");
	addIdea("Foundation Video inputs");
	addIdea("Play while you learn");
	addIdea("CodeEditor");
	addIdea("Cool-laboration");
	addIdea("AI-Reflector");
	addIdea("Statorial");
	addIdea("DailyQ");
}


function showFourCategoriesExample(){
	// delete all existing categories
	var myNode = document.getElementById("container-for-all-categories");
	while (myNode.firstChild) {
    myNode.removeChild(myNode.firstChild);
	}
	// delete all existing ideas
	var myNode = document.getElementById("container-for-new-ideas");
	while (myNode.firstChild) {
    myNode.removeChild(myNode.firstChild);
	}
	// add categories
	addCategory("The most rational","#B4DFE5");
	addCategory("The most delightful","#F4976C");
	addCategory("The darling","#FBE8A6");
	addCategory("The long shot","#D2FDFF");
	// add ideas
	addExampleIdeas();
}
function showBingoSelectionExample(){
	// delete all existing categories
	var myNode = document.getElementById("container-for-all-categories");
	while (myNode.firstChild) {
    myNode.removeChild(myNode.firstChild);
	}
	// delete all existing ideas
	var myNode = document.getElementById("container-for-new-ideas");
	while (myNode.firstChild) {
    myNode.removeChild(myNode.firstChild);
	}
	// add categories
	addCategory("Physical prototype","#9FEDD7");
	addCategory("Digital prototype","#F78888");
	addCategory("Experiencable prototype","#F3D250");
	// add ideas
	addExampleIdeas();
}

function editCategoryTitle(thisCategory){
	// ask user for a new category title
	var categoryNameUserInput = prompt("Please enter a name for the category", " Category (click button to edit)");

	if (categoryNameUserInput == null || categoryNameUserInput == "") {
	    var newCategoryName = " Idea (click button to edit)";
	} else {
			var newCategoryName = categoryNameUserInput;
	thisCategory.parentElement.parentElement.childNodes[0].innerHTML = newCategoryName;
	}
}


function editIdeaTitle(thisIdea){
	// ask user for a new idea title
	var ideaNameUserInput = prompt("Please enter a name for the idea", " Idea (click button to edit)");

	if (ideaNameUserInput == null || ideaNameUserInput == "") {
	    var newIdeaName = " Idea (click button to edit)";
	} else {
			var newIdeaName = ideaNameUserInput;
			// if the user provided a new idea name, then make this input the new user name
			thisIdea.parentElement.parentElement.childNodes[0].innerHTML = newIdeaName;
	}
}


// at loading the page, reset all categories and ideas
resetCategories();
resetIdeas();
