<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public static function index(Request $request) {
        $artikel = ArtikelModel::get_all();
        return view('artikel.index', compact('artikel'));
    }
    // Menampilkan artikel tertentu
    public static function show(Request $request) {
        $id = $request->path();
        $id = explode("/", $id);
        $id = $id[1];
        $artikel = ArtikelModel::get($id);
        // $artikel = ($data_artikel[0]);
        return view('artikel.show_by_id', compact('artikel'));
    }
    public static function create(Request $request) {
        return view('artikel.form');
    }
    public static function store(Request $request) {
        $data = $request->all();
        unset($data['_token']);
        $tag = ((array_keys($data)));
        $data["tag"] = "";
        for ($i = 0; $i < count($tag); $i++) :
            if (strstr($tag[$i], 'tag')) :
                $isTag = true;
                if ($isTag) :
                    $data[$tag[$i]] = strtolower(implode('-', explode(" ", $data[$tag[$i]])));
                    $data["tag"] = $data["tag"] . $data[$tag[$i]] . " ";
                    unset($data[$tag[$i]]);
                endif;
            endif;
        endfor; 
        $data["slug"] = strtolower(implode('-', explode(" ", $data["judul"])));
        $artikel = ArtikelModel::store($data);
        return redirect('/artikel');
    }
    public function destroy(Request $request) {
        $id = $request->path();
        $id = explode("/", $id);
        $id = $id[1];
        // dd($id);
        $artikel_removed = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
    // Edit Artikel
    public function edit(Request $request) {
        $id = $request->path();
        $id = explode("/", $id);
        $id = $id[1];
        $artikel = ArtikelModel::get($id);
        return view('artikel.form_update', compact('artikel'));
    }
    public function update(Request $request) {
        $data = $request->all();
        $id = $request->path();
        $id = explode("/", $id);
        $id = $id[1];
        unset($data['_token']);
        // dd($data);
        $artikel = ArtikelModel::edit($id, $data);
        return redirect('/artikel'); 
    }
}
