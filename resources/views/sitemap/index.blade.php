<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
    <url>
        <loc>https://irunastall.com/</loc>
    </url>
    <url>
        <loc>https://irunastall.com/additem</loc>
    </url>
    <url>
        <loc>https://irunastall.com/viewitem</loc>
    </url>
    <url>
        <loc>https://irunastall.com/scammers</loc>
    </url>
    <url>
        <loc>https://irunastall.com/about</loc>
    </url>
    <url>
        <loc>https://irunastall.com/account</loc>
    </url> 
    @foreach($equipment as $equipment)
    <url>
        <loc>https://irunastall.com/item/equip/{{ $equipment->item_id }}</loc>
        <lastmod>{{ $equipment->created_at->tz('UTC')->toAtomString() }}</lastmod>
    </url>
    @endforeach
    @foreach($crystas as $crystas)
    <url>
        <loc>https://irunastall.com/item/xtal/{{ $crystas->item_id }}</loc>
        <lastmod>{{ $crystas->created_at->tz('UTC')->toAtomString() }}</lastmod>
    </url>
    @endforeach
    @foreach($material as $material)
    <url>
        <loc>https://irunastall.com/item/material/{{ $material->item_id }}</loc>
        <lastmod>{{ $material->created_at->tz('UTC')->toAtomString() }}</lastmod>
    </url>
    @endforeach
    @foreach($alCrystas as $alCrystas)
    <url>
        <loc>https://irunastall.com/item/alcrystas/{{ $alCrystas->item_id }}</loc>
        <lastmod>{{ $alCrystas->created_at->tz('UTC')->toAtomString() }}</lastmod>
    </url>
    @endforeach
    @foreach($relicCrystas as $relicCrystas)
    <url>
        <loc>https://irunastall.com/item/relic/{{ $relicCrystas->item_id }}</loc>
        <lastmod>{{ $relicCrystas->created_at->tz('UTC')->toAtomString() }}</lastmod>
    </url>
    @endforeach


</urlset>