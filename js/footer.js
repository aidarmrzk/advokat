const buttonsService = document.querySelectorAll(
  ".another-content .red-button"
);
const buttonsPerson = document.querySelectorAll(".person_skill button");
const buttonLandingBanner = document.querySelector(
  ".landing_banner-info-block button"
);
const buttonMaintenanceTask = document.querySelector(
  ".maintenance_task-do button"
);
const buttonsLandingNumber = document.querySelectorAll(
  ".landing-numbers button"
);
const headerMobileButton = document.querySelector(
  ".header-mobile .header-mobile-button"
);
const whatsappButton = document.querySelector(
  ".maintenance_whatsapp a.whatsapp"
);
const maintenanceInfoSocialButton = document.querySelector(
  ".maintenance_info-block-social > a"
);
const priceButtonForm = document.querySelector(".price-button-form");
const blockStepsButton = document.querySelector(".block-steps button.mobile");
const blockStepsButtonDesktop = document.querySelector("button .desktop-button-form");

const footerDesktopNumber = document.querySelector(".footer-desktop-phone");

const popupShadowForm = document.querySelector(".popup-shadow-form");
const popupForm = popupShadowForm.querySelector(".popup-form");
const popupFormLink = popupShadowForm.querySelector(".popup-form-link");
const popupFormCloses = popupShadowForm.querySelectorAll(".svg-close");
const popupQRs = popupShadowForm.querySelectorAll(".popup-form-link-qrs img");
const form = document.querySelector(".popup-form form");
const buttonForm = form.querySelector(".wpcf7-submit");
const inputName = form.querySelector("input[name='user_name']");
const inputPhone = form.querySelector("input[name='phone_inp']");
const inputEmail = form.querySelector("input[name='email_user']");

const desktopButtons = document.querySelectorAll(".desktop-button");
const popupShadowLink = document.querySelector(".popup-shadow-link");
const popupLinks = popupShadowLink.querySelectorAll(".popup-link");

const popupShadowLight = document.querySelector(".popup-shadow-light");
const lightCloses = popupShadowLight.querySelectorAll(".light-close");
const lightQRs = popupShadowLight.querySelectorAll(".popup-light-box");

const popupShadowFormEnd = document.querySelector(".popup-shadow-form-end");
const formEnd = popupShadowFormEnd.querySelector(".popup-form-end");
const formEndClose = popupShadowFormEnd.querySelector(".svg-close");

const telegramButton = document.querySelector(".maintenance_whatsapp a.telegram");

if (buttonsService.length !== 0) {
  buttonsService.forEach((buttonService) => {
    openForm(buttonService);
  });
}
if (buttonsPerson.length !== 0) {
  buttonsPerson.forEach((buttonPerson) => {
    openForm(buttonPerson);
  });
}
if (buttonLandingBanner) {
  openForm(buttonLandingBanner);
}
if (buttonMaintenanceTask) {
  openForm(buttonMaintenanceTask);
}
if (buttonsLandingNumber.length !== 0) {
  buttonsLandingNumber.forEach((buttonLandingNumber) => {
    openForm(buttonLandingNumber);
  });
}
if (headerMobileButton) {
  openForm(headerMobileButton);
}
if (footerDesktopNumber) {
  openForm(footerDesktopNumber);
}
if (priceButtonForm) {
  openForm(priceButtonForm);
}
if (blockStepsButton) {
  openForm(blockStepsButton);
}
if (blockStepsButtonDesktop) {
  openForm(blockStepsButtonDesktop);
}

if (window.innerWidth >= 900) {
  openQR (telegramButton);
  openQR (whatsappButton);
  openQR (maintenanceInfoSocialButton);
}

// Открывание popup с формой
function openForm(button) {
  button.addEventListener("click", (event) => {
    event.preventDefault();
    if (!formEnd.classList.contains("sent")) {
      popupShadowForm.classList.remove("hide");
      popupForm.classList.remove("hide");
      popupFormLink.classList.remove("hide");
    } else {
      popupShadowFormEnd.classList.remove("hide");
      formEnd.classList.remove("hide");
    }
  });
}

// Закрывания popup с формой
popupShadowForm.addEventListener("click", (event) => {
  if (event.target === popupShadowForm) {
    popupShadowForm.classList.add("hide");
    popupForm.classList.add("hide");
    popupFormLink.classList.add("hide");
  }
});
popupFormCloses.forEach((popupFormClose) => {
  popupFormClose.addEventListener("click", () => {
    popupShadowForm.classList.add("hide");
    popupForm.classList.add("hide");
    popupFormLink.classList.add("hide");
  });
});

// Проверка валидации
// Отменяем все цифры в имени
const inputField = form.querySelector("input[name='user_name']");
inputField.addEventListener("input", () => {
  const currentValue = inputField.value;
  const newValue = currentValue.replace(/\d/g, "");

  if (currentValue !== newValue) {
    inputField.value = newValue;
  }
});

// Задаем маску формату телефона
$(document).ready(function () {
  $("#phone").mask("+7 (000) 000-00-00");
});

// Cookie
function checkCookies() {
  let cookieDate = localStorage.getItem("cookieDate");
  let cookieNotification = document.getElementById("cookie_notification");
  let cookieBtn = cookieNotification.querySelector(".cookie_accept");

  // Если записи про кукисы нет или она просрочена на 1 год, то показываем информацию про кукисы
  if (!cookieDate || +cookieDate + 31536000000 < Date.now()) {
    cookieNotification.classList.add("show");
  }

  // При клике на кнопку, в локальное хранилище записывается текущая дата в системе UNIX
  cookieBtn.addEventListener("click", function () {
    localStorage.setItem("cookieDate", Date.now());
    cookieNotification.classList.remove("show");
  });
}
checkCookies();

// Открывание popup с QR
desktopButtons.forEach((button) => {
  openQR (button);
});

function openQR (button) {
  if (button) {
    button.addEventListener("click", (event) => {
      event.preventDefault();
      popupShadowLink.classList.remove("hide");
      if (button.classList.contains("whatsapp")) {
        popupShadowLink.querySelector("#whatsapp").classList.remove("hide");
      }
      if (button.classList.contains("telegram")) {
        popupShadowLink.querySelector("#telegram").classList.remove("hide");
      }
      if (button.classList.contains("viber")) {
        popupShadowLink.querySelector("#viber").classList.remove("hide");
      }
    });
  }
}

// Закрывания popup с QR
popupLinks.forEach((popupLink) => {
  const svgClose = popupLink.querySelector("svg.close");
  svgClose.addEventListener("click", () => {
    popupLink.classList.add("hide");
    popupShadowLink.classList.add("hide");
  });
});
popupShadowLink.addEventListener("click", (event) => {
  if (event.target === popupShadowLink) {
    popupLinks.forEach((popupLink) => {
      if (!popupLink.classList.contains("hide")) {
        popupLink.classList.add("hide");
      }
    });
    popupShadowLink.classList.add("hide");
  }
});

// Открывание popup с QR лупа
popupQRs.forEach((popupQR) => {
  popupQR.addEventListener("click", () => {
    const popupQRClass = popupQR.classList[0];

    lightQRs.forEach((lightQR) => {
      const lightQRDataQR = lightQR.getAttribute("data-qr");
      if (popupQRClass === lightQRDataQR) {
        popupShadowForm.classList.add("hide");
        popupForm.classList.add("hide");
        popupFormLink.classList.add("hide");

        popupShadowLight.classList.remove("hide");
        lightQR.classList.remove("hide");
      }
    });
  });
});

// Закрывания popup с QR лупа
popupShadowLight.addEventListener("click", (event) => {
  if (event.target === popupShadowLight) {
    popupShadowLight.classList.add("hide");
    lightQRs.forEach((lightQR) => {
      lightQR.classList.add("hide");
    });
    popupShadowForm.classList.remove("hide");
    popupForm.classList.remove("hide");
    popupFormLink.classList.remove("hide");
  }
});
lightCloses.forEach((lightClose) => {
  lightClose.addEventListener("click", () => {
    popupShadowLight.classList.add("hide");
    lightQRs.forEach((lightQR) => {
      lightQR.classList.add("hide");
    });
    popupShadowForm.classList.remove("hide");
    popupForm.classList.remove("hide");
    popupFormLink.classList.remove("hide");
  });
});

// Валидация формы
const pForm = document.querySelector(".popup-form form > p");

const formAlarmText = document.createElement("span");
formAlarmText.classList.add("form-alarm-text");
formAlarmText.classList.add("none");
formAlarmText.textContent = "Пожалуйста, введите номер телефона или почту";
pForm.appendChild(formAlarmText);

const newButtonForm = document.createElement("div");
newButtonForm.classList.add("new-button-form");
newButtonForm.textContent = "Отправить заявку";
pForm.appendChild(newButtonForm);

inputPhone.addEventListener("input", () => {
  const phoneValue = inputPhone.value.trim();
  if (
    phoneValue !== "" &&
    !/^(\+\d{1,3} )?\(\d{3}\) \d{3}-\d{2}-\d{2}$/.test(phoneValue)
  ) {
    inputPhone.style.color = "rgb(220, 50, 50)";
  } else {
    inputPhone.style.color = "rgb(0, 0, 0)";
  }
});
newButtonForm.addEventListener("click", (event) => {
  const phoneValue = inputPhone.value.trim();
  const emailValue = inputEmail.value.trim();
  const nameValue = inputName.value.trim();

  if (nameValue !== "") {
    if (phoneValue === "" && emailValue === "") {
      formAlarmText.classList.remove("none");
    }
    if (phoneValue !== "") {
      if (
        phoneValue !== "" &&
        !/^(\+\d{1,3} )?\(\d{3}\) \d{3}-\d{2}-\d{2}$/.test(phoneValue)
      ) {
        console.log("Неправильный формат номера телефона");
      } else {
        buttonForm.click();
      }
      formAlarmText.classList.add("none");
      return;
    }
    if (emailValue !== "" && inputPhone.style.color !== "rgb(220, 50, 50)") {
      formAlarmText.classList.add("none");
      buttonForm.click();
    }
  } else {
    buttonForm.click();
  }
});

// Создаем экземпляр MutationObserver
const observer = new MutationObserver((mutationsList, observer) => {
  // Перебираем все мутации
  for (const mutation of mutationsList) {
    if (
      mutation.type === "attributes" &&
      mutation.attributeName === "data-status"
    ) {
      const newStatus = mutation.target.getAttribute("data-status");
      console.log(`Изменен data-status: ${newStatus}`);

      if (newStatus === "sent") {
        popupShadowForm.classList.add("hide");
        popupForm.classList.add("hide");
        popupFormLink.classList.add("hide");

        popupShadowFormEnd.classList.remove("hide");
        formEnd.classList.remove("hide");

        formEnd.classList.add("sent");
      }
    }
  }
});

// Настраиваем параметры наблюдения
const config = { attributes: true, attributeFilter: ["data-status"] };

// Начинаем наблюдение за формой
observer.observe(form, config);

// Закрывания popup с формой
popupShadowFormEnd.addEventListener("click", (event) => {
  if (event.target === popupShadowFormEnd) {
    popupShadowFormEnd.classList.add("hide");
    formEnd.classList.add("hide");
  }
});

formEndClose.addEventListener("click", () => {
  popupShadowFormEnd.classList.add("hide");
  formEnd.classList.add("hide");
});

function changeLabelText() {
  let labelElement = form.querySelector("label");
  if (window.innerWidth <= 600) {
    if (labelElement) {
      labelElement.innerText = "Для связи по электронной почте заполните:";
    }
  } else {
    if (labelElement) {
      labelElement.innerText =
        "Для общения по электронной почте заполните поле ниже:";
    }
  }
}
changeLabelText();
window.addEventListener("resize", changeLabelText);

document.addEventListener("DOMContentLoaded", () => {
  const footerContainer = document.querySelector("footer .container");
  const footerHeader = document.querySelector(".footer-header");
  const footerConnection = document.querySelector(".footer_connection");
  const footerMap = document.querySelector(".footer_map");

  if (footerHeader) {
    // Копирования текста почты
    const copyButton = footerHeader.querySelector(".footer-header-info a");
    const textToCopy = footerHeader.querySelector(".footer-header-info a span");

    copyButton.addEventListener("click", function (event) {
      event.preventDefault();

      const selection = window.getSelection();
      const range = document.createRange();
      range.selectNodeContents(textToCopy);
      selection.removeAllRanges();
      selection.addRange(range);

      try {
        document.execCommand("copy");
        console.log(
          "Текст скопирован в буфер обмена: " + textToCopy.textContent
        );
      } catch (err) {
        console.error("Не удалось скопировать текст в буфер обмена: ", err);
      }

      selection.removeAllRanges();
    });

    // Открываем footer полностью
    const footerHeaderButton = footerHeader.querySelector(
      ".footer-header-look"
    );
    footerHeaderButton.addEventListener("click", () => {
      footerHeader.style.maxHeight = "0";
      footerHeader.style.overflow = "hidden";
      footerHeader.style.margin = "0";
      footerHeader.remove();

      footerConnection.style.maxHeight = "max-content";
      footerConnection.style.overflow = "initial";

      footerContainer.style.gap = "15px";

      Array.from(footerConnection.getElementsByTagName("*")).forEach(function (
        element
      ) {
        if (element.classList.contains("opacity")) {
          element.classList.remove("opacity");
        }
      });

      footerMap.style.maxHeight = "max-content";
      footerMap.style.overflow = "initial";
      footerMap.classList.remove("opacity");
    });
  }
});
