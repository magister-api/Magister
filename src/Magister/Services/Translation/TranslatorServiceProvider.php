<?php

namespace Magister\Services\Translation;

use Magister\Services\Support\ServiceProvider;

class TranslatorServiceProvider extends ServiceProvider
{
	/**
	 * Register bindings in the container.
	 * 
	 * @return Translator
	 */
    public function register()
    {
        $this->app->bind('Magister\Services\Translation\Translator', function() {
            return new Magister\Services\Translation\Translator();
        });
    }
}

