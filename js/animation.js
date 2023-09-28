document.addEventListener("DOMContentLoaded", () => {
  const aboutCompany = document.querySelector(".about-company");
  const serviceMain = document.querySelector(".service-main");
  const review = document.querySelector(".review");
  const trusted = document.querySelector(".trusted");
  const main = document.querySelector(".main");
  const person = document.querySelector(".person");

  if (aboutCompany) {
    const bannerMain = aboutCompany.querySelector(
      ".about-company_banner-info-img"
    );
    const bannerRedButton = aboutCompany.querySelector(
      ".about-company_banner-info-block-red"
    );
    const bannerBlackButton = aboutCompany.querySelector(
      ".about-company_banner-info-block-black"
    );
    const bannerInfoCard = aboutCompany.querySelector(
      ".about-company_banner-info-block-card"
    );
    const bannerInfoText = aboutCompany.querySelector(
      ".about-company_banner-text"
    );

    let initialValue = 1;

    const redCounter = bannerRedButton.querySelector(".counter");
    let targetValueRed = parseInt(redCounter.textContent);
    redCounter.textContent = initialValue;

    const blackCounter = bannerBlackButton.querySelector(".counter");
    let targetValueBlack = parseInt(blackCounter.textContent);
    blackCounter.textContent = initialValue;

    const cardCounter = bannerInfoCard.querySelector(".counter");
    let targetValueCard = parseInt(cardCounter.textContent);
    cardCounter.textContent = initialValue;

    if (window.innerWidth >= 900) {
      window.addEventListener("mousemove", function (event) {
        imgElement = bannerMain.querySelector("img");
        var xPos = -((event.clientX / window.innerWidth) * 10 - 5);
        var yPos = -((event.clientY / window.innerHeight) * 10 - 5);

        imgElement.style.left = xPos + "px";
        imgElement.style.top = yPos + "px";
      });
    }

    setTimeout(() => {
      bannerMain.classList.remove("opacity");
      setTimeout(() => {
        bannerRedButton.classList.remove("opacity");
        animateCounter(redCounter, initialValue, targetValueRed, 70);
        setTimeout(() => {
          bannerBlackButton.classList.remove("opacity");
          animateCounter(blackCounter, initialValue, targetValueBlack, 90);
          setTimeout(() => {
            bannerInfoText.classList.remove("opacity");
            setTimeout(() => {
              bannerInfoCard.classList.remove("opacity");
              animateCounter(cardCounter, initialValue, targetValueCard, 10);
            }, 300);
          }, 300);
        }, 300);
      }, 300);
      if (window.innerWidth >= 900) {
        observer1.observe(companyRating);
        observer2.observe(footer);
      } else {
        observer1.observe(companyMapImg);
        observer2.observe(companyRatingSlider);
      }
    }, 1000);

    const companyMap = aboutCompany.querySelector(".about-company_map");
    const companyMapImg = companyMap.querySelector(".about-company_map-img");
    const companyMapImgH3 = companyMap.querySelector("h3");
    const companyMapImgLies = companyMap.querySelectorAll("li");
    const companyMapImgH4 = companyMap.querySelectorAll("h4");

    const companyRating = aboutCompany.querySelector(".about-company_rating");
    const companyRatingH3 = companyRating.querySelector("h3");
    const companyRatingImgs = companyRating.querySelectorAll(
      ".about-company_rating-info-block img"
    );
    const companyRatingText = companyRating.querySelector("p");
    const companyRatingTextImg = companyRating.querySelector(
      ".about-company_rating-info-block-text img"
    );
    const companyRatingSlider = companyRating.querySelector(
      ".person_skill-victory"
    );

    const observer1 = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          companyMapImgH3.classList.remove("opacity");
          setTimeout(() => {
            companyMapImg.classList.remove("opacity");
            setTimeout(() => {
              companyMapImgLies.forEach((li, index) => {
                setTimeout(() => {
                  li.classList.remove("opacity");
                }, 200 * index);
              });
              setTimeout(() => {
                companyMapImgH4.forEach((li, index) => {
                  setTimeout(() => {
                    li.classList.remove("opacity");
                  }, 200 * index);
                });
              }, 300);
            }, 300);
          }, 300);
          return;
        }
      });
    });

    const observer2 = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          companyRatingH3.classList.remove("opacity");
          setTimeout(() => {
            companyRatingImgs.forEach((img, index) => {
              setTimeout(() => {
                img.classList.remove("opacity");
              }, 200 * index);
            });
            setTimeout(() => {
              companyRatingText.classList.remove("opacity");
              setTimeout(() => {
                companyRatingTextImg.classList.remove("opacity");
                companyRatingSlider.classList.remove("opacity");
              }, 300);
            }, 300);
          }, 300);
          return;
        }
      });
    });
  }

  if (serviceMain) {
    const serviceMainH1 = serviceMain.querySelector("h1");
    const serviceMainLinks = serviceMain.querySelectorAll("a");

    setTimeout(() => {
      serviceMainH1.classList.remove("opacity");
      setTimeout(() => {
        serviceMainLinks.forEach((img, index) => {
          setTimeout(() => {
            img.classList.remove("opacity");
          }, 200 * index);
        });
      }, 300);
      observer4.observe(searchContent);

      if (window.innerWidth >= 900) {
        observer5.observe(anotherQuestion);
        observer6.observe(footer);
      } else {
        observer5.observe(searchContentLinks[5]);
        observer6.observe(anotherContentImg);
      }
    }, 1000);

    const searchTopH2 = document.querySelector(".search-top h2");
    const searchTopInput = document.querySelector(".search-top input");
    const searchTopButton = document.querySelector(".search-top button");
    const searchBotTitle = document.querySelector(".search-bot>p");

    const searchContent = document.querySelector(".search-content");
    const searchContentLinks = searchContent.querySelectorAll("a");
    const searchAppear = document.querySelector("#search-appear");

    const anotherQuestion = document.querySelector(".another-question");
    const anotherQuestionH2 = anotherQuestion.querySelector("h2");
    const anotherQuestionP = anotherQuestion.querySelector("p");
    const anotherQuestionButtons =
      anotherQuestion.querySelectorAll(".red-button");
    const anotherContentImg = anotherQuestion.querySelector(
      ".another-content-img img"
    );
    const anotherContentSpan = anotherQuestion.querySelector(
      ".another-content-img span"
    );

    const observer4 = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          searchTopH2.classList.remove("opacity");
          setTimeout(() => {
            searchTopInput.classList.remove("opacity");
            setTimeout(() => {
              searchTopButton.classList.remove("opacity");
              setTimeout(() => {
                searchBotTitle.classList.remove("opacity");
              }, 300);
            }, 300);
          }, 300);
          return;
        }
      });
    });

    const observer5 = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          searchContentLinks.forEach((li, index) => {
            setTimeout(() => {
              li.classList.remove("opacity");
            }, 100 * index);
          });
          setTimeout(() => {
            searchAppear.classList.remove("opacity");
          }, 300);
          return;
        }
      });
    });

    const observer6 = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          anotherQuestionH2.classList.remove("opacity");
          setTimeout(() => {
            anotherQuestionP.classList.remove("opacity");
            anotherContentImg.classList.remove("opacity");
            setTimeout(() => {
              anotherContentSpan.classList.remove("opacity");
              anotherQuestionButtons.forEach((li, index) => {
                setTimeout(() => {
                  li.classList.remove("opacity");
                }, 200 * index);
              });
            }, 300);
          }, 300);
          return;
        }
      });
    });
  }

  if (review) {
    const reviewBanner = review.querySelector(".review-banner");
    const reviewButton = review.querySelector(".section-review_panel button");
    const reviewLinks = review.querySelector(".section-review_links");
    const reviewsBlock = review.querySelector(".section-review_reviews");
    const reviews = reviewsBlock.querySelectorAll(".section-review_review");
    const reviewButtonMore = review.querySelector(".section-review > button");

    if (window.innerWidth >= 900) {
      window.addEventListener("mousemove", function (event) {
        imgElement = reviewBanner.querySelector("img");
        var xPos = -((event.clientX / window.innerWidth) * 10 - 5);
        var yPos = -((event.clientY / window.innerHeight) * 10 - 5);

        imgElement.style.left = xPos + "px";
        imgElement.style.top = yPos + "px";
      });
    }

    setTimeout(() => {
      reviewBanner.classList.remove("opacity");
      setTimeout(() => {
        reviewButton.classList.remove("opacity");
        reviewLinks.classList.remove("opacity");
        setTimeout(() => {
          observerReviews.observe(reviewsBlock);
        }, 300);
      }, 300);
      observerButton.observe(footer);
    }, 1000);

    const observerReviews = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          reviews.forEach((img, index) => {
            setTimeout(() => {
              img.classList.remove("opacity");
            }, 200 * index);
          });
          return;
        }
      });
    });

    const observerButton = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            reviewButtonMore.classList.remove("opacity");
          }, 300);
          return;
        }
      });
    });
  }

  if (trusted) {
    const trustedButton = trusted.querySelector(
      ".section-review_panel > button"
    );
    const trustedCards = trusted.querySelectorAll(".section-review_review");
    const trustedButtonMore = trusted.querySelector(".section-review > button");
    const pagination = trusted.querySelector(".pagination");

    setTimeout(() => {
      trustedButton.classList.remove("opacity");
      setTimeout(() => {
        trustedCards.forEach((img, index) => {
          setTimeout(() => {
            img.classList.remove("opacity");
          }, 150 * index);
        });
        setTimeout(() => {
          if (trustedButtonMore) {
            trustedButtonMore.classList.remove("opacity");
          }
          pagination.classList.remove("opacity");
        }, 1500);
      }, 300);
    }, 1000);
  }

  if (main) {
    const redButton = main.querySelector(".red-button");
    const articles = main.querySelectorAll(".article-content");
    const victories = main.querySelectorAll(".victory-employee");
    const moreButton = main.querySelector("#article-scroll");

    setTimeout(() => {
      redButton.classList.remove("opacity");
      setTimeout(() => {
        articles.forEach((img, index) => {
          setTimeout(() => {
            img.classList.remove("opacity");
          }, 500 * index);
        });
        victories.forEach((img, index) => {
          setTimeout(() => {
            img.classList.remove("opacity");
          }, 500 * index);
        });
      }, 500);
      observerButton.observe(footer);
    }, 1000);

    const observerButton = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            moreButton.classList.remove("opacity");
          }, 300);
          return;
        }
      });
    });
  }

  if (person) {
    const personBanner = person.querySelector(".person_banner");
    const personBannerH1 = person.querySelector(
      ".person_banner-info-block-text h1"
    );
    const personBannerP = person.querySelector(
      ".person_banner-info-block-text p"
    );
    const personBannerExperiences = person.querySelectorAll(
      ".person_banner-info-block-experience"
    );
    const personBannerImg = person.querySelector(".person_banner-info-img");

    if (window.innerWidth >= 900) {
      window.addEventListener("mousemove", function (event) {
        var xPos = -((event.clientX / window.innerWidth) * 10 - 5);
        var yPos = -((event.clientY / window.innerHeight) * 10 - 5);

        personBanner.style.backgroundPositionX = xPos + "px";
        personBanner.style.backgroundPositionY = yPos + "px";
      });
    }

    setTimeout(() => {
      personBannerH1.classList.remove("opacity");
      setTimeout(() => {
        personBannerImg.classList.remove("opacity");
        setTimeout(() => {
          personBannerP.classList.remove("opacity");
          setTimeout(() => {
            personBannerP.classList.remove("opacity");
            personBannerExperiences.forEach((img, index) => {
              setTimeout(() => {
                img.classList.remove("opacity");
              }, 200 * index);
            });
          }, 300);
        }, 300);
      }, 500);

      observerPersonDo.observe(personEducation);
      if (window.innerWidth >= 900) {
        observerPersonSkill.observe(personSkillLies[0]);
        observerPersonEducation.observe(footer);
      } else {
        observerPersonSkill.observe(personSkillVictory);
        observerPersonEducation.observe(personEducationCharters);
      }
    }, 1000);

    const personSkillH3 = person.querySelector(".person_skill-text h3");
    const personSkillLies = person.querySelectorAll(".person_skill-text li");
    const personSkillButtons = person.querySelectorAll(".person_skill button");
    const personSkillVictory = person.querySelector(".person_skill-victory");
    const personDo = person.querySelector(".person_do");
    const personEducation = person.querySelector(".person_education");
    const personEducationH3 = personEducation.querySelector("h3");
    const personEducationLies = personEducation.querySelectorAll("li");
    const personEducationCharters = personEducation.querySelector(
      ".person_education-charters"
    );

    const observerPersonSkill = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          personSkillH3.classList.remove("opacity");
          setTimeout(() => {
            personSkillLies.forEach((li, index) => {
              setTimeout(() => {
                li.classList.remove("opacity");
              }, 200 * index);
            });
            setTimeout(() => {
              personSkillButtons.forEach((li, index) => {
                setTimeout(() => {
                  li.classList.remove("opacity");
                }, 200 * index);
              });
              setTimeout(() => {
                personSkillVictory.classList.remove("opacity");
              }, 300);
            }, 300);
          }, 300);
          return;
        }
      });
    });

    const observerPersonDo = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            personDo.classList.remove("opacity");
          }, 200);
          return;
        }
      });
    });

    const observerPersonEducation = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          personEducationH3.classList.remove("opacity");
          setTimeout(() => {
            personEducationLies.forEach((li, index) => {
              setTimeout(() => {
                li.classList.remove("opacity");
              }, 200 * index);
            });
            setTimeout(() => {
              personEducationCharters.classList.remove("opacity");
            }, 300);
          }, 300);
          return;
        }
      });
    });
  }

  // Анимация footer
  setTimeout(() => {
    observerFooter.observe(footer);
  }, 1000);
});

function animateCounter(counter, initialValue, targetValue, interval) {
  let currentValue = initialValue;
  let updateCounter = setInterval(() => {
    counter.textContent = currentValue;
    currentValue++;
    if (currentValue > targetValue) {
      clearInterval(updateCounter);
    }
  }, interval);
}

const footer = document.querySelector("footer");
const footerH2 = footer.querySelector("h2");
const footerButton = footer.querySelector(".footer_connection button");
const footerMail = footer.querySelector(".footer_connection .footer-email");
const footerDesktop = footer.querySelector(
  ".footer_connection .footer-desktop-phone"
);
const footerMobile = footer.querySelector(
  ".footer_connection .footer-mobile-phone"
);
const footerLinks = footer.querySelector(
  ".footer_connection .footer_connection-links"
);
const footerMapContainer = footer.querySelector(".footer_map");
const footerInfo = footer.querySelector(".footer_info");
const footerHeaderLook = footer.querySelector(".footer-header-look");
const footerHeaderInfoMail = footer.querySelector(".footer-header-info .footer-email");
const footerHeaderInfoLinks = footer.querySelector(".footer-header-info .footer_connection-links");

function showFooter() {
  if (footerH2) {
    footerH2.classList.remove("opacity");
  }
  footerHeaderLook.classList.remove("opacity");
  footerHeaderInfoLinks.classList.remove("opacity");
  setTimeout(() => {
    if (!footer.classList.contains("bg-grow")) {
      footerMail.classList.remove("opacity");
      footerDesktop.classList.remove("opacity");
      footerMobile.classList.remove("opacity");
      footerButton.classList.remove("opacity");
      footerLinks.classList.remove("opacity");
    }
    footerHeaderInfoMail.classList.remove("opacity");
    setTimeout(() => {
      if (!footer.classList.contains("bg-grow")) {
        footerMapContainer.classList.remove("opacity");
      }
      footerInfo.classList.remove("opacity");
    }, 300);
  }, 300);
}

// Создаем и запускаем обсервер
const callbackFooter = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      showFooter();
      return;
    }
  });
};

let options = {
  threshold: 0.5,
};

if (window.innerWidth <= 900) {
  options = {
    threshold: 0.3,
  };
}

const observerFooter = new IntersectionObserver(callbackFooter, options);
