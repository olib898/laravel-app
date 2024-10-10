<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewStoreRequest;
use App\Models\Item;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     * My reviews
     */
    public function index()
    {
        $this->userIsAuthenticated();

        $reviews = Review::where('user_id', '=', Auth::id())->get();

        return view('reviews.index', compact('reviews'));
    }

    /**
     * @throws \Exception
     */
    public function store(ReviewStoreRequest $request)
    {
        $this->userIsAuthenticated();

        try {
            $review = new Review;

            $review->title = $request->get('title');
            $review->description = $request->get('description');
            $review->rating = $request->get('rating');
            $review->user_id = Auth::id();


            $review->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Something went wrong.' . $e->getMessage());
        }

        return redirect()->back()->withSuccess('Review saved successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $this->userIsAuthenticated();
    }
}
