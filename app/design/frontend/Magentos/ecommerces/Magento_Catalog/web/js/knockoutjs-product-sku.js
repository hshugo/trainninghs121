define(['jquery', 'uiComponent', 'ko'], 
  function ($, Component, ko) {
  'use strict';
    return Component.extend({
     initialize: function (config) {
        var self = this;
        self._super();  
        self.attibute = ko.observable( config.attibute );
        console.log("Precio Recibido: ",config.attibute);
      },
      changeContent: function(obj, event){
        var self = this;
      }
    });

   
  }
);