<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

use Session;

use Mail;


class MessageController extends Controller
{
        /*send*/
    public function send(Request $request){
    	$rules = array(
    		'name' =>'required|string',
    		'email' => 'required|string',
    		'phone' => 'string',
    		'comment' => 'required|string',
    	);
    	$this->validate($request, $rules);

    	/*insert*/
    	$message = new Message();
    	$message->name = $request->name;
    	$message->email = $request->email;
    	$message->phone = $request->phone;
    	$message->comment = $request->comment;

    	if ($message->save()){
    		/*send to email*/
    		$name = $message->name;
    		$email = $message->email;
    		$phone = $message->phone;
    		$comment = $message->comment;
    		Mail::send('email.message',[
    			'name' => $name,
    			'email' => $email,
    			'phone' => $phone,
    			'comment' => $comment,
    		], function($sentmessage) use ($name,$email,$phone,$comment){
    			$sentmessage->to('lmarkjason.20@gmail.com', $name)->subject('Inquiry');
    			$sentmessage->from('support@wholesaler.com.ph',$name);
    		});

    		Session::flash('msg', 'Successfully Sent');
    		return redirect()->to(url()->previous() . '#contact-me');
    	}
    }

}
