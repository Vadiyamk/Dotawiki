'use strict';
importScripts('sw-toolbox.js'); toolbox.precache(["index.html", "cities.html", "tours.html", "contacts.html","assets/css/style.css", "assets/css/cities.css", "assets/css/tours.css", "assets/css/contacts.css"]); toolbox.router.get('/images/*', toolbox.cacheFirst); toolbox.router.get('/*', toolbox.networkFirst, { networkTimeoutSeconds: 5});
