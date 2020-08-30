$.ajaxSetup({
    headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") }
});

// JS estimate
document.addEventListener("DOMContentLoaded", function(event) {

var estimate = {
  items:[],
  init:function(){
    estimate.bindEvents();
  },
  bindEvents:function(){
    $("#sortable1").sortable({
      // Connect selectors
      connectWith: ".connectedSortable",
      dropOnEmpty:true,
      forcePlaceholderSize: true,
      // Clone
      helper: function (e, li) {

          copyHelper = li.clone().insertAfter(li);
          return li.clone();
      }
    });
    $("#sortable2").sortable({

      dropOnEmpty:true,
      cancel:'*[contenteditable="true"]',
      receive: function (e, ui) {
          copyHelper = null;
      },
      update: function(event, ui) {
        var order = $(this).sortable('toArray');
        ui.item.find('h2').attr('contenteditable', true);
        ui.item.find('span.price-number').attr('contenteditable', true);
        ui.item.find('p.description').attr('contenteditable', true);

        //Update Order
        estimate.update();
      },

      stop: function (event, ui) {

      }
      });

      // Update and editable
      $("body").on("blur", "*[contenteditable=true]", function() {
        estimate.update();
      });
  },
  update:function(){

    estimate.items = [];

    $('#sortable2 li').each(function(){
      var item = {};

      item['title'] = $(this).find('h2.title').text();
      item['price'] = $(this).find('span.price-number').text();
      item['description'] = $(this).find('p.description').text();
      item['id'] = $(this).attr("data-id");
      estimate.items.push(item);
    });

    $('input[name="estimates_items"]').val(JSON.stringify(estimate.items));
  }
};

estimate.init();

    estimate.init();
});


//Object client
// Delete clients with confirmation
document.addEventListener("DOMContentLoaded", function(event) {
    var client = {
        init: function() {
            client.bindEvents();
        },
        bindEvents: function() {
            $("body").on("click", ".delete-client", function() {
                if (confirm("Voulez-vous supprimer ce client!")) {
                    var client_id = $(this).data("id");
                    $.ajax({
                        type: "delete",
                        url: "clients/" + client_id,
                        success: function(data) {
                            $("#client_id_" + client_id).remove();
                        },
                        error: function(data) {
                            console.log("Error:", data);
                        }
                    });
                }
            });
            $(document).on("keyup", "#search", function() {
                var query = $(this).val();

                $.ajax({
                    url: "clients/search",
                    method: "GET",
                    data: {
                        query: query
                    },
                    dataType: "json",
                    success: function(data) {
                        $("tbody").html(data.table_data);
                    }
                });
            });
        }
    };
    client.init();
});

// Object user
// Delete users with confirmation
document.addEventListener("DOMContentLoaded", function(event) {
    var user = {
        init: function() {
            user.bindEvents();
        },
        bindEvents: function() {
            $("body").on("click", ".delete-user", function() {
                if (confirm("Voulez-vous supprimer cet utilisateur!")) {
                    var user_id = $(this).data("id");
                    $.ajax({
                        type: "delete",
                        url: "users/" + user_id,
                        success: function(data) {
                            $("#user_id_" + user_id).remove();
                        },
                        error: function(data) {
                            console.log("Error:", data);
                        }
                    });
                }
            });
        }
    };
    user.init();
});

//Object module
document.addEventListener("DOMContentLoaded", function(event) {
    $(document).ready(function() {
        module.init();
    });

    var module = {
        init: function() {
            module.bindEvents();
        },

        bindEvents: function() {
            $("body").on(
                "blur",
                "*[contenteditable=true][data-update-ajax=true]",
                function() {
                    module.submitChanges($(this).closest(".moduleEditable"));
                }
            );
            $("body").on(
                "change",
                "select[contenteditable=true][data-update-ajax=true]",
                function() {
                    module.submitChanges($(this).closest(".moduleEditable"));
                }
            );
            $("#btnAddModule").on("click", function() {
                module.addModule();
            });
            // Delete module
            $("body").on("click", ".delete-module", function() {
                if (confirm("Voulez-vous supprimer ce module!")) {
                    var module_id = $(this).data("id");
                    $.ajax({
                        type: "delete",
                        url: "modules/" + module_id,
                        success: function(data) {
                            console.log(data);
                            $("#module_id_" + module_id).remove();
                        },
                        error: function(data) {
                            console.log(data);
                            console.log("Error:", data);
                        },
                    });
                }
            });
        },

        submitChanges: function(module) {
            var moduleID = module.data("id");
            let title = $(
                ".moduleEditable#form_" + moduleID + " .title"
            ).text();
            let price = $(
                ".moduleEditable#form_" + moduleID + " .price span"
            ).text();
            let description = $(
                ".moduleEditable#form_" + moduleID + " .description"
            ).text();
            let category_id = $(
                ".moduleEditable#form_" + moduleID + " .options-select"
            ).val();
            const id = $(`#form_${moduleID}`).attr("data-id");

            //Edit module
            $.ajax({
                url: `/module/${id}`,
                data: {
                    id: $(`#form_${moduleID}`).attr("data-id"),
                    title: title,
                    price: price,
                    description: description,
                    category_id: category_id
                },
                method: "put",
                success: function(reponsePHP) {
                    if (reponsePHP == 1 || 1) {
                        let title = reponsePHP["title"];
                        let price = reponsePHP["price"];
                        const moduleID = reponsePHP["id"];
                        let description = reponsePHP["description"];
                        let category_id = reponsePHP["category_id"];
                    }
                },

                error: function() {
                    alert("Problème durant la transaction !");
                }

            });
        },
        //Add module
        addModule: function() {
            $.ajax({
                url: `module/insert`,
                method: "get",
                success: function(reponsePHP) {
                    if (reponsePHP == 1 || 1) {
                        let id = reponsePHP["id"];
                        $(".moduleEditable:first")
                            .clone()
                            .prependTo(".list-group");
                        $(".moduleEditable:first").attr("data-id", id);
                        $(".moduleEditable:first").attr("id", "form_" + id);

                        // Initialisation des valeurs par défaut
                        $(".moduleEditable:first h2.title").text("Mon module");
                        $(".moduleEditable:first p.description").text("Ma description");
                        $(".moduleEditable:first p.price-number").text("300");
                    }
                },

                error: function() {
                    alert("Problème durant la transaction !");
                }

            });
        }
    };
});
