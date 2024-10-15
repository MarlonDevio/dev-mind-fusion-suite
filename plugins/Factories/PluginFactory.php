<?php

namespace DevMindFusionSuite\Factories;

use DevMindFusionSuite\Interfaces\IFactory;
use DevMindFusionSuite\Interfaces\PluginBase;

/**
 * Class PluginFactory
 *
 * This class implements the IFactory interface to create instances of plugins.
 * It ensures that the provided class name exists, is a subclass of PluginBase,
 * and that the arguments are provided as an array.
 *
 * @package DevMindFusionSuite\Factories
 */
class PluginFactory implements IFactory
{
    /**
     * Creates an instance of a plugin.
     *
     * @param string $className The fully qualified class name of the plugin to create.
     *                          Must be a subclass of PluginBase.
     * @param array $args An array of arguments required for creating the plugin instance.
     *                    Must be an array.
     * @return PluginBase The created plugin instance.
     * @throws \InvalidArgumentException If the arguments are not provided as an array.
     * @throws \InvalidArgumentException If the class does not exist.
     * @throws \InvalidArgumentException If the class is not a subclass of PluginBase.
     * @inheritdoc
     */
    public function create(string $className, array $args) : PluginBase
    {
        if (!is_array($args)) {
            throw new \InvalidArgumentException('No arguments provided');
        }

        if (!class_exists($className)) {
            throw new \InvalidArgumentException('Class does not exist');
        }

        if (!is_subclass_of($className, PluginBase::class)) {
            throw new \InvalidArgumentException('Class is not a subclass of PluginBase');
        }

        return new $className(...$args);
    }
}
