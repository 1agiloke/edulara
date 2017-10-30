<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Event;
use App\User;
use App\Point;
use App\BarangLelang;
use App\Kategori;
use App\Kabupaten;
use App\Penawaran;
use App\DonasiUang;
use App\DonasiBarang;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        return view('pages.index');
    }
    public function donasi()
    {   
        return view('pages.donasi');
    }
    
    public function lelang()
    {
        $data = BarangLelang::orderBy('waktu','dsc')->get();
        $top = $data[0];
        $kategori = Kategori::all();
        $nKategori = array();
        for ($i=0; $i < count($kategori); $i++) { 
            $nKategori[] = 0;
        }
        for ($i=0; $i < count($data); $i++) { 
            $nKategori[$data[$i]->kategori] += 1;
        }
        return view('pages.lelang',['top'=>$top,'data'=>$data,'kategori'=>$kategori, 'nK'=>$nKategori]);
    }
    public function lelangend()
    {
        $lelangs = BarangLelang::all();
        $pemenang = array();
        foreach ($lelangs as $lelang) {
            $item = Penawaran::join('BarangLelang','Penawaran.idbarang','=','BarangLelang.id')->where('Penawaran.idbarang',$lelang->id)->orderBy('Penawaran.hargatawar','dsc')->limit(1)->get(['BarangLelang.nama','Penawaran.username']);
            if(count($item)>0)
                $pemenang[] = ['nama'=>$item[0]->nama, 'username'=>$item[0]->username];
        }
        
        return view('pages.lelangend',['pemenang'=>$pemenang]);
    }
    public function lelangdetail($id)
    {
        $data = BarangLelang::where('id',$id)->get();
        return view('pages.lelangdetail',['data'=>$data]);
    }
    public function ranking()
    {
        $nobels = Point::where('totalpoint', ">=", 50)->get();
        $lovings = Point::whereBetween('totalpoint',[25,49])->get();
        $newbies = Point::whereBetween('totalpoint', [10,24])->get();
        
        return view('pages.ranking',['nobels'=>$nobels,'lovings'=>$lovings,'newbies'=>$newbies]);
    }
}
