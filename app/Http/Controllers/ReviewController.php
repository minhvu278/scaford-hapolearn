<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewEditRequest;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->id();

        Review::create($data);

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReviewEditRequest $request, $id)
    {
        $review = Review::find($id);
        $review['message'] = $request['content_edit'];
        $review['rate'] = $request['star_edit'];
        $review->save();
        return redirect()->back()->with('message', __('message.edit_review_successful'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Review::destroy($id);

        return redirect()->back();
    }
}
