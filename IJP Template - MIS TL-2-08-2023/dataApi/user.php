<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

//=======================Admin Management Api=========================

//------------------>Get All Answers<------------------------
$app->GET('/api/all/sme-ijp/31/08/2021', function(Request $request,Response $response){
    
        $sql="SELECT * FROM `qc_pkt_19_8_2021` ORDER BY `vid` DESC";
        try{
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $users=$stmt->fetchAll(PDO::FETCH_OBJ);
            $db=null;
            echo json_encode($users);
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});


//------------------>Add New Answers SME-IJP-SET-A-31/08/2021<------------------------
$app->Post('/api/new/sme-ijp-a/31/08/2021', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
        $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
        $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
        $q14 = 'HYBRID : '.$mysqli->real_escape_string($_REQUEST['q14a']).',W8 : '.$mysqli->real_escape_string($_REQUEST['q14b']).',IP - POF -  21870 T-Mobile PSA 2021 May-Jun Wireline (ENT) - 177 Leads : '.$mysqli->real_escape_string($_REQUEST['q14c']).',TGIF : '.$mysqli->real_escape_string($_REQUEST['q14d']).',Telemarketing : '.$mysqli->real_escape_string($_REQUEST['q14e']).',W8_(AK) 2021 Q1-Vonage HQL : '.$mysqli->real_escape_string($_REQUEST['q14f']).',HQL survey : '.$mysqli->real_escape_string($_REQUEST['q14g']).',Whitepaper : '.$mysqli->real_escape_string($_REQUEST['q14h']);
        $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
        $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
        $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    
        $sql="INSERT INTO `sme-ijp_pkt_31_8_2021`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17',' $eid','$ename','$edept')";
        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});

//------------------>Add New Answers SME-IJP-SET-B-31/08/2021<------------------------
$app->Post('/api/new/sme-ijp-b/31/08/2021', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = 'EOD -'.$mysqli->real_escape_string($_REQUEST['q3a']).',COB -'.$mysqli->real_escape_string($_REQUEST['q3b']).',FTE -'.$mysqli->real_escape_string($_REQUEST['q3c']).',TAL -'.$mysqli->real_escape_string($_REQUEST['q3d']);
        $q4 = 'Delaware -'.$mysqli->real_escape_string($_REQUEST['q4a']).',Minnesota -'.$mysqli->real_escape_string($_REQUEST['q4b']).',Maine -'.$mysqli->real_escape_string($_REQUEST['q4c']).',Wyoming -'.$mysqli->real_escape_string($_REQUEST['q4d']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
        $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
        $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
        $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
        $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    
        $sql="INSERT INTO `sme-ijp-b_pkt_31_8_2021`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15',' $eid','$ename','$edept')";
        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});


//------------------>Add New Answers QA-PKT-15/09/2021<------------------------
$app->Post('/api/new/qa-pkt/15/09/2021', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
        $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
        $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
        $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
        $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
        $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
        $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
        $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
        $q19 = $mysqli->real_escape_string($_REQUEST['q19']);
        $q20 = $mysqli->real_escape_string($_REQUEST['q20']);
    
        $sql="INSERT INTO `qa_pkt_15_9_2021`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `ques18`, `ques19`, `ques20`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$eid','$ename','$edept')";

        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});

//------------------>Add New Answers SME-IJP-PKT-22/09/2021<------------------------
$app->Post('/api/new/sme-ijp-pkt/22/09/2021', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
        $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
        $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
        $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
        $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
        $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
        $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
        $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
        $q19 = $mysqli->real_escape_string($_REQUEST['q19']);
        $q20 = $mysqli->real_escape_string($_REQUEST['q20']);
    
        $sql="INSERT INTO `sme_ijp_pkt_22_9_2021`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `ques18`, `ques19`, `ques20`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$eid','$ename','$edept')";

        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});

//------------------>Add New Answers Vaccination Drive<------------------------
$app->Post('/api/new/vaccination', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $mob = $mysqli->real_escape_string($_REQUEST['contact']);
        $company = $mysqli->real_escape_string($_REQUEST['company']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    
        $sql="INSERT INTO `vaccin_survey`(`q1`, `q2`, `q3`, `q4`, `q5`, `empid`, `ename`, `emob`,`company`, `edept`) VALUES ('$q1','$q2','$q3','$q4','$q5','$eid','$ename','$mob','$company','$edept')";
        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            if ($e->getCode() == '23000')
            {
                echo "Duplicate Entry not Allowed";
            }
            else
            {
                echo '{"error":{"text":'.$e->getMessage().'}';
            }
        }
});

//------------------>Add New Answers Food<------------------------
$app->Post('/api/new/food-survey/23/10/2021', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $_REQUEST['eid'];
        $company = $mysqli->real_escape_string($_REQUEST['company']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    
        $sql="INSERT INTO `food_survey`(`ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans6`, `empid`, `empname`, `company`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$eid','$ename','$company')";
        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            if ($e->getCode() == '23000')
            {
                echo "Duplicate Entry not Allowed";
            }
            else
            {
                echo '{"error":{"text":'.$e->getMessage().'}';
            }
        }
});


//------------------>Add New Answers Ondirect Survey<------------------------
$app->Post('/api/new/ondirect-survey/05/03/2023', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    // $eid = $_REQUEST['eid'];
    
    $email = $mysqli->real_escape_string($_REQUEST['email']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
    $q19 = $mysqli->real_escape_string($_REQUEST['q19']);
    $q20 = $mysqli->real_escape_string($_REQUEST['q20']);
    $q21 = $mysqli->real_escape_string($_REQUEST['q21']);
    $q22 = $mysqli->real_escape_string($_REQUEST['q22']);
    $comments = $mysqli->real_escape_string($_REQUEST['comments']);

    $sql="INSERT INTO `ondirect_survey`(`ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans6`, `ans7`, `ans8`, `ans9`, `ans10`, `ans11`, `ans12`, `ans13`, `ans14`, `ans15`, `ans16`, `ans17`, `ans18`, `ans19`, `ans20`, `ans21`, `ans22`, `comments`, `email`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$comments','$email')";
    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        if ($e->getCode() == '23000')
        {
            echo "Duplicate Entry not Allowed";
        }
        else
        {
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
    }
});

//------------------>Add New Travel Survey Answer<------------------------
$app->Post('/api/new/travel-survey/25/10/2021', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $_REQUEST['eid'];
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);		        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);		         $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    
        $sql="INSERT INTO `travel_survey`(`ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans6`, `empid`, `empname`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$eid','$ename')";
        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            if ($e->getCode() == '23000')
            {
                echo "Duplicate Entry not Allowed";
            }
            else
            {
                echo '{"error":{"text":'.$e->getMessage().'}';
            }
        }
});

//------------------>Add New Answers QA-PKT-29/10/2021<------------------------
$app->Post('/api/new/qa-pkt/29/10/2021', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $_REQUEST['q31a'].'-'.$_REQUEST['q31b'].','.$_REQUEST['q32a'].'-'.$_REQUEST['q32b'].','.$_REQUEST['q33a'].'-'.$_REQUEST['q33b'].','.$_REQUEST['q34a'].'-'.$_REQUEST['q34b'].','.$_REQUEST['q35a'].'-'.$_REQUEST['q35b'].','.$_REQUEST['q36a'].'-'.$_REQUEST['q36b'];
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
        $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
        $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
        $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
        $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
        $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
        $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
        $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
        $q19 = $mysqli->real_escape_string($_REQUEST['q19']);
        $q20 = $mysqli->real_escape_string($_REQUEST['q20']);
    
        $sql="INSERT INTO `qa_pkt_29_10_2021`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `ques18`, `ques19`, `ques20`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$eid','$ename','$edept')";

        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});

//------------------>Add New Answers Food Feedback<------------------------
$app->Post('/api/new/food-feedback', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $_REQUEST['eid'];
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    
        $sql="INSERT INTO `food_feedback`(`empid`, `q1`, `q2`) VALUES ('$eid','$q1','$q2')";
        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            if ($e->getCode() == '23000')
            {
                echo "Duplicate Entry not Allowed";
            }
            else
            {
                echo '{"error":{"text":'.$e->getMessage().'}';
            }
        }
});

//------------------>Add New Answers MIS PKT 01-11-2021<------------------------
$app->Post('/api/new/mis-pkt/01/11/2021', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
        
        $q12 = $mysqli->real_escape_string($_REQUEST['q121a']).' - '. $mysqli->real_escape_string($_REQUEST['q121b']).','.$mysqli->real_escape_string($_REQUEST['q122a']).' - '. $mysqli->real_escape_string($_REQUEST['q122b']).','.$mysqli->real_escape_string($_REQUEST['q123a']).' - '. $mysqli->real_escape_string($_REQUEST['q123b']).','.$mysqli->real_escape_string($_REQUEST['q124a']).' - '. $mysqli->real_escape_string($_REQUEST['q124b']).','.$mysqli->real_escape_string($_REQUEST['q125a']).' - '. $mysqli->real_escape_string($_REQUEST['q125b']).','.
                $mysqli->real_escape_string($_REQUEST['q126a']).' - '. $mysqli->real_escape_string($_REQUEST['q126b']);
        
        $q13 = 'Account list -'.$mysqli->real_escape_string($_REQUEST['q131a']).'/ Supression List -'. $mysqli->real_escape_string($_REQUEST['q131b']).
        
        $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
        $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
        //print_r($_REQUEST['q16']);
        $q16 = $mysqli->real_escape_string(implode(',',$_REQUEST['q16']));
        $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
        $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
        $q19 = $mysqli->real_escape_string($_REQUEST['q19']);
        $q20 = $mysqli->real_escape_string($_REQUEST['q20']);
    
    
        $sql="INSERT INTO `qa_pkt_01_11_2021`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `ques18`, `ques19`, `ques20`, `empid`, `name`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20',' $eid','$ename')";
        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});


//------------------>EMPID Check MIS PKT 01-11-2021<------------------------
$app->Get('/api/mis-pkt/checkid/{id}', function(Request $request,Response $response){
    

        $eid = $request->getAttribute('id');
    
        $sql="SELECT COUNT(*) as cnt FROM `qa_pkt_01_11_2021` WHERE empid = $eid";
        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $users=$stmt->fetchAll(PDO::FETCH_OBJ);
            $db=null;
            echo $users[0]->cnt;
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});

//------------------>Add New Answers QA-PKT-24/11/2021<------------------------
$app->Post('/api/new/qa-pkt/24/11/2021', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = 'MIS:'.$_REQUEST['q11a'].', NCNS:'.$_REQUEST['q11b'].', ICORE:'.$_REQUEST['q11c'].', VAR:'.$_REQUEST['q11d'];
        $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
        $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
        $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
        $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
        $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
        $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
       
    
        $sql="INSERT INTO `qa_ijp_pkt_24112021`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$eid','$ename','$edept')";

        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});


//------------------>Add New Answers QA-PKT-24/11/2021<------------------------
$app->Post('/api/new/qa-pkt/24/11/2021/2', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
        $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
        $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
        $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
        $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
        $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
        $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
        $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
       
    
        $sql="INSERT INTO `qa_ijp_pkt_24112021_2`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `ques18`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$eid','$ename','$edept')";

        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});

//------------------>Add New Answers QA-PKT-01/02/2022<------------------------
$app->Post('/api/new/qa-pkt/01/02/2022', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
        $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
        $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
        $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
        $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
        $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
        $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
        $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
		$q19 = $mysqli->real_escape_string($_REQUEST['q19']);
		$q20 = $mysqli->real_escape_string($_REQUEST['q20']);
		$q21 = $mysqli->real_escape_string($_REQUEST['q21']);
		$q22 = $mysqli->real_escape_string($_REQUEST['q22']);
		$q23 = $mysqli->real_escape_string($_REQUEST['q23']);
		$q24 = $mysqli->real_escape_string($_REQUEST['q24']);
		$q25 = $mysqli->real_escape_string($_REQUEST['q25']);
       
    
        $sql="INSERT INTO `qa_ijp_pkt_01022022`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `ques18`,`ques19`,`ques20`,`ques21`,`ques22`,`ques23`,`ques24`,`ques25`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$eid','$ename','$edept')";

        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});

//------------------>Add New Answers QA-PKT-02/02/2022/1<------------------------
$app->Post('/api/new/qa-pkt/02/02/2022_1', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
        $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
        $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
        $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
        $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
        $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
        $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
        $q18 = $mysqli->real_escape_string($_REQUEST['q18']);

        $sql="INSERT INTO `qa_ijp_pkt_0202202201`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `ques18`,`empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$eid','$ename','$edept')";

        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});
//------------------>Add New Answers QA-PKT-16/03/2022/1<------------------------
$app->Post('/api/new/qa-pkt/16/03/2022_1', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
    $q19 = $mysqli->real_escape_string($_REQUEST['q19']);
    $q20 = $mysqli->real_escape_string($_REQUEST['q20']);

    $sql="INSERT INTO `qa_ijp_pkt_1603202201`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`,`ques19`,`ques20`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});
//------------------>Add New Answers QA-PKT-16/03/2022/2<------------------------
$app->Post('/api/new/qa-pkt/16/03/2022_2', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    //$q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    // $q18 = $mysqli->real_escape_string($_REQUEST['q18']);

    $sql="INSERT INTO `qa_ijp_pkt_1603202202`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});
//------------------>Add New Answers QA-PKT-02/02/2022/2<------------------------
$app->Post('/api/new/qa-pkt/02/02/2022_2', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = 'MIS:'.$_REQUEST['q11a'].', NCNS:'.$_REQUEST['q11b'].', ICORE:'.$_REQUEST['q11c'].', VAR:'.$_REQUEST['q11d'];
        $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
        $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
        $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
        $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
        $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
        $q17 = $mysqli->real_escape_string($_REQUEST['q17']);

        $sql="INSERT INTO `qa_ijp_pkt_0202202202`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$eid','$ename','$edept')";

        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});
//------------------>Add New Answers PKT-SME-IJP-22/03/2022/1<------------------------
$app->Post('/api/new/qa-pkt/22/03/2022_1', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = 'MIS:'.$_REQUEST['q12a'].', NCNS:'.$_REQUEST['q12b'].', ICORE:'.$_REQUEST['q12c'].', VAR:'.$_REQUEST['q12d'];
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
    

    $sql="INSERT INTO `sme_ijp_pkt_2203202201`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});


//------------------>Add New Answers PKT-SME-IJP-22/03/2022/2<------------------------
$app->Post('/api/new/qa-pkt/22/03/2022_2', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = 'SRL:'.$_REQUEST['q9a'].', HQL:'.$_REQUEST['q9b'].', SQL:'.$_REQUEST['q9c'].', ABM:'.$_REQUEST['q9d'];
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
    $q19 = $mysqli->real_escape_string($_REQUEST['q19']);
    $q20 = $mysqli->real_escape_string($_REQUEST['q20']);
    

    $sql="INSERT INTO `sme_ijp_pkt_2203202202`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`,`ques19`,`ques20`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});


//------------------>Add New Answers Vote for your favorites 2022<------------------------
$app->Post('/api/new/qa-pkt/26/03/2022_2', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 =  $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 =  $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 =  $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 =  $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 =  $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 =  $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 =  $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 =  $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 =  $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    

    $sql="INSERT INTO `vote-for-your-favorites`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`,`empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});


//------------------>Add New Answers Vote for your favorites Noida 2022<------------------------
$app->Post('/api/new/qa-pkt/12/04/2022_2', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 =  $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 =  $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 =  $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 =  $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 =  $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 =  $mysqli->real_escape_string($_REQUEST['q6']);    

    $sql="INSERT INTO `noida_fun_awards_12042022`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});



//------------------>Add New Answers womensday-2022<------------------------
$app->Post('/api/new/womensday/2022', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $company = $mysqli->real_escape_string($_REQUEST['company']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    

    $sql="INSERT INTO `womens_day_2022`(`ques1`, `ques2`, `ques3`, `empid`, `name`, `department`, `company`) VALUES ('$q1','$q2','$q3','$eid','$ename','$edept','$company')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});
//------------------>Add New Answers PKT-Process-Trainer-IJP-SET1-22-04-2022_1<------------------------
$app->Post('/api/new/qa-pkt/22/04/2022_1', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
    $q19 = $mysqli->real_escape_string($_REQUEST['q19']);
    $q20 = $mysqli->real_escape_string($_REQUEST['q20']);
    

    $sql="INSERT INTO `process_trainer_pkt_220420221`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`,`ques19`,`ques20`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});

//------------------>Add New Answers womensday-Attendance-2022<------------------------
$app->Post('/api/new/womensday/1032022', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    //$eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $company = $mysqli->real_escape_string($_REQUEST['company']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);

    $sql="INSERT INTO `womens_day_attendance_2022`(`empid`, `name`, `department`, `company`,`ques1`,`ques2`,`ques3`) VALUES ('$eid','$ename','$edept','$company','$q1','$q2','$q3')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});



//------------------>Add New Answers CDQA-PKT-17-05-2022<------------------------>
$app->Post('/api/new/cdqa/17052022', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $company = $mysqli->real_escape_string($_REQUEST['company']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
    $q19 = $mysqli->real_escape_string($_REQUEST['q19']);
	$q20 = $mysqli->real_escape_string($_REQUEST['q20']);
	
	$total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11 + $q12 + $q13 + $q14 + $q15 + $q16 + $q17 + $q18 + $q19 + $q19;
	if ($total >= 16){
		$result = "Pass";
	}else {
		$result = "Fail";
	}
	if($q1=="1"){
		$q1="Yes";
	}
	if($q2=="1"){
		$q2="Yes";
	}
	if($q3=="1"){
		$q3="Employee Size";
	}
	if($q4=="1"){
		$q4="Suppression";
	}
	if($q5=="1"){
		$q5="Prospects tenure";
	}
	if($q6=="1"){
		$q6="No";
	}
	if($q7=="1"){
		$q7="Yes";
	}
	if($q8=="1"){
		$q8="Prospects tenure missing";
	}
	if($q9=="1"){
		$q9="Tenure more than 5 years";
	}
	if($q10=="1"){
		$q10="Email Verification";
	}
	if($q11=="1"){
		$q11="hitesh@google.com";
	}
	if($q12=="1"){
		$q12="1-1000";
	}
	if($q13=="1"){
		$q13="All of the above";
	}
	if($q14=="1"){
		$q14="xdbscorp.net";
	}
	if($q15=="1"){
		$q15="Standard Industrial Classification & North American Industry Classification System";
	}
	if($q16=="1"){
		$q16="Employee ID";
	}
	if($q17=="1"){
		$q17="878";
	}
	if($q18=="1"){
		$q18="Target 3 people from same company";
	}
	if($q19=="1"){
		$q19="No";
	}
	if($q19=="1"){
		$q19="Sales";
	}

    $sql="INSERT INTO `cdqa-pkt-17-05-2022`(`empid`, `name`, `department`, `total`,`result`,`ques1`,`ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`,`ques19`,`ques20`) VALUES ('$eid','$ename','$edept','$total','$result','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});




//------------------>Add New Answers DGE-PKT-17-05-2022<------------------------>
$app->Post('/api/new/dge-ss/17052022', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $company = $mysqli->real_escape_string($_REQUEST['company']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
    $q19 = $mysqli->real_escape_string($_REQUEST['q19']);
    $q20 = $mysqli->real_escape_string($_REQUEST['q20']);
	
	$total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11 + $q12 + $q13 + $q14 + $q15 + $q16 + $q17 + $q18 + $q19 + $q20;
	if ($total >= 16){
		$result = "Pass";
	}else {
		$result = "Fail";
	}
	if($q1=="1"){
		$q1="No";
	}
	if($q2=="1"){
		$q2="Prospects tenure missing";
	}
	if($q3=="1"){
		$q3="xdbs.com";
	}
	if($q4=="1"){
		$q4="Employee ID";
	}
	if($q5=="1"){
		$q5="878";
	}
	if($q6=="1"){
		$q6="Target 3 people from same company";
	}
	if($q7=="1"){
		$q7="No";
	}
	if($q8=="1"){
		$q8="Lead which is already there in suppression";
	}
	if($q9=="1"){
		$q9="Companies which needs to be targetted";
	}
	if($q10=="1"){
		$q10="List of contacts which cannot be targetted";
	}
	if($q11=="1"){
		$q11="We paste the number on which we have the proper confirmation";
	}
	if($q12=="1"){
		$q12="Yes but for the latest company";
	}
	if($q13=="1"){
		$q13="None";
	}
	if($q14=="1"){
		$q14="Companies which needs to be targetted";
	}
	if($q15=="1"){
		$q15="No";
	}
	if($q16=="1"){
		$q16="Yes";
	}
	if($q17=="1"){
		$q17="Will not paste as on tenure mentioned";
	}
	if($q18=="1"){
		$q18="0-10000+";
	}
	if($q19=="1"){
		$q19="Eastern Standard time, Central Standard Time, Mountain Standard Time, Pacific Standard Time";
	}
	if($q20=="1"){
		$q20="Job Title in experience";
	}

    $sql="INSERT INTO `dge-ss-pkt-17-05-2022`(`empid`, `name`, `department`, `total`,`result`,`ques1`,`ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`,`ques19`,`ques20`) VALUES ('$eid','$ename','$edept','$total','$result','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});


//------------------>Add New Answers QA-PKT-02/02/2022/1<------------------------
$app->Post('/api/new/qa-pkt/23/05/2022_1', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
        $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
        $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
        $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
        $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
        $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
        $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
        $q18 = $mysqli->real_escape_string($_REQUEST['q18']);

        $sql="INSERT INTO `qa_ijp_pkt_23052022_1`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `ques18`,`empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$eid','$ename','$edept')";

        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});

//------------------>Add New Answers QA-SME-PKT-23/05/2022_2<------------------------
$app->Post('/api/new/qa-pkt/23/05/2022_2', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = 'MIS:'.$_REQUEST['q11a'].', NCNS:'.$_REQUEST['q11b'].', ICORE:'.$_REQUEST['q11c'].', VAR:'.$_REQUEST['q11d'];
        $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
        $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
        $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
        $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
        $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
        $q17 = $mysqli->real_escape_string($_REQUEST['q17']);

        $sql="INSERT INTO `qa_ijp_pkt_23052022_2`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$eid','$ename','$edept')";

        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});



//------------------>Add New Answers QA-PKT-01/06/2022 Set-1<------------------------
$app->Post('/api/new/qa-pkt/01/06/2022/1', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
        $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
        $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
        $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
        $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
        $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
        $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
        $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
		$q19 = $mysqli->real_escape_string($_REQUEST['q19']);
		$q20 = $mysqli->real_escape_string($_REQUEST['q20']);
		$q21 = $mysqli->real_escape_string($_REQUEST['q21']);
		$q22 = $mysqli->real_escape_string($_REQUEST['q22']);
		$q23 = $mysqli->real_escape_string($_REQUEST['q23']);
		$q24 = $mysqli->real_escape_string($_REQUEST['q24']);
		$q25 = $mysqli->real_escape_string($_REQUEST['q25']);
       
    
        $sql="INSERT INTO `qa_ijp_pkt_01062022_1`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `ques18`,`ques19`,`ques20`,`ques21`,`ques22`,`ques23`,`ques24`,`ques25`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$eid','$ename','$edept')";

        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});


//------------------>Add New Answers QA-PKT-01/06/2022 Set-2<------------------------
$app->Post('/api/new/qa-pkt/01/06/2022/2', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
        $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
        $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
        $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
        $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
        $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
        $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
        $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
		$q19 = $mysqli->real_escape_string($_REQUEST['q19']);
		$q20 = $mysqli->real_escape_string($_REQUEST['q20']);
		$q21 = $mysqli->real_escape_string($_REQUEST['q21']);
		$q22 = $mysqli->real_escape_string($_REQUEST['q22']);
		$q23 = $mysqli->real_escape_string($_REQUEST['q23']);
		$q24 = $mysqli->real_escape_string($_REQUEST['q24']);
		$q25 = $mysqli->real_escape_string($_REQUEST['q25']);
       
    
        $sql="INSERT INTO `qa_ijp_pkt_01062022_2`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `ques18`,`ques19`,`ques20`,`ques21`,`ques22`,`ques23`,`ques24`,`ques25`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$eid','$ename','$edept')";

        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});



//------------------>Add New Answers QA-PKT-IJP-QC-09/06/2022<------------------------
$app->Post('/api/new/qa-pkt-qc/09/06/2022', function(Request $request,Response $response){
    
        $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

        $eid = $mysqli->real_escape_string($_REQUEST['eid']);
        $ename = $mysqli->real_escape_string($_REQUEST['ename']);
        $edept = $mysqli->real_escape_string($_REQUEST['edept']);
        $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
        $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
        $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
        $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
        $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
        $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
        $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
        $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
        $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
        $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
        $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
        $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
        
       
    
        $sql="INSERT INTO `qa_ijp_qc_pkt_09062022`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$eid','$ename','$edept')";

        try
        {
            //Get DB Object
            $db=new db();
            
            //Connect
            $db=$db->connect();
            $stmt=$db->query($sql);
            $db=null;
            echo "1";
        }
        catch(PDOException $e){
            echo '{"error":{"text":'.$e->getMessage().'}';
        }
});




//------------------>Add New Answers PKT-OJT-SET1-18-07-2022_1<------------------------
$app->Post('/api/new/qa-pkt-ojt/18/07/2022/1', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
    $q19 = $mysqli->real_escape_string($_REQUEST['q19']);
    $q20 = $mysqli->real_escape_string($_REQUEST['q20']);
    

    $sql="INSERT INTO `ojt_qa_pkt_18072022_1`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`,`ques19`,`ques20`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});

//------------------>Add New Answers PKT-OJT-SET2-18-07-2022_2<------------------------
$app->Post('/api/new/qa-pkt-ojt/18/07/2022/2', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
    $q19 = $mysqli->real_escape_string($_REQUEST['q19']);
    $q20 = $mysqli->real_escape_string($_REQUEST['q20']);
    

    $sql="INSERT INTO `ojt_qa_pkt_18072022_2`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`,`ques19`,`ques20`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});







//------------------>Add New Answers DGE-PKT-18-07-2022<------------------------>
$app->Post('/api/new/dge-ss/18072022', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $company = $mysqli->real_escape_string($_REQUEST['company']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
    $q19 = $mysqli->real_escape_string($_REQUEST['q19']);
    $q20 = $mysqli->real_escape_string($_REQUEST['q20']);
	
	$total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11 + $q12 + $q13 + $q14 + $q15 + $q16 + $q17 + $q18 + $q19 + $q20;
	if ($total >= 17){
		$result = "Pass";
	}else {
		$result = "Fail";
	}
	if($q1=="1"){
		$q1="Target 3 people from same company";
	}
	if($q2=="1"){
		$q2="No";
	}
	if($q3=="1"){
		$q3="Lead which is already there in suppression";
	}
	if($q4=="1"){
		$q4="Companies which needs to be targetted";
	}
	if($q5=="1"){
		$q5="List of contacts which cannot be targetted";
	}
	if($q6=="1"){
		$q6="We paste the number on which we have the proper confirmation";
	}
	if($q7=="1"){
		$q7="Yes but for the latest company";
	}
	if($q8=="1"){
		$q8="None";
	}
	if($q9=="1"){
		$q9="Companies which needs to be targetted";
	}
	if($q10=="1"){
		$q10="No";
	}
	if($q11=="1"){
		$q11="Yes";
	}
	if($q12=="1"){
		$q12="Will not paste as on tenure mentioned";
	}
	if($q13=="1"){
		$q13="0-10000+";
	}
	if($q14=="1"){
		$q14="Eastern Standard time, Central Standard Time, Mountain Standard Time, Pacific Standard Time";
	}
	if($q15=="1"){
		$q15="Job Title in experience";
	}
	if($q16=="1"){
		$q16="Ask for the RPC";
	}
	if($q17=="1"){
		$q17="Can you help me with your job title";
	}
	if($q18=="1"){
		$q18="FALSE";
	}
	if($q19=="1"){
		$q19="Timeframe";
	}
	if($q20=="1"){
		$q20="Yes";
	}

    $sql="INSERT INTO `dge-ss-pkt-18-07-2022`(`empid`, `name`, `department`, `total`,`result`,`ques1`,`ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`,`ques19`,`ques20`) VALUES ('$eid','$ename','$edept','$total','$result','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});


//------------------>Add New Answers CDQA-PKT-18-07-2022<------------------------>
$app->Post('/api/new/cdqa-ss/18072022', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $company = $mysqli->real_escape_string($_REQUEST['company']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
    $q19 = $mysqli->real_escape_string($_REQUEST['q19']);
    $q20 = $mysqli->real_escape_string($_REQUEST['q20']);
	
	$total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11 + $q12 + $q13 + $q14 + $q15 + $q16 + $q17 + $q18 + $q19 + $q20;
	if ($total >= 17){
		$result = "Pass";
	}else {
		$result = "Fail";
	}
	if($q1=="1"){
		$q1="Yes";
	}
	if($q2=="1"){
		$q2="Yes";
	}
	if($q3=="1"){
		$q3="Employee Size";
	}
	if($q4=="1"){
		$q4="Suppression";
	}
	if($q5=="1"){
		$q5="Prospects tenure";
	}
	if($q6=="1"){
		$q6="No";
	}
	if($q7=="1"){
		$q7="No";
	}
	if($q8=="1"){
		$q8="Prospects tenure missing";
	}
	if($q9=="1"){
		$q9="Tenure more than 5 years";
	}
	if($q10=="1"){
		$q10="Email Verification";
	}
	if($q11=="1"){
		$q11="hitesh@google.com";
	}
	if($q12=="1"){
		$q12="1-1000";
	}
	if($q13=="1"){
		$q13="All of the above";
	}
	if($q14=="1"){
		$q14="xdbs.com";
	}
	if($q15=="1"){
		$q15="Standard Industrial Classification and North American Industrial Classification System";
	}
	if($q16=="1"){
		$q16="Can you help me with your job title";
	}
	if($q17=="1"){
		$q17="FALSE";
	}
	if($q18=="1"){
		$q18="Timeframe";
	}
	if($q19=="1"){
		$q19="Yes";
	}
	if($q20=="1"){
		$q20="Yes but for the latest company";
	}

    $sql="INSERT INTO `cdqa-pkt-18-07-2022-ss`(`empid`, `name`, `department`, `total`,`result`,`ques1`,`ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`,`ques19`,`ques20`) VALUES ('$eid','$ename','$edept','$total','$result','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});



//------------------>Add New Answers -PKT-01-08-2022<------------------------>
$app->Post('/api/new/qa-pkt/01/08/2022', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = 'Australia:'.$_REQUEST['q3a'].', USA:'.$_REQUEST['q3b'].',United Kingdom:'.$_REQUEST['q3c'].', Singapore:'.$_REQUEST['q3d'].', Spain:'.$_REQUEST['q3e'].',Germany:'.$_REQUEST['q3f'];
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
    $q19 = $mysqli->real_escape_string($_REQUEST['q19']);
    $q20 = $mysqli->real_escape_string($_REQUEST['q20']);
    

    $sql="INSERT INTO `qa-pkt-01-08-2022-ss`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`,`ques19`,`ques20`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});






//------------------>Add New Answers SME-PKT-04-08-2022<------------------------>
$app->Post('/api/new/qa-pkt/04/08/2022', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = 'MIS:'.$_REQUEST['q12a'].', NCNS:'.$_REQUEST['q12b'].',ICORE:'.$_REQUEST['q12c'].', VAR:'.$_REQUEST['q12d'];
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
   
    

    $sql="INSERT INTO `sme-pkt-04-08-2022-ss`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});



//------------------>Add New Answers SME-PKT-30-09-2022<------------------------>
 $app->Post('/api/new/smepkt/3009', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = 'MIS:'.$_REQUEST['q11a'].', NCNS:'.$_REQUEST['q11b'].',ICORE:'.$_REQUEST['q11c'].', VAR:'.$_REQUEST['q11d'];
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    
   
    

    $sql="INSERT INTO `sme-pkt-30-09-2022-ss`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
}); 


//------------------>Add New Answers SME-PKT-30-09-2022<------------------------>
$app->Post('/api/new/qa-pkt/smepkt/3009', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = 'MIS:'.$_REQUEST['q12a'].', NCNS:'.$_REQUEST['q12b'].',ICORE:'.$_REQUEST['q12c'].', VAR:'.$_REQUEST['q12d'];
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
   
    

    $sql="INSERT INTO `sme-pkt-30-09-2022-ss`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});




//------------------>Add New Answers MIS-PKT-06-10-2022<------------------------>
$app->Post('/api/new/mispkt/0610', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = 'VAD:'.$_REQUEST['q3a'].', VAR:'.$_REQUEST['q3b'];
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = 'Accounting Services: '.$_REQUEST['q12a'].', Advertisement: '.$_REQUEST['q12b'].', Aerospace & Defense: '.$_REQUEST['q12c'].', Apparel:'.$_REQUEST['q12d'].', Architecture & Planning: '.$_REQUEST['q12e'].', Internet: '.$_REQUEST['q12f'];
    $q13 = 'ABM:'.$_REQUEST['q13a'].', Competitors:'.$_REQUEST['q13b'].', Suppression:'.$_REQUEST['q13c'].', TAL:'.$_REQUEST['q13d'].', Exclusion List:'.$_REQUEST['q13e'].', Omit List:'.$_REQUEST['q13f'].', LAL (Look alike list):'.$_REQUEST['q13g'];
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $_REQUEST['q15a'].', '.$_REQUEST['q15b'].', '.$_REQUEST['q15c'].', '.$_REQUEST['q15d'];
    $q16 = $_REQUEST['q16a'].', '.$_REQUEST['q16b'].', '.$_REQUEST['q16c'].', '.$_REQUEST['q16d'].', '.$_REQUEST['q16e'].', '.$_REQUEST['q16f'].', '.$_REQUEST['q16g'].', '.$_REQUEST['q16h'].', '.$_REQUEST['q16i'];
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
	$q19 = $_REQUEST['q19a'].', '.$_REQUEST['q19b'].', '.$_REQUEST['q19c'].', '.$_REQUEST['q19d'];
	$q20 = $mysqli->real_escape_string($_REQUEST['q20']);
   
	
    $sql="INSERT INTO `mis-pkt-06-10-2022-ss`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`, `ques19`, `ques20`,  `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});





//------------------>Add New Answers Process-Trainer-PKT-31-10-2022<------------------------>
$app->Post('/api/new/ptpkt/3110', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    

    $sql="INSERT INTO `pt-pkt-31-10-2022-ss`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});





//------------------>Add New Answers QA-PKT-09-11-2022<------------------------>
$app->Post('/api/new/qa-pkt/091122', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = 'Australia:'.$_REQUEST['q3a'].', USA:'.$_REQUEST['q3b'].',United Kingdom:'.$_REQUEST['q3c'].', Singapore:'.$_REQUEST['q3d'].', Spain:'.$_REQUEST['q3e'].',Germany:'.$_REQUEST['q3f'];
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
    
    

    $sql="INSERT INTO `qa-pkt-09-11-2022-ss`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});


//------------------>Add New Answers SME-PKT-29-11-2022<------------------------>
$app->Post('/api/new/sme-pkt/291122', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $ecn = $mysqli->real_escape_string($_REQUEST['ECN']);
    $firstname = $mysqli->real_escape_string($_REQUEST['firstname']);
    $lastname = $mysqli->real_escape_string($_REQUEST['lastname']);
    $doj = $mysqli->real_escape_string($_REQUEST['doj']);
    $teamleader = $mysqli->real_escape_string($_REQUEST['teamleader']);
    $designation = $mysqli->real_escape_string($_REQUEST['designation']);
    $exam_name = $mysqli->real_escape_string($_REQUEST['examname']);
    
    

 $sql="INSERT INTO `table_email_ijp`(`ecn`, `firstname`, `lastname`, `doj`, `teamleader`, `designation`, `exam_name`) VALUES ('$ecn','$firstname','$lastname','$doj','$teamleader','$designation','$exam_name')";




    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();

        $sql_query_check = "SELECT COUNT(ecn) AS ecnCount FROM table_email_ijp WHERE ecn='$ecn' && exam_name = '$exam_name'";
        $stmt=$db->query($sql_query_check);
        $result = $stmt->fetch( PDO::FETCH_ASSOC );  
        if($result["ecnCount"]==0){
            $stmt=$db->query($sql);
            
            echo "1";
        }else{
            echo "ECN Already Exists";
        }
        $db=null;
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});


//------------------>Add New Answers QA-PKT-01-12-2022<------------------------>
$app->Post('/api/new/sme-pkt/011222', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
    
    

    $sql="INSERT INTO `sme-pkt-01-12-2022-vs`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `ques16`, `ques17`,`ques18`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $sql_query_check = "SELECT COUNT(empid) AS ecnCount FROM `sme-pkt-01-12-2022-vs` WHERE empid='$eid'";
		
		 $stmt=$db->query($sql_query_check);
        $result = $stmt->fetch( PDO::FETCH_ASSOC );  
        if($result["ecnCount"]==0){
            $stmt=$db->query($sql);
            
            echo "1";
        }else{
            echo "ECN Already Exists";
        }
		
		
        $db=null;
       
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});


//------------------>Add New Answers QA-PKT-14-12-2022<------------------------>
$app->Post('/api/new/qa-pkt/14122022', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);    
    

    $sql="INSERT INTO `qa-pkt-14-12-2022-kd`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});

//------------------>Add New Answers am-ops-ijp/06022023<------------------------>
$app->Post('/api/new/am-ops-ijp/06022023', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $ecn = $mysqli->real_escape_string($_REQUEST['ECN']);
    $firstname = $mysqli->real_escape_string($_REQUEST['firstname']);
    $lastname = $mysqli->real_escape_string($_REQUEST['lastname']);
    $doj = $mysqli->real_escape_string($_REQUEST['doj']);
    $teamleader = $mysqli->real_escape_string($_REQUEST['teamleader']);
    $designation = $mysqli->real_escape_string($_REQUEST['designation']);
    $exam_name = $mysqli->real_escape_string($_REQUEST['examname']);
    
    

 $sql="INSERT INTO `table_email_ijp`(`ecn`, `firstname`, `lastname`, `doj`, `teamleader`, `designation`, `exam_name`) VALUES ('$ecn','$firstname','$lastname','$doj','$teamleader','$designation','$exam_name')";




    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();

        $sql_query_check = "SELECT COUNT(ecn) AS ecnCount FROM table_email_ijp WHERE ecn='$ecn' && exam_name = '$exam_name'";
        $stmt=$db->query($sql_query_check);
        $result = $stmt->fetch( PDO::FETCH_ASSOC );  
        if($result["ecnCount"]==0){
            $stmt=$db->query($sql);
            
            echo "1";
        }else{
            echo "ECN Already Exists";
        }
        $db=null;
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});

//------------------>Add New Answers ER-Executive-27-02-2023<------------------------>
$app->Post('/api/new/er-executive-ijp/27022023', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $ecn = $mysqli->real_escape_string($_REQUEST['ECN']);
    $firstname = $mysqli->real_escape_string($_REQUEST['firstname']);
    $lastname = $mysqli->real_escape_string($_REQUEST['lastname']);
    $doj = $mysqli->real_escape_string($_REQUEST['doj']);
    $teamleader = $mysqli->real_escape_string($_REQUEST['teamleader']);
    $designation = $mysqli->real_escape_string($_REQUEST['designation']);
    $exam_name = $mysqli->real_escape_string($_REQUEST['examname']);
    
    

 $sql="INSERT INTO `table_email_ijp`(`ecn`, `firstname`, `lastname`, `doj`, `teamleader`, `designation`, `exam_name`) VALUES ('$ecn','$firstname','$lastname','$doj','$teamleader','$designation','$exam_name')";




    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();

        $sql_query_check = "SELECT COUNT(ecn) AS ecnCount FROM table_email_ijp WHERE ecn='$ecn' && exam_name = '$exam_name'";
        $stmt=$db->query($sql_query_check);
        $result = $stmt->fetch( PDO::FETCH_ASSOC );  
        if($result["ecnCount"]==0){
            $stmt=$db->query($sql);
            
            echo "1";
        }else{
            echo "ECN Already Exists";
        }
        $db=null;
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});


//------------------>Add New Answers Technical-Support-02-03-2023<------------------------>
$app->Post('/api/new/technical-support-ijp/02032023', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $ecn = $mysqli->real_escape_string($_REQUEST['ECN']);
    $firstname = $mysqli->real_escape_string($_REQUEST['firstname']);
    $lastname = $mysqli->real_escape_string($_REQUEST['lastname']);
    $doj = $mysqli->real_escape_string($_REQUEST['doj']);
    $teamleader = $mysqli->real_escape_string($_REQUEST['teamleader']);
    $designation = $mysqli->real_escape_string($_REQUEST['designation']);
    $exam_name = $mysqli->real_escape_string($_REQUEST['examname']);
    
    

 $sql="INSERT INTO `table_email_ijp`(`ecn`, `firstname`, `lastname`, `doj`, `teamleader`, `designation`, `exam_name`) VALUES ('$ecn','$firstname','$lastname','$doj','$teamleader','$designation','$exam_name')";




    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();

        $sql_query_check = "SELECT COUNT(ecn) AS ecnCount FROM table_email_ijp WHERE ecn='$ecn' && exam_name = '$exam_name'";
        $stmt=$db->query($sql_query_check);
        $result = $stmt->fetch( PDO::FETCH_ASSOC );  
        if($result["ecnCount"]==0){
            $stmt=$db->query($sql);
            
            echo "1";
        }else{
            echo "ECN Already Exists";
        }
        $db=null;
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});

//------------------>IJP-PKT-Tech-Support-9-3-22<------------------------>
$app->Post('/api/new/ijp-ops-pkt/090323', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);    
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);    
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);    
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);    
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);    
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);    
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);    
    $q19 = $mysqli->real_escape_string($_REQUEST['q19']);  
	$q20 = $mysqli->real_escape_string($_REQUEST['q20']);  	
    

    $sql="INSERT INTO `IJP-PT-PKT-OPS`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`,`ques13`,`ques14`,`ques15`,`ques16`,`ques17`,`ques18`,`ques19`,`ques20`, `empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});







//------------------>Add New Answers IJP-Others-PKT-09-03-2023<------------------------>
$app->Post('/api/new/ijp-others-pkt/090323', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
	$q13 = $mysqli->real_escape_string($_REQUEST['q13']);  
	$q14 = $mysqli->real_escape_string($_REQUEST['q14']);  
	$q15 = $mysqli->real_escape_string($_REQUEST['q15']);  
	$q16 = $mysqli->real_escape_string($_REQUEST['q16']);  
	$q17 = $mysqli->real_escape_string($_REQUEST['q17']);   
    

    $sql="INSERT INTO `ijp-others-pkt-09-03-2023`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`,`ques13`,`ques14`,`ques15`,`ques16`,`ques17`,`empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});






//------------------>Add New Answers IJP-QA-PKT-09-03-2023<------------------------>
$app->Post('/api/new/ijp-qa-pkt/090323', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
	$q13 = $mysqli->real_escape_string($_REQUEST['q13']);  
	$q14 = $mysqli->real_escape_string($_REQUEST['q14']);  
	$q15 = $mysqli->real_escape_string($_REQUEST['q15']);  
	$q16 = $mysqli->real_escape_string($_REQUEST['q16']);  
	$q17 = $mysqli->real_escape_string($_REQUEST['q17']);   
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);   
	$q19 = $mysqli->real_escape_string($_REQUEST['q19']);   
	$q20 = $mysqli->real_escape_string($_REQUEST['q20']);   

    $sql="INSERT INTO `ijp-qa-pkt-09-03-2023`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`,`ques13`,`ques14`,`ques15`,`ques16`,`ques17`,`ques18`,`ques19`,`ques20`,`empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});





//------------------>Add New Answers IJP-QA-PKT-09-03-2023<------------------------>
$app->Post('/api/new/er-ijp-pkt/20323', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
	$q13 = $mysqli->real_escape_string($_REQUEST['q13']);  
	$q14 = $mysqli->real_escape_string($_REQUEST['q14']);  
	$q15 = $mysqli->real_escape_string($_REQUEST['q15']);  


    $sql="INSERT INTO `er-ijp-pkt-20-3-23`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`,`ques13`,`ques14`,`ques15`,`empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
        $stmt=$db->query($sql);
        $db=null;
        echo "1";
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});







//------------------>Add New Answers IJP-QA-PKT-09-03-2023<------------------------>
$app->Post('/api/new/sample-ijp-pkt/21623', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
	$total_time = $mysqli->real_escape_string($_REQUEST['total_time']);
    // $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    // $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
	// $q13 = $mysqli->real_escape_string($_REQUEST['q13']);  
	// $q14 = $mysqli->real_escape_string($_REQUEST['q14']);  
	// $q15 = $mysqli->real_escape_string($_REQUEST['q15']);  
	
	
	
	
	//$score = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 ;
	$score = 0 ;
	// if ($total >= 16){
		// $result = "Pass";
	// }else {
		// $result = "Fail";
	// }
	
	if($q1=="1"){
		$q1=" 2012";
		$score++;
	}
	if($q2=="1"){
		$q2="25th of every month";
		$score++;
	}
	if($q3=="1"){
		$q3="After 6 months ";
		$score++;
	}
	if($q4=="1"){
		$q4="PL: Privilege, CL: Casual Leave. After completing 3 months an employee is entitled for these leaves";
		$score++;
	}
	if($q5=="1"){
		$q5="Half Day: after 5.30hrs & Full Day: After 8.30 hrs";
		$score++;
	}
	if($q6=="1"){
		$q6="Every 3rd late login is considered as a half day";
		$score++;
	}
	if($q7=="1"){
		$q7="1st UPL Deduction of 45% from aendance bonus + 1 days salary:  2nd UPL Deduction of 70% from aendance bonus + 2 days salary:  3rd UPL Deduction of 100% from aendance bonus + 3 days salary";
		$score++;
	}
	if($q8=="1"){
		$q8="24, 12PL & 12 CL";
		$score++;
	}
	if($q9=="1"){
		$q9="Yes, 12 PL gets encashed";
		$score++;
	}
	if($q10=="1"){
		$q10="Reporting Leader>Reporting Manager>HR Personnel";
		$score++;
	}
	





    $sql="INSERT INTO `sample-pkt-21-6-23`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `score`, `empid`, `name`, `department` , `time`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$score','$eid','$ename','$edept' ,'$total_time')";

    try
    {
       		
		 $db=new db();
      
        $db=$db->connect();

        $sql_query_check = "SELECT COUNT(empid) AS ecnCount FROM `sample-pkt-21-6-23` WHERE empid='$eid' ";
        $stmt=$db->query($sql_query_check);
        $result = $stmt->fetch( PDO::FETCH_ASSOC );  
        if($result["ecnCount"]==0){
			
            $stmt=$db->query($sql);
			$db=null;
            echo "1";
           
        }else{
		echo "User ID Already Exists";
        }
        $db=null;
		
		
		
		
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});








//------------------>Add New Answers Chess-Tournament-30-6-23<------------------------>
$app->Post('/api/new/chess-tournament/30623', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
   
  


    $sql="INSERT INTO `chess-tournament-30-6-23`(`empid`, `name`, `department` ) VALUES ('$eid','$ename','$edept')";


  try
    {
       		
		 $db=new db();
      
        $db=$db->connect();

        $sql_query_check = "SELECT COUNT(empid) AS ecnCount FROM `chess-tournament-30-6-23` WHERE empid='$eid' ";
        $stmt=$db->query($sql_query_check);
        $result = $stmt->fetch( PDO::FETCH_ASSOC );  
        if($result["ecnCount"]==0){
            $stmt=$db->query($sql);
			$db=null;
			echo "1";
           
        }else{
		echo "User ID Already Exists";
        }
        $db=null;
		
		
		
		
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});


//------------------>Add New Answers ER-Executive-27-02-2023<------------------------>
$app->Post('/api/new/qa-sme-ijp/10072023', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $ecn = $mysqli->real_escape_string($_REQUEST['ECN']);
    $firstname = $mysqli->real_escape_string($_REQUEST['firstname']);
    $lastname = $mysqli->real_escape_string($_REQUEST['lastname']);
    $doj = $mysqli->real_escape_string($_REQUEST['doj']);
    $teamleader = $mysqli->real_escape_string($_REQUEST['teamleader']);
    $designation = $mysqli->real_escape_string($_REQUEST['designation']);
    $exam_name = $mysqli->real_escape_string($_REQUEST['examname']);
    
    

 $sql="INSERT INTO `table_email_ijp`(`ecn`, `firstname`, `lastname`, `doj`, `teamleader`, `designation`, `exam_name`) VALUES ('$ecn','$firstname','$lastname','$doj','$teamleader','$designation','$exam_name')";




    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();

        $sql_query_check = "SELECT COUNT(ecn) AS ecnCount FROM table_email_ijp WHERE ecn='$ecn' && exam_name = '$exam_name'";
        $stmt=$db->query($sql_query_check);
        $result = $stmt->fetch( PDO::FETCH_ASSOC );  
        if($result["ecnCount"]==0){
            $stmt=$db->query($sql);
            
            echo "1";
        }else{
            echo "ECN Already Exists";
        }
        $db=null;
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});

//------------------>Add New Answers PKT-SME-Q4-14-07-2023<------------------------>
$app->Post('/api/new/pkt-sme/140723', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $eid = $mysqli->real_escape_string($_REQUEST['eid']);
    $ename = $mysqli->real_escape_string($_REQUEST['ename']);
    $edept = $mysqli->real_escape_string($_REQUEST['edept']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
    $q3 = $mysqli->real_escape_string($_REQUEST['q3']);
    $q4 = $mysqli->real_escape_string($_REQUEST['q4']);
    $q5 = $mysqli->real_escape_string($_REQUEST['q5']);
    $q6 = $mysqli->real_escape_string($_REQUEST['q6']);
    $q7 = $mysqli->real_escape_string($_REQUEST['q7']);
    $q8 = $mysqli->real_escape_string($_REQUEST['q8']);
    $q9 = $mysqli->real_escape_string($_REQUEST['q9']);
    $q10 = $mysqli->real_escape_string($_REQUEST['q10']);
    $q11 = $mysqli->real_escape_string($_REQUEST['q11']);
    $q12 = $mysqli->real_escape_string($_REQUEST['q12']);
    $q13 = $mysqli->real_escape_string($_REQUEST['q13']);
    $q14 = $mysqli->real_escape_string($_REQUEST['q14']);
    $q15 = $mysqli->real_escape_string($_REQUEST['q15']);
    $q16 = $mysqli->real_escape_string($_REQUEST['q16']);
    $q17 = $mysqli->real_escape_string($_REQUEST['q17']);
    $q18 = $mysqli->real_escape_string($_REQUEST['q18']);
    $q19 = $mysqli->real_escape_string($_REQUEST['q19']); 
    $q20 = $mysqli->real_escape_string($_REQUEST['q20']);
    $q21 = $mysqli->real_escape_string($_REQUEST['q21']);
    $q22 = $mysqli->real_escape_string($_REQUEST['q22']);
    $q23 = $mysqli->real_escape_string($_REQUEST['q23']); 
    $q24 = $mysqli->real_escape_string($_REQUEST['q24']);
    $q25 = $mysqli->real_escape_string($_REQUEST['q25']);	
    

    $sql="INSERT INTO `pkt-sme-q4-14-07-2023-kd`(`ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`,`ques13`, `ques14`, `ques15`, `ques16`, `ques17`, `ques18`, `ques19`, `ques20`, `ques21`, `ques22`,`ques23`,`ques24`,`ques25` ,`empid`, `name`, `department`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$eid','$ename','$edept')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
		
		
		
        $sql_query_check = "SELECT COUNT(empid) AS ecnCount FROM `pkt-sme-q4-14-07-2023-kd`  WHERE empid='$eid' ";
        $stmt=$db->query($sql_query_check);
        $result = $stmt->fetch( PDO::FETCH_ASSOC );  
        if($result["ecnCount"]==0){
            $stmt=$db->query($sql);
            
            echo "1";
        }else{
            echo "ECN Already Exists";
        }
        $db=null;
		
		
		
     
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});



//------------------>Add New Answers Tree-Plantation-Volunteer-18-07-23<------------------------>
$app->Post('/api/new/tree-plantation/180723', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $ecn = $mysqli->real_escape_string($_REQUEST['ecn']);
    $name = $mysqli->real_escape_string($_REQUEST['name']);
    $department = $mysqli->real_escape_string($_REQUEST['department']);
    $q1 = $mysqli->real_escape_string($_REQUEST['q1']);
    $q2 = $mysqli->real_escape_string($_REQUEST['q2']);
	$location = $mysqli->real_escape_string($_REQUEST['location']);
   
    

    $sql="INSERT INTO `tree-plantation-volunteer-18-07-23`(`q1`, `q2`, `location`, `ecn`, `name`, `department`) VALUES ('$q1','$q2','$location','$ecn','$name','$department')";

    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();
		
		
		
        $sql_query_check = "SELECT COUNT(ecn) AS ecnCount FROM `tree-plantation-volunteer-18-07-23` WHERE ecn='$ecn' ";
        $stmt=$db->query($sql_query_check);
        $result = $stmt->fetch( PDO::FETCH_ASSOC );  
		
    if($result["ecnCount"]==0){
            $stmt=$db->query($sql);
            
            echo "1";
        }else{
            echo "ECN Already Exists";
        }
        $db=null;

		
	 }
  catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});

//------------------>Add New Answers IJP-DM-14-07-2023<------------------------>
$app->Post('/api/new/ijp-dm/14072023', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $ecn = $mysqli->real_escape_string($_REQUEST['ECN']);
    $firstname = $mysqli->real_escape_string($_REQUEST['firstname']);
    $lastname = $mysqli->real_escape_string($_REQUEST['lastname']);
    $doj = $mysqli->real_escape_string($_REQUEST['doj']);
    $teamleader = $mysqli->real_escape_string($_REQUEST['teamleader']);
    $designation = $mysqli->real_escape_string($_REQUEST['designation']);
    $exam_name = $mysqli->real_escape_string($_REQUEST['examname']);
    
    

 $sql="INSERT INTO `table_email_ijp`(`ecn`, `firstname`, `lastname`, `doj`, `teamleader`, `designation`, `exam_name`) VALUES ('$ecn','$firstname','$lastname','$doj','$teamleader','$designation','$exam_name')";




    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();

        $sql_query_check = "SELECT COUNT(ecn) AS ecnCount FROM table_email_ijp WHERE ecn='$ecn' && exam_name = '$exam_name'";
        $stmt=$db->query($sql_query_check);
        $result = $stmt->fetch( PDO::FETCH_ASSOC );  
        if($result["ecnCount"]==0){
            $stmt=$db->query($sql);
            
            echo "1";
        }else{
            echo "ECN Already Exists";
        }
        $db=null;
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});







//------------------>Add New Answers DNC-QA-27-07-2023<------------------------>
$app->Post('/api/new/DNC-QA/270723', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $ecn = $mysqli->real_escape_string($_REQUEST['ECN']);
    $firstname = $mysqli->real_escape_string($_REQUEST['firstname']);
    $lastname = $mysqli->real_escape_string($_REQUEST['lastname']);
    $doj = $mysqli->real_escape_string($_REQUEST['doj']);
    $teamleader = $mysqli->real_escape_string($_REQUEST['teamleader']);
    $designation = $mysqli->real_escape_string($_REQUEST['designation']);
    $exam_name = $mysqli->real_escape_string($_REQUEST['examname']);
    
    

 $sql="INSERT INTO `table_email_ijp`(`ecn`, `firstname`, `lastname`, `doj`, `teamleader`, `designation`, `exam_name`) VALUES ('$ecn','$firstname','$lastname','$doj','$teamleader','$designation','$exam_name')";




    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();

        $sql_query_check = "SELECT COUNT(ecn) AS ecnCount FROM table_email_ijp WHERE ecn='$ecn' && exam_name = '$exam_name'";
        $stmt=$db->query($sql_query_check);
        $result = $stmt->fetch( PDO::FETCH_ASSOC );  
        if($result["ecnCount"]==0){
            $stmt=$db->query($sql);
            
            echo "1";
        }else{
            echo "ECN Already Exists";
        }
        $db=null;
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});


//------------------>Add New Answers MIS-QA-02-08-2023<------------------------>
$app->Post('/api/new/MIS-QA/020823', function(Request $request,Response $response){
    
    $mysqli = new mysqli("localhost","xdbsmedia_pkt","Apple@2023?","xdbsmedia_pkt");

    $ecn = $mysqli->real_escape_string($_REQUEST['ECN']);
    $firstname = $mysqli->real_escape_string($_REQUEST['firstname']);
    $lastname = $mysqli->real_escape_string($_REQUEST['lastname']);
    $doj = $mysqli->real_escape_string($_REQUEST['doj']);
    $teamleader = $mysqli->real_escape_string($_REQUEST['teamleader']);
    $designation = $mysqli->real_escape_string($_REQUEST['designation']);
    $exam_name = $mysqli->real_escape_string($_REQUEST['examname']);
    
    

 $sql="INSERT INTO `table_email_ijp`(`ecn`, `firstname`, `lastname`, `doj`, `teamleader`, `designation`, `exam_name`) VALUES ('$ecn','$firstname','$lastname','$doj','$teamleader','$designation','$exam_name')";




    try
    {
        //Get DB Object
        $db=new db();
        
        //Connect
        $db=$db->connect();

        $sql_query_check = "SELECT COUNT(ecn) AS ecnCount FROM table_email_ijp WHERE ecn='$ecn' && exam_name = '$exam_name'";
        $stmt=$db->query($sql_query_check);
        $result = $stmt->fetch( PDO::FETCH_ASSOC );  
        if($result["ecnCount"]==0){
            $stmt=$db->query($sql);
            
            echo "1";
        }else{
            echo "ECN Already Exists";
        }
        $db=null;
    }
    catch(PDOException $e){
        echo '{"error":{"text":'.$e->getMessage().'}';
    }
});