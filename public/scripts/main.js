require.config({
    locale   : 'en-us',
    paths    : {
        'jquery'     : 'libs/jquery-1.7.1',
        'underscore' : 'libs/require-underscore',
        'backbone'   : 'libs/require-backbone'
    },
    packages : [ 'map', {

    } ],
    catchError: true
});

require([ 'backbone', 'router' ], function(Backbone, Router) {
    var mainRouter = new Router();
    Backbone.history.start();
});