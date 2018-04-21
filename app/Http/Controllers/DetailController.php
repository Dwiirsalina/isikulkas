<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Resep;

class DetailController extends Controller
{
	public function detail(Request $r) 
	{
		$detail=Resep::where('id','=',2)->firstOrFail();
		$data['nama']=$detail->nama_masakan;
		$data['jumlah']=$detail->jumlah_bahan_masakan;
		$data['kategori']=explode(";",$detail->kat_masakan);
		$data['cara']=explode(";",$detail->cara_masakan);
		$data['alat']=explode(";",$detail->alat_masakan);
		$bahan=explode(";",$detail->bahan_masakan);
		$satuan=explode(";",$detail->satuan_bahan_masakan);
		$data['bahan']=array();
		$ukuran=explode(";",$detail->ukuran_bahan_masakan);
		for($i=0;$i<$detail->jumlah_bahan_masakan;$i++){
			$word=$bahan[$i]." ".$ukuran[$i]." ".$satuan[$i];
			array_push($data['bahan'],$word);	
		}
		$data['rating']=$detail->rating;
		$data['gambar']=$detail->imageUrl;
		return view('detail',$data);
	}

	public function nilaiBahan(string $bahan){
		$hasil=DB::table('resep')
			->select('nama_makanan')
			->where('bahan_makanan','like','%'.$bahan.'%')
			->get();
		return $hasil;
	}

	public function getResep(Request $r){
		$final['resep']=array();
		$notSorted=array();
		foreach ($r->bahan as $bahan) {
			$result = nilaiBahan($bahan);
			foreach($result as $hasil){
				$notSorted[$hasil]+=1;
			}
		}
		$resep=arsort($notSorted);
		foreach ($resep as $eResep) {
			$append = DB::table('resep')
				->where('nama_resep','=',$eResep)
				->get();
			array_push($final['resep'],$append);
		}
		return view('index',$data);
	}

	public function ratingResep(Request $r){
		$data['details']=DB::table('resep')
			->orderBy('rating','desc')
			->limit(4)
			->get();
	}
}
