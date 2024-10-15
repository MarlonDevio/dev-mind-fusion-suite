<?php

namespace DevMindFusionSuite\BulkMyWooVariations\App\Interfaces;

interface IRepository
{
    /**
     * Get the repository data.
     *
     * @return array The repository data.
     */
    public function get(): array;

    /**
     * Set the repository data.
     *
     * @param IModel[] $object The object to set.
     */
    public function set(array $object): void;
}
