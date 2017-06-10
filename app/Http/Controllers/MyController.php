<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
	//passing data basic
    public function percobaan()
    {
   		 $a = "Udin";
    	 return "Nama Saya Adalah ".$a;
	}
	//passing data show view
	public function percobaan2()
	{
		return view('about');
	}
	//passing data variable to view
	public function percobaan3()
	{
		$a = "jancok";
		return view("latihan.saya",compact('a'));
	}

	public function percobaan4()
	{
		$a = "Dandy Firmansyah";
		$b = "XI RPL 3";
		$c = "SMK ASSALAAM BANDUNG";
		return view("latihan.bio",compact('a','b','c'));
	}

	public function percobaan5()
	{
		$a = 1;
		$b = 2;
		$c = 3;
		return view("latihan.seleksi",compact('a','b','c'));
	}

	public function percobaan6()
	{
		$buah = ['Mangga','Jeruk','Apel','Anggur','Melon'];
		return view("latihan.buah",compact('buah'));
	}

	public function percobaan7()
	{
		$buah          = ['Mangga','Jeruk','Apel','Anggur','Melon'];
		$life          = ['Hewan','Manusia','Tumbuhan','Bakteri','Bio'];
		$pc            = ['Mouse','Keyboard','Printer','Monitor','CPU'];
		return view("latihan.gabungan",compact('buah','life','pc'));
	}
	//parameter
		public function percobaan8($data,$data2 = null)
	{
		$array = array('binatang' => ['kucing'=>['Persia','Anggora'],
		        			   	      'hamster'=>['Hamtaro','Hamtari'],
		        			 		  'kelinci'=>['White','Black'],
		        			 		  'komodo'=>['Persia','Imortal']],

		        	   'buah'     => ['mangga'=>['Harumanis','Marijan'],
		        		 			  'alpukat'=>['Hijau','Hitam'],
		        		 			  'apel'=>['Fuji','Hejo']],

		        	   'pc'		  => ['asus'=>['456UR','123'],
		        	   		          'dell'=>['Alienware','Inspiron'],
		        	   		          'acer'=>['6930','7780']]
		       	       );
		if ($data){
			$query = (array_keys($array[$data]));
		}
		if ($data2){
			$query = ($array[$data][$data2]);
		}
		return view("parameter",compact('query','data','data2'));
	}


}