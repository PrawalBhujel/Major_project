<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["message"])){
        $message = $_POST["message"];
$url = 'http://localhost:5000/process_message';
$data = array('message' => $message);
$options = array(
    'http' => array(
        'header' => "Content-type: application/json\r\n",
        'method' => 'POST',
        'content' => json_encode($data)
    )
);
$context = stream_context_create($options);

$result = file_get_contents($url, false, $context);
if ($result === FALSE) {
    $data["code"]="ER_CHAT_BOT";
    $data["error"]="ER_CHAT_BOT";
    echo json_encode($data);
    die();
}else{

echo $result;}

    }else{
        $data["code"]="PAYLOAD_NOT_SET";
        $data["error"]="PAYLOAD_NOT_SET";
        echo json_encode($data);
    }
}else{
    $data["code"]="NO_PROPER_METHOD";
    $data["error"]="NO_PROPER_METHOD";
    echo json_encode($data);
}

exit();
?>