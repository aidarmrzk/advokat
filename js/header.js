const headerContainer = document.querySelector("header .container");
const headerContainerMenu = headerContainer.querySelector(
  ".menu-header-menu-container"
);
const circles = headerContainer.querySelectorAll(".circle");
const lies = headerContainer.querySelectorAll(".menu-item-has-children");
const headerLink = document.querySelector("#header-link");
const subMenuLink = document.querySelector("#menu-item-174 .sub-menu");

const headerCity = document.querySelector(".header_telefone-city");
const headerCityName = headerCity.querySelector("span");
const headerCityModal = headerCity.querySelector(".header_telefone-city-modal");
const headerCityModalName = headerCityModal.querySelector("p span");
const headerCityOk = headerCityModal.querySelector("#header-button-ok");
const headerCityChoice = headerCityModal.querySelector("#header-button-choice");
const footerCity = document.querySelector(".footer_connection button");
const footerCityP = footerCity.querySelector("p");
const footerMap = document.querySelector("#map");

const popupShadow = document.querySelector(".popup-shadow");
const popupCity = popupShadow.querySelector(".popup-city");
const popupCityClose = popupCity.querySelector(".svg-close");
const inputCity = popupCity.querySelector("input");
const popupCityImg = popupCity.querySelector("img");
const landingBannerLocation = document.querySelector(
  ".landing_banner-location"
);

const headerTelefone = document.querySelector(".header_telefone > a");
const headerTelefoneText = headerTelefone.querySelector("span");
const footerDesktopPhone = document.querySelector(".footer-desktop-phone");
const footerMobilePhone = document.querySelector(".footer-mobile-phone");
const footerMobilePhoneText = footerMobilePhone.querySelector("span");
const footerEmail = document.querySelector(".footer-email");
const footerEmailText = footerEmail.querySelector("span");
const landingBannerCity = document.querySelector(".landing_banner-city");
const yandexLink = document.querySelector("#yandex-link");
const googleLink = document.querySelector("#google-link");
const gisLink = document.querySelector("#gis-link");
let city = null;
let lat = null;
let lon = null;

// Ярлык открытия меню
circles.forEach((circle) => {
  circle.addEventListener("click", (event) => {
    if (headerContainer.classList.contains("active")) {
      headerContainer.classList.remove("active");
    } else {
      headerContainer.classList.add("active");
      document.addEventListener("click", handleClickOutside);
    }
  });
});
// Функция для обработки клика вне меню
function handleClickOutside(event) {
  if (!headerContainer.contains(event.target)) {
    headerContainer.classList.remove("active");
    document.removeEventListener("click", handleClickOutside);
  }
}

if (window.innerWidth > 600) {
  // Анимированность списка выпадающего меню
  lies.forEach((li) => {
    const a = li.querySelector("a");
    const subMenu = li.querySelector(".sub-menu");
    a.addEventListener("click", (event) => {
      event.preventDefault();
    });
    a.addEventListener("mouseenter", () => {
      showSub();
    });
    subMenu.addEventListener("mouseenter", () => {
      showSub();
    });
    a.addEventListener("mouseleave", () => {
      hideSub();
    });
    subMenu.addEventListener("mouseleave", () => {
      hideSub();
    });
    function showSub() {
      li.classList.add("selected");
      subMenu.style.display = "flex";
    }
    function hideSub() {
      li.classList.remove("selected");
      subMenu.style.display = "none";
    }
  });

  // Фиксируем header при скролинге
  function addFixedClass() {
    if (window.scrollY > 0) {
      document.querySelector("header").classList.add("fixed");
    } else {
      document.querySelector("header").classList.remove("fixed");
    }
  }
  addFixedClass();
  window.addEventListener("scroll", addFixedClass);
}

// Выпадающее меню для мобилки
if (window.innerWidth <= 600) {
  lies.forEach((li) => {
    li.addEventListener("click", (event) => {
      const subMenuLi = li.querySelector(".sub-menu");
      if (!subMenuLi.contains(event.target)) {
        if (li.classList.contains("selected")) {
          li.classList.remove("selected");
        } else {
          li.classList.add("selected");
          document.addEventListener("click", handleClickOutsideMobile);
        }
        event.preventDefault();
      }
    });
  });
  function handleClickOutsideMobile(event) {
    if (!headerContainer.contains(event.target)) {
      lies.forEach((li) => {
        li.classList.remove("selected");
      });
    }
  }
}

// Открывание и закрывания popup с городами
headerCity.addEventListener("click", (event) => {
  if (!event.target.closest(".header_telefone-city-modal")) {
    popupShadow.classList.remove("hide");
    popupCity.classList.remove("hide");
    headerCityModal.classList.add("hide");
  }
});
headerCityChoice.addEventListener("click", () => {
  popupShadow.classList.remove("hide");
  popupCity.classList.remove("hide");
  headerCityModal.classList.add("hide");
});
popupShadow.addEventListener("click", (event) => {
  if (event.target === popupShadow) {
    popupShadow.classList.add("hide");
    popupCity.classList.add("hide");
  }
});
popupCityClose.addEventListener("click", () => {
  popupShadow.classList.add("hide");
  popupCity.classList.add("hide");
});
footerCity.addEventListener("click", () => {
  headerCity.click();
});

// Создание списка городов, добавление функции выбора и поиска города
function createLiElements(data) {
  let ul = document.querySelector(".popup-city ul");
  let addedNames = []; // Массив для хранения уже добавленных имен городов

  data.forEach(function (obj) {
    if (!addedNames.includes(obj.name)) {
      let span = document.createElement("span");
      span.textContent = obj.name;
      span.setAttribute("lat", obj.coords.lat);
      span.setAttribute("lon", obj.coords.lon);
      let li = document.createElement("li");
      li.classList.add("none");
      li.appendChild(span);
      ul.appendChild(li);
      addedNames.push(obj.name);
    }
  });

  const cities = document.querySelectorAll(".popup-city ul li span");

  getCityCookie();
  if (city !== null) {
    headerCityName.textContent = city;
    headerCityName.setAttribute("lat", lat);
    headerCityName.setAttribute("lon", lon);
    if (city !== "Вся Россия") {
      headerCityModalName.textContent = city;
    } else {
      headerCityModalName.textContent = "не выбран";
    }
    console.log("Взяли город из Cookie");
  } else {
    getPlace(addedNames, cities);
    headerCityModal.classList.remove("hide");
    console.log("Определили город по IP");
  }

  cities.forEach((newCity) => {
    newCity.addEventListener("click", () => {
      headerCityName.textContent = newCity.textContent;

      let latValue = newCity.getAttribute("lat");
      let lonValue = newCity.getAttribute("lon");
      headerCityName.setAttribute("lat", latValue);
      headerCityName.setAttribute("lon", lonValue);

      popupShadow.classList.add("hide");
      popupCity.classList.add("hide");

      city = headerCityName.textContent;
      lat = headerCityName.getAttribute("lat");
      lon = headerCityName.getAttribute("lon");
      setCityCookie("city", city, {
        secure: true,
        "max-age": 31536000000,
      });
      setCityCookie("lat", lat, {
        secure: true,
        "max-age": 31536000000,
      });
      setCityCookie("lon", lon, {
        secure: true,
        "max-age": 31536000000,
      });
    });
  });

  inputCity.addEventListener("input", () => {
    const filterValue = inputCity.value.toLowerCase();
    let matchedCount = 0;
    popupCityImg.classList.add("none");

    if (filterValue === "") {
      cities.forEach((city, index) => {
        popupCityImg.classList.remove("none");
        if (index !== 0) {
          city.closest("li").classList.add("none");
        } else {
          city.closest("li").classList.remove("none");
        }
      });
    } else {
      cities.forEach((city) => {
        const listItemText = city.textContent.toLowerCase();

        if (listItemText.startsWith(filterValue)) {
          if (matchedCount < 12) {
            city.closest("li").classList.remove("none");
            matchedCount++;
          } else {
            city.closest("li").classList.add("none");
          }
        } else {
          city.closest("li").classList.add("none");
        }
      });
    }
  });
}

// Определение местонахождения пользователя по IP
async function getPlace(addedNames, cities) {
  const response = await fetch("https://ipapi.co/json/");
  const data = await response.json();
  const dataCity = data.city;

  async function getTranslateCity() {
    const response1 = await fetch(
      "https://translate.googleapis.com/translate_a/single?client=gtx&sl=en&tl=ru&dt=t&q=" +
        encodeURI(dataCity)
    );
    const data1 = await response1.json();
    const result1 = data1.flat(Infinity);
    const translate = result1[0];

    if (addedNames.includes(translate)) {
      headerCityName.textContent = translate;
      headerCityModalName.textContent = translate;
      console.log(`Город ${translate} есть в списке.`);

      cities.forEach((city) => {
        if (city.textContent === headerCityName.textContent) {
          let latValue = city.getAttribute("lat");
          let lonValue = city.getAttribute("lon");
          headerCityName.setAttribute("lat", latValue);
          headerCityName.setAttribute("lon", lonValue);
        }
      });
    } else {
      headerCityName.textContent = "Вся Россия";
      headerCityModalName.textContent = "не выбран";
      console.log(`Города ${translate} нет в списке.`);

      headerCityName.setAttribute("lat", "50.603664");
      headerCityName.setAttribute("lon", "36.571866");
    }
  }
  getTranslateCity();
}

// Сохраняем наименование города в Cookie
function setCityCookie(name, value, options = {}) {
  options = {
    path: "/",
  };

  if (options.expires instanceof Date) {
    options.expires = options.expires.toUTCString();
  }

  let updatedCookie =
    encodeURIComponent(name) + "=" + encodeURIComponent(value);

  for (let optionKey in options) {
    updatedCookie += "; " + optionKey;

    let optionValue = options[optionKey];

    if (optionValue !== true) {
      updatedCookie += "=" + optionValue;
    }
  }

  document.cookie = updatedCookie;
  console.log(name + " обновлен в Cookie");
}

// Получаем наименование города из Cookie
function getCityCookie() {
  const cookieString = document.cookie; // получить все куки
  const cookies = cookieString.split(";"); // разделить куки по точке с запятой

  for (let i = 0; i < cookies.length; i++) {
    const cookie = cookies[i].trim();

    if (cookie.startsWith("city=")) {
      const encodedValue = cookie.substring("city=".length, cookie.length);
      city = decodeURIComponent(encodedValue); // декодируем значение обратно в читаемую форму

      break;
    }
  }

  for (let i = 0; i < cookies.length; i++) {
    const cookie = cookies[i].trim();

    if (cookie.startsWith("city=")) {
      const encodedValue = cookie.substring("city=".length, cookie.length);
      city = decodeURIComponent(encodedValue); // декодируем значение обратно в читаемую форму

      break;
    }
  }

  for (let i = 0; i < cookies.length; i++) {
    const cookie = cookies[i].trim();

    if (cookie.startsWith("lat=")) {
      const encodedValue = cookie.substring("lat=".length, cookie.length);
      lat = decodeURIComponent(encodedValue); // декодируем значение обратно в читаемую форму

      break;
    }
  }

  for (let i = 0; i < cookies.length; i++) {
    const cookie = cookies[i].trim();

    if (cookie.startsWith("lon=")) {
      const encodedValue = cookie.substring("lon=".length, cookie.length);
      lon = decodeURIComponent(encodedValue); // декодируем значение обратно в читаемую форму

      break;
    }
  }
}

document.addEventListener("DOMContentLoaded", () => {
  // Использование переменной json_data.jsonPath для загрузки данных JSON с городами и выполнение функции createLiElements
  $.getJSON(json_data.jsonPath, createLiElements);

  // Кнопка модалки подтверждения города
  headerCityOk.addEventListener("click", () => {
    headerCityModal.classList.add("hide");
    city = headerCityName.textContent;
    lat = headerCityName.getAttribute("lat");
    lon = headerCityName.getAttribute("lon");
    setCityCookie("city", city, {
      secure: true,
      "max-age": 31536000000,
    });
    setCityCookie("lat", lat, {
      secure: true,
      "max-age": 31536000000,
    });
    setCityCookie("lon", lon, {
      secure: true,
      "max-age": 31536000000,
    });
  });

  handleTextChange();
});

// Отслеживание изменения города
let previousText = headerCityName.textContent;

const defaultTelefon = headerTelefone.href;
const defaultTelefonText = headerTelefoneText.textContent;
const defaultEmail = footerEmail.href;
const defaultEmailText = footerEmailText.textContent;
const defaultAddress = footerCityP.textContent;

function handleTextChange() {
  const currentText = headerCityName.textContent;

  if (currentText !== previousText) {
    previousText = currentText;

    footerCity.classList.add("hide");
    footerMap.classList.add("hide");

    // Отправка названия города на сервер и получение информации о нем
    $.ajax({
      url: myAjax.ajaxurl,
      method: "POST",
      data: { action: "my_ajax_action", city: currentText },
      dataType: "json",
      success: function (response) {
        if (
          "phone_link" in response &&
          response.phone_link !== "" &&
          response.phone_link !== null
        ) {
          headerTelefone.href = response.phone_link;
          headerTelefoneText.textContent = response.phone;
          footerDesktopPhone.textContent = response.phone;
          footerMobilePhone.href = response.phone_link;
          footerMobilePhoneText.textContent = response.phone;
        } else {
          headerTelefone.href = defaultTelefon;
          headerTelefoneText.textContent = defaultTelefonText;
          footerDesktopPhone.textContent = defaultTelefonText;
          footerMobilePhone.href = defaultTelefon;
          footerMobilePhoneText.textContent = defaultTelefonText;
        }

        if (
          "email" in response &&
          response.email !== "" &&
          response.email !== null
        ) {
          footerEmail.href = "mailto:" + response.email;
          footerEmailText.textContent = response.email;
        } else {
          footerEmail.href = defaultEmail;
          footerEmailText.textContent = defaultEmailText;
        }

        if (
          "full_address" in response &&
          response.full_address !== "" &&
          response.full_address !== null
        ) {
          footerCityP.textContent = response.full_address;
          footerCity.classList.remove("hide");
        } else {
          footerCityP.textContent = defaultAddress;
          footerCity.classList.remove("hide");
        }

        if (yandexLink) {
          let spans = yandexLink.querySelectorAll("span");
          spans[0].textContent = "";
          spans[1].textContent = "";
          if ("yandex_link" in response && response.yandex_link !== "") {
            yandexLink.href = response.yandex_link;

            spans[0].textContent = response.yandex_rating;
            spans[1].textContent = "(" + response.yandex_amount + ")";
          }
        }
        if (googleLink) {
          let spans = googleLink.querySelectorAll("span");
          spans[0].textContent = "";
          spans[1].textContent = "";
          if ("google_link" in response && response.google_link !== "") {
            googleLink.href = response.google_link;

            spans[0].textContent = response.google_rating;
            spans[1].textContent = "(" + response.google_amount + ")";
          }
        }
        if (gisLink) {
          let spans = gisLink.querySelectorAll("span");
          spans[0].textContent = "";
          spans[1].textContent = "";
          if ("twogis_link" in response && response.twogis_link !== "") {
            gisLink.href = response.twogis_link;

            spans[0].textContent = response.twogis_rating;
            spans[1].textContent = "(" + response.twogis_amount + ")";
          }
        }

        if (
          "coordinate_latitude" in response &&
          "coordinate_longitude" in response &&
          response.coordinate_latitude !== "" &&
          response.coordinate_longitude !== "" &&
          response.coordinate_latitude !== null &&
          response.coordinate_longitude !== null &&
          "full_address" in response &&
          response.full_address !== "" &&
          response.full_address !== null
        ) {
          changeMapLocation(
            response.coordinate_latitude,
            response.coordinate_longitude,
            "Юристы K2",
            response.full_address
          );
          footerMap.classList.remove("hide");
        } else {
          console.log("Офиса в выбранном городе нет, ищем ближайший");
          footerCity.classList.add("hide");

          let latValue = headerCityName.getAttribute("lat");
          let lonValue = headerCityName.getAttribute("lon");

          // Отправка координаты города на сервер для подбора ближайшего города с офисом
          $.ajax({
            url: myAjax.ajaxurl,
            method: "POST",
            data: {
              action: "my_ajax_action_map",
              latitude: latValue,
              longitude: lonValue,
            },
            dataType: "json",
            success: function (response) {
              footerCityP.textContent = response.city_full_address;
              changeMapLocation(
                response.closest_latitude,
                response.closest_longitude,
                "Юристы K2",
                response.city_full_address
              );
              console.log("Ближайший офис в г. " + response.closest_city);
              footerCity.classList.remove("hide");
              footerMap.classList.remove("hide");
            },
            error: function (xhr, textStatus, errorThrown) {
              // Обработка ошибки
              console.error(
                "Ошибка выполнения AJAX-запроса:",
                textStatus,
                errorThrown
              );
            },
            complete: function () {
              console.log("Запрос завершен.");
            },
          });
        }
      },
      error: function (xhr, textStatus, errorThrown) {
        console.error(
          "Ошибка выполнения AJAX-запроса:",
          textStatus,
          errorThrown
        );
      },
      complete: function () {
        console.log("Запрос завершен.");
      },
    });

    if (landingBannerLocation) {
      if (previousText !== "Вся Россия") {
        landingBannerCity.textContent = currentText;
        landingBannerLocation.classList.remove("hide");
      } else {
        landingBannerLocation.classList.add("hide");
      }
    }
  }

  // Рекурсивно вызываем функцию для постоянного отслеживания изменений
  requestAnimationFrame(handleTextChange);
}

// Создаем карту
var myMap;

ymaps.ready(function () {
  myMap = new ymaps.Map("map", {
    center: [50.603664, 36.571866],
    zoom: 15.52,
  });

  //Добавьте метку (балун) на карту
  var myPlacemark = new ymaps.Placemark(
    [50.603664, 36.571866],
    {
      hintContent: "Юристы K2",
      balloonContent: "г. Белгород, ул. Свободная, 50, 4 этаж",
    },
    { iconColor: "#d8160c", preset: "islands#redDotIcon" }
  );
  myMap.geoObjects.add(myPlacemark);
});

function changeMapLocation(lat, lon, hintContent, balloonContent) {
  if (myMap && myMap.geoObjects) {
    myMap.geoObjects.removeAll();
  }

  var newPlacemark = new ymaps.Placemark(
    [lat, lon],
    { hintContent: hintContent, balloonContent: balloonContent },
    { iconColor: "#d8160c", preset: "islands#redDotIcon" }
  );

  if (myMap) {
    myMap.geoObjects.add(newPlacemark);
    myMap.setCenter([lat, lon], 15.52);
  }
}
