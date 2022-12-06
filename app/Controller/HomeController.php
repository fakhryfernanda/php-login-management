<?php

namespace fakhryfernanda\PHP\Login\Management\Controller;

use fakhryfernanda\PHP\Login\Management\App\View;

class HomeController
{
    function index() {
        View::render('Home/index', [
            "title" => "PHP Login Management"
        ]);
    }
}