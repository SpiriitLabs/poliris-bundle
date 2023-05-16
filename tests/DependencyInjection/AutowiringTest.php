<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\PolirisBundle\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Spiriit\PolirisBundle\Centers\CsvCenter\AnnonceCsvCenter;
use Spiriit\PolirisBundle\DependencyInjection\PolirisExtension;
use Spiriit\PolirisBundle\PolirisBundle;
use Spiriit\PolirisBundle\Tests\Stubs\Autowired;
use Symfony\Bundle\FrameworkBundle\DependencyInjection\FrameworkExtension;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;

class AutowiringTest extends TestCase
{
    private static $container;

    public function testAutowiring(): void
    {
        $container = $this->createContainerBuilder([
            'framework' => [
                'secret' => 'test',
                'http_method_override' => false,
            ],
            'poliris' => [],
        ]);

        $container
            ->register('autowired', Autowired::class)
            ->setPublic(true)
            ->setAutowired(true)
        ;

        $container->compile();

        $autowired = $container->get('autowired');

        $this->assertInstanceOf(AnnonceCsvCenter::class, $autowired->getAnnonceCsvCenter());
    }

    private static function createContainerBuilder(array $configs = [])
    {
        $container = new ContainerBuilder(
            new ParameterBag([
                'kernel.bundles' => [
                    'FrameworkBundle' => FrameworkBundle::class,
                    'PolirisBundle' => PolirisBundle::class,
                ],
                'kernel.bundles_metadata' => [],
                'kernel.cache_dir' => __DIR__,
                'kernel.debug' => false,
                'kernel.environment' => 'test',
                'kernel.name' => 'kernel',
                'kernel.root_dir' => __DIR__,
                'kernel.project_dir' => __DIR__,
                'kernel.container_class' => 'AutowiringTestContainer',
                'kernel.charset' => 'utf8',
                'kernel.runtime_environment' => 'test',
                'env(base64:default::SYMFONY_DECRYPTION_SECRET)' => 'dummy',
                'kernel.build_dir' => __DIR__,
                'debug.file_link_format' => null,
            ]),
        );

        $container->registerExtension(new FrameworkExtension());
        $container->registerExtension(new PolirisExtension());

        foreach ($configs as $extension => $config) {
            $container->loadFromExtension($extension, $config);
        }

        static::$container = $container;

        return $container;
    }
}
