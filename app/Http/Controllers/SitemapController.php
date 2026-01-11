<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class SitemapController extends Controller
{
    /**
     * Routes to exclude from sitemap
     */
    protected array $excludedRoutes = [
        'sitemap',
        'sitemap.xml',
    ];

    /**
     * Route priorities (route name => priority)
     */
    protected array $priorities = [
        'home' => '1.0',
        'products' => '0.9',
        'services' => '0.9',
        'projects' => '0.8',
        'about' => '0.7',
        'contacts' => '0.6',
    ];

    /**
     * Route change frequencies (route name => changefreq)
     */
    protected array $changeFrequencies = [
        'home' => 'weekly',
        'products' => 'weekly',
        'services' => 'weekly',
        'projects' => 'monthly',
        'about' => 'monthly',
        'contacts' => 'yearly',
    ];

    /**
     * Generate dynamic XML sitemap
     */
    public function index(): Response
    {
        $routes = $this->getSitemapRoutes();
        $xml = $this->generateXml($routes);

        return response($xml, 200, [
            'Content-Type' => 'application/xml',
        ]);
    }

    /**
     * Get all routes suitable for sitemap
     */
    protected function getSitemapRoutes(): array
    {
        $sitemapRoutes = [];

        foreach (Route::getRoutes() as $route) {
            if (!$this->shouldIncludeRoute($route)) {
                continue;
            }

            $routeName = $route->getName();
            $url = URL::to($route->uri());

            $sitemapRoutes[] = [
                'url' => $url,
                'lastmod' => now()->toDateString(),
                'changefreq' => $this->changeFrequencies[$routeName] ?? 'monthly',
                'priority' => $this->priorities[$routeName] ?? '0.5',
            ];
        }

        return $sitemapRoutes;
    }

    /**
     * Check if route should be included in sitemap
     */
    protected function shouldIncludeRoute($route): bool
    {
        if (!in_array('GET', $route->methods())) {
            return false;
        }

        if (!$route->getName()) {
            return false;
        }

        if (in_array($route->getName(), $this->excludedRoutes)) {
            return false;
        }

        if (str_contains($route->uri(), '{')) {
            return false;
        }

        $middlewares = $route->middleware();
        if (in_array('auth', $middlewares) || in_array('auth:sanctum', $middlewares)) {
            return false;
        }

        return true;
    }

    /**
     * Generate XML string from routes
     */
    protected function generateXml(array $routes): string
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

        foreach ($routes as $route) {
            $xml .= '  <url>' . PHP_EOL;
            $xml .= '    <loc>' . htmlspecialchars($route['url'], ENT_XML1) . '</loc>' . PHP_EOL;
            $xml .= '    <lastmod>' . $route['lastmod'] . '</lastmod>' . PHP_EOL;
            $xml .= '    <changefreq>' . $route['changefreq'] . '</changefreq>' . PHP_EOL;
            $xml .= '    <priority>' . $route['priority'] . '</priority>' . PHP_EOL;
            $xml .= '  </url>' . PHP_EOL;
        }

        $xml .= '</urlset>';

        return $xml;
    }
}
