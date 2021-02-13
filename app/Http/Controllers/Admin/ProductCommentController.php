<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductComment;
use Illuminate\Http\Request;

class ProductCommentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = ProductComment::all();
        return view('admin.comment',['datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductComment  $id
     * @return \Illuminate\Http\Response
     */
    public function validateComment($id)
    {
        $comment = ProductComment::find($id);
        $comment->validated =  !$comment->validated;
        $comment->save();
        return redirect()->route('admin_comment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductComment  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $comment = ProductComment::find($id);
        $comment->delete();
        return redirect()->route('admin_comment');
    }
}


