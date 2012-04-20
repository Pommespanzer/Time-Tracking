define([ 'backbone' ], function(Backbone) {
    return Backbone.Router.extend({
        routes: {
            'map': 'map'
        },

        initialize: function() {},

        map: function() {
            // Show map!
            console.log("show map");
        }
    });
});