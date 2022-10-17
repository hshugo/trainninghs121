define(['jquery', 'uiComponent', 'ko'], 
  function ($, Component, ko) {
  'use strict';
    return Component.extend({
      defaults: {
        template: 'Magento_Catalog/knockout-test-example'
      },
      initialize: function (config) {
        var self = this;
        self._super();  
        self.price = ko.observable("");
        console.log("Precio Recibido: ",config.price);
      },
      changeContent: function(obj, event){
        //console.log("-"+$(".product-info-main .precio").text().trim()+"-");
        var self = this;
        var precio = $(".product-info-main .precio").text().trim();
        self.price(precio);
      }
    });

   
  }
);