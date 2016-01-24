<?php

namespace Application\ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function __construct()
    {
        //include API facebook-sdk-php
        require_once('facebook.php');
    }

    public function indexAction()

    {

        // connect to app
        $config = array();
        $config['appId'] = '1017499418312477';
        $config['secret'] = 'b8887afcd0172d566b624ae920065234';
        $config['fileUpload'] = false; // optional

        // instantiate
        $facebook = new \Facebook($config);

        //call the API to retrieve data from facebook
        $array = $facebook->api("/feed?ids=lilotregal,649823778452363");

        //build a pattern to use it in regex in order to retrieve only menus from the posts
        $pattern = '/(repas du|menu du|repas du jour|menu du jour).*(lundi|mardi|mercredi|jeudi|vendredi|samedi|dimanche).(\d).*(janvier|février|mars|avril|mai|juin|juillet|août|septembre|octobre|novembre|décembre)/i';

        //make a counter to take just the three last menus
        $i = 0;

        //build an array to store the first page's menus in it
        $data = array();
        $menuOfdays = array();
        //$dates = array();
        foreach ($array["lilotregal"] as $pagefeed) {

            foreach ($pagefeed as $page) {

                if (isset($page['message']) && isset($page['created_time']) && preg_match($pattern, $page['message'], $matches)) {


                    $dates = date("Y/m/j", strtotime($page['created_time'] . "+1 day"));

                    if ($dates == date("Y/m/d")) {
                        $menuOfdays[] = $matches['0'];
                        $menuOfdays['0'] = "Menu du jour";
                    } else {
                        $menuOfdays[] = $matches[0];
                    }

                    $data[] = $page['message'];

                    if (++$i === 3) {
                        break;
                    }

                }


            }


        }


        //store the second page's menus
        $i = 0;
        $refine = array();
        $mealOfdays = array();

        foreach ($array["649823778452363"] as $menus) {

            foreach ($menus as $menu) {

                if (isset($menu['message']) && isset($menu['created_time']) && preg_match($pattern, $menu['message'], $matches)) {

                    $dates = date("Y/m/j", strtotime($menu['created_time'] . "+1 day"));

                    if ($dates == date("Y/m/d")) {

                        $mealOfdays[] = $matches['0'];

                        $mealOfdays['0'] = "Repas d'aujourd'hui";

                    } else {

                        $mealOfdays[] = $matches[0];
                    }

                    $refine[] = $menu['message'];

                    if (++$i === 3) {

                        break;
                    }

                }

            }

        }

        return $this->render('ApplicationApplicationBundle:Default:index.html.twig', array(
            'data' => $data,
            'refine' => $refine,
            'menuOfdays' => $menuOfdays,
            'mealOfdays' => $mealOfdays
        ));
    }


}
