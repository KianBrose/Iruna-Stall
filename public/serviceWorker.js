const staticAssets = [
    './',
    './additem',
    './viewitem',
    './scammers',
    './about',
    './guides',
    './account',
    './guides/ninja1',
    './guides/ninja2',
    './guides/samurai1',
    './guides/samurai2',
    './guides/ministrel1',
    './guides/alchemist1',
    './guides/monk1',
    './guides/bishop1',
    './guides/servent1',
    './guides/enchanter1',
    './guides/enchanter2',
    './guides/hw1',
    './guides/necro1',
    './guides/assasin1',
    './guides/assasin2',
    './guides/sniper1',
    './guides/gladiator1',
    './guides/paladin1',
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
