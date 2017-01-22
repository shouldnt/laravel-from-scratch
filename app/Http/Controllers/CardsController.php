<?php

namespace App\Http\Controllers;

use \DB;
use \App\Card;
use \App\Note;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {
    	$cards = Card::all();

    	return view('cards.index', compact('cards'));
    }

    public function show($id)
    {
    	$card = Card::find($id);
    	return view('showCard', compact('card'));
    }

    public function addNoteToCard($id, Request $request)
    {
    	$note = new Note();
    	$note->body = $request->body;
    	$card = Card::find($id);
    	$card->notes()->save($note);
    }

}
