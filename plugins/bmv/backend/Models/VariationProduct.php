<?php

namespace DevMindFusionSuite\BulkMyWooVariations\App\Models;

use DevMindFusionSuite\BulkMyWooVariations\App\Interfaces\IModel;
use Exception;
use InvalidArgumentException;
use WC_Product_Variable;

class VariationProduct implements IModel
{
    private WC_Product_Variable $product;

    public function __construct(WC_Product_Variable $product)
    {
        $this->product = $product;
    }

    /**
     * Get the model data.
     *
     * {@inheritDoc}
     * @return WC_Product_Variable The model data.
     * @throws Exception
     */
    public function get(): WC_Product_Variable
    {
        if ($this->product === null) {
            throw new Exception('No product set.');
        }
        return $this->product;
    }

    /**
     * Set the model data.
     *
     * @throws InvalidArgumentException

     * @param object $object The object to set.
     */
    public function set(object $object): void
    {
        if (!($object instanceof WC_Product_Variable)) {
            throw new InvalidArgumentException('Invalid object type.');
        }
        $this->product = $object;
    }
}
