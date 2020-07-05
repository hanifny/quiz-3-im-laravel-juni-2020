<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArtikelModel extends Model
{
    public static function get_all() {
        $artikel = DB::table('article')->get();
        return $artikel;
    }
    public static function get($id) {
        $artikel = DB::table('article')->where('id', $id)->get();
        return $artikel;
    }
    public static function store($data) {
        $tambah_artikel = DB::table('article')->insert($data);
    }   
    public static function edit($id, $data) {
        $artikel_updated = DB::table('article')->where('id', $id)->update(
            ['judul' => $data['judul'], 'isi' => $data['isi']]
        ); 
    }
    public static function destroy($id) {
        DB::table('article')->where('id', $id)->delete();
    }
}
