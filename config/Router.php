<?php

class Router {
    public function __construct() {}

    public function handleRequest(array $get): void {
        $pageController = new PageController(); // Instancier PageController une seule fois

        if (isset($_GET['route']) && $_GET['route'] === "a-propos") {
            $pageController->about();
        } else if (isset($_GET['route']) && $_GET['route'] === "contact") {
            $pageController->contact();
        } else if (!isset($_GET['route'])) {
            $pageController->home();
        } else {
            $pageController->p404();
        }
    }
}
?>
