define(['jquery', 'uiComponent', 'ko'], 
  function ($, Component, ko) {
  'use strict';
    return Component.extend({
      defaults: {
        template: 'Magento_Catalog/knockout-test-example'
      },
      initialize: function () {
        this._super();
      }
    });
  }
);