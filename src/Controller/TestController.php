<?php

namespace App\Controller;

use App\Entity\TestModel;
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

    /**
     * @Route("/Test/Save");
     * @Method({"GET"})
     */
    public function Save()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $test = new TestModel();
        $test->setValue = 'Test Value';

        $entityManager->persist($test);

        $entityManager->flush();

        return new Response('Data saved ID: '.$test->getId());
    }
}
