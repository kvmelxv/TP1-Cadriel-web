<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Forum::all();

        return view('forum.index', compact('articles'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre_en' => 'required|max:100',
            'contenu_en' => 'required|max:350',
            'titre_fr' => 'required|max:100',
            'contenu_fr' => 'required|max:350'
        ]);

        $titres = [
            'en' => $request->titre_en,
        ];

        $contenus = [
            'en' => $request->contenu_en,
        ];

        if($request->titre_fr && $request->contenu_fr != null) { 
            $titres = $titres + ['fr' => $request->titre_fr];
            $contenus = $contenus + ['fr' => $request->contenu_fr];
        };

        Forum::create(

            [
                'titre' => $titres,
                'contenu' => $contenus,
                'user_id' => Auth::id()
            ]
        );

        return redirect(route('forum.create'))->withSuccess('Article partager avec succéé !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Forum $forum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forum $forum)
    {   
        if (Auth::check() && Auth::user()->id == $forum->user_id){

            return view('forum.edit', ['article' => $forum]);

        }else {

            return redirect(route('forum.index'))->withErrors('You are not allowed to do this action.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forum $forum)
    {
        $request->validate([
            'titre_en' => 'required|max:100',
            'contenu_en' => 'required|max:350',
            'titre_fr' => 'required|max:100',
            'contenu_fr' => 'required|max:350'
        ]);

        $forum->titre = [
            'en' => $request->titre_en,
            'fr' => $request->titre_fr
        ];

        $forum->contenu = [
            'en' => $request->contenu_en,
            'fr' => $request->contenu_fr
        ];

        $forum->save();

        return redirect()->route('forum.index')->withSuccess(trans('The article has been modified with success.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum)
    {
        
        $forum->delete();
        return redirect()->route('forum.index')->withSuccess(trans('The article has been deleted with success.'));
    }
}
