<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\TokenMail;
use App\Mail\TaMail;
use App\Models\User;

class MailController extends Controller
{

    public function kirimemail($id)
    {
        $user1 = User::find($id);
        // dd($user1);
        $email = $user1->email;
        // dd($email);
        $mailInfo = [
            'nama' => $user1->nama ,
            'body' => $user1->token ,
            // 'title' => 'Hai',
            // 'url' => 'https://www.remotestack.io',
        ];

        Mail::to($email)->send(new TokenMail($mailInfo));

        return redirect('/admn/toko')->withToastSuccess('Berhasil');
        // return response()->json([
        //     'message' => 'Mail has sent.'
        // ], Response::HTTP_OK);
    }
}
