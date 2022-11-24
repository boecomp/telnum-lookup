<?php
/**
 * The base configuration for WordPress
 *
 * The telnum.php is used to lookup phone numbers via the tel-search.ch API
 *
 * 
 */

   /** Sets up telnum vars and included files. */
   require_once('settings.php');

   $lookup = $_GET['suche'];                                        
   $uri = 'https://tel.search.ch/api/?was='.$lookup.'&key='.$key;
   $data = file_get_contents($uri);            
   $xml = new SimpleXmlElement($data);          
   $i = 0;

   /** Iterate through data*/                                                              
   foreach ($xml->entry as $entry)
      {
      $namespaces = $entry->getNameSpaces(true);
      $telnum = $entry->children($namespaces['tel']);
         
         /** use direct tel:var   */                                      
         $name = $telnum->name;                             
         $firstname = $telnum->firstname;                   
         $street = $telnum->street;                         
         $streetno = $telnum->streetno;                     
         $zip = $telnum->zip ;                              
         $city = $telnum->city ;                            
         $phone = $telnum->phone;                           
         if($i++ == 0)
            
         /** Sets up telnum output format. */

         {                                 
            echo $name.' '.$firstname;                       
         }
      }                                             
 ?>