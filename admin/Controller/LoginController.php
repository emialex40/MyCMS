<?php
/**
 * Created by PhpStorm.
 * User: emial
 * Date: 25.03.2019
 * Time: 22:23
 */

namespace Admin\Controller;


class LoginController extends AdminController
{
    public function form()
    {
        $this->view->render('login');
    }
}