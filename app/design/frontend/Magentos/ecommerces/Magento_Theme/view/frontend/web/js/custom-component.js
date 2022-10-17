define(['jquery', 'uiComponent', 'ko'], function ($, Component, ko) {
  'use strict';
  return Component.extend({
    defaults: {
          template: 'Magento_Theme/knockout-test'
      },
      initialize: function () {
          this._super();
      }
  });
}
);