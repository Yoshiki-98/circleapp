<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Board;
use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class HelloController extends Controller
{

    public function index(Request $request) 
    {
        $user = Auth::user();
        $param = ['user' => $user];
        return view('hello/index', $param);
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        if($request->sports != null and $request->area != null and $request->univ != null and $request->circle != null and $request->date != null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->where('area', 'like', '%' . $request->area . '%')
                                        ->where('univ', 'like', '%' . $request->univ . '%')
                                        ->where('circle', 'like', '%' . $request->circle . '%')
                                        ->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        $user = Auth::user();
        if($request->sports == null and $request->area != null and $request->univ != null and $request->circle != null and $request->date != null) {
            $items = Board::with('user')->where('area', 'like', '%' . $request->area . '%')
                                        ->where('univ', 'like', '%' . $request->univ . '%')
                                        ->where('circle', 'like', '%' . $request->circle . '%')
                                        ->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports != null and $request->area == null and $request->univ != null and $request->circle != null and $request->date != null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->where('univ', 'like', '%' . $request->univ . '%')
                                        ->where('circle', 'like', '%' . $request->circle . '%')
                                        ->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports != null and $request->area != null and $request->univ == null and $request->circle != null and $request->date != null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->where('area', 'like', '%' . $request->area . '%')
                                        ->where('circle', 'like', '%' . $request->circle . '%')
                                        ->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports != null and $request->area != null and $request->univ != null and $request->circle == null and $request->date != null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->where('area', 'like', '%' . $request->area . '%')
                                        ->where('univ', 'like', '%' . $request->univ . '%')
                                        ->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports != null and $request->area != null and $request->univ != null and $request->circle != null and $request->date == null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->where('area', 'like', '%' . $request->area . '%')
                                        ->where('univ', 'like', '%' . $request->univ . '%')
                                        ->where('circle', 'like', '%' . $request->circle . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }


        if($request->sports == null and $request->area == null and $request->univ != null and $request->circle != null and $request->date != null) {
            $items = Board::with('user')->where('univ', 'like', '%' . $request->univ . '%')
                                        ->where('circle', 'like', '%' . $request->circle . '%')
                                        ->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports == null and $request->area != null and $request->univ == null and $request->circle != null and $request->date != null) {
            $items = Board::with('user')->where('area', 'like', '%' . $request->area . '%')
                                        ->where('circle', 'like', '%' . $request->circle . '%')
                                        ->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports == null and $request->area != null and $request->univ != null and $request->circle == null and $request->date != null) {
            $items = Board::with('user')->where('area', 'like', '%' . $request->area . '%')
                                        ->where('univ', 'like', '%' . $request->univ . '%')
                                        ->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports == null and $request->area != null and $request->univ != null and $request->circle != null and $request->date == null) {
            $items = Board::with('user')->where('area', 'like', '%' . $request->area . '%')
                                        ->where('univ', 'like', '%' . $request->univ . '%')
                                        ->where('circle', 'like', '%' . $request->circle . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports != null and $request->area == null and $request->univ == null and $request->circle != null and $request->date != null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->where('circle', 'like', '%' . $request->circle . '%')
                                        ->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports != null and $request->area == null and $request->univ != null and $request->circle == null and $request->date != null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->where('univ', 'like', '%' . $request->univ . '%')
                                        ->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports != null and $request->area == null and $request->univ != null and $request->circle != null and $request->date == null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->where('univ', 'like', '%' . $request->univ . '%')
                                        ->where('circle', 'like', '%' . $request->circle . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports != null and $request->area != null and $request->univ == null and $request->circle == null and $request->date != null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->where('area', 'like', '%' . $request->area . '%')
                                        ->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports != null and $request->area != null and $request->univ == null and $request->circle != null and $request->date == null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->where('area', 'like', '%' . $request->area . '%')
                                        ->where('circle', 'like', '%' . $request->circle . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports != null and $request->area != null and $request->univ != null and $request->circle == null and $request->date == null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->where('area', 'like', '%' . $request->area . '%')
                                        ->where('univ', 'like', '%' . $request->univ . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }


        if($request->sports == null and $request->area == null and $request->univ == null and $request->circle != null and $request->date != null) {
            $items = Board::with('user')->where('circle', 'like', '%' . $request->circle . '%')
                                        ->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports == null and $request->area == null and $request->univ != null and $request->circle == null and $request->date != null) {
            $items = Board::with('user')->where('univ', 'like', '%' . $request->univ . '%')
                                        ->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports == null and $request->area == null and $request->univ != null and $request->circle != null and $request->date == null) {
            $items = Board::with('user')->where('univ', 'like', '%' . $request->univ . '%')
                                        ->where('circle', 'like', '%' . $request->circle . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports == null and $request->area != null and $request->univ == null and $request->circle == null and $request->date != null) {
            $items = Board::with('user')->where('area', 'like', '%' . $request->area . '%')
                                        ->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports == null and $request->area != null and $request->univ == null and $request->circle != null and $request->date == null) {
            $items = Board::with('user')->where('area', 'like', '%' . $request->area . '%')
                                        ->where('circle', 'like', '%' . $request->circle . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports == null and $request->area != null and $request->univ != null and $request->circle == null and $request->date == null) {
            $items = Board::with('user')->where('area', 'like', '%' . $request->area . '%')
                                        ->where('univ', 'like', '%' . $request->univ . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports != null and $request->area == null and $request->univ == null and $request->circle == null and $request->date != null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports != null and $request->area == null and $request->univ == null and $request->circle != null and $request->date == null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->where('circle', 'like', '%' . $request->circle . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports != null and $request->area == null and $request->univ != null and $request->circle == null and $request->date == null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->where('univ', 'like', '%' . $request->univ . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports != null and $request->area != null and $request->univ == null and $request->circle == null and $request->date == null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->where('area', 'like', '%' . $request->area . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports == null and $request->area == null and $request->univ == null and $request->circle == null and $request->date != null) {
            $items = Board::with('user')->where('date', 'like', '%' . $request->date . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports == null and $request->area == null and $request->univ == null and $request->circle != null and $request->date == null) {
            $items = Board::with('user')->where('circle', 'like', '%' . $request->circle . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports == null and $request->area == null and $request->univ != null and $request->circle == null and $request->date == null) {
            $items = Board::with('user')->where('univ', 'like', '%' . $request->univ . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports == null and $request->area != null and $request->univ == null and $request->circle == null and $request->date == null) {
            $items = Board::with('user')->where('area', 'like', '%' . $request->area . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports != null and $request->area == null and $request->univ == null and $request->circle == null and $request->date == null) {
            $items = Board::with('user')->where('sports', 'like', '%' . $request->sports . '%')
                                        ->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
        if($request->sports == null and $request->area == null and $request->univ == null and $request->circle == null and $request->date == null) {
            $items = Board::with('user')->simplePaginate(10);
            $param = [
                'sports' => $request->sports,
                'area' => $request->area,
                'univ' => $request->univ,
                'circle' => $request->circle,
                'date' => $request->date,
                'user' => $user,
                'items' => $items,
            ];
            return view('hello/index', $param);
        }
    }
}

