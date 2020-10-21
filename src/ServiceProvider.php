<?php

declare(strict_types=1);

namespace Lobotomised\Gitversion;

use Illuminate\Support\Facades\Blade;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot(): void
    {
        Blade::directive('gitTag', function (): ?string {
            $id = Gitversion::getCommitId();

            if ($id) {
                return '<meta name="id" content="' . $id . '">';
            }

            return null;
        });

        Blade::directive('gitId', function (): ?string {
            return Gitversion::getCommitId();
        });
    }
}
