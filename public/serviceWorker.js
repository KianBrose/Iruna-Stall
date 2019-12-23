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
    './serviceWorker.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
    'https://fonts.googleapis.com/css?family=Nunito:200,600',
    'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',
    'css/style.css',
    'https://irunastall.com/vendor/sweetalert/sweetalert.all.js',
    'https://code.jquery.com/jquery-3.4.1.min.js',
    'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
    'https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js',
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
