;define( 
   [ 
       'ko', 
       'jquery', 
       'uiComponent' 
   ], 
   function (ko, $, Component) { 
       'use strict'; 
       return Component.extend({ 
            initialize: function () {
                this._super();
                console.log("----__>Comienzo de knockout js");
            },
            
            defaults: { 
               template: 'Magento_Checkout/note'
           } 
       }); 
   } 
);