<?php

use Illuminate\Support\Facades\Route;


Route::get(uri:'/dosen', action:function(){
    $list_dosen = ["Udin1", "Udin2", "Udin3"];
    return view(view:'dosen')->with(key:'dosen_s', value:$list_dosen);
});

Route::get(uri:'/matakuliah', action:function(){
    $list_mahasiswa = ["Network", "Kalkulus", "Komputer"];
    return view(view:'matakuliah')->with(key:'matakuliah_s', value:$list_mahasiswa);
});

Route::get(uri:'/mahasiswa', action:function(){
    $list_matakuliah = ["Laptop", "Handphone", "Komputer"];
    return view(view:'mahasiswa')->with(key:'mahasiswa_s', value:$list_matakuliah);
});

Route::fallback(action:function(){
    return view(view:'colorlib-error\error');
});
