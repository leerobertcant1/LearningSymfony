<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//This controller routes to a Twig file which is part
//of a templating Engine just like Express.
class TestController extends Controller
{
    /**
     * @Route("/");
     * @Method({"GET"})
     */
    public function GetHtmlPage()
    {
        /*return new Response('<html>
                                <body>
                                    <h1>Hi!</h1>
                                </body>
                            </html>');*/

        //Arrays allows data to be passed to the view
        return $this->render('test/test.html.twig',
                            array('data' => 'Passed data'));
    }
}
