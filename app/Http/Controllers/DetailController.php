<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Resep;

class DetailController extends Controller
{
	public function detail(Request $r,$id) 
	{
		$detail=Resep::where('id','=',$id)->firstOrFail();
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
			->select('nama_masakan')
			->where('bahan_masakan','like',DB::raw("'%$bahan%'"))
			->get();
		return $hasil;
	}

	public function getResep(Request $r){
		$data['resep']=array();
		$resep=array();
		foreach ($r->bahan as $bahan) {
			$result = $this->nilaiBahan($bahan);
			foreach($result as $hasil){
				if(array_key_exists($hasil->nama_masakan, $resep)){
					$resep[$hasil->nama_masakan]+=1;	
				}else{
					$arr1= array($hasil->nama_masakan => 1);
					$resep=$resep+$arr1;
				}
			}
		}
		arsort($resep);
		foreach ($resep as $eResep=>$value) {
			$append = DB::table('resep')
				->select('id','nama_masakan','imageUrl', 'rating')
				->where('nama_masakan','=',DB::raw("'$eResep'"))
				->get()->toArray();
			$push = json_decode(json_encode($append), True);
			array_push($data['resep'],$push);
		}
		//var_dump($data['resep']);
		return view('index',$data);
	}

	public function ratingResep(Request $r){
		$data['details']=DB::table('resep')
			->orderBy('rating','desc')
			->limit(4)
			->get();
	}
}
