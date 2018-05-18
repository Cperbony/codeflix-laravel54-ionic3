<?php

namespace CodeFlix\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('Accordion',\Bootstrapper\Facades\Accordion::class);
        $loader->alias('Alert', \Bootstrapper\Facades\Alert::class);
        $loader->alias('Badge', \Bootstrapper\Facades\Badge::class);
        $loader->alias('Breadcrumb', \Bootstrapper\Facades\Breadcrumb::class);
        $loader->alias('Button', \Bootstrapper\Facades\Button::class);
        $loader->alias('ButtonGroup', \Bootstrapper\Facades\ButtonGroup::class);
        $loader->alias('Carousel', \Bootstrapper\Facades\Carousel::class);
        $loader->alias('ControlGroup', \Bootstrapper\Facades\ControlGroup::class);
        $loader->alias('DropdownButton', \Bootstrapper\Facades\DropdownButton::class);
        $loader->alias('Helpers', \Bootstrapper\Facades\Helpers::class);
        $loader->alias('Icon', \Bootstrapper\Facades\Icon::class);
        $loader->alias('InputGroup', \Bootstrapper\Facades\InputGroup::class);
        $loader->alias('Image', \Bootstrapper\Facades\Image::class);
        $loader->alias('Label', \Bootstrapper\Facades\Label::class);
        $loader->alias('MediaObject', \Bootstrapper\Facades\MediaObject::class);
        $loader->alias('Modal', \Bootstrapper\Facades\Modal::class);
        $loader->alias('Navbar', \Bootstrapper\Facades\Navbar::class);
        $loader->alias('Navigation', \Bootstrapper\Facades\Navigation::class);
        $loader->alias('Panel', \Bootstrapper\Facades\Panel::class);
        $loader->alias('ProgressBar', \Bootstrapper\Facades\ProgressBar::class);
        $loader->alias('Tabbable', \Bootstrapper\Facades\Tabbable::class);
        $loader->alias('Table', \Bootstrapper\Facades\Table::class);
        $loader->alias('Thumbnail', \Bootstrapper\Facades\Thumbnail::class);
        $loader->alias('Form', \Bootstrapper\Facades\Form::class);

        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
