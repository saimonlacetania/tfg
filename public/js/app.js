/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\Users\\abram\\Documents\\GitHub\\tfg\\resources\\js\\app.js: Unexpected token (7:0)\n\n\u001b[0m \u001b[90m  5 |\u001b[39m \u001b[36mimport\u001b[39m \u001b[33mVueRouter\u001b[39m \u001b[36mfrom\u001b[39m \u001b[32m\"vue-router\"\u001b[39m\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m  6 |\u001b[39m \u001b[36mimport\u001b[39m routes \u001b[36mfrom\u001b[39m \u001b[32m\"./routes\"\u001b[39m\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m  7 |\u001b[39m \u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<\u001b[39m \u001b[33mHEAD\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m    |\u001b[39m \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m  8 |\u001b[39m \u001b[36mimport\u001b[39m \u001b[33mVueSweetalert2\u001b[39m \u001b[36mfrom\u001b[39m \u001b[32m'vue-sweetalert2'\u001b[39m\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m  9 |\u001b[39m \u001b[36mimport\u001b[39m \u001b[32m'sweetalert2/dist/sweetalert2.min.css'\u001b[39m\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 10 |\u001b[39m\u001b[0m\n    at Parser._raise (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:776:17)\n    at Parser.raiseWithData (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:769:17)\n    at Parser.raise (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:737:17)\n    at Parser.unexpected (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:9735:16)\n    at Parser.parseExprAtom (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:11131:20)\n    at Parser.parseExprSubscripts (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:10708:23)\n    at Parser.parseUpdate (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:10688:21)\n    at Parser.parseMaybeUnary (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:10666:23)\n    at Parser.parseExprOps (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:10523:23)\n    at Parser.parseMaybeConditional (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:10497:23)\n    at Parser.parseMaybeAssign (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:10460:21)\n    at Parser.parseExpressionBase (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:10405:23)\n    at C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:10399:39\n    at Parser.allowInAnd (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:12098:16)\n    at Parser.parseExpression (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:10399:17)\n    at Parser.parseStatementContent (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:12390:23)\n    at Parser.parseStatement (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:12259:17)\n    at Parser.parseBlockOrModuleBlockBody (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:12845:25)\n    at Parser.parseBlockBody (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:12836:10)\n    at Parser.parseProgram (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:12190:10)\n    at Parser.parseTopLevel (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:12181:25)\n    at Parser.parse (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:13892:10)\n    at parse (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\parser\\lib\\index.js:13944:38)\n    at parser (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\core\\lib\\parser\\index.js:54:34)\n    at parser.next (<anonymous>)\n    at normalizeFile (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:55:38)\n    at normalizeFile.next (<anonymous>)\n    at run (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\core\\lib\\transformation\\index.js:31:50)\n    at run.next (<anonymous>)\n    at Function.transform (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\@babel\\core\\lib\\transform.js:19:41)\n    at transform.next (<anonymous>)\n    at step (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\gensync\\index.js:261:32)\n    at C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\gensync\\index.js:273:13\n    at async.call.result.err.err (C:\\Users\\abram\\Documents\\GitHub\\tfg\\node_modules\\gensync\\index.js:223:11)");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\abram\Documents\GitHub\tfg\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\Users\abram\Documents\GitHub\tfg\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });