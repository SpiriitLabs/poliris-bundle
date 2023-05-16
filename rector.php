<?php

declare(strict_types=1);

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;
use Rector\PHPUnit\Rector\Class_\AddSeeTestAnnotationRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Symfony\Set\SymfonyLevelSetList;
use Rector\Symfony\Set\SymfonySetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_71,
        SymfonyLevelSetList::UP_TO_SYMFONY_44,
        SymfonySetList::SYMFONY_CODE_QUALITY,
        SymfonySetList::SYMFONY_CONSTRUCTOR_INJECTION,
    ]);
    $rectorConfig->phpVersion(PhpVersion::PHP_71);
    $rectorConfig->importShortClasses(false);
    $rectorConfig->importNames();
    $rectorConfig->bootstrapFiles([
        __DIR__ . '/vendor/autoload.php',
    ]);
    $rectorConfig->parallel();
    $rectorConfig->paths([__DIR__]);
    $rectorConfig->skip([
        // Path
        __DIR__ . '/.github',
        __DIR__ . '/DependencyInjection/Configuration.php',
        __DIR__ . '/vendor',

        // Rules
        AddSeeTestAnnotationRector::class,
    ]);
};