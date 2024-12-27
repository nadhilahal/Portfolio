var modelDiv = document.querySelector(".model-viewer");
var leftButton = document.querySelector(".scroll-button-left");
var rightButton = document.querySelector(".scroll-button-right");
var items = modelDiv.getElementsByTagName("div");

rightButton.addEventListener("click", rightSelector);
leftButton.addEventListener("click", leftSelector);
var i = 0;

function updateHighlight() {
  // Remove highlight from all items
  for (let div of items) {
    div.classList.remove("highlight");
  }

  // Highlight and scroll to the current item
  items[i].classList.add("highlight");
  items[i].scrollIntoView({
    behavior: "smooth",
    block: "center",
    inline: "center",
  });
}

function rightSelector() {
  // Increment the index and wrap around if needed
  i = (i + 1) % items.length;
  updateHighlight();
}

function leftSelector() {
  // Decrement the index and wrap around if needed
  i = (i - 1 + items.length) % items.length;
  updateHighlight();
}
