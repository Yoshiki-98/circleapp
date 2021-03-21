<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class BoardController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $items = Board::with('user')->simplePaginate(10);
        $param = ['user' => $user, 'items' => $items];
        return view('board/index', $param);
    }

    public function add(Request $request)
    {
        $user = Auth::user();
        $board = Board::with('user')->where('id', Auth::id())->get();
        $param = ['user' => $user, 'board' => $board];
        return view('board/add', $param);
    }

    public function create(Request $request)
    {
        $this->validate($request, Board::$rules, Board::$messages);
        $board = new Board;
        $board->user_id = Auth::id();
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('/board');
    }

    public function edit(Request $request)
    {
        $user = Auth::user();
        $board = Board::with('user')->find(Auth::id());
        $param = ['user' => $user, 'board' => $board];
        return view('board/edit', $param);
    }

    public function update(Request $request)
    {
        $this->validate($request, Board::$rules, Board::$messages);
        $board = Board::with('user')->find(Auth::id());
        $board->user_id = Auth::id();
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('/board');
    }

    public function delete(Request $request)
    {
        $user = Auth::user();
        $board = Board::with('user')->find(Auth::id());
        $param = ['user' => $user, 'form' => $board];
        return view('board/del', $param);
    }

    public function remove(Request $request)
    {
        Board::with('user')->find(Auth::id())->delete();
        return redirect('/board');
    }
}
