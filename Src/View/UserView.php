<?php

namespace SMAutoloader\View;

use SMAutoloader\Controller\UserController;

/**
 * @author Sulaiman Misri
 * @since 1.0
 */

class UserView
{
    public static function init()
    {
        echo UserController::init();
    }
}

UserView::init();
