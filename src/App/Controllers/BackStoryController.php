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
        $stories = backstory()->latestStories();

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
