<?php

namespace App\Http\Controllers;
use App\Model\BlogEntry;

/**
 * Class BlogController
 *
 * @package App\Http\Controllers
 */
class BlogController extends Controller
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
        $blogEntries = BlogEntry::all();

        $entries = [];
        /** @var BlogEntry $blogEntry */
        foreach ($blogEntries as $blogEntry) {
            $entries[] = [
                'title' => $blogEntry->title,
                'description' => $blogEntry->description,
                'created' => $blogEntry->created,
                'updated' => $blogEntry->updated,
            ];
        }

        return view('blog/blog', ['entries' => $entries]);
    }

    public function createAction()
    {
        return view('blog/blog_create');
    }

    public function storeAction()
    {

    }
}
