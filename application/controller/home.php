<?php

session_start();

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller {

    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index() {

        $rental_units = $this->model->getAllRentalUnits();

        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function search() {
        if (isset($_POST["search"])) {
            $query = $this->model->search($_POST["search"]);
            require APP . 'view/_templates/header.php';
            require APP . 'view/home/search.php';
            require APP . 'view/_templates/footer.php';
        }
    }

}
