!function(){var t={296:function(t,e,n){var r=/^\s+|\s+$/g,o=/^[-+]0x[0-9a-f]+$/i,i=/^0b[01]+$/i,u=/^0o[0-7]+$/i,c=parseInt,f="object"==typeof n.g&&n.g&&n.g.Object===Object&&n.g,a="object"==typeof self&&self&&self.Object===Object&&self,s=f||a||Function("return this")(),l=Object.prototype.toString,p=Math.max,v=Math.min,d=function(){return s.Date.now()};function y(t){var e=typeof t;return!!t&&("object"==e||"function"==e)}function b(t){if("number"==typeof t)return t;if(function(t){return"symbol"==typeof t||function(t){return!!t&&"object"==typeof t}(t)&&"[object Symbol]"==l.call(t)}(t))return NaN;if(y(t)){var e="function"==typeof t.valueOf?t.valueOf():t;t=y(e)?e+"":e}if("string"!=typeof t)return 0===t?t:+t;t=t.replace(r,"");var n=i.test(t);return n||u.test(t)?c(t.slice(2),n?2:8):o.test(t)?NaN:+t}t.exports=function(t,e,n){var r,o,i,u,c,f,a=0,s=!1,l=!1,m=!0;if("function"!=typeof t)throw new TypeError("Expected a function");function j(e){var n=r,i=o;return r=o=void 0,a=e,u=t.apply(i,n)}function g(t){return a=t,c=setTimeout(x,e),s?j(t):u}function h(t){var n=t-f;return void 0===f||n>=e||n<0||l&&t-a>=i}function x(){var t=d();if(h(t))return w(t);c=setTimeout(x,function(t){var n=e-(t-f);return l?v(n,i-(t-a)):n}(t))}function w(t){return c=void 0,m&&r?j(t):(r=o=void 0,u)}function O(){var t=d(),n=h(t);if(r=arguments,o=this,f=t,n){if(void 0===c)return g(f);if(l)return c=setTimeout(x,e),j(f)}return void 0===c&&(c=setTimeout(x,e)),u}return e=b(e)||0,y(n)&&(s=!!n.leading,i=(l="maxWait"in n)?p(b(n.maxWait)||0,e):i,m="trailing"in n?!!n.trailing:m),O.cancel=function(){void 0!==c&&clearTimeout(c),a=0,r=f=o=c=void 0},O.flush=function(){return void 0===c?u:w(d())},O}}},e={};function n(r){var o=e[r];if(void 0!==o)return o.exports;var i=e[r]={exports:{}};return t[r](i,i.exports,n),i.exports}n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,{a:e}),e},n.d=function(t,e){for(var r in e)n.o(e,r)&&!n.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:e[r]})},n.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(t){if("object"==typeof window)return window}}(),n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},function(){"use strict";var t=n(296),e=n.n(t);window.addEventListener("load",(()=>{const t=document.querySelector(".js-search");if(null!==t){const n=document.querySelectorAll(".js-result");t.addEventListener("input",e()((()=>{n.forEach((e=>{e.dataset.user.includes(t.value)?e.classList.remove("scale-0","opacity-0","mt-[-39.5px]"):e.classList.add("scale-0","opacity-0","mt-[-39.5px]")}))}),200))}}))}()}();