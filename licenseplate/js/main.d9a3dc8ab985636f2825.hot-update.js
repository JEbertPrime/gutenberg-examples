/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
self["webpackHotUpdateminimal_react_webpack_babel_setup"]("main",{

/***/ "./src/components/Chart.jsx":
/*!**********************************!*\
  !*** ./src/components/Chart.jsx ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ Graph)\n/* harmony export */ });\n/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ \"./node_modules/react/index.js\");\n/* harmony import */ var d3__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! d3 */ \"../node_modules/d3/src/index.js\");\n\n\nfunction Graph(_ref) {\n  var progress = _ref.progress;\n  var canvasRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);\n  var percent = Math.floor(progress * 100);\n  var myChart = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);\n  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(function () {\n    console.log('data'); // select the canvas element created in the html.\n\n    var canvas = canvasRef.current; // Actual width and height. No idea if clienWidth would be a better option..?\n\n    var width = canvas.offsetWidth;\n    var height = canvas.offsetHeight; // Set a projection for the map. Projection = transform a lat/long on a position on the 2d map.\n\n    var projection = d3__WEBPACK_IMPORTED_MODULE_1__.geoAlbers().center([0, 33.777]).rotate([84.299605, 0]).scale(1000000).translate([width / 2, height / 2]); // Create a path generator.\n    // Get the 'context'\n\n    var ctx = canvas.getContext('2d'); // geographic path generator for given projection and canvas context\n\n    var pathGenerator = d3__WEBPACK_IMPORTED_MODULE_1__.geoPath(projection, ctx);\n    console.log(pathGenerator); // Draw a background\n    // ctx.fillStyle = '#ddd';\n    // ctx.fillRect(0, 0, width, height);\n    // Load external data and boot\n\n    d3__WEBPACK_IMPORTED_MODULE_1__.json(\"/wp-content/uploads/2021/06/dekalb_cropped_simple.geojson\").then(function (data) {\n      // initialize the path\n      console.log(data);\n      ctx.beginPath(); // Got the positions of the path\n\n      pathGenerator(data); // Fill the paths\n      // Add stroke\n\n      ctx.strokeStyle = \"#69b3a2\";\n      ctx.stroke();\n    });\n  }, []);\n  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(\"canvas\", {\n    height: \"500\",\n    width: \"1000\",\n    ref: canvasRef\n  });\n}\n\n//# sourceURL=webpack://minimal-react-webpack-babel-setup/./src/components/Chart.jsx?");

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ /* webpack/runtime/getFullHash */
/******/ (() => {
/******/ 	__webpack_require__.h = () => ("1576f687e6333b372b42")
/******/ })();
/******/ 
/******/ }
);