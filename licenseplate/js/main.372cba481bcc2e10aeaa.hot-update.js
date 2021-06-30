/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
self["webpackHotUpdateminimal_react_webpack_babel_setup"]("main",{

/***/ "./src/components/SLRGraphic.jsx":
/*!***************************************!*\
  !*** ./src/components/SLRGraphic.jsx ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ Graphic)\n/* harmony export */ });\n/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ \"./node_modules/react/index.js\");\n/* harmony import */ var styled_components__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! styled-components */ \"./node_modules/styled-components/dist/styled-components.browser.esm.js\");\nvar _templateObject, _templateObject2;\n\nfunction _taggedTemplateLiteral(strings, raw) { if (!raw) { raw = strings.slice(0); } return Object.freeze(Object.defineProperties(strings, { raw: { value: Object.freeze(raw) } })); }\n\n\n\nvar Image = styled_components__WEBPACK_IMPORTED_MODULE_1__.default.img(_templateObject || (_templateObject = _taggedTemplateLiteral([\"\\n    opacity:\", \";\\n    position:static;\\n    width:100vw;\\n\"])), function (props) {\n  return props.opacity;\n});\nvar Wrapper = styled_components__WEBPACK_IMPORTED_MODULE_1__.default.div(_templateObject2 || (_templateObject2 = _taggedTemplateLiteral([\"\\n    height:550px;\\n\"])));\nfunction Graphic(_ref) {\n  var level = _ref.level;\n  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(Wrapper, null, [0, 1, 2, 3, 4, 5, 6].map(function (rise) {\n    return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(Image, {\n      src: \"/wp-content/uploads/2021/06/layer_\".concat(rise, \".png\"),\n      z: rise,\n      opacity: level == rise ? 1 : 0\n    });\n  }));\n}\n\n//# sourceURL=webpack://minimal-react-webpack-babel-setup/./src/components/SLRGraphic.jsx?");

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ /* webpack/runtime/getFullHash */
/******/ (() => {
/******/ 	__webpack_require__.h = () => ("50012488240d13d543f4")
/******/ })();
/******/ 
/******/ }
);