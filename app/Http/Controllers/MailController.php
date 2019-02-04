<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email() {
      $data = array('name'=>"Srithep Witaypanpracha");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('srithep555@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('5910110669@psu.ac.th','ศรีเทพ วิทยาพันธ์ประชา');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email() {
      $data = array('name'=>"Srithep Witaypanpracha");
      Mail::send('mail', $data, function($message) {
         $message->to('srithep555@gmail.com', '3SB03')->subject
            ('Lab3SB03 Laravel Framework');
         $message->from('5910110669@psu.ac.th','ศรีเทพ วิทยาพันธ์ประชา');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   public function attachment_email() {
      $data = array('name'=>"ศรีเทพ วิทยาพันธ์ประชา");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('5910110669@psu.ac.th','ศรีเทพ วิทยาพันธ์ประชา');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}