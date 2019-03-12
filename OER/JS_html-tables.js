// call this function with two arguments to append a new row to a table that has two columns
// Example: addTableRowFor2Columns('Title of something', 'This is my explaining text')
function addTableRowFor2Columns(tableID, cell1Content, cell2Content){
		// if no argument for cell1Content or cell2Content is passed, select default values
		if (typeof(tableID) == "undefined" || typeof(cell1Content) == "undefined" || typeof(cell2Content) == "undefined")
			{alert("Please give two arguments, one for each cell of the row you want to add. Example: addTableRowFor2Columns('Title of something', 'This is my explaining text')");}
		else {

	var myTable = document.getElementById(tableID);
	// create new row that will later on get added to the table
	var newTableRow = document.createElement("tr");
	// create a cell which has the parameter "cell1Content" as its text
	var newCell1 = document.createElement("td");
	var cell1Text = document.createTextNode(cell1Content);
	newCell1.appendChild(cell1Text);
	newCell1.className = "bold-cell";
	// create a cell which has the parameter "cell2Content" as its text
	var newCell2 = document.createElement("td");
	var cell2Text = document.createTextNode(cell2Content);
	newCell2.appendChild(cell2Text);
	// append the two new cells to the previously created row
	newTableRow.appendChild(newCell1);
	newTableRow.appendChild(newCell2);
	// append the new row to the table
	myTable.appendChild(newTableRow);
		}
}
