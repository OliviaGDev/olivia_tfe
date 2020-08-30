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
/*! no static exports found */
/***/ (function(module, exports) {

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
}); // JS estimate

document.addEventListener("DOMContentLoaded", function (event) {
  //initialisation estimate et items
  var estimate = {
    items: [],
    init: function init() {
      estimate.bindEvents();
    },
    bindEvents: function bindEvents() {
      $("#sortable1").sortable({
        // Connecter sélecteurs
        connectWith: ".connectedSortable",
        dropOnEmpty: true,
        forcePlaceholderSize: true,
        // Fonction pour cloner li
        helper: function helper(e, li) {
          copyHelper = li.clone().insertAfter(li);
          return li.clone();
        }
      });
      $("#sortable2").sortable({
        dropOnEmpty: true,
        cancel: '*[contenteditable="true"]',
        receive: function receive(e, ui) {
          copyHelper = null;
        },
        update: function update(event, ui) {
          var order = $(this).sortable('toArray');
          ui.item.find('h2').attr('contenteditable', true);
          ui.item.find('span.price-number').attr('contenteditable', true);
          ui.item.find('p.description').attr('contenteditable', true); //Pour sauvegarde l'ordre - function update

          estimate.update();
        },
        stop: function stop(event, ui) {}
      }); // Pour update et rendre editable

      $("body").on("blur", "*[contenteditable=true]", function () {
        estimate.update();
      });
    },
    // Fonction pour rendre editable et ajouter les modules
    update: function update() {
      // Création d'un tableau d'items vides
      estimate.items = [];
      $('#sortable2 li').each(function () {
        var item = {};
        item['title'] = $(this).find('h2.title').text();
        item['price'] = $(this).find('span.price-number').text();
        item['description'] = $(this).find('p.description').text();
        estimate.items.push(item);
      });
      $('input[name="estimates_items"]').val(JSON.stringify(estimate.items));
    }
  };
  estimate.init();
}); //
//
//Object client
// Delete clients with confirmation

document.addEventListener("DOMContentLoaded", function (event) {
  var client = {
    init: function init() {
      client.bindEvents();
    },
    bindEvents: function bindEvents() {
      $('body').on('click', '.delete-client', function () {
        if (confirm("Voulez-vous supprimer ce client!")) {
          var client_id = $(this).data("id");
          $.ajax({
            type: 'delete',
            url: "clients/" + client_id,
            success: function success(data) {
              $("#client_id_" + client_id).remove();
            },
            error: function error(data) {
              console.log('Error:', data);
            }
          });
        }
      });
      $(document).on('keyup', '#search', function () {
        var query = $(this).val();
        $.ajax({
          url: "clients/search",
          method: 'GET',
          data: {
            query: query
          },
          dataType: 'json',
          success: function success(data) {
            $('tbody').html(data.table_data);
          }
        });
      });
    }
  };
  client.init();
}); // Object user
// Delete users with confirmation

document.addEventListener("DOMContentLoaded", function (event) {
  var user = {
    init: function init() {
      user.bindEvents();
    },
    bindEvents: function bindEvents() {
      $('body').on('click', '.delete-user', function () {
        confirm("Voulez-vous supprimer cet utilisateur !");
        var user_id = $(this).data("id");
        $.ajax({
          type: 'delete',
          url: "users/" + user_id,
          success: function success(data) {
            $("#user_id_" + user_id).remove();
          },
          error: function error(data) {
            console.log('Error:', data);
          }
        });
      });
    }
  };
  user.init();
}); //Object module

document.addEventListener("DOMContentLoaded", function (event) {
  $(document).ready(function () {
    module.init();
  });
  var module = {
    init: function init() {
      module.bindEvents();
    },
    bindEvents: function bindEvents() {
      $("body").on("blur", "*[contenteditable=true][data-update-ajax=true]", function () {
        module.submitChanges($(this).closest('.moduleEditable'));
      });
      $("body").on("change", "select[contenteditable=true][data-update-ajax=true]", function () {
        module.submitChanges($(this).closest('.moduleEditable'));
      });
      $('#btnAddModule').on('click', function () {
        module.addModule();
      });
    },
    submitChanges: function submitChanges(module) {
      var moduleID = module.data('id');
      var title = $('.moduleEditable#form_' + moduleID + ' .title').text();
      var price = $('.moduleEditable#form_' + moduleID + ' .price span').text();
      var description = $('.moduleEditable#form_' + moduleID + ' .description').text();
      var category_id = $('.moduleEditable#form_' + moduleID + ' .options-select').val();
      var id = $("#form_".concat(moduleID)).attr('data-id'); //Edit module

      $.ajax({
        url: "/module/".concat(id),
        data: {
          id: $("#form_".concat(moduleID)).attr('data-id'),
          title: title,
          price: price,
          description: description,
          category_id: category_id
        },
        method: 'put',
        success: function success(reponsePHP) {
          // console.log(reponsePHP)
          if (reponsePHP == 1 || 1) {
            var _title = reponsePHP["title"];
            var _price = reponsePHP["price"];
            var _moduleID = reponsePHP['id'];
            var _description = reponsePHP["description"];
            var _category_id = reponsePHP["category_id"];
          }

          ;
        },
        error: function error() {
          alert("Problème durant la transaction !");
        } //End transaction ajax edit module

      }); //End content editable
    },
    addModule: function addModule() {
      //function ajax add module
      $.ajax({
        url: "module/insert",
        method: 'get',
        success: function success(reponsePHP) {
          // console.log(reponsePHP)
          if (reponsePHP == 1 || 1) {
            var id = reponsePHP["id"]; // Duplication du premier module

            $('.moduleEditable:first').clone().prependTo('.list-group'); // On se place sur le premier module de la liste (dernier créé)

            $('.moduleEditable:first').attr('data-id', id);
            $('.moduleEditable:first').attr('id', 'form_' + id); // Initialisation des valeurs par défaut

            $('.moduleEditable:first h2.title').text('Mon module');
            $('.moduleEditable:first p.description').text('Ma description');
            $('.moduleEditable:first p.price-number').text('300');
          }

          ;
        },
        error: function error() {
          alert("Problème durant la transaction !");
        } //End transaction ajax edit module

      }); //End content editable
    }
  };
});

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

__webpack_require__(/*! /Applications/MAMP/htdocs/project_estimate/projet_estimates_pdf_v_2_26_11/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /Applications/MAMP/htdocs/project_estimate/projet_estimates_pdf_v_2_26_11/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });