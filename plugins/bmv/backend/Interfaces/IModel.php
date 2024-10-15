<?php

namespace DevMindFusionSuite\BulkMyWooVariations\App\Interfaces;

/**
 * Interface IModel
 *
 * @package DevMindFusionSuite\Interfaces
 */
interface IModel
{
    /**
     * Get the model data.
     *
     * @return array | object The model data.
     */
    public function get(): array | object | null;

    /**
     * Set the model data.
     *
     * @param object $object The object to set.
     */
    public function set(object $object): void;
}
