<html>
<head>
  <style>
  #scrollToTopButton {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: #003362; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  /* border-radius: 10px; /* Rounded corners */ */
  font-size: 18px; /* Increase font size */
}

#scrollToTopButton:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
  </style>
</head>


<body>
  <button onclick="topFunction()" id="scrollToTopButton" title="Back to Top">Back to Top</button>


<script>
// When the user scrolls down 100px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      document.getElementById("scrollToTopButton").style.display = "block";
  } else {
      document.getElementById("scrollToTopButton").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
</body>
</html>
