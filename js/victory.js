const articleButtons = document.querySelectorAll(".article-button");
articleButtons.forEach((button) => {
  button.addEventListener("click", () => {
    let hiddenBlock = button
      .closest(".article-content-child")
      .querySelector(".article-text-hidden");

    if (hiddenBlock.classList.contains("none")) {
      hiddenBlock.classList.remove("none");
    } else {
      hiddenBlock.classList.add("none");
    }
  });
});

const articleScroll = document.getElementById("article-scroll");
articleScroll.addEventListener("click", () => {
  let hiddenArticles = document.querySelectorAll(".article-top > div.none");

  hiddenArticles.forEach((article, index) => {
    if (index <= 2) {
      article.classList.remove("none");
    }
  });

  hiddenArticles = document.querySelectorAll(".article-top > div.none");
  if (hiddenArticles.length === 0) {
    articleScroll.classList.add("none");
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const main = document.querySelector(".main");
  const redButton = document.querySelector(".red-button");
  const redButtonP = redButton.querySelector("p");
  const tagsWrap = document.querySelector(".list-tags-wrap");
  const shadowBg = document.querySelector(".shadow-bg");
  const tagLinks = document.querySelectorAll(".list-tags a");
  const articleDivs = document.querySelectorAll(".article-top > div");

  redButton.addEventListener("click", () => {
    if (main.classList.contains("show-tag")) {
      main.classList.remove("show-tag");
    } else {
      main.classList.add("show-tag");
      if (window.innerWidth <= 1160) {
        let windowWidth = window.innerWidth;
        let newWidth = windowWidth - 70;
        tagsWrap.style.width = newWidth + "px";
      }
      shadowBg.addEventListener("click", () => {
        main.classList.remove("show-tag");
      });
    }
  });

  const buttonText = redButtonP.textContent;
  tagLinks.forEach((tagLink) => {
    tagLink.addEventListener("click", (event) => {
      event.preventDefault();
      let clickedTag = event.target.getAttribute("data-tag");

      articleDivs.forEach((articleDiv) => {
        articleDiv.classList.add("none");
      });

      let tagArticleDivs = document.querySelectorAll(
        ".article-top > div." + clickedTag
      );

      if (clickedTag === "all" || tagLink.classList.contains("active")) {
        clearAlltags();
      } else {
        redButtonP.textContent = tagLink.textContent;
        tagLinks.forEach((button) => {
          button.classList.remove("active");
        });
        tagLink.classList.add("active");
        tagArticleDivs.forEach((tagArticleDiv) => {
          if (tagArticleDiv) {
            tagArticleDiv.classList.remove("none");
          }
        });
        articleScroll.classList.add("none");
      }
      main.classList.remove("show-tag");
    });
    function clearAlltags() {
      redButtonP.textContent = buttonText;
      tagLinks.forEach((button) => {
        button.classList.remove("active");
      });
      tagLinks[0].classList.add("active");
      articleDivs.forEach((articleDiv) => {
        articleDiv.classList.remove("none");
        if (articleDiv.classList.contains("must-hidden")) {
          articleDiv.classList.add("none");
        }
      });
      if (articleDivs.length > 3) {
        articleScroll.classList.remove("none");
      }
    }
  });
});
