<?php

namespace ShawnSandy\Backstory\App\Controllers;

use ShawnSandy\Backstory\App\Story;

class BackStoryController extends StoryController
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        if (request()->has('category')):
        $key = array_last(explode('-', request('category')));
        $stories = Story::fullStory()->hasCategory($key)->paginate(config('backstory.stories_per_page'));
        else:
        $stories = backstory()->latestStories();
        endif;

        return view('backstory::index', compact('stories'));
    }

    public function create()
    {
        return view('backstory::create');
    }

    public function show($id)
    {
        $story = Story::with(['author', 'categories'])->where('id', $id)->first();

        return  view('backstory::story', compact('story'));
    }

    public function edit($id)
    {
        $model = Story::with(['author', 'categories'])->where('id', $id)->first();

        return  view('backstory::update', compact('model'));
    }
}
