/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
self["webpackHotUpdateminimal_react_webpack_babel_setup"]("main",{

/***/ "./src/components/SVGBackground.jsx":
/*!******************************************!*\
  !*** ./src/components/SVGBackground.jsx ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ SVGBackground)\n/* harmony export */ });\n/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ \"./node_modules/react/index.js\");\n/* harmony import */ var styled_components__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! styled-components */ \"./node_modules/styled-components/dist/styled-components.browser.esm.js\");\n/* harmony import */ var _mountain_1_svg__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./mountain-1.svg */ \"./src/components/mountain-1.svg\");\n/* harmony import */ var _mountain_2_svg__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./mountain-2.svg */ \"./src/components/mountain-2.svg\");\n/* harmony import */ var _mountain_3_svg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./mountain-3.svg */ \"./src/components/mountain-3.svg\");\n/* harmony import */ var _tree_1_svg__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./tree-1.svg */ \"./src/components/tree-1.svg\");\nvar _templateObject, _templateObject2;\n\nfunction _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }\n\nfunction _nonIterableRest() { throw new TypeError(\"Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.\"); }\n\nfunction _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === \"string\") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === \"Object\" && o.constructor) n = o.constructor.name; if (n === \"Map\" || n === \"Set\") return Array.from(o); if (n === \"Arguments\" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }\n\nfunction _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }\n\nfunction _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== \"undefined\" && arr[Symbol.iterator] || arr[\"@@iterator\"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i[\"return\"] != null) _i[\"return\"](); } finally { if (_d) throw _e; } } return _arr; }\n\nfunction _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }\n\nfunction _taggedTemplateLiteral(strings, raw) { if (!raw) { raw = strings.slice(0); } return Object.freeze(Object.defineProperties(strings, { raw: { value: Object.freeze(raw) } })); }\n\n\n\n\n\n\n\nvar SVGWrap = styled_components__WEBPACK_IMPORTED_MODULE_5__.default.div(_templateObject || (_templateObject = _taggedTemplateLiteral([\"\\n    position:\", \";\\n    top:calc(100vh - \", \"em);\\n    margin-top:-70px;\\n    \", \"\\n    z-index:-1\\n\"])), function (props) {\n  return props.sticky ? 'sticky' : fixed;\n}, function (props) {\n  return props.top;\n}, function (props) {\n  return props.left ? \"\\n                             margin-left: \".concat(props.left, \"em;   \") : props.right ? \"margin-left:calc(100vw - \".concat(props.right, \"em);\\n                             \") : null;\n});\nvar Wrapper = styled_components__WEBPACK_IMPORTED_MODULE_5__.default.div(_templateObject2 || (_templateObject2 = _taggedTemplateLiteral([\"\\n    clip-path: inset(0);\\n\"])));\nfunction SVGBackground() {\n  var _useState = useState(true),\n      _useState2 = _slicedToArray(_useState, 2),\n      sticky = _useState2[0],\n      changeSticky = _useState2[1];\n\n  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(Wrapper, null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(SVGWrap, {\n    top: 20,\n    left: 0\n  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(_mountain_1_svg__WEBPACK_IMPORTED_MODULE_1__.default, {\n    width: \"40em\"\n  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(SVGWrap, {\n    top: 20,\n    right: 43\n  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(_mountain_2_svg__WEBPACK_IMPORTED_MODULE_2__.default, {\n    width: \"40em\"\n  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(SVGWrap, {\n    top: 21,\n    right: 35\n  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(_tree_1_svg__WEBPACK_IMPORTED_MODULE_4__.default, {\n    height: \"20em\",\n    fill: \"#228B22\"\n  })));\n}\n\n//# sourceURL=webpack://minimal-react-webpack-babel-setup/./src/components/SVGBackground.jsx?");

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ /* webpack/runtime/getFullHash */
/******/ (() => {
/******/ 	__webpack_require__.h = () => ("eded47bd1b276dadc6c4")
/******/ })();
/******/ 
/******/ }
);