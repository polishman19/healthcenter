<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {
        return ['message' => 'Hello World!'];
    }

    public function patientAction() {
        $viewModel = new ViewModel();

        return $viewModel;
    }

    public function scheduleAction() {
        $viewModel = new ViewModel();

        return $viewModel;
    }

    public function diagnosisAction() {
        $viewModel = new ViewModel();

        return $viewModel;
    }

}
