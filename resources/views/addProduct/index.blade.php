@extends('layouts.app')

@section('title', 'Teknik Informatika - Tambah Produk')

@section('content')
    <section class="py-5">
        <h2 class="mb-4">Add Products</h2>
        <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Foto Produk <span class="text-danger">*</span></label>
                    <div class="border border-warning rounded text-center py-3" style="cursor: pointer;">
                        Tambahkan Foto (0/9)
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Video Produk</label>
                    <div class="border border-warning rounded text-center py-3" style="cursor: pointer;">
                        Tambahkan Video
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Produk <span class="text-danger">*</span></label>
                <input type="text" class="form-control border-warning" placeholder="Input">
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori Produk <span class="text-danger">*</span></label>
                <select class="form-select border-warning">
                    <option>Pilih kategori</option>
                    <option>Kategori 1</option>
                    <option>Kategori 2</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi Produk <span class="text-danger">*</span></label>
                <textarea class="form-control border-warning" rows="3" placeholder="Input"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Penjual <span class="text-danger">*</span></label>
                <input type="text" class="form-control border-warning" placeholder="Input">
            </div>
            <div class="mb-3">
                <label class="form-label">Media Sosial <span class="text-danger">*</span></label>
                <input type="text" class="form-control border-warning mb-2" placeholder="Instagram">
                <input type="text" class="form-control border-warning mb-2" placeholder="LinkedIn">
                <input type="text" class="form-control border-warning" placeholder="GitHub">
            </div>
            <button type="submit" class="btn btn-warning px-5">Submit</button>
        </form>
    </section>
@endsection
