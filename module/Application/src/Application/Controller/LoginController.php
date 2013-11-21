<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class LoginController extends AbstractActionController {

    public function indexAction() {
        $viewModel = new ViewModel();
        $this->layout('layout/blank');
        return $viewModel;
    }

}
