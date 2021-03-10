<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Home/index.html');
    }

    // Per prova ho aggiunto questa funzione
    // Il nome dell'azione viene trovato automaticamente
    // togliendo "Action" dalla funzione
    public function indexxAction()
    {
        View::renderTemplate('Home/indexx.html');
    }
}
