namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:255',
            'destinasi_id' => 'required|exists:destinasi,id',
        ]);

        Review::create([
            'user_id' => auth()->id(),
            'destinasi_id' => $request->destinasi_id,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }

    public function show($id)
    {
        $reviews = Review::where('destinasi_id', $id)->with('user')->get();
        return view('destinasi.show', compact('reviews'));
    }
}
