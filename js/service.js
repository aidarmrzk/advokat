$(document).ready(function () {
  $("#open-filter").on("click", function () {
    $(this).toggleClass("active");
    $("#filter-content").slideToggle("222");
    return false;
  });
});

const searchAppear = document.getElementById("search-appear");
searchAppear.addEventListener("click", () => {
  let searchElements = document.querySelectorAll(".search-content > a.none");

  searchElements.forEach((element, index) => {
    if (index <= 12) {
      element.classList.remove("none");
    }
  });

  searchElements = document.querySelectorAll(".search-content > a.none");
  if (searchElements.length === 0) {
    searchAppear.classList.add("none");
  }
});

const filterButtons = document.querySelectorAll(".filter-content-item button");
const filterAllButtons = document.querySelectorAll(
  '.filter-content-item button[data-tag="all"]'
);
const contents = document.querySelectorAll(".search-content a");
const inputSearch = document.querySelector("#search");

document.addEventListener("DOMContentLoaded", () => {
  filterButtons.forEach((filterButton) => {
    filterButton.addEventListener("click", function (event) {
      event.preventDefault();
      let neighbourAllButton = filterButton
        .closest(".filter-content-item")
        .querySelector('button[data-tag="all"]');
      let clickedTag = event.target.getAttribute("data-tag");

      inputSearch.value = "";

      contents.forEach((content) => {
        content.classList.add("none");
      });

      let tagcontents = document.querySelectorAll(
        ".search-content a." + clickedTag
      );

      if (clickedTag !== "all") {
        filterButtons.forEach((button) => {
          button.classList.remove("active");
        });
        filterAllButtons.forEach((button) => {
          button.classList.add("active");
        });
        neighbourAllButton.classList.remove("active");
        filterButton.classList.add("active");

        tagcontents.forEach((tagcontent) => {
          if (tagcontent) {
            tagcontent.classList.remove("none");
          }
        });
        searchAppear.classList.add("none");
      } else {
        filterButtons.forEach((button) => {
          button.classList.remove("active");
        });
        filterAllButtons.forEach((button) => {
          button.classList.add("active");
        });

        contents.forEach((content) => {
          content.classList.remove("none");
          if (content.classList.contains("must-hidden")) {
            content.classList.add("none");
          }
        });

        if (contents.length > 12) {
          searchAppear.classList.remove("none");
        }
      }
    });
  });

  inputSearch.addEventListener("input", (event) => {
    const inputValue = event.target.value.trim().toLowerCase();

    filterButtons.forEach((button) => {
      button.classList.remove("active");
    });
    filterAllButtons.forEach((button) => {
      button.classList.add("active");
    });

    contents.forEach((content) => {
      const contentText = content.textContent.trim().toLowerCase();
      if (contentText.includes(inputValue)) {
        content.classList.remove("none");
      } else {
        content.classList.add("none");
      }
      searchAppear.classList.add("none");
    });
  });
});
