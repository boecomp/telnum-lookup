<?php
/**
 * The base configuration for WordPress
 *
 * The telnum.php is used to lookup phone numbers via the tel-search.ch API
 *
 */

   /** Sets up telnum vars and included files. */
   //require_once('settings.php'); 

   $lookup = $_GET['suche'];   
   $key = $_GET['key'];                                     
   $uri = 'https://tel.search.ch/api/?was='.$lookup.'&key='.$key;
   $data = file_get_contents($uri);            
   $xml = new SimpleXmlElement($data);          
   $i = 0;

   if ($lookup = '+anonymous') {
      /** if anonymous is sent, an empty echo will be sent */ 
      echo ''; 
   } else 
         {

         /** Iterate through data */                                                              
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
               /** if tel-search found an entry the data will be sent as "Name Firstname" */                              
                  echo $name.' '.$firstname.' '.$key.' '.$lookup;                       
               }
            } 
         }                                            
 ?>