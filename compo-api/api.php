<?php


// 



// [
//     {
//       "categoryId": "2137",
//       "data": {
//         "425": "WC2H 7LT",
//         "943": "7786",
//         "1452": "13683",
//         "1458": "13702",
//         "email": "sesotawulu@mailinator.com",
//         "companyName": "Cain Gilbert Plc",
//         "segment": "3",
//         "firstname": "Lila",
//         "lastname": "Frye",
//         "phone": "0130926784"
//       }
//     }
//   ]

if (!empty($_POST)) {
    $postArray = array();
   /*  $postArray[] = array(

        "categoryId" => "7214",
        "data" => array(

            "184" => $_POST["184"],
            "943" => $_POST["943"],
            "425" => $_POST["425"],
            "1452" => $_POST["1452"],
            "email" => $_POST["email"],
            "companyName" => $_POST["companyName"],
            "segment" => $_POST["segment"],
            "firstname" => $_POST["firstname"],
            "lastname" => $_POST["lastname"],
            "phone" => $_POST["phone"],
            "address" => $_POST["address"]

        )
    ); */
	
	
	    $postArray[] = array(

        "categoryId" => 7214,
        "data" => array(

            "184" => 1017,
            "185" => 1022,
            "12" => "75001",
           
            "email" => "test@example.com",
			
            "companyName" => "Test ",
            "segment" => 1,
            "firstname" => "fname",
            "lastname" => "lname",
            "phone" => "0130926784",
            

        )
    );


print_r($postArray);

echo "<br><br><br>";


    $json = json_encode($postArray);


    //echo $json;



    $ch = curl_init();
    $headers  = [
        'Content-Type: application/json',
        'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjMyLCJleHAiOjI1MjQ2MDgwMDAsImlzcyI6IklqTXlYMFJCVkVGUFRrUkZUVUZPUkY4ek1pSSJ9._2 uiQp1aayHoOS0eldjfeOESibpuBMQ7rYq1E7R1Ng0'
    ];
    $url = "https://api.companeo.com/api/v1/partners/create_rfq";
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,  $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result     = curl_exec($ch);
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);




    if ($statusCode == 200) {
        // if you need to process the response from the API further
        $response = json_decode($result, true);

        print_r($response);
    } else {
        die("Error: call to URL $url failed with status $statusCode, response $result, curl_error " . curl_error($ch) . ", curl_errno " . curl_errno($ch));
    }


    // Close cURL resource
    curl_close($ch);
} else {
    echo "form not filled.";
}
