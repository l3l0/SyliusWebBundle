<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Frontend main controller.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class FrontendController extends Controller
{
    /**
     * Store front page.
     *
     * @return Response
     */
    public function homepageAction()
    {
        return $this->render('SyliusWebBundle:Frontend:homepage.html.twig');
    }
}
