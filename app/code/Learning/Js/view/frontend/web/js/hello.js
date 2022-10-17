define([
        "jquery"
    ], function($){
        "use strict";
        return function(config, element) {
            alert("I have received the parameter");
            alert(config.message);
        }
    }
)
