<?php
namespace Gantry\Admin\Controller\Html;

use Gantry\Component\Controller\HtmlController;

class Updates extends HtmlController
{
    public function index()
    {
        return $this->container['admin.theme']->render('@gantry-admin/updates.html.twig');
    }
}
