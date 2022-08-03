import "../styles/scss/main.scss";

import debounce from "lodash.debounce";

window.addEventListener("load", () => {
  const search = document.querySelector(".js-search");

  if (search !== null) {
    const results = document.querySelectorAll(".js-result");
    search.addEventListener(
      "input",
      debounce(() => {
        results.forEach((item) => {
          if (item.dataset.user.includes(search.value)) {
            item.classList.remove("scale-0", "opacity-0", "mt-[-39.5px]");
          } else {
            item.classList.add("scale-0", "opacity-0", "mt-[-39.5px]");
          }
        });
      }, 200)
    );
  }
});
