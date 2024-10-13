<?php

namespace DevMindFusionSuite\BulkMyWooVariations\Interfaces;

/**
 * Interface IView
 *
 * @package DevMindFusionSuite\Interfaces
 */
interface IView
{
    /**
     * Display the view.
     *
     * @param ITemplateRenderer $templateRenderer The template renderer to use.
     */
    public function display(ITemplateRenderer $templateRenderer): void;
}
