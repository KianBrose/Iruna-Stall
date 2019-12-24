const staticAssets = [
    './',
    './additem',
    './viewitem',
    './scammers',
    './about',
    './guides',
    './account',
    './ninja1',
    './ninja2',
    './samurai1',
    './samurai2',
    './ministrel1',
    './alchemist1',
    './monk1',
    './bishop1',
    './servent1',
    './enchanter1',
    './enchanter2',
    './hw1',
    './necro1',
    './assasin1',
    './assasin2',
    './sniper1',
    './gladiator1',
    './paladin1',
    './js/serviceLoader.js',
    './serviceWorker.js',
    './css/style.css',
    './vendor/sweetalert/sweetalert.all.js'
];

self.addEventListener('install', async event => {
    const cache = await caches.open('static-cache');
    cache.addAll(staticAssets);
});

self.addEventListener('fetch', event => {
    const req = event.request;
    const url = new URL(req.url);

    if (url.origin === location.url) {
        event.respondWith(cacheFirst(req));
    } else {
        event.respondWith(networkFirst(req));
    }
});

async function cacheFirst(req) {
    const cachedResponse = caches.match(req);
    return cachedResponse || fetch(req);
}

async function networkFirst(req) {
    const cache = await caches.open('dynamic-cache');

    try {
        const res = await fetch(req);
        cache.put(req, res.clone());
        return res;
    } catch (error) {
        return await cache.match(req);
    }
}
