
<?php

namespace DevMindFusionSuite\BulkMyWooVariations\Interfaces;

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
     * @return array The model data.
     */
    public function get(): array;

    /**
     * Set the model data.
     *
     * @param Object $object The object to set.
     */
    public function set(Object $object): void;
}
