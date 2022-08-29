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
            item.classList.add("grid");
            item.classList.add("mb-2");
            item.classList.remove("hidden", "scale-0", "opacity-0");
          } else {
            item.classList.add("hidden", "scale-0", "opacity-0");
            item.classList.remove("grid");
          }
        });
      }, 200)
    );
  }
});
