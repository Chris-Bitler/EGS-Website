<?php

namespace AppBundle\Controller\Subgroups;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller for the Blizzard Community page
 * @author Christopher Bitler <webmaster@egsrit.com>
 */
class BlizzardController extends Controller
{

    /**
     * Return the Symfony response for the page
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('subgroups/blizzard.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'top_type' => 'communities',
            'sub_type' => 'blizzard',
            'board' => $this->getBoard()
        ]);
    }

    /**
     * Get the e-board to show on the page
     * Each member of the eboard should be marked with a name, position, email, username, and an image
     * @return array The list of people on the eboard
     */
    private function getBoard() {
        return array(
            [
                'name' => 'Jacon Wolf',
                'position' => 'E-Board Member',
                'username' => 'yodimaru',
                'img' => 'images/Subgroup/Blizzard/Jacob.jpg'
            ],
            [
                'name' => 'none',
                'position' => '',
                'username' => '',
                'img' => ''
            ]
        );
    }
}
