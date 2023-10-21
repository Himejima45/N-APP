const cachea = "HVHCache-v1";
list = []
var appshellfiles = [
    // pages can be added here for caching
    '/index.html',
    '/guide.html',
    '/graph.html',
    '/alarm.html',
    '/execise.html',
    '/manifest.json',

]
appshellfiles = []
self.addEventListener("install", e => {


    e.waitUntil((async () => {

        const cache = await caches.open(cachea);
        await cache.addAll(appshellfiles);
    })());


});
self.addEventListener("activate", event => {
    console.log("Service worker activated");
});

const cacheFirst = async (request) => {
    const responseFromCache = await caches.match(request);
    if (responseFromCache) {
        return responseFromCache;
    }
    return fetch(request);
};

self.addEventListener("fetch", (event) => {
    event.respondWith(cacheFirst(event.request));
});