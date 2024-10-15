<?php

namespace DevMindFusionSuite\BulkMyWooVariations\App\Controllers;

use DevMindFusionSuite\BulkMyWooVariations\App\Interfaces\IController;
use DevMindFusionSuite\BulkMyWooVariations\App\Interfaces\IModel;
use DevMindFusionSuite\BulkMyWooVariations\App\Interfaces\IView;

/**
 * Class Controller
 * @package DevMindFusionSuite\Controllers
 */
class Controller implements IController
{
    /**
     * @var IModel
     */
    private IModel $model;
    
    /**
     * @var IView
     */
    private IView $view;

    /**
     * Controller constructor.
     * @param IModel $model
     * @param IView $view
     */
    public function __construct(IModel $model, IView $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function init(): void
    {
    }

    /**
     * @param IModel $model
     */
    public function setModel(IModel $model): void
    {
        $this->model = $model;
    }
    
    /**
     * @param IView $view
     */
    public function setView(IView $view): void
    {
        $this->view = $view;
    }
}
