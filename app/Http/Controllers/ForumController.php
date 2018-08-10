<?php
namespace App\Http\Controllers;
use App\Forum;
use App\Tag;
use App\Comment;
use Illuminate\Http\Request;
use Auth;
use DB;
use Storage;

class ForumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function populars()
    {
        $populars = DB::table('forums')
        ->join('views', 'forums.id', '=', 'views.viewable_id')
        ->select(DB::raw('count(viewable_id) as count'),'forums.id','forums.title','forums.slug')
        ->groupBy('id','title','slug')
        ->orderBy('count','desc')
        ->take(5)
        ->get();
        // $commentCount = Comment::count();
        // $post_view = DB::table('forums')->increment('post_view');
        return view('forum.populars', compact('populars'));
    }

    // public function _permasalahan()
    // {
    //     $permasalahan = Forum::where('')
    //     ->groupBy('id','title','slug')
    //     ->orderBy('count','desc')
    //     ->take(5)
    //     ->get();
    //     $forums = Forum::withCount('comments')->paginate(2);
    //     // $commentCount = Comment::count();
    //     // $post_view = DB::table('forums')->increment('post_view');
    //     return view('forum._permasalahan', compact('forums', 'permasalahan'));
    // }

    public function index()
    {
        $populars = DB::table('forums')
        ->join('views', 'forums.id', '=', 'views.viewable_id')
        ->select(DB::raw('count(viewable_id) as count'),'forums.id','forums.title','forums.slug')
        ->groupBy('id','title','slug')
        ->orderBy('count','desc')
        ->take(5)
        ->get();
        $forums = Forum::withCount('comments')->paginate(2);
        // $commentCount = Comment::count();
        // $post_view = DB::table('forums')->increment('post_view');
        return view('forum.index', compact('forums', 'populars'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forums = Forum::orderBy('id', 'desc')->paginate(5);
        $tags = Tag::all();
        return view('forum.create', compact('tags','forums'));
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
            'title'       => 'required',
            'description' => 'required',
            'tags'        => 'required',
            'image'       => 'image|mimes:jpg,jpeg,png,gif|max:5120',
        ]);
        $forums                 = New Forum;
        $forums->user_id        = Auth::user()->id;
        $forums->title          = $request->title;
        $forums->slug           = str_slug($request->title);
        $forums->description    = $request->description;
            if ($request->file('image')) {
                $file           = $request->file('image');
                $filename       = time().'.'.$file->getClientOriginalExtension();
                $location       = public_path('/images');
                $file->move($location, $filename);
                $forums->image  = $filename;
            }
            $forums->save();
            $forums->tags()->sync($request->tags);
            return redirect()->to('forum')->withInfo('Diskusi Berhasil dibuat');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $populars = DB::table('forums')
        ->join('views', 'forums.id', '=', 'views.viewable_id')
        ->select(DB::raw('count(viewable_id) as count'),'forums.id','forums.title','forums.slug')
        ->groupBy('id','title','slug')
        ->orderBy('count','desc')
        ->take(5)
        ->get();
        $forums = Forum::where('id', $slug)
                        ->orWhere('slug', $slug)
                        ->firstOrFail();
        $forums->addView();
        // $commentCount = Comment::count();
        // DB::table('forums')->increment('post_view');
        return view('forum.show', compact('forums', 'populars'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $forum = Forum::where('slug', $slug);
        $tags  = Tag::all();
        return view('forum.edit', compact('forum','tags'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'tags'        => 'required',
            'image'       => 'image|mimes:jpg,jpeg,png,gif|max:5120',
        ]);
        $forums                 = Forum::find($id);
        $forums->user_id        = Auth::user()->id;
        $forums->title          = $request->title;
        $forums->slug           = str_slug($request->title);
        $forums->description    = $request->description;
            if ($request->file('image')) {
                $file           = $request->file('image');
                $filename       = time().'.'.$file->getClientOriginalExtension();
                $location       = public_path('/images');
                $file->move($location, $filename);
                $oldImage       = $forums->image;
                \Storage::delete($oldImage);
                $forums->image  = $filename;
            }
            $forums->save();
            $forums->tags()->sync($request->tags);
        return redirect()->route('forum.show', $forums->slug)->withInfo('Diskusi Berhasil Diedit');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forums = Forum::find($id);
        Storage::delete($forums->image);
        $forums->tags()->detach();
        $forums->delete();

        return redirect()->to('forum')->withInfo('Diskusi Berhasil dihapus');
    }
}