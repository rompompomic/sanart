<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($staticPages as $route)
        <url>
            <loc>{{ route($route) }}</loc>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($projects as $project)
        <url>
            <loc>{{ route('project', ['slug' => $project->slug]) }}</loc>
            <lastmod>{{ $project->updated_at->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.6</priority>
        </url>
        <url>
            <loc>{{ route('en.project', ['slug' => $project->slug]) }}</loc>
            <lastmod>{{ $project->updated_at->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.6</priority>
        </url>
    @endforeach
</urlset>
