<?php

namespace DevMindFusionSuite\Interfaces;

use DevMindFusionSuite\Config;

/**
 * Class PluginBase
 *
 * This abstract class serves as a base for all plugins in the DevMindFusionSuite.
 * It provides common properties and methods that all plugins should have.
 *
 * @package DevMindFusionSuite\Interfaces
 */
abstract class PluginBase
{
    /**
     * @var string $name The name of the plugin.
     */
    private string $name;

    /**
     * @var ?string $description The description of the plugin.
     */
    private ?string $description;

    /**
     * @var ?string $version The version of the plugin.
     */
    private ?string $version;

    /**
     * @var ?string $author The author of the plugin.
     */
    private ?string $author;

    /**
     * @var string $path The file path to the plugin.
     */
    private string $path;

    /**
     * @var string $uri The URI to the plugin.
     */
    private string $uri;

    /**
     * PluginBase constructor.
     *
     * @param string $name The name of the plugin.
     * @param string $path The file path to the plugin.
     * @param string $uri The URI to the plugin.
     * @param ?string $description The description of the plugin.
     * @param ?string $version The version of the plugin.
     * @param ?string $author The author of the plugin.
     */
    public function __construct(
        string $name,
        string $path,
        string $uri,
        ?string $description = null,
        ?string $version = null,
        ?string $author = null
    ) {
        $this->name = $name;
        $this->setPath($path);
        $this->setUri($uri);
        $this->description = $description;
        $this->version = $version;
        $this->author = $author;
    }

    /**
     * Initialize the plugin.
     *
     * This method must be implemented by all subclasses.
     *
     * @return void
     */
    abstract public function init(): void;

    // Getters and Setters

    /**
     * Get the name of the plugin.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the description of the plugin.
     *
     * @return ?string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Get the version of the plugin.
     *
     * @return ?string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Get the author of the plugin.
     *
     * @return ?string
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * Get the file path to the plugin.
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Get the URI to the plugin.
     *
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * Set the name of the plugin.
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Set the description of the plugin.
     *
     * @param ?string $description
     * @return void
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Set the version of the plugin.
     *
     * @param ?string $version
     * @return void
     */
    public function setVersion(?string $version): void
    {
        $this->version = $version;
    }

    /**
     * Set the author of the plugin.
     *
     * @param ?string $author
     * @return void
     */
    public function setAuthor(?string $author): void
    {
        $this->author = $author;
    }

    /**
     * Set the file path to the plugin.
     *
     * @param string $path
     * @return void
     */
    private function setPath(string $path): void
    {
        $this->path = Config::PLUGINS_DIR . rtrim($path, '/') . '/';
    }

    /**
     * Set the URI to the plugin.
     *
     * @param string $uri
     * @return void
     */
    private function setUri(string $uri): void
    {
        $this->uri = Config::PLUGINS_URI . rtrim($uri, '/') . '/';
    }

}
