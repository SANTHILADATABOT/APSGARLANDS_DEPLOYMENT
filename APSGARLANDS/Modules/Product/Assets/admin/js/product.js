/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./Modules/Product/Resources/assets/admin/js/Download.js":
/*!***************************************************************!*\
  !*** ./Modules/Product/Resources/assets/admin/js/Download.js ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ _default)\n/* harmony export */ });\nfunction _typeof(o) { \"@babel/helpers - typeof\"; return _typeof = \"function\" == typeof Symbol && \"symbol\" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && \"function\" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? \"symbol\" : typeof o; }, _typeof(o); }\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, \"prototype\", { writable: false }); return Constructor; }\nfunction _toPropertyKey(arg) { var key = _toPrimitive(arg, \"string\"); return _typeof(key) === \"symbol\" ? key : String(key); }\nfunction _toPrimitive(input, hint) { if (_typeof(input) !== \"object\" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || \"default\"); if (_typeof(res) !== \"object\") return res; throw new TypeError(\"@@toPrimitive must return a primitive value.\"); } return (hint === \"string\" ? String : Number)(input); }\nvar _default = /*#__PURE__*/function () {\n  function _default(download) {\n    _classCallCheck(this, _default);\n    this.downloadHtml = this.getDownloadHtml(download);\n  }\n  _createClass(_default, [{\n    key: \"getDownloadHtml\",\n    value: function getDownloadHtml(download) {\n      var template = _.template($('#product-download-template').html());\n      return $(template(download));\n    }\n  }, {\n    key: \"render\",\n    value: function render() {\n      this.attachEventListeners();\n      return this.downloadHtml;\n    }\n  }, {\n    key: \"attachEventListeners\",\n    value: function attachEventListeners() {\n      var _this = this;\n      this.downloadHtml.find('.delete-row').on('click', function () {\n        _this.downloadHtml.remove();\n      });\n      this.downloadHtml.find('.btn-choose-file').on('click', function () {\n        var picker = new MediaPicker();\n        picker.on('select', function (file) {\n          _this.downloadHtml.find('.download-name').val(file.filename);\n          _this.downloadHtml.find('.download-file').val(file.id);\n        });\n      });\n    }\n  }]);\n  return _default;\n}();\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9Nb2R1bGVzL1Byb2R1Y3QvUmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9qcy9Eb3dubG9hZC5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7OztFQUNJLFNBQUFBLFNBQVlDLFFBQVEsRUFBRTtJQUFBQyxlQUFBLE9BQUFGLFFBQUE7SUFDbEIsSUFBSSxDQUFDRyxZQUFZLEdBQUcsSUFBSSxDQUFDQyxlQUFlLENBQUNILFFBQVEsQ0FBQztFQUN0RDtFQUFDSSxZQUFBLENBQUFMLFFBQUE7SUFBQU0sR0FBQTtJQUFBQyxLQUFBLEVBRUQsU0FBQUgsZ0JBQWdCSCxRQUFRLEVBQUU7TUFDdEIsSUFBSU8sUUFBUSxHQUFHQyxDQUFDLENBQUNELFFBQVEsQ0FBQ0UsQ0FBQyxDQUFDLDRCQUE0QixDQUFDLENBQUNDLElBQUksQ0FBQyxDQUFDLENBQUM7TUFFakUsT0FBT0QsQ0FBQyxDQUFDRixRQUFRLENBQUNQLFFBQVEsQ0FBQyxDQUFDO0lBQ2hDO0VBQUM7SUFBQUssR0FBQTtJQUFBQyxLQUFBLEVBRUQsU0FBQUssT0FBQSxFQUFTO01BQ0wsSUFBSSxDQUFDQyxvQkFBb0IsQ0FBQyxDQUFDO01BRTNCLE9BQU8sSUFBSSxDQUFDVixZQUFZO0lBQzVCO0VBQUM7SUFBQUcsR0FBQTtJQUFBQyxLQUFBLEVBRUQsU0FBQU0scUJBQUEsRUFBdUI7TUFBQSxJQUFBQyxLQUFBO01BQ25CLElBQUksQ0FBQ1gsWUFBWSxDQUFDWSxJQUFJLENBQUMsYUFBYSxDQUFDLENBQUNDLEVBQUUsQ0FBQyxPQUFPLEVBQUUsWUFBTTtRQUNwREYsS0FBSSxDQUFDWCxZQUFZLENBQUNjLE1BQU0sQ0FBQyxDQUFDO01BQzlCLENBQUMsQ0FBQztNQUVGLElBQUksQ0FBQ2QsWUFBWSxDQUFDWSxJQUFJLENBQUMsa0JBQWtCLENBQUMsQ0FBQ0MsRUFBRSxDQUFDLE9BQU8sRUFBRSxZQUFNO1FBQ3pELElBQUlFLE1BQU0sR0FBRyxJQUFJQyxXQUFXLENBQUMsQ0FBQztRQUU5QkQsTUFBTSxDQUFDRixFQUFFLENBQUMsUUFBUSxFQUFFLFVBQUNJLElBQUksRUFBSztVQUMxQk4sS0FBSSxDQUFDWCxZQUFZLENBQUNZLElBQUksQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDTSxHQUFHLENBQUNELElBQUksQ0FBQ0UsUUFBUSxDQUFDO1VBQzNEUixLQUFJLENBQUNYLFlBQVksQ0FBQ1ksSUFBSSxDQUFDLGdCQUFnQixDQUFDLENBQUNNLEdBQUcsQ0FBQ0QsSUFBSSxDQUFDRyxFQUFFLENBQUM7UUFDekQsQ0FBQyxDQUFDO01BQ04sQ0FBQyxDQUFDO0lBQ047RUFBQztFQUFBLE9BQUF2QixRQUFBO0FBQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9mbGVldGNhcnQvLi9Nb2R1bGVzL1Byb2R1Y3QvUmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9qcy9Eb3dubG9hZC5qcz85OWVjIl0sInNvdXJjZXNDb250ZW50IjpbImV4cG9ydCBkZWZhdWx0IGNsYXNzIHtcbiAgICBjb25zdHJ1Y3Rvcihkb3dubG9hZCkge1xuICAgICAgICB0aGlzLmRvd25sb2FkSHRtbCA9IHRoaXMuZ2V0RG93bmxvYWRIdG1sKGRvd25sb2FkKTtcbiAgICB9XG5cbiAgICBnZXREb3dubG9hZEh0bWwoZG93bmxvYWQpIHtcbiAgICAgICAgbGV0IHRlbXBsYXRlID0gXy50ZW1wbGF0ZSgkKCcjcHJvZHVjdC1kb3dubG9hZC10ZW1wbGF0ZScpLmh0bWwoKSk7XG5cbiAgICAgICAgcmV0dXJuICQodGVtcGxhdGUoZG93bmxvYWQpKTtcbiAgICB9XG5cbiAgICByZW5kZXIoKSB7XG4gICAgICAgIHRoaXMuYXR0YWNoRXZlbnRMaXN0ZW5lcnMoKTtcblxuICAgICAgICByZXR1cm4gdGhpcy5kb3dubG9hZEh0bWw7XG4gICAgfVxuXG4gICAgYXR0YWNoRXZlbnRMaXN0ZW5lcnMoKSB7XG4gICAgICAgIHRoaXMuZG93bmxvYWRIdG1sLmZpbmQoJy5kZWxldGUtcm93Jykub24oJ2NsaWNrJywgKCkgPT4ge1xuICAgICAgICAgICAgdGhpcy5kb3dubG9hZEh0bWwucmVtb3ZlKCk7XG4gICAgICAgIH0pO1xuXG4gICAgICAgIHRoaXMuZG93bmxvYWRIdG1sLmZpbmQoJy5idG4tY2hvb3NlLWZpbGUnKS5vbignY2xpY2snLCAoKSA9PiB7XG4gICAgICAgICAgICBsZXQgcGlja2VyID0gbmV3IE1lZGlhUGlja2VyKCk7XG5cbiAgICAgICAgICAgIHBpY2tlci5vbignc2VsZWN0JywgKGZpbGUpID0+IHtcbiAgICAgICAgICAgICAgICB0aGlzLmRvd25sb2FkSHRtbC5maW5kKCcuZG93bmxvYWQtbmFtZScpLnZhbChmaWxlLmZpbGVuYW1lKTtcbiAgICAgICAgICAgICAgICB0aGlzLmRvd25sb2FkSHRtbC5maW5kKCcuZG93bmxvYWQtZmlsZScpLnZhbChmaWxlLmlkKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9KTtcbiAgICB9XG59XG4iXSwibmFtZXMiOlsiX2RlZmF1bHQiLCJkb3dubG9hZCIsIl9jbGFzc0NhbGxDaGVjayIsImRvd25sb2FkSHRtbCIsImdldERvd25sb2FkSHRtbCIsIl9jcmVhdGVDbGFzcyIsImtleSIsInZhbHVlIiwidGVtcGxhdGUiLCJfIiwiJCIsImh0bWwiLCJyZW5kZXIiLCJhdHRhY2hFdmVudExpc3RlbmVycyIsIl90aGlzIiwiZmluZCIsIm9uIiwicmVtb3ZlIiwicGlja2VyIiwiTWVkaWFQaWNrZXIiLCJmaWxlIiwidmFsIiwiZmlsZW5hbWUiLCJpZCIsImRlZmF1bHQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./Modules/Product/Resources/assets/admin/js/Download.js\n");

/***/ }),

/***/ "./Modules/Product/Resources/assets/admin/js/Downloads.js":
/*!****************************************************************!*\
  !*** ./Modules/Product/Resources/assets/admin/js/Downloads.js ***!
  \****************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ _default)\n/* harmony export */ });\n/* harmony import */ var _Download__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Download */ \"./Modules/Product/Resources/assets/admin/js/Download.js\");\nfunction _typeof(o) { \"@babel/helpers - typeof\"; return _typeof = \"function\" == typeof Symbol && \"symbol\" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && \"function\" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? \"symbol\" : typeof o; }, _typeof(o); }\nfunction _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== \"undefined\" && o[Symbol.iterator] || o[\"@@iterator\"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === \"number\") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError(\"Invalid attempt to iterate non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.\"); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it[\"return\"] != null) it[\"return\"](); } finally { if (didErr) throw err; } } }; }\nfunction _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === \"string\") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === \"Object\" && o.constructor) n = o.constructor.name; if (n === \"Map\" || n === \"Set\") return Array.from(o); if (n === \"Arguments\" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }\nfunction _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, \"prototype\", { writable: false }); return Constructor; }\nfunction _toPropertyKey(arg) { var key = _toPrimitive(arg, \"string\"); return _typeof(key) === \"symbol\" ? key : String(key); }\nfunction _toPrimitive(input, hint) { if (_typeof(input) !== \"object\" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || \"default\"); if (_typeof(res) !== \"object\") return res; throw new TypeError(\"@@toPrimitive must return a primitive value.\"); } return (hint === \"string\" ? String : Number)(input); }\n\nvar _default = /*#__PURE__*/function () {\n  function _default() {\n    _classCallCheck(this, _default);\n    this.downloadsCount = 0;\n    this.addDownloads(FleetCart.data['product.downloads']);\n    if (this.downloadsCount === 0) {\n      this.addDownload();\n    }\n    this.attachEventListeners();\n    this.makeDownloadsSortable();\n  }\n  _createClass(_default, [{\n    key: \"addDownloads\",\n    value: function addDownloads(downloads) {\n      var _iterator = _createForOfIteratorHelper(downloads),\n        _step;\n      try {\n        for (_iterator.s(); !(_step = _iterator.n()).done;) {\n          var attributes = _step.value;\n          this.addDownload(attributes);\n        }\n      } catch (err) {\n        _iterator.e(err);\n      } finally {\n        _iterator.f();\n      }\n    }\n  }, {\n    key: \"addDownload\",\n    value: function addDownload() {\n      var attributes = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};\n      var download = new _Download__WEBPACK_IMPORTED_MODULE_0__[\"default\"]({\n        download: attributes\n      });\n      $('#downloads-wrapper').append(download.render());\n      this.downloadsCount++;\n      window.admin.tooltip();\n    }\n  }, {\n    key: \"attachEventListeners\",\n    value: function attachEventListeners() {\n      var _this = this;\n      $('#add-new-file').on('click', function () {\n        _this.addDownload();\n      });\n    }\n  }, {\n    key: \"makeDownloadsSortable\",\n    value: function makeDownloadsSortable() {\n      Sortable.create(document.getElementById('downloads-wrapper'), {\n        handle: '.drag-icon',\n        animation: 150\n      });\n    }\n  }]);\n  return _default;\n}();\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9Nb2R1bGVzL1Byb2R1Y3QvUmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9qcy9Eb3dubG9hZHMuanMiLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7QUFBa0M7QUFBQSxJQUFBQyxRQUFBO0VBRzlCLFNBQUFBLFNBQUEsRUFBYztJQUFBQyxlQUFBLE9BQUFELFFBQUE7SUFDVixJQUFJLENBQUNFLGNBQWMsR0FBRyxDQUFDO0lBRXZCLElBQUksQ0FBQ0MsWUFBWSxDQUFDQyxTQUFTLENBQUNDLElBQUksQ0FBQyxtQkFBbUIsQ0FBQyxDQUFDO0lBRXRELElBQUksSUFBSSxDQUFDSCxjQUFjLEtBQUssQ0FBQyxFQUFFO01BQzNCLElBQUksQ0FBQ0ksV0FBVyxDQUFDLENBQUM7SUFDdEI7SUFFQSxJQUFJLENBQUNDLG9CQUFvQixDQUFDLENBQUM7SUFDM0IsSUFBSSxDQUFDQyxxQkFBcUIsQ0FBQyxDQUFDO0VBQ2hDO0VBQUNDLFlBQUEsQ0FBQVQsUUFBQTtJQUFBVSxHQUFBO0lBQUFDLEtBQUEsRUFFRCxTQUFBUixhQUFhUyxTQUFTLEVBQUU7TUFBQSxJQUFBQyxTQUFBLEdBQUFDLDBCQUFBLENBQ0dGLFNBQVM7UUFBQUcsS0FBQTtNQUFBO1FBQWhDLEtBQUFGLFNBQUEsQ0FBQUcsQ0FBQSxNQUFBRCxLQUFBLEdBQUFGLFNBQUEsQ0FBQUksQ0FBQSxJQUFBQyxJQUFBLEdBQWtDO1VBQUEsSUFBekJDLFVBQVUsR0FBQUosS0FBQSxDQUFBSixLQUFBO1VBQ2YsSUFBSSxDQUFDTCxXQUFXLENBQUNhLFVBQVUsQ0FBQztRQUNoQztNQUFDLFNBQUFDLEdBQUE7UUFBQVAsU0FBQSxDQUFBUSxDQUFBLENBQUFELEdBQUE7TUFBQTtRQUFBUCxTQUFBLENBQUFTLENBQUE7TUFBQTtJQUNMO0VBQUM7SUFBQVosR0FBQTtJQUFBQyxLQUFBLEVBRUQsU0FBQUwsWUFBQSxFQUE2QjtNQUFBLElBQWpCYSxVQUFVLEdBQUFJLFNBQUEsQ0FBQUMsTUFBQSxRQUFBRCxTQUFBLFFBQUFFLFNBQUEsR0FBQUYsU0FBQSxNQUFHLENBQUMsQ0FBQztNQUN2QixJQUFJRyxRQUFRLEdBQUcsSUFBSTNCLGlEQUFRLENBQUM7UUFBRTJCLFFBQVEsRUFBRVA7TUFBVyxDQUFDLENBQUM7TUFFckRRLENBQUMsQ0FBQyxvQkFBb0IsQ0FBQyxDQUFDQyxNQUFNLENBQUNGLFFBQVEsQ0FBQ0csTUFBTSxDQUFDLENBQUMsQ0FBQztNQUVqRCxJQUFJLENBQUMzQixjQUFjLEVBQUU7TUFDckI0QixNQUFNLENBQUNDLEtBQUssQ0FBQ0MsT0FBTyxDQUFDLENBQUM7SUFDMUI7RUFBQztJQUFBdEIsR0FBQTtJQUFBQyxLQUFBLEVBRUQsU0FBQUoscUJBQUEsRUFBdUI7TUFBQSxJQUFBMEIsS0FBQTtNQUNuQk4sQ0FBQyxDQUFDLGVBQWUsQ0FBQyxDQUFDTyxFQUFFLENBQUMsT0FBTyxFQUFFLFlBQU07UUFDakNELEtBQUksQ0FBQzNCLFdBQVcsQ0FBQyxDQUFDO01BQ3RCLENBQUMsQ0FBQztJQUNOO0VBQUM7SUFBQUksR0FBQTtJQUFBQyxLQUFBLEVBRUQsU0FBQUgsc0JBQUEsRUFBd0I7TUFDcEIyQixRQUFRLENBQUNDLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDQyxjQUFjLENBQUMsbUJBQW1CLENBQUMsRUFBRTtRQUMxREMsTUFBTSxFQUFFLFlBQVk7UUFDcEJDLFNBQVMsRUFBRTtNQUNmLENBQUMsQ0FBQztJQUNOO0VBQUM7RUFBQSxPQUFBeEMsUUFBQTtBQUFBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vZmxlZXRjYXJ0Ly4vTW9kdWxlcy9Qcm9kdWN0L1Jlc291cmNlcy9hc3NldHMvYWRtaW4vanMvRG93bmxvYWRzLmpzP2E4OWMiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IERvd25sb2FkIGZyb20gJy4vRG93bmxvYWQnO1xuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyB7XG4gICAgY29uc3RydWN0b3IoKSB7XG4gICAgICAgIHRoaXMuZG93bmxvYWRzQ291bnQgPSAwO1xuXG4gICAgICAgIHRoaXMuYWRkRG93bmxvYWRzKEZsZWV0Q2FydC5kYXRhWydwcm9kdWN0LmRvd25sb2FkcyddKTtcblxuICAgICAgICBpZiAodGhpcy5kb3dubG9hZHNDb3VudCA9PT0gMCkge1xuICAgICAgICAgICAgdGhpcy5hZGREb3dubG9hZCgpO1xuICAgICAgICB9XG5cbiAgICAgICAgdGhpcy5hdHRhY2hFdmVudExpc3RlbmVycygpO1xuICAgICAgICB0aGlzLm1ha2VEb3dubG9hZHNTb3J0YWJsZSgpO1xuICAgIH1cblxuICAgIGFkZERvd25sb2Fkcyhkb3dubG9hZHMpIHtcbiAgICAgICAgZm9yIChsZXQgYXR0cmlidXRlcyBvZiBkb3dubG9hZHMpIHtcbiAgICAgICAgICAgIHRoaXMuYWRkRG93bmxvYWQoYXR0cmlidXRlcyk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBhZGREb3dubG9hZChhdHRyaWJ1dGVzID0ge30pIHtcbiAgICAgICAgbGV0IGRvd25sb2FkID0gbmV3IERvd25sb2FkKHsgZG93bmxvYWQ6IGF0dHJpYnV0ZXMgfSk7XG5cbiAgICAgICAgJCgnI2Rvd25sb2Fkcy13cmFwcGVyJykuYXBwZW5kKGRvd25sb2FkLnJlbmRlcigpKTtcblxuICAgICAgICB0aGlzLmRvd25sb2Fkc0NvdW50Kys7XG4gICAgICAgIHdpbmRvdy5hZG1pbi50b29sdGlwKCk7XG4gICAgfVxuXG4gICAgYXR0YWNoRXZlbnRMaXN0ZW5lcnMoKSB7XG4gICAgICAgICQoJyNhZGQtbmV3LWZpbGUnKS5vbignY2xpY2snLCAoKSA9PiB7XG4gICAgICAgICAgICB0aGlzLmFkZERvd25sb2FkKCk7XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIG1ha2VEb3dubG9hZHNTb3J0YWJsZSgpIHtcbiAgICAgICAgU29ydGFibGUuY3JlYXRlKGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdkb3dubG9hZHMtd3JhcHBlcicpLCB7XG4gICAgICAgICAgICBoYW5kbGU6ICcuZHJhZy1pY29uJyxcbiAgICAgICAgICAgIGFuaW1hdGlvbjogMTUwLFxuICAgICAgICB9KTtcbiAgICB9XG59XG4iXSwibmFtZXMiOlsiRG93bmxvYWQiLCJfZGVmYXVsdCIsIl9jbGFzc0NhbGxDaGVjayIsImRvd25sb2Fkc0NvdW50IiwiYWRkRG93bmxvYWRzIiwiRmxlZXRDYXJ0IiwiZGF0YSIsImFkZERvd25sb2FkIiwiYXR0YWNoRXZlbnRMaXN0ZW5lcnMiLCJtYWtlRG93bmxvYWRzU29ydGFibGUiLCJfY3JlYXRlQ2xhc3MiLCJrZXkiLCJ2YWx1ZSIsImRvd25sb2FkcyIsIl9pdGVyYXRvciIsIl9jcmVhdGVGb3JPZkl0ZXJhdG9ySGVscGVyIiwiX3N0ZXAiLCJzIiwibiIsImRvbmUiLCJhdHRyaWJ1dGVzIiwiZXJyIiwiZSIsImYiLCJhcmd1bWVudHMiLCJsZW5ndGgiLCJ1bmRlZmluZWQiLCJkb3dubG9hZCIsIiQiLCJhcHBlbmQiLCJyZW5kZXIiLCJ3aW5kb3ciLCJhZG1pbiIsInRvb2x0aXAiLCJfdGhpcyIsIm9uIiwiU29ydGFibGUiLCJjcmVhdGUiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiaGFuZGxlIiwiYW5pbWF0aW9uIiwiZGVmYXVsdCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./Modules/Product/Resources/assets/admin/js/Downloads.js\n");

/***/ }),

/***/ "./Modules/Product/Resources/assets/admin/js/ProductForm.js":
/*!******************************************************************!*\
  !*** ./Modules/Product/Resources/assets/admin/js/ProductForm.js ***!
  \******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ _default)\n/* harmony export */ });\nfunction _typeof(o) { \"@babel/helpers - typeof\"; return _typeof = \"function\" == typeof Symbol && \"symbol\" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && \"function\" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? \"symbol\" : typeof o; }, _typeof(o); }\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, \"prototype\", { writable: false }); return Constructor; }\nfunction _toPropertyKey(arg) { var key = _toPrimitive(arg, \"string\"); return _typeof(key) === \"symbol\" ? key : String(key); }\nfunction _toPrimitive(input, hint) { if (_typeof(input) !== \"object\" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || \"default\"); if (_typeof(res) !== \"object\") return res; throw new TypeError(\"@@toPrimitive must return a primitive value.\"); } return (hint === \"string\" ? String : Number)(input); }\nvar _default = /*#__PURE__*/function () {\n  function _default() {\n    _classCallCheck(this, _default);\n    this.managerStock();\n    window.admin.removeSubmitButtonOffsetOn(['#images', '#downloads', '#attributes', '#options', '#related_products', '#up_sells', '#cross_sells', '#reviews']);\n    $('#product-create-form, #product-edit-form').on('submit', this.submit);\n  }\n  _createClass(_default, [{\n    key: \"managerStock\",\n    value: function managerStock() {\n      $('#manage_stock').on('change', function (e) {\n        if (e.currentTarget.value === '1') {\n          $('#qty-field').removeClass('hide');\n        } else {\n          $('#qty-field').addClass('hide');\n        }\n      });\n    }\n  }, {\n    key: \"submit\",\n    value: function submit(e) {\n      e.preventDefault();\n      DataTable.removeLengthFields();\n      window.form.appendHiddenInputs('#product-create-form, #product-edit-form', 'up_sells', DataTable.getSelectedIds('#up_sells .table'));\n      window.form.appendHiddenInputs('#product-create-form, #product-edit-form', 'cross_sells', DataTable.getSelectedIds('#cross_sells .table'));\n      window.form.appendHiddenInputs('#product-create-form, #product-edit-form', 'related_products', DataTable.getSelectedIds('#related_products .table'));\n      e.currentTarget.submit();\n    }\n  }]);\n  return _default;\n}();\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9Nb2R1bGVzL1Byb2R1Y3QvUmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9qcy9Qcm9kdWN0Rm9ybS5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7OztFQUNJLFNBQUFBLFNBQUEsRUFBYztJQUFBQyxlQUFBLE9BQUFELFFBQUE7SUFDVixJQUFJLENBQUNFLFlBQVksQ0FBQyxDQUFDO0lBRW5CQyxNQUFNLENBQUNDLEtBQUssQ0FBQ0MsMEJBQTBCLENBQUMsQ0FDcEMsU0FBUyxFQUFFLFlBQVksRUFBRSxhQUFhLEVBQUUsVUFBVSxFQUNsRCxtQkFBbUIsRUFBRSxXQUFXLEVBQUUsY0FBYyxFQUFFLFVBQVUsQ0FDL0QsQ0FBQztJQUVGQyxDQUFDLENBQUMsMENBQTBDLENBQUMsQ0FBQ0MsRUFBRSxDQUFDLFFBQVEsRUFBRSxJQUFJLENBQUNDLE1BQU0sQ0FBQztFQUMzRTtFQUFDQyxZQUFBLENBQUFULFFBQUE7SUFBQVUsR0FBQTtJQUFBQyxLQUFBLEVBRUQsU0FBQVQsYUFBQSxFQUFlO01BQ1hJLENBQUMsQ0FBQyxlQUFlLENBQUMsQ0FBQ0MsRUFBRSxDQUFDLFFBQVEsRUFBRSxVQUFDSyxDQUFDLEVBQUs7UUFDbkMsSUFBSUEsQ0FBQyxDQUFDQyxhQUFhLENBQUNGLEtBQUssS0FBSyxHQUFHLEVBQUU7VUFDL0JMLENBQUMsQ0FBQyxZQUFZLENBQUMsQ0FBQ1EsV0FBVyxDQUFDLE1BQU0sQ0FBQztRQUN2QyxDQUFDLE1BQU07VUFDSFIsQ0FBQyxDQUFDLFlBQVksQ0FBQyxDQUFDUyxRQUFRLENBQUMsTUFBTSxDQUFDO1FBQ3BDO01BQ0osQ0FBQyxDQUFDO0lBQ047RUFBQztJQUFBTCxHQUFBO0lBQUFDLEtBQUEsRUFFRCxTQUFBSCxPQUFPSSxDQUFDLEVBQUU7TUFDTkEsQ0FBQyxDQUFDSSxjQUFjLENBQUMsQ0FBQztNQUVsQkMsU0FBUyxDQUFDQyxrQkFBa0IsQ0FBQyxDQUFDO01BRTlCZixNQUFNLENBQUNnQixJQUFJLENBQUNDLGtCQUFrQixDQUFDLDBDQUEwQyxFQUFFLFVBQVUsRUFBRUgsU0FBUyxDQUFDSSxjQUFjLENBQUMsa0JBQWtCLENBQUMsQ0FBQztNQUNwSWxCLE1BQU0sQ0FBQ2dCLElBQUksQ0FBQ0Msa0JBQWtCLENBQUMsMENBQTBDLEVBQUUsYUFBYSxFQUFFSCxTQUFTLENBQUNJLGNBQWMsQ0FBQyxxQkFBcUIsQ0FBQyxDQUFDO01BQzFJbEIsTUFBTSxDQUFDZ0IsSUFBSSxDQUFDQyxrQkFBa0IsQ0FBQywwQ0FBMEMsRUFBRSxrQkFBa0IsRUFBRUgsU0FBUyxDQUFDSSxjQUFjLENBQUMsMEJBQTBCLENBQUMsQ0FBQztNQUVwSlQsQ0FBQyxDQUFDQyxhQUFhLENBQUNMLE1BQU0sQ0FBQyxDQUFDO0lBQzVCO0VBQUM7RUFBQSxPQUFBUixRQUFBO0FBQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9mbGVldGNhcnQvLi9Nb2R1bGVzL1Byb2R1Y3QvUmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9qcy9Qcm9kdWN0Rm9ybS5qcz9jNjFkIl0sInNvdXJjZXNDb250ZW50IjpbImV4cG9ydCBkZWZhdWx0IGNsYXNzIHtcbiAgICBjb25zdHJ1Y3RvcigpIHtcbiAgICAgICAgdGhpcy5tYW5hZ2VyU3RvY2soKTtcblxuICAgICAgICB3aW5kb3cuYWRtaW4ucmVtb3ZlU3VibWl0QnV0dG9uT2Zmc2V0T24oW1xuICAgICAgICAgICAgJyNpbWFnZXMnLCAnI2Rvd25sb2FkcycsICcjYXR0cmlidXRlcycsICcjb3B0aW9ucycsXG4gICAgICAgICAgICAnI3JlbGF0ZWRfcHJvZHVjdHMnLCAnI3VwX3NlbGxzJywgJyNjcm9zc19zZWxscycsICcjcmV2aWV3cycsXG4gICAgICAgIF0pO1xuXG4gICAgICAgICQoJyNwcm9kdWN0LWNyZWF0ZS1mb3JtLCAjcHJvZHVjdC1lZGl0LWZvcm0nKS5vbignc3VibWl0JywgdGhpcy5zdWJtaXQpO1xuICAgIH1cblxuICAgIG1hbmFnZXJTdG9jaygpIHtcbiAgICAgICAgJCgnI21hbmFnZV9zdG9jaycpLm9uKCdjaGFuZ2UnLCAoZSkgPT4ge1xuICAgICAgICAgICAgaWYgKGUuY3VycmVudFRhcmdldC52YWx1ZSA9PT0gJzEnKSB7XG4gICAgICAgICAgICAgICAgJCgnI3F0eS1maWVsZCcpLnJlbW92ZUNsYXNzKCdoaWRlJyk7XG4gICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICQoJyNxdHktZmllbGQnKS5hZGRDbGFzcygnaGlkZScpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBzdWJtaXQoZSkge1xuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICAgICAgRGF0YVRhYmxlLnJlbW92ZUxlbmd0aEZpZWxkcygpO1xuXG4gICAgICAgIHdpbmRvdy5mb3JtLmFwcGVuZEhpZGRlbklucHV0cygnI3Byb2R1Y3QtY3JlYXRlLWZvcm0sICNwcm9kdWN0LWVkaXQtZm9ybScsICd1cF9zZWxscycsIERhdGFUYWJsZS5nZXRTZWxlY3RlZElkcygnI3VwX3NlbGxzIC50YWJsZScpKTtcbiAgICAgICAgd2luZG93LmZvcm0uYXBwZW5kSGlkZGVuSW5wdXRzKCcjcHJvZHVjdC1jcmVhdGUtZm9ybSwgI3Byb2R1Y3QtZWRpdC1mb3JtJywgJ2Nyb3NzX3NlbGxzJywgRGF0YVRhYmxlLmdldFNlbGVjdGVkSWRzKCcjY3Jvc3Nfc2VsbHMgLnRhYmxlJykpO1xuICAgICAgICB3aW5kb3cuZm9ybS5hcHBlbmRIaWRkZW5JbnB1dHMoJyNwcm9kdWN0LWNyZWF0ZS1mb3JtLCAjcHJvZHVjdC1lZGl0LWZvcm0nLCAncmVsYXRlZF9wcm9kdWN0cycsIERhdGFUYWJsZS5nZXRTZWxlY3RlZElkcygnI3JlbGF0ZWRfcHJvZHVjdHMgLnRhYmxlJykpO1xuXG4gICAgICAgIGUuY3VycmVudFRhcmdldC5zdWJtaXQoKTtcbiAgICB9XG59XG4iXSwibmFtZXMiOlsiX2RlZmF1bHQiLCJfY2xhc3NDYWxsQ2hlY2siLCJtYW5hZ2VyU3RvY2siLCJ3aW5kb3ciLCJhZG1pbiIsInJlbW92ZVN1Ym1pdEJ1dHRvbk9mZnNldE9uIiwiJCIsIm9uIiwic3VibWl0IiwiX2NyZWF0ZUNsYXNzIiwia2V5IiwidmFsdWUiLCJlIiwiY3VycmVudFRhcmdldCIsInJlbW92ZUNsYXNzIiwiYWRkQ2xhc3MiLCJwcmV2ZW50RGVmYXVsdCIsIkRhdGFUYWJsZSIsInJlbW92ZUxlbmd0aEZpZWxkcyIsImZvcm0iLCJhcHBlbmRIaWRkZW5JbnB1dHMiLCJnZXRTZWxlY3RlZElkcyIsImRlZmF1bHQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./Modules/Product/Resources/assets/admin/js/ProductForm.js\n");

/***/ }),

/***/ "./Modules/Product/Resources/assets/admin/js/main.js":
/*!***********************************************************!*\
  !*** ./Modules/Product/Resources/assets/admin/js/main.js ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _Downloads__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Downloads */ \"./Modules/Product/Resources/assets/admin/js/Downloads.js\");\n/* harmony import */ var _ProductForm__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ProductForm */ \"./Modules/Product/Resources/assets/admin/js/ProductForm.js\");\n\n\nnew _ProductForm__WEBPACK_IMPORTED_MODULE_1__[\"default\"]();\nnew _Downloads__WEBPACK_IMPORTED_MODULE_0__[\"default\"]();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9Nb2R1bGVzL1Byb2R1Y3QvUmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9qcy9tYWluLmpzIiwibWFwcGluZ3MiOiI7OztBQUFvQztBQUNJO0FBRXhDLElBQUlDLG9EQUFXLENBQUMsQ0FBQztBQUNqQixJQUFJRCxrREFBUyxDQUFDLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9mbGVldGNhcnQvLi9Nb2R1bGVzL1Byb2R1Y3QvUmVzb3VyY2VzL2Fzc2V0cy9hZG1pbi9qcy9tYWluLmpzPzIyZWEiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IERvd25sb2FkcyBmcm9tICcuL0Rvd25sb2Fkcyc7XG5pbXBvcnQgUHJvZHVjdEZvcm0gZnJvbSAnLi9Qcm9kdWN0Rm9ybSc7XG5cbm5ldyBQcm9kdWN0Rm9ybSgpO1xubmV3IERvd25sb2FkcygpO1xuIl0sIm5hbWVzIjpbIkRvd25sb2FkcyIsIlByb2R1Y3RGb3JtIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./Modules/Product/Resources/assets/admin/js/main.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./Modules/Product/Resources/assets/admin/js/main.js");
/******/ 	
/******/ })()
;