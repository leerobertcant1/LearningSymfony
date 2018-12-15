<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    /**
     * @Route("/");
     */
    public function GetHtmlPage()
    {
        return new Response('<html>
                                <body>
                                    <h1>Hi!</h1>
                                </body>
                            </html>');
    }
}
