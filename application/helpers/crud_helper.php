<?php

// function to result with http code
function result_json_view($data = '')
{

    if (!empty($data)) {
        // set header
        //http_response_code($code);
        //header('Content-Type: application/json; charset=utf-8');

        // return data
        echo json_encode($data);
        //die();
    } else {
        return false;
    }
}

// function to result with http code
function result_json($data = '', $code = 200)
{

    if (!empty($data)) {
        // set header
        http_response_code($code);
        header('Content-Type: application/json; charset=utf-8');

        // return data
        echo json_encode($data);
        die();
    } else {
        return false;
    }
}

function verification_api($header_key)
{

    # check api key
    $API_KEY        = api_key;
    if ($API_KEY != $header_key) {
        result_json([
            'status' => 401,
            'message'    => 'Unauthorized API KEY'
        ], 401);
    } else {
        return true;
    }
}

function safe($str)
{
    return strip_tags(trim($str));
}

function readJSON($path)
{
    $string = file_get_contents($path);
    $obj = json_decode($string);
    return $obj;
}

function writeFileContent($string, $path)
{

    $fp = fopen($path, 'w');  
    if (fwrite($fp, $string)) {
        fclose($fp);
        chmod($path, 0777);  //changed to add the zero
        return "Successfull";
    }else{
        fclose($fp);
        chmod($path, 0777);  //changed to add the zero
        return "The file is not writable";
    }
   

    // Let's make sure the file exists and is writable first.
   /* if (is_writable($path)) {       

        // In our example we're opening $filename in append mode.
        // The file pointer is at the bottom of the file hence
        // that's where $somecontent will go when we fwrite() it.
        if (!$fp = fopen($path, 'w')) {
               // echo "Cannot open file ($filename)";
                return "Cannot open file ($path)";
        }else{
             // Write $somecontent to our opened file.
            if (fwrite($fp, $string) === FALSE) {
                //echo "Cannot write to file ($path)";
                return "Cannot write to file ($path)";
            }else{
                //echo "Success, wrote ($somecontent) to file ($filename)";
                fclose($fp);
                chmod($path, 0777);  //changed to add the zero
                return "Successfull";
            }
        }
    } else {
        //echo "The file $path is not writable";
        return "The file $path is not writable";
    }*/
   
}
function fwrite_stream($fp, $string) {
    for ($written = 0; $written < strlen($string); $written += $fwrite) {
        $fwrite = fwrite($fp, substr($string, $written));
        if ($fwrite === false) {
            return $written;
        }
    }
    return $written;
}
function createFile($string, $path)
{
    $create = fopen($path, "w") or die("Change your permision folder for application and harviacode folder to 777");
    fwrite($create, $string);
    fclose($create);

    return $path;
}

function label($str)
{
    $label = str_replace('_', ' ', $str);
    $label = ucwords($label);
    return $label;
}
