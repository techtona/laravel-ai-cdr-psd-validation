<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileUploadRequest;
use Illuminate\Http\Request;

class TestController extends Controller
{

    /**
     * view  form upload file
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function form()
    {
        return view('form');
    }

    /**
     * post form upload file
     *
     * @param FileUploadRequest $request
     */
    public function postForm(FileUploadRequest $request)
    {
        //do something here
        dd($request);
    }
}
