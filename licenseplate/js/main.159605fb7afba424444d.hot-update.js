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
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ Graph)\n/* harmony export */ });\n/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ \"./node_modules/react/index.js\");\n/* harmony import */ var d3__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! d3 */ \"../node_modules/d3/src/index.js\");\nfunction _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }\n\nfunction _nonIterableRest() { throw new TypeError(\"Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.\"); }\n\nfunction _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === \"string\") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === \"Object\" && o.constructor) n = o.constructor.name; if (n === \"Map\" || n === \"Set\") return Array.from(o); if (n === \"Arguments\" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }\n\nfunction _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }\n\nfunction _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== \"undefined\" && arr[Symbol.iterator] || arr[\"@@iterator\"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i[\"return\"] != null) _i[\"return\"](); } finally { if (_d) throw _e; } } return _arr; }\n\nfunction _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }\n\n\n\nfunction Graph(_ref) {\n  var progress = _ref.progress;\n  var canvasRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);\n  var percent = Math.floor(progress * 100);\n  var myChart = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);\n\n  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null),\n      _useState2 = _slicedToArray(_useState, 2),\n      roadData = _useState2[0],\n      setRoadData = _useState2[1];\n\n  var _useState3 = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null),\n      _useState4 = _slicedToArray(_useState3, 2),\n      rideData = _useState4[0],\n      setRideData = _useState4[1]; // Set a projection for the map. Projection = transform a lat/long on a position on the 2d map.\n\n\n  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(function () {\n    console.log('data');\n    var canvas = canvasRef.current; // Actual width and height. No idea if clienWidth would be a better option..?\n\n    canvas.width = window.innerWidth - 50;\n    canvas.height = canvas.width * .75;\n    var width = canvas.offsetWidth;\n    var height = canvas.offsetHeight; // select the canvas element created in the html.\n\n    var projection = d3__WEBPACK_IMPORTED_MODULE_1__.geoAlbers().center([0, 33.777]).rotate([84.299605, 0]).scale(750000).translate([width / 2, height / 4]); // Create a path generator.\n    // Get the 'context'\n\n    var ctx = canvas.getContext('2d'); // geographic path generator for given projection and canvas context\n\n    var pathGenerator = d3__WEBPACK_IMPORTED_MODULE_1__.geoPath(projection, ctx);\n    console.log(pathGenerator); // Draw a background\n    // ctx.fillStyle = '#ddd';\n    // ctx.fillRect(0, 0, width, height);\n    // Load external data and boot\n\n    d3__WEBPACK_IMPORTED_MODULE_1__.json(\"/wp-content/uploads/2021/06/dekalb_cropped_simple.geojson\").then(function (data) {\n      // initialize the path\n      setRoadData(data);\n      ctx.beginPath(); // Got the positions of the path\n\n      pathGenerator(data); // Fill the paths\n      // Add stroke\n\n      ctx.strokeStyle = \"rgba(76, 153, 217,.2)\";\n      ctx.stroke();\n    });\n  }, []);\n  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(\"canvas\", {\n    style: {\n      position: 'static',\n      left: '0px'\n    },\n    height: \"500\",\n    width: \"100\",\n    ref: canvasRef\n  });\n}\n\n//# sourceURL=webpack://minimal-react-webpack-babel-setup/./src/components/Chart.jsx?");

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ /* webpack/runtime/getFullHash */
/******/ (() => {
/******/ 	__webpack_require__.h = () => ("8e5a46d37a87539f326e")
/******/ })();
/******/ 
/******/ }
);