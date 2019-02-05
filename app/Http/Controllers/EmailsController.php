<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Oferta;
//Libreria que permite realizar consultas sql
use Illuminate\Support\Facades\DB;

class EmailsController extends Controller
{
    //
    public function insert()
    {       
        if(isset($_POST['contactFrmSubmit']) && !empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['message'])){
            
            // Submitted form data
            $name   = $_POST['name'];
            $email  = $_POST['email'];
            $message= $_POST['message'];
            
            /*
            * Send email to admin
            */
            $to     = 'julenlodeiro@gmail.com';
            $subject= 'Contact Request Submitted';
            
            $htmlContent = '
            <h4>Contact request has submitted at CodexWorld, details are given below.</h4>
            <table cellspacing="0" style="width: 300px; height: 200px;">
                <tr>
                    <th>Name:</th><td>'.$name.'</td>
                </tr>
                <tr style="background-color: #e0e0e0;">
                    <th>Email:</th><td>'.$email.'</td>
                </tr>
                <tr>
                    <th>Message:</th><td>'.$message.'</td>
                </tr>
            </table>';
            
            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "rn";
            $headers .= "Content-type:text/html;charset=UTF-8" . "rn";
            
            // Additional headers
            $headers .= 'From: CodexWorld<sender@example.com>' . "rn";
            
            // Send email
            if(mail($to,$subject,$htmlContent,$headers)){
                $status = 'ok';
            }else{
                $status = 'err';
            }
            
            // Output status
            echo $status;die;
        }
    }
}