<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Contracts\URLShortener\UrlShortenerContract;
use App\Http\Requests\LinkRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

/**
 * Class LinkController
 * @package App\Http\Controllers
 */
class LinkController extends Controller
{
    /**
     * Show form
     *
     * @return View
     */
    public function index(): View
    {
        return view('links.index');
    }

    /**
     * Create short url
     *
     * @param LinkRequest $request
     * @param UrlShortenerContract $shortener
     * @return RedirectResponse
     */
    public function store(LinkRequest $request, UrlShortenerContract $shortener): RedirectResponse
    {
        $url = $shortener->getShortUrl($request->get('url'));

        return redirect()->back()->with('shortLink', $url);
    }

    /**
     * Redirect long url
     *
     * @param string $shortCode
     * @param UrlShortenerContract $shortener
     * @return RedirectResponse
     */
    public function redirect(string $shortCode, UrlShortenerContract $shortener): RedirectResponse
    {
        return redirect()->to($shortener->getLongUrl($shortCode));
    }
}
