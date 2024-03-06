/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/views/*.{html,js,php}", "node_modules/preline/dist/*.js"],
  theme: {
    extend: {},
  },
  plugins: [require("preline/plugin")],
};
