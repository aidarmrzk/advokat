const victory = document.querySelector(".victory");
const redButton = document.querySelector(".red-button");
const redButtonP = redButton.querySelector("p");
const tagsWrap = document.querySelector(".list-tags-wrap");
const shadowBg = document.querySelector(".shadow-bg");
const tagLinks = document.querySelectorAll(".list-tags a");
const victoryCards = document.querySelectorAll(".victory-card");
const articleScroll = document.getElementById("article-scroll");
const victoryBlockBoxPs = document.querySelectorAll('.victory-card-block-box > p');
const victoryBlockImages = document.querySelectorAll('.victory-card-block-img');

document.addEventListener("DOMContentLoaded", () => {
  redButton.addEventListener("click", () => {
    if (victory.classList.contains("show-tag")) {
      victory.classList.remove("show-tag");
    } else {
      victory.classList.add("show-tag");
      if (window.innerWidth <= 1160) {
        let windowWidth = window.innerWidth;
        let newWidth = windowWidth - 70;
        tagsWrap.style.width = newWidth + "px";
      }
      shadowBg.addEventListener("click", () => {
        victory.classList.remove("show-tag");
      });
    }
  });

  const buttonText = redButtonP.textContent;
  tagLinks.forEach((tagLink) => {
    tagLink.addEventListener("click", (event) => {
      event.preventDefault();
      let clickedTag = event.target.getAttribute("data-tag");

      victoryCards.forEach((articleDiv) => {
        articleDiv.classList.add("none");
      });

      let tagVictoryCards = document.querySelectorAll(
        ".victory-card." + clickedTag
      );

      if (clickedTag === "all" || tagLink.classList.contains("active")) {
        clearAlltags();
      } else {
        redButtonP.textContent = tagLink.textContent;
        tagLinks.forEach((button) => {
          button.classList.remove("active");
        });
        tagLink.classList.add("active");
        tagVictoryCards.forEach((tagArticleDiv) => {
          if (tagArticleDiv) {
            tagArticleDiv.classList.remove("none");
          }
        });
        articleScroll.classList.add("none");
      }
      victory.classList.remove("show-tag");
    });
    function clearAlltags() {
      redButtonP.textContent = buttonText;
      tagLinks.forEach((button) => {
        button.classList.remove("active");
      });
      tagLinks[0].classList.add("active");
      victoryCards.forEach((articleDiv) => {
        articleDiv.classList.remove("none");
        if (articleDiv.classList.contains("must-hidden")) {
          articleDiv.classList.add("none");
        }
      });
      if (victoryCards.length <= 12) {
        articleScroll.classList.add("none");
      } else {
        articleScroll.classList.remove("none");
      }
    }
  });
});

// Выпадающие окно с текстом
victoryBlockBoxPs.forEach((victoryBlockBoxP) => {
  const parent = victoryBlockBoxP.closest('.victory-card');
  const person = parent.querySelector('.victory-card-block-box-person');
  const parentImg = parent.querySelector('.victory-card-block-img');
  const preview = parent.querySelector('.victory-card-preview');

  victoryBlockBoxP.addEventListener('mouseenter', () => {
    person.style.opacity = "0";
    parentImg.style.opacity = "0";
    preview.classList.add('show');
  });
  victoryBlockBoxP.addEventListener('mouseleave', () => {
    person.style.opacity = "1";
    parentImg.style.opacity = "1";
    preview.classList.remove('show');
  });
})

// Кнопка "Показать еще"
articleScroll.addEventListener("click", () => {
  let hiddenArticles = document.querySelectorAll(".victory-card.none");

  hiddenArticles.forEach((article, index) => {
    if (index <= 11) {
      article.classList.remove("none");
    }
  });

  hiddenArticles = document.querySelectorAll(".victory-cardv.none");
  if (hiddenArticles.length === 0) {
    articleScroll.classList.add("none");
  }
});

// Открывание fancyslider
if (window.innerWidth >= 900) {
  victoryBlockImages.forEach((victoryBlockImage) => {
    victoryBlockImage.addEventListener('click', () => {
      const parent = victoryBlockImage.closest('.victory-card-block');
      if (parent.querySelector('.data-slider a')) {
        parent.querySelector('.data-slider a').click();
      }
    })
  })
}

// Изменяем количество карточек
function handleResize() {
  victoryCards.forEach((victoryCard, index) => {
    victoryCard.classList.remove('none');
    victoryCard.classList.remove('must-hidden');
    
    if (window.innerWidth < 480 && index >= 5) {
      victoryCard.classList.add('none');
      victoryCard.classList.add('must-hidden');
    } else if (window.innerWidth <= 900 && index >= 8) {
      victoryCard.classList.add('none');
      victoryCard.classList.add('must-hidden');
    } else if (index >= 12) {
      victoryCard.classList.add('none');
      victoryCard.classList.add('must-hidden');
    }
  });
}

handleResize();
window.addEventListener('resize', handleResize);