<?php

    $audio_az = $_FILES['audio_az'];
    // move_uploaded_file($audio_az['tmp_name'], "some_output_location.wav");

    // dump all request content and file metadata to a text file for debugging
    $req_dump = print_r($_REQUEST, true);
    $fp = file_put_contents('request.log', $req_dump, FILE_APPEND);
    $req_dump = print_r($_FILES, true);
    $fp = file_put_contents('request.log', $req_dump, FILE_APPEND);

    // send reply: ok or error
    echo "OK"
?>