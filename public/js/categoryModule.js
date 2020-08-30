$( document ).ready(function() {
    $('#categorie_id').on('change',(event) => {

        console.log($("#sortable2").attr("data-id"));
        var category_id = event.target.value;

        $.ajax({
            url: "/api/category/module/"+category_id,
            method: 'get',
            processData: false,
            contentType: false,
            beforeSend:function(){
                $('#loader').html('Chargement....');
            },
            success: function(result){
                var dataGetting = result.data;
                var list = '';
                $.each( dataGetting, function( key, value ) {
                    $.each( value.modules, function( key, module ) {
                        list +='<li class="moduleEditable ui-state-default list-group-item border mt-2 mb-2" id="form_'+module.id+'"  data-id="'+module.id+'">';
                        list +=' <div id="moduleDraggable">';
                        list +='  <div class="editable d-flex justify-content-around ">';
                        list +='  <img src="/img/more.png" style="width:45px;height:45px" alt="">';
                        list +='  <div value="'+module.title+'">';
                        list +='<h2 class="title" class="h2 font-weight-bold" >'+module.title+'</h2></div>';
                        list +='<div class="divSize font-pdf-2-vue font-weight-bold " value="'+module.title+'"><p class="price">';
                        list +='<span  class="price-number h4 pt-4">'+module.price+'</span>€</p></div></div>';
                        list += '<div class="editable d-flex pl-3 mt-3 mb-3 w-100">';
                        list +='<p class="description d-flex justify-content-center" value="'+module.description+'">'+module.description+'</p></div>';

                    });
                });
                list+='</ul>';
                $("#sortable1").html(list);
            }});
    });
});
