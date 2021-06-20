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
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ Graph)\n/* harmony export */ });\n/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ \"./node_modules/react/index.js\");\nObject(function webpackMissingModule() { var e = new Error(\"Cannot find module 'chart.js'\"); e.code = 'MODULE_NOT_FOUND'; throw e; }());\nfunction _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }\n\nfunction _nonIterableSpread() { throw new TypeError(\"Invalid attempt to spread non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.\"); }\n\nfunction _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === \"string\") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === \"Object\" && o.constructor) n = o.constructor.name; if (n === \"Map\" || n === \"Set\") return Array.from(o); if (n === \"Arguments\" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }\n\nfunction _iterableToArray(iter) { if (typeof Symbol !== \"undefined\" && iter[Symbol.iterator] != null || iter[\"@@iterator\"] != null) return Array.from(iter); }\n\nfunction _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }\n\nfunction _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }\n\n\n\nObject(function webpackMissingModule() { var e = new Error(\"Cannot find module 'chart.js'\"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(Object(function webpackMissingModule() { var e = new Error(\"Cannot find module 'chart.js'\"); e.code = 'MODULE_NOT_FOUND'; throw e; }()), _toConsumableArray(Object(function webpackMissingModule() { var e = new Error(\"Cannot find module 'chart.js'\"); e.code = 'MODULE_NOT_FOUND'; throw e; }())));\nfunction Graph(_ref) {\n  var progress = _ref.progress;\n  var canvasRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);\n  var percent = Math.floor(progress * 100);\n  var myChart = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);\n  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(function () {\n    var canvas = canvasRef.current;\n    var ctx = canvas.getContext(\"2d\");\n    myChart.current = new Object(function webpackMissingModule() { var e = new Error(\"Cannot find module 'chart.js'\"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(ctx, {\n      type: \"line\",\n      data: {\n        labels: [0],\n        datasets: [{\n          label: '',\n          data: [0],\n          borderWidth: 1\n        }]\n      },\n      options: {\n        maintainAspectRatio: false,\n        legend: {\n          display: false\n        },\n        tooltips: {\n          callbacks: {\n            label: function label(tooltipItem) {\n              return tooltipItem.yLabel;\n            }\n          }\n        },\n        scales: {\n          x: {\n            ticks: {\n              display: false\n            },\n            y: {\n              ticks: {\n                display: false\n              }\n            }\n          }\n        }\n      }\n    });\n    return function () {\n      return myChart.current.destroy();\n    };\n  }, []);\n  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(function () {\n    myChart.current.data.labels.push(percent);\n    myChart.current.data.datasets[0].data.push(percent);\n\n    if (percent === 0) {\n      myChart.current.data.labels = [0];\n      myChart.current.data.datasets[0].data = [0];\n    }\n\n    myChart.current.update();\n  }, [percent]);\n  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(\"canvas\", {\n    height: \"500\",\n    ref: canvasRef\n  });\n}\n\n//# sourceURL=webpack://minimal-react-webpack-babel-setup/./src/components/Chart.jsx?");

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ /* webpack/runtime/getFullHash */
/******/ (() => {
/******/ 	__webpack_require__.h = () => ("65dbaaf71e44cdf1443e")
/******/ })();
/******/ 
/******/ }
);