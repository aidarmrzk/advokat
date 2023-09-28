const clientsReviews = document.querySelectorAll(".section-review_review");
const paginationPages = document.querySelector(".pagination-pages");
const pagination = document.querySelector(".pagination");
const paginationPrev = pagination.querySelector("#prev");
const paginationNext = pagination.querySelector("#next");
const screenWidth =
  window.innerWidth ||
  document.documentElement.clientWidth ||
  document.body.clientWidth;
let everyNth = 12;
let count = 0;
let page = 1;

if (screenWidth <= 1000) {
  everyNth = 9;
}
if (screenWidth <= 750) {
  everyNth = 8;
}

clientsReviews.forEach((review, index) => {
  review.setAttribute("data-page", page);

  if (count === everyNth - 1 && index < clientsReviews.length - 1) {
    const paginationButton = document.createElement("button");
    paginationButton.textContent = page + 1;
    paginationPages.appendChild(paginationButton);
    count = 0;
    page++;
  } else {
    count++;
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const paginationButtons = paginationPages.querySelectorAll("button");

  if (paginationButtons.length <= 1) {
    pagination.classList.add("none");
  }

  paginationButtons.forEach((button) => {
    button.addEventListener("click", () => {
      handlePagination(button, paginationButtons);
    });
  });

  paginationPrev.addEventListener("click", () => {
    const selectedButton = document.querySelector(".selected");
    if (selectedButton) {
      const currentIndex =
        Array.from(paginationButtons).indexOf(selectedButton);
      if (currentIndex > 0) {
        paginationButtons[currentIndex - 1].click();
      }
    }
  });

  paginationNext.addEventListener("click", () => {
    const selectedButton = document.querySelector(".selected");
    if (selectedButton) {
      const currentIndex =
        Array.from(paginationButtons).indexOf(selectedButton);
      if (currentIndex < paginationButtons.length - 1) {
        paginationButtons[currentIndex + 1].click();
      }
    }
  });
  paginationButtons[0].click();
});

function handlePagination(selectedButton, buttons) {
  buttons.forEach((button, index) => {
    button.classList.remove("selected");

    if (index === 0 && selectedButton === button) {
      paginationPrev.classList.add("hide");
      paginationNext.classList.remove("hide");
    } else if (index === buttons.length - 1 && selectedButton === button) {
      paginationNext.classList.add("hide");
      paginationPrev.classList.remove("hide");
    } else if (
      (index !== 0 && selectedButton === button) ||
      (index === buttons.length - 1 && selectedButton === button)
    ) {
      paginationNext.classList.remove("hide");
      paginationPrev.classList.remove("hide");
    }
  });

  selectedButton.classList.add("selected");
  const buttonNumber = selectedButton.textContent;
  openObject(buttonNumber);
}

function openObject(buttonNumber) {
  clientsReviews.forEach((review) => {
    const pageObject = review.getAttribute("data-page", page);
    if (pageObject == buttonNumber) {
      review.classList.remove("none");
    } else {
      review.classList.add("none");
    }
  });
}
