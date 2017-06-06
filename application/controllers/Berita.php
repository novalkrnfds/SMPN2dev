<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('template');
	}

	public function index(){
		$data = array (
			"judul" => "Hari Pertama UN SMP, Kemendikbud Tinjau Distribusi Naskah Soal di Subrayon Sejak Subuh",
			"isi" => "Jakarta, Kemendikbud --- Kementerian Pendidikan dan Kebudayaan (Kemendikbud) yang dipimpin Kepala Balitbang Kemendikbud, Furqon, melakukan sidak distribusi naskah ujian nasional (UN) di hari pertama penyelenggaraan UN SMP. Sidak dilakukan di SMPN 73 Jakarta yang merupakan sekolah Subrayon 12 di Jakarta. Salah satu tujuan sidak adalah memastikan kelancaran distribusi naskah ke sekolah-sekolah anggota subrayon dan memastikan tersegelnya naskah UN sebagai dokumen rahasia negara.",
			"foto" => "http://cdn2.tstatic.net/solo/foto/bank/images/un-smp_20160425_101211.jpg"
		);
		$this->template->display('content/berita/berita', $data);
	}
	
	public function id($id){
		if($id == 1){
			$data = array (
				"judul" => "",
				"isi" => "",
				"foto" => ""
				);
		} else if ($id == 2) {
			$data = array (
				"judul" => "Hari Pertama UN SMP, Kemendikbud Tinjau Distribusi Naskah Soal di Subrayon Sejak Subuh",
				"isi" => "Jakarta, Kemendikbud --- Kementerian Pendidikan dan Kebudayaan (Kemendikbud) yang dipimpin Kepala Balitbang Kemendikbud, 
						Furqon, melakukan sidak distribusi naskah ujian nasional (UN) di hari pertama penyelenggaraan UN SMP. Sidak dilakukan di SMPN 73 
						Jakarta yang merupakan sekolah Subrayon 12 di Jakarta. Salah satu tujuan sidak adalah memastikan kelancaran distribusi naskah ke 
						sekolah-sekolah anggota subrayon dan memastikan tersegelnya naskah UN sebagai dokumen rahasia negara.
						Kepala Balitbang Kemendikbud, Furqon mengatakan hingga menjelang dimulainya pelaksanaan UN SMP di hari pertama, tidak ada laporan 
						kebocoran naskah UN. Kemendikbud juga telah menyiapkan naskah cadangan untuk mengantisipasi jika ada naskah soal yang rusak.
						<br>
						<br>
						'Nggak akan ada bocor. Kalau yang rame-rame di internet, itu soal tahun lalu. Sudah saya cek, ujarnya di Gedung SMPN 73, Jakarta, Senin (04/05/2015).
						Di SMPN 73, Furqon melihat proses pendistribusian naskah soal kepada panitia sekolah yang menjadi anggota Subrayon 12. Semua naskah soal tampak
						masih disegel dengan baik, dan diikat per paket sehingga mudah dibagikan ke sekolah-sekolah. Sejak pukul 05.00, SMPN 73 sudah ramai didatangi panitia 
						sekolah lain yang mengambil naskah soal.
						<br>
						<br>
						Saat proses pendistribusian berlangsung, Ketua Subrayon 12 Jakarta yang juga kepala sekolah SMPN 73 mengingatkan panitia untuk mengecek kembali 
						kecocokan antara formulir pengisian data dengan tulisan di amplop naskah soal. 'Saya ingatkan. Tolong isian data dicocokkan lagi. Amplop mata 
						pelajaran jangan sampai salah,' ujarnya melalui pengeras suara.
						<br>
						<br>
						Sebagai Subrayon 12 Jakarta, SMPN 73 menjadi tempat pendistribusian naskah soal SMP untuk empat kecamatan, yaitu Kecamatan Pancoran 
						(7 sekolah), Kecamatan Mampang Prapatan (15 sekolah), Kecamatan Tebet (19 sekolah), dan Kecamatan Setiabudi (14 sekolah).
						<br>
						<br>
						UN SMP akan berlangsung selama empat hari, pada 4 -7 Mei 2015, dengan menguji empat mata pelajaran, yaitu Bahasa Indonesia, Matematika, 
						Bahasa Inggris dan Ilmu Pengetahuan Alam (IPA). Jumlah peserta UN SMP 2015 mencapai 3.773.372 orang yang tersebar di 50.515 SMP di seluruh Indonesia. 
						Sebanyak 42 SMP di antaranya menjalani UN berbasis komputer atauComputer Based Test (CBT). (Desliana Maulipaksi)",
				"foto" => "http://cdn2.tstatic.net/solo/foto/bank/images/un-smp_20160425_101211.jpg"
			);
		} else {
			$data['result'] = "Tidak ada berita";
		}
		
		$this->template->display('content/berita/berita_full', $data);
	}
}