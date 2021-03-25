<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\EmailSubject;
use App\Models\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = EmailSubject::all();
        return view('pages.contact.contact',compact('subjects'));
    }

    public function backOffice()
    {
        $emails = Mail::all();
        $subjects = EmailSubject::all();
        return view('mailBo',compact('emails', 'subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'content' => 'required',
            'subject' => 'required'
        ]);

        $newEntry = new Mail;
        $newEntry->email = $request->email;
        $newEntry->subject_id = $request->subject_id;
        $newEntry->content = $request->content;
        $newEntry->save();

        // Envoi Mail
        // FacadesMail::to('navez.martin@gmail.com')->send(new SendEmail($request));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(Mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mail $mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        //
    }
}
