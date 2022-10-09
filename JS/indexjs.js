<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("fermer")[0];

=======

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
>>>>>>> bbb0e2d (a)
btn.onclick = function() {
  modal.style.display = "block";
}

<<<<<<< HEAD
=======
// When the user clicks on <span> (x), close the modal
>>>>>>> bbb0e2d (a)
span.onclick = function() {
  modal.style.display = "none";
}

<<<<<<< HEAD


function reveal() {
  var reveals = document.querySelectorAll(".reveal");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);

// To check the scroll position on page load
reveal();
=======
alert("ok");
>>>>>>> 133052e (mise en place des fichiers js css)
=======
/* alert("ok"); */
>>>>>>> 6caa6c9 (up)
=======
// When the user clicks anywhere outside of the modal, close it
/* window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} */
>>>>>>> bbb0e2d (a)
