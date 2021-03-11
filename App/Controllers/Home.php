<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\User;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends \Core\Controller
{

    /**
     * Before filter. Return false to stop the action from executing.
     *
     * @return void
     */
    protected function before()
    {
        echo "<h1>";
    }

    protected function after()
    {
        echo "</h1>";
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        echo User::getConstHello();
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
