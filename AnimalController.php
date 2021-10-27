<?php
# Nama  : Muhammad Jihad Robbani
# Kelas : 3 TI 05 - 2020
// NIM : 0110220199

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animal = ["buaya" , "singa" , "elang"];
    public function index(){
        foreach ($this->animal as $animals) {
            echo "- $animals";
        }
    }
    public function simpan(Request $request){
        echo "Nama Hewan baru telah di tambahkan";
        // menambahkan data menggunakan array push
        array_push($this->animal, $request->nama);
        $this->index();
    }
    public function ubah(Request $request, $id)
    {
        echo "Mengupdate data animal : <br>";
        // untuk mengupdate data animals
        $this->animal[$id] = $request->nama;

        $this->index();
    }
    public function hapus($id)
    {
        // untuk menghapus data animals menggunakan unset
        unset($this->animal[$id], $index);
        echo "Menghapus data animals - id $id";
        $this->index();
    }
}