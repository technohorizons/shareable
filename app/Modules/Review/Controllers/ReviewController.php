<?php namespace App\Modules\Review\Controllers;
use App\Modules\Review\Models\Review;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;


class ReviewController extends BaseController
{
    public function getIndex() {
        return View('Review::index');
    }

    public function postAdd() {
        $InputAll = Request::input();
        $InputAll['from_user_id'] = 2; //current user session id
        Review::create($InputAll);
        return response()->json([ 'status' => 'success']);
    }

    public function getForm() {
        $FormHtml = View('Review::form')->render();
        return response()->json([ 'html' => $FormHtml]);
    }

    /* Param UserId */
    public function getList($id) {
        $Comments = Review::where('to_user_id',$id)->orderBy('id','desc')->get();
        $FormHtml = View('Review::comment_list')->with('comments',$Comments)->render();
        return response()->json([ 'html' => $FormHtml]);
    }

}