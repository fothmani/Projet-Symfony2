<?php

namespace Application\ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function __construct()
    {
        //include API facebook-sdk-php
        require_once('facebook.php');
        date_default_timezone_set("Indian/Reunion"); //You can add timezone in php.ini file
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
        $pattern = '/(repas du|menu du|repas du jour|menu du jour).*(lundi|mardi|mercredi|jeudi|vendredi|samedi|dimanche).*(\d).*(janvier|février|mars|avril|mai|juin|juillet|août|septembre|octobre|novembre|décembre)/i';
        //make a counter to take just the three last menus
        $i = 0;

        //build an array to store data of the first page
        $data = array();

        //build an array to retrieve menu's titles to display them in the panel heading

        $menuOfdays = array();
        foreach ($array["lilotregal"] as $pagefeed) {

            foreach ($pagefeed as $page) {

                if (isset($page['message']) && isset($page['created_time']) && preg_match($pattern, $page['message'], $matches)) {


                    $dates = date("Y/m/j", strtotime($page['created_time'] . "+1 day"));

                    $menuOfdays[$dates] = $matches['0'];

                    if ($dates == date("Y/m/d")) {

                        $menuOfdays[$dates] = "Menu d'aujourd'hui";

                    }

                    $data[] = $page['message'];

                    //take only the three last menus
                    if (++$i === 3) {
                        break;
                    }

                }

            }

        }
        $menuOfday = array_values($menuOfdays);


        $i = 0;
        //store the data of the second page
        $refine = array();
        //build an array to retrieve meal's titles to display them in the panel heading
        $mealOfdays = array();

        foreach ($array["649823778452363"] as $menus) {

            foreach ($menus as $menu) {

                if (isset($menu['message']) && isset($menu['created_time']) && preg_match($pattern, $menu['message'], $matches)) {

                    $dates2 = date("Y/m/j", strtotime($menu['created_time'] . "+1 day"));


                    $mealOfdays[] = $matches['0'];


                    if ($dates2 == date("Y/m/d")) {

                        $mealOfdays['0'] = "Repas d'aujourd'hui";

                    }

                    $refine[] = $menu['message'];

                    //take only the three last meals
                    if (++$i === 3) {

                        break;
                    }

                }

            }

        }


        return $this->render('ApplicationApplicationBundle:Default:index.html.twig', array(
            'data' => $data,
            'refine' => $refine,
            'menuOfday' => $menuOfday,
            'mealOfday' => $mealOfdays
        ));
    }


}
