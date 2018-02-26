<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactsController extends Controller
{
	public function index()
	{
		return view('contacts.index');
	}

    function sendMail(Request $request){
        
        $subject = "KAHMIPRENEUR " . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
           // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'takim.anwar1993@gmail.com';                 // SMTP username
            $mail->Password = 'sedgkykskaweewzz';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            // Sender
            $mail->setFrom("takim.anwar1993@gmail.com", "Mustaqim Anwar");

            // who will receive the email submission
            $mail->addAddress('takimanwar@gmail.com', 'Kahmi');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional


            $mail->addReplyTo($emailAddress, $name);
            
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            return view('contacts.index');

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }
}