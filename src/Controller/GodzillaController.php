<?php

namespace App\Controller;

use App\Entity\Godzilla;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Rest\RouteResource("Godzilla")
 */
class GodzillaController extends AbstractFOSRestController
{
    /**
     * @param Godzilla $godzilla
     *
     * @return View
     */
    public function getAction(Godzilla $godzilla): View
    {
        return new View([$godzilla], Response::HTTP_OK);
    }

    /**
     * @return View
     */
    public function cgetAction(): View
    {
        $godzillas = $this->getDoctrine()
            ->getRepository(Godzilla::class)
            ->findAll();

        return new View($godzillas, Response::HTTP_OK);
    }
}
