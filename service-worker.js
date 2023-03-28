const staticCacheName = 'site-static';
const assets = [
    '/',
    'web_pages/home.php',
    'web_styles/home.css',
    'web_pages/recherche.php',
    'web_styles/recherche.css',
    'web_pages/login.php',
    'web_styles/style.css',
];

// install event
self.addEventListener('install', evt => {
  //console.log('service worker installed');
  evt.waitUntil(
    caches.open(staticCacheName).then((cache) => {
      console.log('caching shell assets');
      cache.addAll(assets);
    })
  );
});
  // activate event
self.addEventListener('activate', evt => {
    console.log('service worker activated');
  });

// fetch event
self.addEventListener('fetch', evt => {
    //console.log('fetch event', evt);
    evt.respondWith(
      caches.match(evt.request).then(cacheRes => {
        return cacheRes || fetch(evt.request);
      })
    );
  });