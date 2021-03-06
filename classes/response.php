<?php

class Response
{
    public function redirect($path) 
    {
        $currentDomain = preg_replace('/www\./i', '', $_SERVER['SERVER_NAME']);
        $this->redirectExternal("$currentDomain . '/' . $path");
    }
    
    public function redirectExternal($link)
    {
        header("Location: $link");
    }
    
    public function jsonResponse($data)
    {
        header("Content-Type: application/json;charset=utf-8");
        $json = json_encode($data);
        if ($json === false) {
            $json = json_encode(array("jsonError", json_last_error_msg()));
            if ($json === false) {
                $json = '{"jsonError": "unknown"}';
            }
            http_response_code(500);
        }
        echo $json;
        die();
    }

    public function textResponse($data)
    {
        header("Content-Type: text/plain");
        echo $data;
        die();
    }
}
?>