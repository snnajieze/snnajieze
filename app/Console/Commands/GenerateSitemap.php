<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate XML sitemap for the website';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        // Add main page
        $sitemap .= '  <url>' . "\n";
        $sitemap .= '    <loc>' . config('app.url') . '</loc>' . "\n";
        $sitemap .= '    <lastmod>' . now()->toDateString() . '</lastmod>' . "\n";
        $sitemap .= '    <changefreq>weekly</changefreq>' . "\n";
        $sitemap .= '    <priority>1.0</priority>' . "\n";
        $sitemap .= '  </url>' . "\n";

        $sitemap .= '</urlset>';

        // Save to public directory
        file_put_contents(public_path('sitemap.xml'), $sitemap);

        $this->info('Sitemap generated successfully at public/sitemap.xml');
    }
}
