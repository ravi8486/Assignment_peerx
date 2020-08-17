<?php
    function ticketPOST($department,$category,$subject,$description,$priority,$name,$email){
    $ticket_data=array(
        "subCategory"=>$department,
        "description"=>$description,
        "category"=>$category,
        "priority"=>$priority,
        "email"=>$email,
        "subject"=>$subject,
        "channel"=>$name,
        "status"=>"Open"
    );
    $auth_token = '67013ab3960787bcf3affae67e649fc0a789'; //your_auth_token
    $org_id=2389290; //your_organization_id
    $headers=array(
            "Authorization: $auth_token",
            "orgId: $org_id",
            "contentType: application/json; charset=utf-8",
    );
    
    $url="https://desk.zoho.com/api/v1/tickets";
    
    $ticket_data=(gettype($ticket_data)==="array")? json_encode($ticket_data):$ticket_data;
    
    $ch= curl_init($url);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($ch,CURLOPT_POST,TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$ticket_data); //convert ticket data array to json
    
    $response= curl_exec($ch);
    $info= curl_getinfo($ch);
    
    if($info['http_code']==200){
		echo "<script>alert('Request Successful, Ticket Genearate');</script>";
    }
    else{
		echo "<script>alert('Request not successful. Response code : ".$info['http_code']."');</script>";
		echo "Response : $response";
    }
    
    curl_close($ch);
    }
?>
