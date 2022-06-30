<?php
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:5001/summarize-text',
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POSTFIELDS => '',
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_FAILONERROR => true,
        ));
        
        $response = curl_exec($curl);
        $err_msg  = curl_error($curl);
        curl_close($curl);
        if ( $err_msg ) {
            echo 'cURL Error #:' . $err_msg;
        }
        else {echo $response;
        }
?>        
    
    
    
    
