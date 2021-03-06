<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';

    public static $rules = [
    						'nama_produk'=>'required',
    						'keterangan_bunga'=>'required',
    						'kode_bunga'=>'required',
    						'harga_bunga'=>'required|integer',
    						'gambar'=>'required',
    						'kategori_id'=>'required|integer'
    					];

    protected $fillable = [
    						'nama_produk',
    						'keterangan_bunga',
    						'kode_bunga',
    						'harga_bunga',
    						'img',
    						'kategori_id'
    					];

    public function kategori()
    {
    	return $this->belongsTo('App\Kategori', 'kategori_id', 'id_kategori');
    }
}
