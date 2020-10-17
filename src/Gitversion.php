<?php

declare(strict_types=1);

namespace Lobotomised\Gitversion;

class Gitversion
{
    public static function getFilePath(): string
    {
        return base_path() . '/commitId';
    }

    public static function getCommitId(): ?string
    {
        if (file_exists(self::getFilePath())) {
            return trim(file_get_contents(self::getFilePath()));
        }

        return null;
    }
}
