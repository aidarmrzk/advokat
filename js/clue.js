document.addEventListener("DOMContentLoaded", function () {
  const bannerRedButton = document.querySelector(
    ".about-company_banner-info-block-red"
  );
  const bannerBlackButton = document.querySelector(
    ".about-company_banner-info-block-black"
  );
  const bannerInfoCard = document.querySelector(
    ".about-company_banner-info-block-card"
  );
  const personCards = document.querySelectorAll(".section-team_person-card");

  const aboutCompanyMap = document.querySelector(
    ".about-company .about-company_map-img"
  );
  const popupQRs = popupShadowForm.querySelectorAll(".popup-form-link-qrs img");
  const footerHeaderMail = document.querySelector(
    ".footer-header .footer-email"
  );
  const legalTaskDoImg = document.querySelector(
    ".legal_support .maintenance_task-do-img a"
  );
  const winTaskDoImg = document.querySelector(
    ".win_case .maintenance_task-do-img a"
  );
  const winCaseBannerImg = document.querySelector(
    ".win_case .landing_banner-info-img a"
  );
  const winCaseNumberImg = document.querySelector(
    ".win_case .landing-numbers-img a"
  );
  const clientsReviews = document.querySelectorAll(".section-review_review.has-clue");
  const firstStep = document.querySelector("#first-step-box");
  const secondStep = document.querySelector("#second-step-box");
  const thirdStep = document.querySelector("#third-step-box");
  const footerLook = document.querySelector(".footer-header-look");
  const stepButtons = document.querySelectorAll('.block-steps > button.desktop div');
  const winCaseButtons = document.querySelectorAll('.landing_banner-info-block > button.desktop div');
  const victoryCardPersons = document.querySelectorAll('.victory-card-block-box-person a');
  const victoryСardImgs = document.querySelectorAll('.victory-card-block-img');

  if (window.innerWidth >= 900) {
    if (bannerRedButton) {
      addClue(bannerRedButton);
    }
    if (bannerInfoCard) {
      addClue(bannerInfoCard);
    }
    if (aboutCompanyMap) {
      addClue(aboutCompanyMap);
    }
    if (popupQRs.length >= 0) {
      popupQRs.forEach((popupQR) => {
        addClue(popupQR);
      });
    }
    if (footerHeaderMail) {
      addClue(footerHeaderMail);
    }
    if (legalTaskDoImg) {
      addClue(legalTaskDoImg);
    }
    if (winTaskDoImg) {
      addClue(winTaskDoImg);
    }
    if (winCaseBannerImg) {
      addClue(winCaseBannerImg);
    }
    if (winCaseNumberImg) {
      addClue(winCaseNumberImg);
    }
    if (clientsReviews.length >= 0) {
      clientsReviews.forEach((clientsReview) => {
        addClue(clientsReview);
      });
    }
    if (firstStep) {
      addClue(firstStep);
    }
    if (secondStep) {
      addClue(secondStep);
    }
    if (thirdStep) {
      addClue(thirdStep);
    }
    if (footerLook) {
      addClue(footerLook);
    }
    if (stepButtons.length >= 0) {
      stepButtons.forEach((stepButton) => {
        addClue(stepButton);
      });
    }
    if (winCaseButtons.length >= 0) {
      winCaseButtons.forEach((winCaseButton) => {
        addClue(winCaseButton);
      });
    }
    if (victoryCardPersons.length >= 0) {
      victoryCardPersons.forEach((victoryCardPerson) => {
        addClue(victoryCardPerson);
      });
    }
    if (victoryСardImgs.length >= 0) {
      victoryСardImgs.forEach((victoryСardImg) => {
        addClue(victoryСardImg);
      });
    }
    // Подсказка при наведении мыши и открывание слайдера fancybox при клике
    if (bannerBlackButton) {
      addClue(bannerBlackButton);
      bannerBlackButton.addEventListener("click", () => {
        document.querySelector("a[data-fancybox='document']").click();
      });
    }
  } else {
    if (bannerRedButton) {
      openClueLink(bannerRedButton);
    }
    if (bannerInfoCard) {
      openClueLink(bannerInfoCard);
    }
    if (aboutCompanyMap) {
      openClueLink(aboutCompanyMap);
    }
    if (winTaskDoImg) {
      openClueLink(winTaskDoImg);
    }
    if (legalTaskDoImg) {
      openClueLink(legalTaskDoImg);
    }
    if (winCaseNumberImg) {
      openClueLink(winCaseNumberImg);
    }
    if (winCaseBannerImg) {
      openClueLink(winCaseBannerImg);
    }
    if (victoryCardPersons.length >= 0) {
      victoryCardPersons.forEach((victoryCardPerson) => {
        openClueLink(victoryCardPerson);
      });
    }

    if (firstStep) {
      const price = document.querySelector(".price");
      openClueScroll(firstStep, price);
    }
    if (secondStep) {
      const maintenanceBanner = document.querySelector(".maintenance_banner");
      openClueScroll(secondStep, maintenanceBanner);
    }
    if (thirdStep) {
      const legalReview = document.querySelector(".legal-review");
      openClueScroll(thirdStep, legalReview);
    }

    // Подсказка при клике и открывание кастомного слайдера при повторном клике
    if (clientsReviews.length >= 0) {
      const shadowBlock = document.querySelector(".shadow-block");
      const shadowBoxes = document.querySelectorAll(".shadow-block-box");

      clientsReviews.forEach((clientsReview, index) => {
        const clue = clientsReview.querySelector(".clue");

        function openCustomSlider() {
          shadowBlock.classList.add("show");
          shadowBoxes[index].classList.add("show");
          document.querySelector("body").style.overflow = "hidden";
        }

        clientsReview.addEventListener("click", () => {
          clue.classList.remove("none");
          document.addEventListener("click", clickOutsideClue);
          clientsReview.addEventListener("click", openCustomSlider);

          function clickOutsideClue(event) {
            if (!clientsReview.contains(event.target)) {
              clue.classList.add("none");
              document.removeEventListener("click", clickOutsideClue);
              clientsReview.removeEventListener("click", openCustomSlider);
            }
          }
        });
      });
    }

    // Подсказка при клике и открывание слайдера fancybox при повторном клике
    if (bannerBlackButton) {
      const clue = bannerBlackButton.querySelector(".clue");
      bannerBlackButton.addEventListener("click", () => {
        if (clue.classList.contains("none")) {
          clue.classList.remove("none");
          document.addEventListener("click", clickOutsideClue);
          bannerBlackButton.addEventListener("click", openFancySlider);
        }
      });

      function clickOutsideClue(event) {
        if (!bannerBlackButton.contains(event.target)) {
          clue.classList.add("none");
          document.removeEventListener("click", clickOutsideClue);
          bannerBlackButton.removeEventListener("click", openFancySlider);
        }
      }
      function openFancySlider() {
        document.querySelector("a[data-fancybox='document']").click();
      }
    }

    // Подсказка при клике и открывание слайдера fancybox при повторном клике
    if (victoryСardImgs.length >= 0) {
      victoryСardImgs.forEach((victoryСardImg) => {
        const parent = victoryСardImg.closest('.victory-card-block');
        const clue = parent.querySelector(".clue");
        victoryСardImg.addEventListener("click", () => {
          if (clue.classList.contains("none")) {
            clue.classList.remove("none");
            document.addEventListener("click", clickOutsideClue);
            victoryСardImg.addEventListener("click", openFancySlider);
            clue.addEventListener("click", openFancySlider);
          }
        });
  
        function clickOutsideClue(event) {
          if (!victoryСardImg.contains(event.target)) {
            clue.classList.add("none");
            document.removeEventListener("click", clickOutsideClue);
            victoryСardImg.removeEventListener("click", openFancySlider);
            clue.removeEventListener("click", openFancySlider);
          }
        }
        function openFancySlider() {
          parent.querySelector('.data-slider a').click();
        }
      })
    }

    // Подсказка при клике на кнопку сотрудника, в декстопе сделано при помощи hover
    if (personCards.length >= 0) {
      personCards.forEach((card) => {
        const button = card.querySelector("a");
        const buttonClue = button.querySelector("span");
        const linkHref = button.href;
        button.addEventListener("click", (event) => {
          event.preventDefault();
          if ((buttonClue.style.opacity = "0")) {
            buttonClue.style.zIndex = "0";
            buttonClue.style.opacity = "1";
            document.addEventListener("click", clickOutsideClue);
            button.addEventListener("click", openButtonLink);
          }

          function clickOutsideClue(event) {
            if (!button.contains(event.target)) {
              buttonClue.style.zIndex = "-1";
              buttonClue.style.opacity = "0";
              document.removeEventListener("click", clickOutsideClue);
              button.removeEventListener("click", openButtonLink);
            }
          }
          function openButtonLink() {
            window.location.href = linkHref;
          }
        });
      });
    }
  }

  // Открывание полной информации о сотруднике
  if (personCards.length >= 0) {
    personCards.forEach((person) => {
      const personImg = person.querySelector("img");
      const personName = person.querySelector("p");
      const personInfo = person.querySelector(".section-team_person-card-more");

      function openInfo(item) {
        item.addEventListener("mouseenter", () => {
          personInfo.style.zIndex = "0";
          personInfo.style.opacity = "1";
        });
        hideInfo(item);
      }

      function hideInfo(item) {
        item.addEventListener("mouseleave", () => {
          personInfo.style.zIndex = "-1";
          personInfo.style.opacity = "0";
        });
      }
      openInfo(personImg);
      openInfo(personName);
      openInfo(personInfo);
    });
  }
});

// Подсказка при наведении мыши
function addClue(item) {
  const tooltip = document.createElement("div");
  tooltip.classList.add("tooltip");
  document.body.appendChild(tooltip);

  item.addEventListener("mouseenter", (e) => {
    const tooltipText = item.getAttribute("data-tooltip");
    const promptText = item.getAttribute("data-prompt");

    tooltip.textContent = tooltipText;

    if (promptText) {
      tooltip.innerHTML += `<br>${promptText}`;
    }

    tooltip.style.display = "block";
    updateTooltipPosition(e, tooltip);
  });

  item.addEventListener("mousemove", (e) => updateTooltipPosition(e, tooltip));

  item.addEventListener("mouseleave", () => {
    tooltip.style.display = "none";
  });
  item.addEventListener("click", () => {
    tooltip.style.display = "none";
  });
}

// Отслеживание позиции курсора мыши
function updateTooltipPosition(e, tooltip) {
  const xOffset = 10;
  const yOffset = 10;

  // Учитываем смещение прокрутки страницы
  const scrollX = window.pageXOffset || document.documentElement.scrollLeft;
  const scrollY = window.pageYOffset || document.documentElement.scrollTop;

  // Вычисляем позицию подсказки
  const tooltipX = e.clientX + xOffset + scrollX;
  const tooltipY = e.clientY + yOffset + scrollY;

  tooltip.style.left = tooltipX + "px";
  tooltip.style.top = tooltipY + "px";
}

// Подсказка при клике и переход по ссылке при повторном клике
function openClueLink(button) {
  const linkHref = button.closest("a").href;
  const clue = button.querySelector(".clue");
  button.addEventListener("click", (event) => {
    event.preventDefault();
    if (clue.classList.contains("none")) {
      clue.classList.remove("none");
      document.addEventListener("click", clickOutsideClue);
      button.addEventListener("click", openButtonLink);
    }
  });

  function clickOutsideClue(event) {
    if (!button.contains(event.target)) {
      clue.classList.add("none");
      document.removeEventListener("click", clickOutsideClue);
      button.removeEventListener("click", openButtonLink);
    }
  }
  function openButtonLink() {
    window.location.href = linkHref;
  }
}

// Подсказка при клике и скрол при повторном клике
function openClueScroll(step, element) {
  const clue = step.querySelector(".clue");

  function scrollClue() {
    let offsetPixels = 100;
    if (window.innerWidth <= 600) {
      offsetPixels = 0;
    }
    scrollToElement(element, offsetPixels);
  }

  step.addEventListener("click", () => {
    clue.classList.remove("none");
    document.addEventListener("click", clickOutsideClue);
    step.addEventListener("click", scrollClue);

    function clickOutsideClue(event) {
      if (!step.contains(event.target)) {
        clue.classList.add("none");
        document.removeEventListener("click", clickOutsideClue);
        step.removeEventListener("click", scrollClue);
      }
    }
  });
}
