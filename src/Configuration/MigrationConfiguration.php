<?php

namespace bahtiyarkavakli\migrationsPackage\Configuration;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class MigrationConfiguration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('migrations');

        $treeBuilder->getRootNode()
            ->children()
            ->scalarNode('entity')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
        ;

        return $treeBuilder;
    }
}
