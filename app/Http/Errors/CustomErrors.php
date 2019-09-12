<?php


namespace App\Http\Errors;


class CustomErrors
{
    public static function getError($code)
    {
        switch ($code) {
            case 401:
                $message = "UnAuthorized";
                break;
            case 404:
                $message = "API not found";
                break;
            case 405:
                $message = "Method is not accepted";
                break;
            default:
                $message = "some thing went wrong";
                break;
        }
        return [
            'code' => $code,
            'message' => $message
        ];
    }
}