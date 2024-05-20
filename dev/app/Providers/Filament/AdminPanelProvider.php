<?php

namespace App\Providers\Filament;

use App\Filament\Pages\HealthCheckResults;
use Awcodes\FilamentGravatar\GravatarPlugin;
use Awcodes\FilamentGravatar\GravatarProvider;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Navigation\NavigationItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use ShuvroRoy\FilamentSpatieLaravelHealth\FilamentSpatieLaravelHealthPlugin;
use Swis\Filament\Backgrounds\FilamentBackgroundsPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('dashboard')
            ->path('dashboard')
            ->font('Poppins')
            ->login()
            ->colors([
                'primary' => Color::hex('#9DDE8B'),
            ])
            ->brandLogo(asset('https://www.pngall.com/wp-content/uploads/15/Gumball-Watterson-PNG-Pic.png'))
            ->favicon(asset('https://www.pngall.com/wp-content/uploads/15/Gumball-Watterson-PNG-Pic.png'))
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->breadcrumbs(false)
            ->navigationItems([
                NavigationItem:: make(label: 'Blog')
                    ->url(url: 'https://cv.labibweb.my.id', shouldOpenInNewTab: true)
                    ->icon(icon: 'heroicon-o-paper-clip')
                    ->group(group: 'External')
                    ->sort(sort: 3)
            ])
            ->defaultAvatarProvider(GravatarProvider::class)
            ->plugins([
                GravatarPlugin::make()
                    ->default('robohash')
                    ->size(200)
                    ->rating('pg'),
                FilamentBackgroundsPlugin::make()
                    ->remember(100),
            ]);
    }

}
