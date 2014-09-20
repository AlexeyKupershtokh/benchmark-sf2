<?php

namespace Alawar\BenchmarkBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class AlawarBenchmarkExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $this->addClassesToCompile(
            array(
                'Doctrine\\ORM\\Mapping\\ClassMetadata',
                'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
                'Doctrine\\ORM\\Mapping\\ClassMetadataInfo',
                'Doctrine\\ORM\\Mapping\\DefaultEntityListenerResolver',
                'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
                'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
                'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
                'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
                'Doctrine\\ORM\\Mapping\\EntityListenerResolver',
                'Doctrine\\ORM\\Mapping\\NamingStrategy',
                'Doctrine\\ORM\\Mapping\\QuoteStrategy',
                'Doctrine\\DBAL\\Configuration',
                'Doctrine\\DBAL\\Connection',
                'Doctrine\\DBAL\\Driver',
                'Doctrine\\DBAL\\Driver\\Connection',
                'Doctrine\\DBAL\\Driver\\PDOConnection',
                'Doctrine\\DBAL\\Driver\\PDOMySql\\Driver',
                'Doctrine\\DBAL\\Driver\\PDOStatement',
                'Doctrine\\DBAL\\Driver\\ResultStatement',
                'Doctrine\\DBAL\\Driver\\Statement',
                'Doctrine\\DBAL\\DriverManager',
                'Doctrine\\DBAL\\Events',
                'Doctrine\\DBAL\\Platforms\\AbstractPlatform',
                'Doctrine\\DBAL\\Platforms\\MySqlPlatform',
                'Doctrine\\DBAL\\Query\\Expression\\ExpressionBuilder',
                'Doctrine\\DBAL\\Statement',
                'Doctrine\\DBAL\\Types\\BooleanType',
                'Doctrine\\DBAL\\Types\\IntegerType',
                'Doctrine\\DBAL\\Types\\StringType',
                'Doctrine\\DBAL\\Types\\Type',
            )
        );
    }
}
