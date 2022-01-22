<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\Models\History;
use App\Models\nasabah;

use Illuminate\Http\Request;

class TarikController extends Controller
{
    public function index(){
        return view('tarik');
    }

    public function tarik_uang(Request $req){
        $norek = Auth::user()->norekening;
        $loan = $req->loan;
        $req->merge([
            'name' => Auth::user()->name,
            'norekening'=> $norek,
            'jenis_transaksi'=>'DEBIT'
        ]);
        $insert = $req->validate([
            'name' => 'required',
            'norekening'=>'required',
            'jenis_transaksi'=>'required',
            'loan'=>'required'
        ]);
        $users = DB::table('nasabahs')->where('norekening','=',$norek)->get('loan');
        $total = ( (json_decode($users[0]->loan))  - $loan );
        if((json_decode($users[0]->loan))  <  $loan ){
            return back()->with('ErrorSaldo','Saldo anda tidak mencukupi untuk di tarik!');
        }
        History::create($insert);
        nasabah::where('norekening',$norek)
                ->update(['loan'=>$total]);
        return redirect('/');

    }
}
