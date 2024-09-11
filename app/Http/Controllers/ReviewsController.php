<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\Traits\MethodTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewRequest;

class ReviewsController extends Controller
{
    use MethodTrait;
    //
    /**
     * todo Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'مراجعاتي';
        $reviews = Reviews::where('user_id', auth()->user()->id)->with('user', 'book')->get();
        return view('Auth.Books.my-reviews', compact('reviews', 'title'));
    }


    /**
     * todo Store a newly created resource in storage.& delete
     */
    public function store(StoreReviewRequest $request)
    {
        try {
            $check = Reviews::where('user_id', auth()->user()->id)->where("book_id", $request->book_id)->get();
            if (isset($check) && $check->count() != 0) {
                foreach ($check as $item)
                    $book = Reviews::find($item->id);
                return back()->with('error', "لقد قمت بالتقييم من قبل");
            }
            Reviews::create([
                'user_id' => auth()->user()->id,
                'book_id' => $request->book_id,
                'comment' => $request->comment,
                'star' => $request->star,
            ]);
            return back()->with('success', "تم التقييم بنجاح");
        } catch (\Exception $e) {
            return back()->with('error', "  حدث خطأ ما حاول مرة اخرى لاحقا");

        }

    }
}
