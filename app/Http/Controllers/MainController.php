<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('index');
    }

    public function check()
    {
        return view('check');
    }

    public function result(Request $request)
    {
        $data = DB::table('result')->where('bulan', $request->month.'-'.date('Y'));
        $month = $this->getMonth($request->month);

        if ($request->pass == env('APP_PASS') && $data->exists()) {
            $result = $data->first();

            $arr_result = (array) $result;
            unset($arr_result['bulan']);
            unset($arr_result['id']);

            $score = max( $arr_result );
            $day = array_search($score, $arr_result);
            $winner = [
                'score' => $score,
                'day' => ucfirst(substr($day, 3))
            ];

            return view('result', compact('result', 'winner', 'month'));
        }

        return redirect('/check');
    }

    public function rate(Request $request)
    {
        $rating = DB::table('rating');
        $result = DB::table('result');

        $exists = true;
        $check = $rating->where([
            ['penilai', '=', auth()->user()->id],
            ['created_at', 'like', date('Y-m-d').'%'],
        ])->exists();

        if (!$check) {
            $request['created_at'] = date('Y-m-d H:i:s');
            $rating->insert([
                'penilai' => auth()->user()->id,
                'kelompok' => $request->kelompok,
                'nilai' => $request->nilai,
                'created_at' => date('Y-m-d H:i:s')
            ]);

            $resulted = $result->where('bulan', date('m-Y'));

            if ($resulted->doesntExist()) {
                $result->insert([
                    'bulan' => date('m-Y')
                ]);
            }

            $sum = DB::table('rating')
                        ->whereMonth('created_at', date('m'))
                        ->where('kelompok', $request->kelompok)
                        ->sum('nilai');

            $resulted->update([
                "kl_"."$request->kelompok" => $sum
            ]);

            $exists = false;
        }

        return view('rated', compact('exists'));
    }

    public function getMonth($value)
    {
        $months = [
            "01" => "Januari",
            "02" => "Februari",
            "03" => "Maret",
            "04" => "April",
            "05" => "Mei",
            "06" => "Juni",
            "07" => "Juli",
            "08" => "Agustus",
            "09" => "September",
            "10" => "Oktober",
            "11" => "November",
            "12" => "Desember"
        ];

        return $months[$value];
    }
}
