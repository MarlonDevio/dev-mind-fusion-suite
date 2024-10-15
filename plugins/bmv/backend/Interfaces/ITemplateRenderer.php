<?php

namespace DevMindFusionSuite\BulkMyWooVariations\App\Interfaces;

/**
 * Interface ITemplateRenderer
 *
 * @package DevMindFusionSuite\Interfaces
 */
interface ITemplateRenderer
{
    /**
     * Render a template file with the given data.
     *
     * @param string $template The template file to render.
     * @param array $data The data to pass to the template.
     *
     * @return string The rendered template.
     */
    public function render(string $template, array $data = []): string;
}
