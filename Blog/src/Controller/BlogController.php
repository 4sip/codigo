<?php
/**
 * Created by PhpStorm.
 * User: talk
 * Date: 26/10/2017
 * Time: 15:46
 */

namespace Blog\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BlogController extends AbstractActionController
{

    public function indexAction()
    {
       return new ViewModel();

    }

}