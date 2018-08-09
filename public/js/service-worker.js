// Choose what files to cache and set the cache name
var dataCacheName = 'Spectrum-v1';
var cacheName = 'Spectrum_v1';
var filesToCache = [
 '/', 
];

// Install the service worker
self.addEventListener('install', function(e) {
 console.log('[ServiceWorker] Install');
 e.waitUntil(
   caches.open(cacheName).then(function(cache) {
     console.log('[ServiceWorker] Caching app shell');
     return cache.addAll(filesToCache);
   })
 );
});

// Activate the service worker
self.addEventListener('activate', function(e) {
 console.log('[ServiceWorker] Activate');
 e.waitUntil(   
   caches.keys().then(function(keyList) {
     return Promise.all(keyList.map(function(key) {
       if (key !== cacheName && key !== dataCacheName) {
         console.log('[ServiceWorker] Removing old cache', key);
         return caches.delete(key);
       }
     }));
   })
 );
 return self.clients.claim();
});

// Fetch all of the cached items
self.addEventListener('fetch', function(e) {
 console.log('[ServiceWorker] Fetch', e.request.url);
 e.respondWith(
   caches.match(e.request).then(function(response) {
     return response || fetch(e.request);
   })
 );
});

// Where the user should go when a notification is clicked
self.addEventListener('notificationclick', function(e) {
  var notification = e.notification;
  var primaryKey = notification.data.primaryKey;
  var action = e.action;

  if (action === 'close') {
    notification.close();
  } else {
    clients.openWindow('http://www.example.com');
    notification.close();
  }
});


