<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Application;
use Closure;

class Locale
{
    protected $locales = ['en', 'zh-CN'];

    protected $app;

    /**
     * Create a new locale switcher.
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $admin = Auth::guard('admin')->user();
        $locale = $admin? $admin['locale']: '';

        if (in_array($locale, $this->locales)) {
            $this->app->setLocale($locale);
        }

        return $next($request);
    }
}
