<?php

namespace App\Http\Controllers;
use Illuminate\Http\{Request, Response};
use App\Models\Download;
use App\Mail\DownloadBook;
use DB;

class DownloadsController extends Controller
{
    
    /**
     * Download book
     */
    public function whatnow()
    {
        $data = request()->all();
        $validator = \Validator::make($data, [
            'email' => ['required', 'email', 'unique:downloads'] 
        ], ['email.unique:downloads' => 'The email is already used.']);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

        DB::beginTransaction();
        $email = $data['email'];
        $hash = \Str::random(64);
        Download::create([
            'email' => $email,
            'hash' => $hash,
        ]);

        // try {
            \Mail::to($email)->send(new DownloadBook($email));
            DB::commit();
            return response()->json([
                'status' => 1,
                'info' => 'Operation Successfull',
                'redirect' => route('download', ['hash' => $hash]),
            ]);
        // } catch (\Exception $error) {
        //     DB::rollback();
        //     return response()->json([
        //         'status' => 0,
        //         'info' => 'Network Error. Try Again.'
        //     ]);
        // }
    }

    public function download($hash = '')
    {
        if (empty($hash) || empty(Download::where(['hash' => $hash])->first())) {
            die(view('layouts.error'));
        }

        $filename = 'whatnow.pdf';
        $file = public_path()."/pdf/$filename";
        $headers = array('Content-Type: application/pdf');
        return response()->download($file, $filename, $headers);
    }
}
