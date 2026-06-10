const plugin = require("tailwindcss/plugin");

/** @type {import('tailwindcss').Config} */
module.exports = {
  theme: {
    container: {
      padding: "1rem",
      center: true,
      screens: {
        DEFAULT: "70rem",
      },
    },
  }
};
