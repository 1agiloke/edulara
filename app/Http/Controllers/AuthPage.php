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
class AuthPage extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function donasiuang()
    {   
        $kabupaten = Kabupaten::all();
       	
        return view('pages.donasiuang',['kabupaten'=>$kabupaten, 'completed'=>null]);
    }

    public function donasibarang()
    {   

        return view('pages.donasibarang');
    }
    
 	public function tambahDonasiuang(Request $req)
    {
    	$kabupaten = Kabupaten::all();
        $user = Auth::User()->username;
        $donasi = DonasiUang::orderBy('waktu','desc')->where('username',$user)->first();
        $jlhDonasi = count(DonasiUang::all());
        if($donasi)
        {
	        if($donasi->status==0)
			{
				$message = "Harus menyelesaikan donasi sebelumnya terlebih dahulu <br/> Status donasi anda belum diverifikasi karena donasi anda belum kami terima.<br/> Terima kasih";
			}
	        else if($donasi->status==1)
	        {
	        	$message = "Harus menyelesaikan donasi sebelumnya terlebih dahulu <br/> Periode donasi anda belum habis.<br>Terima kasih";
	        }
		    
      		return view('pages.donasiuang',['kabupaten'=>$kabupaten, 'completed'=>[0,$message] ]);
	    }

	    DonasiUang::create(
	    	[
	    		'username'=>$user,
	    		'id'=>'DU00' . ($jlhDonasi+1),
	    		'jenis'=>$req->jenisdonasi,
	    		'nama'=>$req->nama,
	    		'alamat'=>$req->alamat,
	    		'kota'=>$req->kota,
	    		'hp'=>$req->hp,
	    		'telepon'=>$req->telepon,
	    		'b_donasi'=>$req->besar,
	    		'periode'=>$req->bulan,
	    		'status'=>0
	    	]
	    );
	    $message = "Terima Kasih Telah Mendonasikan Kasih Anda di Educationeer <br> Status Donasi Anda Akan Segera Berubah Segera Setelah Kami Menerima Donasi. Anda Juga Dapat Bergabung Bersama Kami Sebagai Volunteer <a style='color:white;text-decoration:underline;' href='/volunteer'>Disni</a>";

	    return view('pages.donasiuang',['kabupaten'=>$kabupaten, 'completed'=>[1,$message]]);    
     }
    public function tambahDonasibarang()
    {


    }
}
