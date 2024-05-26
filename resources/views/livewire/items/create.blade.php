<div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-9">
            <div class="card border-0 shadow rounded">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Barang Baru</h6>
                </div>

                <div class="card-body">
                    <form wire:submit="save">
                        <div class="row g-3">
                            <div class="col-12 col-lg-3">
                                <label for="kode_item" class="form-label">Kode Item</label>
                                <input type="text" class="form-control @error('kode_item') is-invalid @enderror"
                                    wire:model="form.kode_item">

                                <!-- error message untuk title -->
                                @error('form.kode_item')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-lg-9">
                                <label class="form-label" for="name_item">Name Item</label>
                                <input type="text" class="form-control @error('name_item') is-invalid @enderror"
                                    wire:model="form.name_item" placeholder="Masukkan Nama Barang">

                                <!-- error message untuk name_item -->
                                @error('form.name_item')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-md-3">
                            <div class="col-12 col-lg-3">
                                <label for="category_id" class="form-label">Category</label>
                                <select class="form-control" id="category_id" wire:model="form.category_id">
                                    <option selected>Pilih Category Barang</option>
                                    @foreach ($categories as $key => $val)
                                        <option value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                                </select>

                                <!-- error message untuk content -->
                                @error('form.category_id')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-lg-3">
                                <label for="qty" class="form-label">Qty</label>
                                <input type="number" class="form-control" id="qty" wire:model="form.qty"
                                    placeholder="20">

                                <!-- error message untuk content -->
                                @error('form.qty')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-lg-3">
                                <label class="form-label" for="unit">Satuan</label>
                                <select class="form-control" id="unit" wire:model="form.unit">
                                    <option selected>Pilih Satuan Barang</option>
                                    <option value="DUS">Dus</option>
                                    <option value="PCS">PCS</option>
                                    <option value="SACHET">SACHET</option>
                                </select>

                                <!-- error message untuk content -->
                                @error('form.unit')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>


                            <div class="col">
                                <label class="form-label" for="price">Price</label>
                                <input type="number" class="form-control" id="price" wire:model="form.price"
                                    placeholder="Rp. 10.000">

                                <!-- error message untuk content -->
                                @error('form.price')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-md btn-primary btn-sm">SIMPAN</button>
                            <a href="{{ route('adm.items.index') }}" wire:navigate
                                class="btn btn-md btn-warning btn-sm">
                                KEMBALI
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
