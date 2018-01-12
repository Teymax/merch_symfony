<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 12.01.2018
 * Time: 10:39
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class TaskSuccessController
{
    public function taskSuccess () {
        return new Response(
            '<html><body>Success</body></html>'
        );
    }
}