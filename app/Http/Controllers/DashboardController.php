<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     if (auth()->user()) {
    //         return redirect('/dashboard');
    //     }

    //     return redirect('/');
    // }

    public function index()
    {
        if (auth()->user()) {
            $data = DB::table('perjalanan')
                ->join('users', 'users.id', '=', 'perjalanan.id_user')
                ->select('users.name', 'perjalanan.tanggal', 'perjalanan.lokasi', 'perjalanan.suhu', 'perjalanan.jam')
                ->where('users.id', '=', auth()->user()->id)
                ->paginate(5)->withQueryString();

            return view('pages.dashboard', ['data' => $data]);
        }

        return view('pages.dashboard');
    }

    public function cariPerjalanan(Request $request)
    {
        $input = '';
        $keyword = '';

        if ($request->input("jam")) {
            $input = 'jam';
            $keyword = $request->jam;
        } elseif ($request->input("lokasi")) {
            $input = 'lokasi';
            $keyword = $request->lokasi;
        } elseif ($request->input("tanggal")) {
            $input = 'tanggal';
            $keyword = $request->tanggal;
        } elseif ($request->input("suhu")) {
            $input = 'suhu';
            $keyword = $request->suhu;
        } else {
            $input = '';
            $keyword = '';
        }

        if ($input && $keyword) {
            $data = User::join('perjalanan', 'perjalanan.id_user', '=', 'users.id')
                ->where(
                    function ($query) use ($keyword, $input) {
                        $query->where('users.name', auth()->user()->name)
                            ->where('perjalanan.' . $input, 'LIKE', '%' . $keyword . '%');
                    })
                    // ->get(['users.name', 'perjalanan.*'])
                    ->paginate(5)->withQueryString();

            return view('pages.dashboard', ['data' => $data]);
        } else {
            return view('pages.dashboard');
        }
    }

    public function urutkanPerjalanan(Request $request)
    {
        $orderBy = $request->orderBy;
        $sortBy = $request->sortBy;

        if (auth()->user()) {
            $data = DB::table('perjalanan')
                ->join('users', 'users.id', '=', 'perjalanan.id_user')
                ->select('perjalanan.tanggal', 'perjalanan.lokasi', 'perjalanan.suhu', 'perjalanan.jam')
                ->where('users.id', '=', auth()->user()->id)
                ->orderBy('perjalanan.' . $orderBy, $sortBy)
                ->paginate(5)->withQueryString();

            return view('pages.dashboard', ['data' => $data]);
        }

        return view('pages.dashboard');
    }
}
