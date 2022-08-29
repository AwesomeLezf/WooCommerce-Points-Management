module.exports = {
  prefix: "",
  important: false,
  separator: ":",
  content: ["**/**/*.php", "**/**/**/*.php", "scripts/*.js", "scripts/**/*.js"],
  safelist: ["hidden", "scale-0", "opacity-0", "mt-[-39.5px]"],
  theme: {
    screens: {
      xxsm: "380px",
      xsm: "460px",
      sm: "640px",
      md: "768px",
      lg: "1024px",
      xl: "1140px",
    },
    colors: {
      transparent: "transparent",
      primary: "#FCCD27",
      secondary: "#191919",

      // tertiary: "",
      // quaternary: "",
      // quinary: "",
      // senary: "",
      // youtube: '#FF0000',
      // fb: "#475993",
      // linkedIn: "#0077B7",

      error: {
        100: "#FFBABA",
        200: "#D8000C",
      },
      success: {
        100: "#DFF2BF",
        200: "#4F8A10",
      },
      info: {
        100: "#BDE5F8",
        200: "#00529B",
      },

      black: "#000",
      white: "#fff",

      gray: {
        100: "#FCFCFC",
        200: "#F4F4F4",
        300: "#F1F1F1",
        400: "#D6D6D6",
        500: "#848484",
        600: "#807F88",
        700: "#707070",
        800: "#1E1E1E",
        900: "#171717",
      },
      red: {
        100: "#fff5f5",
        200: "#fed7d7",
        300: "#feb2b2",
        400: "#fc8181",
        500: "#f56565",
        600: "#e53e3e",
        700: "#c53030",
        800: "#9b2c2c",
        900: "#742a2a",
      },
      orange: {
        100: "#fffaf0",
        200: "#feebc8",
        300: "#fbd38d",
        400: "#f6ad55",
        500: "#ed8936",
        600: "#dd6b20",
        700: "#c05621",
        800: "#9c4221",
        900: "#7b341e",
      },
      yellow: {
        100: "#fffff0",
        200: "#fefcbf",
        300: "#faf089",
        400: "#f6e05e",
        500: "#ecc94b",
        600: "#d69e2e",
        700: "#b7791f",
        800: "#975a16",
        900: "#744210",
      },
      green: {
        100: "#f0fff4",
        200: "#c6f6d5",
        300: "#9ae6b4",
        400: "#68d391",
        500: "#48bb78",
        600: "#38a169",
        700: "#2f855a",
        800: "#276749",
        900: "#22543d",
      },
      teal: {
        100: "#e6fffa",
        200: "#b2f5ea",
        300: "#81e6d9",
        400: "#4fd1c5",
        500: "#38b2ac",
        600: "#319795",
        700: "#2c7a7b",
        800: "#285e61",
        900: "#234e52",
      },
      blue: {
        100: "#ebf8ff",
        200: "#bee3f8",
        300: "#90cdf4",
        400: "#63b3ed",
        500: "#4299e1",
        600: "#3182ce",
        700: "#2b6cb0",
        800: "#2c5282",
        900: "#2a4365",
      },
      indigo: {
        100: "#ebf4ff",
        200: "#c3dafe",
        300: "#a3bffa",
        400: "#7f9cf5",
        500: "#667eea",
        600: "#5a67d8",
        700: "#4c51bf",
        800: "#434190",
        900: "#3c366b",
      },
      purple: {
        100: "#faf5ff",
        200: "#e9d8fd",
        300: "#d6bcfa",
        400: "#b794f4",
        500: "#9f7aea",
        600: "#805ad5",
        700: "#6b46c1",
        800: "#553c9a",
        900: "#44337a",
      },
      pink: {
        100: "#fff5f7",
        200: "#fed7e2",
        300: "#fbb6ce",
        400: "#f687b3",
        500: "#ed64a6",
        600: "#d53f8c",
        700: "#b83280",
        800: "#97266d",
        900: "#702459",
      },
    },
    spacing: (theme) => ({
      "1px": "1px",
      "2px": "2px",
      "3px": "3px",
      "4px": "4px",
      "7px": "7px",
      0: "0",
      1: "0.25rem",
      2: "0.5rem",
      3: "0.75rem",
      4: "1rem",
      5: "1.25rem",
      6: "1.5rem",
      7: "1.75rem",
      8: "2rem",
      9: "2.25rem",
      10: "2.5rem",
      12: "3rem",
      14: "3.5rem",
      16: "4rem",
      18: "4.5rem",
      20: "5rem",
      22: "5.5rem",
      24: "6rem",
      26: "6.5rem",
      28: "7rem",
      30: "7.5rem",
      32: "8rem",
      34: "8.5rem",
      36: "9rem",
      40: "10rem",
      42: "10.5rem",
      44: "11rem",
      46: "11.5rem",
      48: "12rem",
      50: "12.5rem",
      52: "13rem",
      54: "13.5rem",
      56: "14rem",
      58: "14.5rem",
      60: "15rem",
      62: "15.5rem",
      64: "16rem",
      68: "17rem",
      72: "18rem",
      76: "19rem",
      78: "19.5rem",
      80: "20rem",
      82: "20.5rem",
      84: "21rem",
      88: "22rem",
      92: "23rem",
      96: "24rem",
      100: "25rem",
      104: "26rem",
      108: "27rem",
      112: "28rem",
      116: "29rem",
      117: "29.25rem",
      118: "29.5rem",
      120: "30rem",
      124: "31rem",
      128: "32rem",
      132: "33rem",
      136: "34rem",
      140: "35rem",
      144: "36rem",
      148: "37rem",
      152: "38rem",
      156: "39rem",
      160: "40rem",
      164: "41rem",
      168: "42rem",
      176: "44rem",
      180: "45rem",
      184: "46rem",
      192: "48rem",
      200: "50rem",
      204: "51rem",
      220: "55rem",
      228: "57rem",
      240: "60rem",
      248: "62rem",
      260: "65rem",
      264: "66rem",
      268: "67rem",
      280: "70rem",
      300: "75rem",
      320: "80rem",
      328: "82rem",
      340: "85rem",
      360: "90rem",
      368: "92rem",
      376: "94rem",
      380: "95rem",
      400: "100rem",
      420: "105rem",
      440: "110rem",
      460: "115rem",
      480: "120rem",
      500: "125rem",
      520: "130rem",
      "10p": "10%",
      "15p": "15%",
      "20p": "20%",
      "25p": "25%",
      "30p": "30%",
      "35p": "35%",
      "40p": "40%",
      "45p": "45%",
      "50p": "50%",
      "60p": "60%",
      "70p": "70%",
      "80p": "80%",
      "80s": "80vH",
      "90p": "90%",
      "95p": "95%",
      "100p": "100%",
      "120p": "120%",
      "160p": "160%",
      auto: "auto",
      "100p-40": "calc(100% - 10rem)",
      "100vH-20": "calc(100vH - 5rem)",
      "100vH-32": "calc(100vH - 8rem)",
    }),
    backgroundColor: (theme) => ({
      ...theme("colors"),
    }),
    backgroundPosition: {
      bottom: "bottom",
      center: "center",
      left: "left",
      "left-bottom": "left bottom",
      "left-top": "left top",
      right: "right",
      "right-bottom": "right bottom",
      "right-top": "right top",
      top: "top",
      "pos-20-50": "20% 50%",
      "pos-30-50": "30% 50%",
      "pos-80-50": "80% 50%",
      "pos-90-20": "90% 20%",
    },
    backgroundSize: {
      auto: "auto",
      cover: "cover",
      contain: "contain",
      "40-auto": "40% auto",
      "50-auto": "50% auto",
      "100-auto": "100% auto",
      "auto-50": "auto 50%",
      "auto-90": "auto 90%",
      "auto-100": "auto 100%",
      "100-50": "100% 50%",
    },
    backgroundOpacity: {
      0: "0",
      10: "0.10",
      15: "0.15",
      20: "0.2",
      25: "0.25",
      40: "0.4",
      50: "0.5",
      60: "0.6",
      70: "0.70",
      75: "0.75",
      82: "0.82",
      90: "0.9",
      100: "1",
    },
    borderColor: (theme) => ({
      ...theme("colors"),
      default: theme("colors.gray.300", "currentColor"),
    }),
    borderRadius: {
      none: "0",
      sm: "0.125rem",
      default: "0.25rem",
      md: "0.375rem",
      lg: "0.5rem",
      xl: "1rem",
      "2xl": "2rem",
      "3xl": "3rem",
      "4xl": "4rem",
      "4.5xl": "4.5rem",
      "5xl": "5rem",
      32: "8rem",
      40: "10rem",
      60: "15rem",
      full: "9999px",
    },
    borderWidth: {
      default: "1px",
      0: "0",
      1: "1px",
      2: "2px",
      3: "3px",
      4: "4px",
      5: "5px",
      6: "6px",
      7: "7px",
      8: "8px",
      10: "10px",
      12: "12px",
      17: "17px",
    },
    boxShadow: {
      custom: "2px 8px 10px #00000029",
      "border-transparent": "0px 0px 0px 2px transparent",
      "border-white": "0px 0px 0px 2px #ffffff",
      "border-primary": "0px 0px 0px 2px #004E81",
      "border-secondary": "0px 0px 0px 2px #3A3A3A",
      // xs: "0 0 0 1px rgba(0, 0, 0, 0.05)",
      // sm: "0 1px 2px 0 rgba(0, 0, 0, 0.05)",
      // default:
      //   "0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)",
      // md:
      //   "0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)",
      lg: "0px 0px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)",
      xl: "0 3px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)",
      "2xl": "0 5px 50px -12px rgba(0, 0, 0, 0.25)",
      inner: "inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)",
      outline: "0 0 0 3px rgba(66, 153, 225, 0.5)",
      none: "none",
    },
    container: {},
    cursor: {
      auto: "auto",
      default: "default",
      pointer: "pointer",
      wait: "wait",
      text: "text",
      move: "move",
      "not-allowed": "not-allowed",
      "zoom-in": "zoom-in",
    },
    fill: (theme) => ({
      ...theme("colors"),
      current: "currentColor",
      none: "none",
    }),
    flex: {
      1: "1 1 0%",
      auto: "1 1 auto",
      initial: "0 1 auto",
      none: "none",
    },
    flexGrow: {
      0: "0",
      default: "1",
    },
    flexShrink: {
      0: "0",
      default: "1",
    },
    fontFamily: {
      primary: "'Exo', sans-serif",
      secondary: "'Montserrat', sans-serif",
    },
    fontSize: {
      xxs: "1rem",
      xs: "1.4rem",
      sm: "clamp(1rem, 0.84rem + 0.3333vw, 1.4rem);",
      base: "clamp(1.2rem, 1.0632rem + 0.3195vw, 1.6rem)",
      lg: "clamp(1.4rem, 1.2632rem + 0.3195vw, 1.8rem)",
      xl: "clamp(1.6rem, 1.4632rem + 0.3195vw, 2rem)",
      "2xl": "clamp(1.8rem, 1.56064rem + 0.5591vw, 2.5rem)",
      "3xl": "clamp(2rem, 1.65808rem + 0.7987vw, 3rem)",
      "4xl": "clamp(2.5rem, 1.9872rem + 1.1981vw, 4rem)",
      "5xl": "clamp(3rem, 2.31632rem + 1.5974vw, 5rem)",
      "5.5xl": "clamp(3.5rem, 2.7rem + 1.6667vw, 5.5rem)",
      "6xl": "clamp(4rem, 3.2rem + 1.6667vw, 6rem)",
      "6.5xl": "clamp(4.5rem, 3.7rem + 1.6667vw, 6.5rem)",
      // "10xl": "10rem",
      // "12xl": "12rem",
      // "14xl": "14rem",
      // "16xl": "16rem",
    },
    fontWeight: {
      hairline: "100",
      thin: "200",
      light: "300",
      normal: "400",
      medium: "500",
      semibold: "600",
      bold: "700",
      extrabold: "800",
      black: "900",
    },
    height: (theme) => ({
      auto: "auto",
      inherit: "inherit",
      ...theme("spacing"),
      full: "100%",
      "110p": "110%",
      "120p": "120%",
      screen: "100vh",
      "100p-22": "calc(100% - 5.5rem)",
    }),
    inset: (theme, { negative }) => ({
      0: "0",
      ...theme("spacing"),
      ...negative(theme("spacing")),
      "1/2": "50%",
      100: "100%",
      auto: "auto",
    }),
    letterSpacing: {
      tighter: "-0.05em",
      tight: "-0.025em",
      normal: "0",
      wide: "0.025em",
      wider: "0.05em",
      widest: "0.1em",
      custom: "0.16rem",
    },
    lineHeight: {
      none: "1",
      tight: "1.25",
      snug: "1.375",
      normal: "1.5",
      relaxed: "1.625",
      loose: "2",
      3: ".75rem",
      4: "1rem",
      5: "1.25rem",
      6: "1.5rem",
      7: "1.75rem",
      8: "2rem",
      9: "2.25rem",
      10: "2.5rem",
      12: "3rem",
      14: "3.5rem",
      20: "5rem",
      24: "6rem",
      32: "8rem",
      40: "10rem",
    },
    listStyleType: {
      none: "none",
      disc: "disc",
      decimal: "decimal",
    },
    margin: (theme, { negative }) => ({
      ...theme("spacing"),
      ...negative(theme("spacing")),
    }),
    maxHeight: (theme) => ({
      inherit: "inherit",
      ...theme("spacing"),
      full: "100%",
      screen: "100vh",
      "screen-88": "calc(100vH - 12rem)",
    }),
    maxWidth: (theme, { breakpoints }) => ({
      none: "none",
      inherit: "inherit",
      ...theme("spacing"),
      "1/2": "50%",
      full: "100%",
      screen: "100vw",
      ...breakpoints(theme("screens")),
    }),
    minHeight: (theme) => ({
      0: "0",
      inherit: "inherit",
      ...theme("spacing"),
      full: "100%",
      screen: "100vh",
      "100vH-24": "calc(100vH - 6rem)",
      "100vH-32": "calc(100vH - 8rem)",
    }),
    minWidth: (theme) => ({
      0: "0",
      inherit: "inherit",
      ...theme("spacing"),
      full: "100%",
      screen: "100vh",
    }),
    objectPosition: {
      bottom: "bottom",
      center: "center",
      left: "left",
      "left-bottom": "left bottom",
      "left-top": "left top",
      right: "right",
      "right-bottom": "right bottom",
      "right-top": "right top",
      top: "top",
    },
    opacity: {
      0: "0",
      5: "0.05",
      10: "0.1",
      15: "0.15",
      20: "0.2",
      25: "0.25",
      40: "0.40",
      50: "0.5",
      60: "0.6",
      70: "0.7",
      75: "0.75",
      100: "1",
    },
    order: {
      first: "-9999",
      last: "9999",
      none: "0",
      1: "1",
      2: "2",
      3: "3",
      4: "4",
      5: "5",
      6: "6",
      7: "7",
      8: "8",
      9: "9",
      10: "10",
      11: "11",
      12: "12",
    },
    padding: (theme) => theme("spacing"),
    placeholderColor: (theme) => theme("colors"),
    stroke: (theme) => ({
      ...theme("colors"),
      current: "currentColor",
      none: "none",
    }),
    strokeWidth: {
      0: "0",
      1: "1",
      2: "2",
      3: "3",
      4: "4",
    },
    textColor: (theme) => theme("colors"),
    width: (theme) => ({
      auto: "auto",
      inherit: "inherit",
      ...theme("spacing"),
      "1/2": "50%",
      "1/3": "33.333333%",
      "2/3": "66.666667%",
      "1/4": "25%",
      "2/4": "50%",
      "3/4": "75%",
      "1/5": "20%",
      "2/5": "40%",
      "3/5": "60%",
      "4/5": "80%",
      "1/6": "16.666667%",
      "2/6": "33.333333%",
      "3/6": "50%",
      "4/6": "66.666667%",
      "5/6": "83.333333%",
      "1/7": "14.285714%",
      "1/12": "8.333333%",
      "2/12": "16.666667%",
      "3/12": "25%",
      "4/12": "33.333333%",
      "5/12": "41.666667%",
      "6/12": "50%",
      "7/12": "58.333333%",
      "8/12": "66.666667%",
      "9/12": "75%",
      "10/12": "83.333333%",
      "11/12": "91.666667%",
      full: "100%",
      screen: "100vw",
      "fit-content": "fit-content",
      "100p-40": "calc(100% - 10rem)",
      "100p-48": "calc(100% - 12rem)",
      "100p-50": "calc(100% - 12.5rem)",
    }),
    zIndex: {
      auto: "auto",
      "-1": "-1",
      0: "0",
      10: "10",
      20: "20",
      30: "30",
      40: "40",
      48: "48",
      49: "49",
      50: "50",
      60: "60",
      70: "70",
      80: "80",
      90: "90",
      100: "100",
    },
    gap: (theme) => theme("spacing"),
    transformOrigin: {
      center: "center",
      top: "top",
      "top-right": "top right",
      right: "right",
      "bottom-right": "bottom right",
      bottom: "bottom",
      "bottom-left": "bottom left",
      left: "left",
      "top-left": "top left",
    },
    scale: {
      0: "0",
      50: ".5",
      75: ".75",
      80: ".8",
      90: ".9",
      95: ".95",
      100: "1",
      105: "1.05",
      110: "1.1",
      125: "1.25",
      150: "1.5",
    },
    rotate: {
      "-180": "-180deg",
      "-90": "-90deg",
      "-45": "-45deg",
      "-30": "-30deg",
      0: "0",
      30: "30deg",
      45: "45deg",
      90: "90deg",
      180: "180deg",
    },
    translate: (theme, { negative }) => ({
      ...theme("spacing"),
      ...negative(theme("spacing")),
      "-full": "-100%",
      "-1/2": "-50%",
      "1/2": "50%",
      full: "100%",
    }),
    skew: {
      "-12": "-12deg",
      "-6": "-6deg",
      "-3": "-3deg",
      0: "0",
      3: "3deg",
      6: "6deg",
      12: "12deg",
    },
    transitionProperty: {
      none: "none",
      all: "all",
      default: "background-color, border-color, color, fill, stroke, opacity, box-shadow, transform",
      colors: "background-color, border-color, color, fill, stroke",
      opacity: "opacity",
      shadow: "box-shadow",
      transform: "transform",
    },
    transitionTimingFunction: {
      linear: "linear",
      in: "cubic-bezier(0.4, 0, 1, 1)",
      out: "cubic-bezier(0, 0, 0.2, 1)",
      "in-out": "cubic-bezier(0.4, 0, 0.2, 1)",
    },
    transitionDuration: {
      75: "75ms",
      100: "100ms",
      150: "150ms",
      200: "200ms",
      250: "250ms",
      300: "300ms",
      350: "350ms",
      400: "400ms",
      500: "500ms",
      600: "600ms",
      700: "700ms",
      800: "800ms",
      1000: "1000ms",
    },
    transitionDelay: {
      75: "75ms",
      100: "100ms",
      150: "150ms",
      200: "200ms",
      250: "250ms",
      300: "300ms",
      350: "350ms",
      400: "400ms",
      450: "450ms",
      500: "500ms",
      550: "550ms",
      600: "600ms",
      700: "700ms",
      800: "800ms",
      1000: "1000ms",
    },
  },
  variants: {
    accessibility: ["responsive", "focus"],
    alignContent: ["responsive"],
    alignItems: ["responsive"],
    alignSelf: ["responsive"],
    appearance: ["responsive"],
    backgroundAttachment: ["responsive"],
    backgroundColor: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    backgroundPosition: ["responsive"],
    backgroundRepeat: ["responsive"],
    backgroundSize: ["responsive"],
    borderCollapse: ["responsive"],
    borderColor: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    borderRadius: ["responsive"],
    borderStyle: ["responsive"],
    borderWidth: ["responsive", "last"],
    boxShadow: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    boxSizing: ["responsive"],
    cursor: ["responsive"],
    display: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    fill: ["responsive"],
    flex: ["responsive"],
    flexDirection: ["responsive"],
    flexGrow: ["responsive"],
    flexShrink: ["responsive"],
    flexWrap: ["responsive"],
    float: ["responsive"],
    clear: ["responsive"],
    fontFamily: ["responsive"],
    fontSize: ["responsive"],
    fontSmoothing: ["responsive"],
    fontStyle: ["responsive"],
    fontWeight: ["responsive", "hover"],
    height: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    inset: ["responsive"],
    justifyContent: ["responsive"],
    letterSpacing: ["responsive"],
    lineHeight: ["responsive"],
    listStylePosition: ["responsive"],
    listStyleType: ["responsive"],
    margin: ["responsive", "last"],
    maxHeight: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    maxWidth: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    minHeight: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    minWidth: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    objectFit: ["responsive"],
    objectPosition: ["responsive"],
    opacity: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    order: ["responsive"],
    outline: ["responsive", "focus"],
    overflow: ["responsive"],
    padding: ["responsive", "first", "last"],
    placeholderColor: ["responsive", "focus"],
    pointerEvents: ["responsive"],
    position: ["responsive"],
    resize: ["responsive"],
    stroke: ["responsive"],
    strokeWidth: ["responsive"],
    tableLayout: ["responsive"],
    textAlign: ["responsive"],
    textColor: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    textDecoration: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    textTransform: ["responsive"],
    userSelect: ["responsive"],
    verticalAlign: ["responsive"],
    visibility: ["responsive"],
    whitespace: ["responsive"],
    width: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    wordBreak: ["responsive"],
    zIndex: ["responsive"],
    gap: ["responsive"],
    gridAutoFlow: ["responsive"],
    gridTemplateColumns: ["responsive"],
    gridColumn: ["responsive"],
    gridColumnStart: ["responsive"],
    gridColumnEnd: ["responsive"],
    gridTemplateRows: ["responsive"],
    gridRow: ["responsive"],
    gridRowStart: ["responsive"],
    gridRowEnd: ["responsive"],
    transform: ["responsive"],
    transformOrigin: ["responsive"],
    scale: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    rotate: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    translate: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    skew: ["responsive", "hover", "group-hover", "group-focus", "focus"],
    transitionProperty: ["responsive"],
    transitionTimingFunction: ["responsive"],
    transitionDuration: ["responsive"],
  },
  corePlugins: {},
  plugins: [require("@tailwindcss/line-clamp")],
};
