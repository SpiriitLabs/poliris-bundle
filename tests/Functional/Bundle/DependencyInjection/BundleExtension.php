<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\PolirisBundle\Tests\Functional\Bundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\HttpKernel\Kernel;

class BundleExtension extends Extension implements PrependExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function prepend(ContainerBuilder $container): void
    {
        // Annotation must be disabled since this bundle doesn't use Doctrine
        // The framework allows enabling/disabling them only since symfony 3.2 where
        // doctrine/annotations has been removed from required dependencies
        $annotationsEnabled = (int) Kernel::MAJOR_VERSION >= 3 && (int) Kernel::MINOR_VERSION >= 2;
        if (!$annotationsEnabled) {
            return;
        }

        $container->prependExtensionConfig('framework', ['annotations' => ['enabled' => false]]);
    }
}
