/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
self["webpackHotUpdateminimal_react_webpack_babel_setup"]("main",{

/***/ "./src/components/ChartSection.jsx":
/*!*****************************************!*\
  !*** ./src/components/ChartSection.jsx ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ ChartSection)\n/* harmony export */ });\n/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! reactstrap */ \"./node_modules/reactstrap/es/Row.js\");\n/* harmony import */ var reactstrap__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! reactstrap */ \"./node_modules/reactstrap/es/Col.js\");\n/* harmony import */ var react_scrollmagic__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react-scrollmagic */ \"../node_modules/react-scrollmagic/dist/index.es.js\");\n/* harmony import */ var react_gsap__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-gsap */ \"../node_modules/react-gsap/dist/react-gsap.esm.js\");\n/* harmony import */ var _Chart_jsx__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Chart.jsx */ \"./src/components/Chart.jsx\");\n/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react */ \"./node_modules/react/index.js\");\n/* harmony import */ var styled_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! styled-components */ \"./node_modules/styled-components/dist/styled-components.browser.esm.js\");\nvar _templateObject, _templateObject2;\n\nfunction _taggedTemplateLiteral(strings, raw) { if (!raw) { raw = strings.slice(0); } return Object.freeze(Object.defineProperties(strings, { raw: { value: Object.freeze(raw) } })); }\n\n\n\n\n\n\n\nvar ScrollItem = styled_components__WEBPACK_IMPORTED_MODULE_4__.default.div(_templateObject || (_templateObject = _taggedTemplateLiteral([\"\\n  text-align: center;\\n  top: \", \"px;\\n  left: 0;\\n  bottom: 0;\\n  right: 0;\\n  margin: auto;\\n  position: absolute;\\n\"])), function (props) {\n  return props.top - 50;\n});\nvar ScrollItemBox = styled_components__WEBPACK_IMPORTED_MODULE_4__.default.div(_templateObject2 || (_templateObject2 = _taggedTemplateLiteral([\"\\n  background: rgba(255, 255, 255, 0.6);\\n  padding: 2rem 2rem 1rem 2rem;\\n  width: max-content;\\n  margin: auto;\\n\"])));\nfunction ChartSection(props) {\n  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3__.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_5__.default, null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3__.createElement(reactstrap__WEBPACK_IMPORTED_MODULE_6__.default, null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3__.createElement(react_scrollmagic__WEBPACK_IMPORTED_MODULE_0__.Controller, null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3__.createElement(react_scrollmagic__WEBPACK_IMPORTED_MODULE_0__.Scene, {\n    pin: true,\n    duration: 5000,\n    offset: 300\n  }, function (progress) {\n    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3__.createElement(\"div\", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3__.createElement(_Chart_jsx__WEBPACK_IMPORTED_MODULE_2__.default, {\n      progress: progress\n    }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3__.createElement(react_gsap__WEBPACK_IMPORTED_MODULE_1__.Timeline, {\n      playState: \"stop\",\n      totalProgress: progress,\n      target: /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3__.createElement(react__WEBPACK_IMPORTED_MODULE_3__.Fragment, null, props.children.map(function (child) {\n        return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3__.createElement(ScrollItem, {\n          top: props.backgroundHeight / 2\n        }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3__.createElement(ScrollItemBox, null, child));\n      }))\n    }, props.children.map(function (child, index) {\n      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3__.createElement(react__WEBPACK_IMPORTED_MODULE_3__.Fragment, null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3__.createElement(react_gsap__WEBPACK_IMPORTED_MODULE_1__.Tween, {\n        from: {\n          y: props.backgroundHeight - 200,\n          opacity: 0\n        },\n        to: {\n          y: 0,\n          opacity: 1\n        },\n        duration: 5,\n        target: index\n      }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3__.createElement(react_gsap__WEBPACK_IMPORTED_MODULE_1__.Tween, {\n        duration: 5,\n        target: index\n      }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_3__.createElement(react_gsap__WEBPACK_IMPORTED_MODULE_1__.Tween, {\n        from: {\n          opacity: 1\n        },\n        to: {\n          opacity: 0\n        },\n        duration: 5,\n        target: index\n      }));\n    })));\n  }))));\n}\n\n//# sourceURL=webpack://minimal-react-webpack-babel-setup/./src/components/ChartSection.jsx?");

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ /* webpack/runtime/getFullHash */
/******/ (() => {
/******/ 	__webpack_require__.h = () => ("216a7f4d83982b31b768")
/******/ })();
/******/ 
/******/ }
);