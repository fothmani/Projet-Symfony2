<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Displaying A Custom Facebook Page Feed Using The Facebook PHP SDK</title>
    
    <meta name="description" content="In this lab, we take a look at using the Facebook PHP SDK to connect to a Facebook app, retrieve the graph data from a Facebook page, and output it in a neat, nice looking format." />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <!--<link rel="stylesheet" href="css/base.css" />-->
    <!--<link rel="stylesheet" href="css/style.css" />-->

</head>

<body>


<?php
    /**
	 *
     * This is the link to pages graph facebook
     * Copying and pasting this into the browser url bar gives you a full graph of informations
     * which is very handy for browsing and seeing what exists in the array
     * Typing this into the url will get you the super array (graph) to analyze
     * https://graph.facebook.com/lilotregal/feed?access_token=1017499418312477|6Sbupa3xrdf8Rcs5EB-VzCJmO6A
	 *https://graph.facebook.com/649823778452363/feed?access_token=1017499418312477|6Sbupa3xrdf8Rcs5EB-VzCJmO6A
     */

    // include the facebook sdk
    require_once('resources/facebook-php-sdk-master/src/facebook.php');

    // connect to app
    $config = array();
    $config['appId'] = '1017499418312477';
    $config['secret'] = 'b8887afcd0172d566b624ae920065234';
    $config['fileUpload'] = false; // optional

    // instantiate
    $facebook = new Facebook($config);
	
    // set pages'id in an array()
//	$ids = array("lilotregal","649823778452363");
	//$id = array('ids'=>$ids);
    // get the page content
	//$pagefeed = array();	
	
    $pagefeed = $facebook->api("/feed?ids=lilotregal,649823778452363");
	$post = array();
	$date = array();
	foreach($pagefeed as $pages){
	$post[] = array_column($pages['data'],'message');				
				$date[] = array_column($pages['data'], 'created_time');
		//}	
	}
		
	print_r($date);
		
		$date = array();
		$i=0;
		/*foreach($post as $status){
			$data = array_walk_recursive($status,function find_menu($array,$string){
				
				
			}*/
			
		
	//		print_r($data);
			/*foreach($status as $st){
				$data_1 = strstr($st,"menu du jour");
				$data_2 = strstr($st,"menu du jour");
				if($data_1)||($data_2){
					$data[] = $st;
					$i++;					
				}
				echo ('<pre>');
				print_r($data);			
			echo ('</pre>');	
				}*/
		//	}
			
			
			/* if ($i == 3) {
                    break;
			 }*/
			
			
		
	
?>

<div id="wrapper">

<header>
    <div class="container clearfix">
        <div id="title">
            <h1>Menu Restaurant</h1>
        </div>
    </div>
</header>



<div id="main">
    <div class="container">
       
        
        <h1>Facebook Feed</h1>
       
                
    </div>
</div>

</div>

</body>
</html>
<?php
ob_flush();
?>