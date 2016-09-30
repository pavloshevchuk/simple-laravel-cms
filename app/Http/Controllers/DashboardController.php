<?php

namespace App\Http\Controllers;
use App\Model\BlogEntry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

/**
 * Class BlogController
 *
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAction()
    {
        return view('dashboard/index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function blogReadAction()
    {
        $blogEntries = BlogEntry::all();

        $entries = [];
        /** @var BlogEntry $blogEntry */
        foreach ($blogEntries as $blogEntry) {
            $entries[] = [
                'id' => $blogEntry->blog_entry_id,
                'title' => $blogEntry->title,
                'created' => $blogEntry->created,
                'updated' => $blogEntry->updated,
            ];
        }

        return view('dashboard/blog', ['entries' => $entries]);
    }

    public function blogFormAction()
    {
        return view('dashboard/blog_create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function blogStoreAction(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'description' => 'required|min:10',
        ]);

        return redirect()
            ->away('/dashboard/blog')
            ->with('message', Lang::get('blog.success'));
    }
}
