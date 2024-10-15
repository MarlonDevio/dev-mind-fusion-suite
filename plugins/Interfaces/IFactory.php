<?php

namespace DevMindFusionSuite\Interfaces;

/**
 * Interface IFactory
 *
 * This interface defines a factory pattern for creating objects.
 *
 * @package DevMindFusionSuite\Interfaces
 */
interface IFactory
{
    /**
     * Creates an object based on the provided arguments.
     *
     * @param array $args An array of arguments required for creating the object.
     * @return object The created object.
     */
    public function create(string $className, array $args) : object;
}
