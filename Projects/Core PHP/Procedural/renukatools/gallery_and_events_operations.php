<?php

/*    include('include/header.php');*/
    
	$task = $_REQUEST['task'];


        $StandardToolDir = "include/img/Standard Tools/";
        $StandardToolFiles = array_diff( scandir($StandardToolDir,1), array(".", "..") );

        $CustomizedToolDir = "include/img/Customized Tools/";
        $CustomizedToolFiles = array_diff( scandir($CustomizedToolDir,1), array(".", "..") );

        $OtherProductsDir = "include/img/Image Gallery of Other Products/";
        $OtherProductsFiles = array_diff( scandir($OtherProductsDir,1), array(".", "..") );

        $EventsExibhition1 = "include/img/Events/A/";
        $EventsExibhition1Files = array_diff( scandir($EventsExibhition1,1), array(".", "..") );

        $EventsExibhition2 = "include/img/Events/B/";
        $EventsExibhition2Files = array_diff( scandir($EventsExibhition2,1), array(".", "..") );

        $EventsExibhition3 = "include/img/Events/C/";
        $EventsExibhition3Files = array_diff( scandir($EventsExibhition3,1), array(".", "..") );

        $EventsExibhition4 = "include/img/Events/D/";
        $EventsExibhition4Files = array_diff( scandir($EventsExibhition4,1), array(".", "..") );

        $EventsExibhition5 = "include/img/Events/E/";
        $EventsExibhition5Files = array_diff( scandir($EventsExibhition5,1), array(".", "..") );



if ($task == "standard_tools_data") 
{	

	 $standard_tools_data = "<div class='row gallery-sub-menu'>";

	 for($i=0;$i<sizeof($StandardToolFiles);$i++){  

     $standard_tools_data .= "<div class='col-md-3' style='margin-bottom: 15px;' ><a class='lightbox' href='".$StandardToolDir.$StandardToolFiles[$i]."' ><img src='".$StandardToolDir.$StandardToolFiles[$i]."' style='width: 100%;height: 100%;cursor: zoom-in;'></a></div>";

 	}

     $standard_tools_data .="</div>";


    echo "standard_tools~".$standard_tools_data;


}


if ($task == "customized_tools_data") 
{	

	 $customized_tools_data = "<div class='row gallery-sub-menu'>";

	 for($i=0;$i<sizeof($CustomizedToolFiles);$i++){  

     $customized_tools_data .= "<div class='col-md-3' style='margin-bottom: 15px;' ><a class='lightbox' href='".$CustomizedToolDir.$CustomizedToolFiles[$i]."' ><img src='".$CustomizedToolDir.$CustomizedToolFiles[$i]."' style='width: 100%;height: 100%;cursor: zoom-in;'></a></div>";

    }	
     $customized_tools_data .="</div>";


    echo "customized_tools~".$customized_tools_data;


}



if ($task == "other_products_data") 
{   

     $other_products_data = "<div class='row gallery-sub-menu'>";

     for($i=0;$i<sizeof($OtherProductsFiles);$i++){  

     $other_products_data .= "<div class='col-md-3' style='margin-bottom: 15px;' ><a class='lightbox' href='".$OtherProductsDir.$OtherProductsFiles[$i]."' ><img src='".$OtherProductsDir.$OtherProductsFiles[$i]."' style='width: 100%;height: 100%;cursor: zoom-in;'></a></div>";

    }   
     $other_products_data .="</div>";


    echo "other_products~".$other_products_data;


}



if ($task == "events_exibhition1") 
{   

     $events_exibhition1 = "<div class='row gallery-sub-menu'>";

     for($i=0;$i<sizeof($EventsExibhition1Files);$i++){  

     $events_exibhition1 .= "<div class='col-md-3' style='margin-bottom: 15px;' ><a class='lightbox' href='".$EventsExibhition1.$EventsExibhition1Files[$i]."' ><img src='".$EventsExibhition1.$EventsExibhition1Files[$i]."' style='cursor: zoom-in;' ></a></div>";

    }   
     $events_exibhition1 .="</div>";


    echo "exibhition1~".$events_exibhition1;

}


if ($task == "events_exibhition2") 
{   

     $events_exibhition2 = "<div class='row gallery-sub-menu'>";

     for($i=0;$i<sizeof($EventsExibhition2Files);$i++){  

     $events_exibhition2 .= "<div class='col-md-3' style='margin-bottom: 15px;' ><a class='lightbox' href='".$EventsExibhition2.$EventsExibhition2Files[$i]."' ><img src='".$EventsExibhition2.$EventsExibhition2Files[$i]."' style='width: 100%;height: 100%;cursor: zoom-in;'></a></div>";

    }   
     $events_exibhition2 .="</div>";


    echo "exibhition2~".$events_exibhition2;

}


if ($task == "events_exibhition3") 
{   

     $events_exibhition3 = "<div class='row gallery-sub-menu'>";

     for($i=0;$i<sizeof($EventsExibhition3Files);$i++){  

     $events_exibhition3 .= "<div class='col-md-3' style='margin-bottom: 15px;' ><a class='lightbox' href='".$EventsExibhition3.$EventsExibhition3Files[$i]."' ><img src='".$EventsExibhition3.$EventsExibhition3Files[$i]."' style='width: 100%;height: 100%;cursor: zoom-in;'></a></div>";

    }   
     $events_exibhition3 .="</div>";


    echo "exibhition3~".$events_exibhition3;

}


if ($task == "events_exibhition4") 
{   

     $events_exibhition4 = "<div class='row gallery-sub-menu'>";

     for($i=0;$i<sizeof($EventsExibhition4Files);$i++){  

     $events_exibhition4 .= "<div class='col-md-3' style='margin-bottom: 15px;' ><a class='lightbox' href='".$EventsExibhition4.$EventsExibhition4Files[$i]."' ><img src='".$EventsExibhition4.$EventsExibhition4Files[$i]."' style='width: 100%;height: 100%;cursor: zoom-in;'></a></div>";

    }   
     $events_exibhition4 .="</div>";


    echo "exibhition4~".$events_exibhition4;

}


if ($task == "events_exibhition5") 
{   

     $events_exibhition5 = "<div class='row gallery-sub-menu'>";

     for($i=0;$i<sizeof($EventsExibhition5Files);$i++){  

     $events_exibhition5 .= "<div class='col-md-3' style='margin-bottom: 15px;' ><a class='lightbox' href='".$EventsExibhition5.$EventsExibhition5Files[$i]."' ><img src='".$EventsExibhition5.$EventsExibhition5Files[$i]."' style='cursor: zoom-in;' ></a></div>";

    }   
     $events_exibhition5 .="</div>";


    echo "exibhition5~".$events_exibhition5;

}





?>