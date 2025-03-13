<?php

    session_start();

    include('include/db_config.php');

    error_reporting(0);
    


    
    $aColumns = array('EmployeeId','EmployeeId','EmployeeFirstName','EmployeeLastName','EmployeeDesignation','EmployeeMobileNumber','EmployeeEmailId','EmployeePassword','LastUpdated');
    /* Indexed column (used for fast and accurate table cardinality) */
    $sIndexColumn = "EmployeeId";
    
    /* DB table to use */
       
    $sTable = "CRM_Employee";
    /* Database connection information */
        
    $sWhere = "";
  


            $sQuery = "";
            $sLimit = "";
            if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
            {
                    $sLimit = "LIMIT ".mysqli_real_escape_string($con,$_GET['iDisplayStart'] ).", ".
                            mysqli_real_escape_string($con, $_GET['iDisplayLength'] );
            }
            
        /*
            * Ordering
            */
            $sOrder="ORDER BY LastUpdated DESC";
            if (isset( $_GET['iSortCol_0']))
            {
                    $sOrder = "ORDER BY ";
                    for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
                    {
                            if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
                            {
                                    $sOrder .= "`".$aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."` ".
                                            mysqli_real_escape_string($con, $_GET['sSortDir_'.$i] ) .", ";
                            }
                    }
                    $sOrder = substr_replace( $sOrder, "", -2 );
                    if ( $sOrder == "ORDER BY" )
                    {
                            $sOrder = "";
                    }
            }                  
 
            //search
            if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" )
            {
                     if($sWhere == "")
                         $sWhere .= " WHERE (";
                     else 
                         $sWhere .= " AND (";

                     for ( $i=0 ; $i<count($aColumns) ; $i++ )
                     {
                             $sWhere .= "`".$aColumns[$i]."` LIKE '%".mysqli_real_escape_string($con, $_GET['sSearch'] )."%' OR ";
                     }
                     $sWhere = substr_replace( $sWhere, "", -3 );
                     $sWhere .= ')';
             }

             /* Individual column filtering */
             for ( $i=0 ; $i<count($aColumns) ; $i++ )
             {
                     if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' )
                     {
                             if ( $sWhere == "" )
                             {
                                     $sWhere = "WHERE ";
                             }
                             else
                             {
                                     $sWhere .= " AND ";
                             }
                             $sWhere .= "`".$aColumns[$i]."` LIKE '%".mysqli_real_escape_string($con,$_GET['sSearch_'.$i])."%' ";
                     }
             }
             /*
             * SQL queries
             * Get data to display
             */
               $sQuery = "SELECT SQL_CALC_FOUND_ROWS `".str_replace(" , ", " ", implode("`, `", $aColumns))."`                             
                        FROM   $sTable
                        $sWhere
                        $sOrder
                        $sLimit
                        ";
    //echo $sQuery;         
                $rResult = mysqli_query($con, $sQuery);
    //echo $rResult;
                /* Data set length after filtering */
                $sQuery = "SELECT FOUND_ROWS()";
                $rResultFilterTotal = mysqli_query($con, $sQuery);
                $aResultFilterTotal = mysqli_fetch_array($rResultFilterTotal,MYSQLI_ASSOC);
                $iFilteredTotal = $aResultFilterTotal[0];

                /* Total data set length */
                $sQuery = "SELECT COUNT(`".$sIndexColumn."`)FROM  $sTable";
                $rResultTotal = mysqli_query($con, $sQuery);
                $aResultTotal = mysqli_fetch_array($rResultTotal,MYSQLI_ASSOC);
                $iTotal = $aResultTotal[0];


                /*
                * Output
                */
                $output = array(
                        "sEcho" => intval($_GET['sEcho']),
                        "iTotalRecords" => $iTotal,
                        "iTotalDisplayRecords" => $iFilteredTotal,
                        "aaData" => array()
                );

                while ( $aRow = mysqli_fetch_array( $rResult,MYSQLI_ASSOC ) )
                {
                        $row = array();
                        for ( $i=0 ; $i<count($aColumns) ; $i++ )
                        {
                                if ( $aColumns[$i] == "version" )
                                {
                                        /* Special output formatting for 'version' column */
                                        $row[] = ($aRow[ $aColumns[$i] ]=="0") ? '-' : $aRow[ $aColumns[$i] ];
                                }
                                else if ( $aColumns[$i] != ' ' )
                                {
                                        /* General output */
                                        $row[] = $aRow[ $aColumns[$i] ];

                                }
                        }
                        $output['aaData'][] = $row;

                }

                //echo $output; 
               echo json_encode( $output );
            

   
?>

                        
                        
                        