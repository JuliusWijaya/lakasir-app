@section('title')
    {{ $title }}
@endsection

<div class="row justify-content-center mt-5">
    <div class="col-12 col-md-6">
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <form wire:submit="save">
                    <div class="form-group mb-3">
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

                    <div class="form-group mb-3">
                        <label class="form-label" for="name_item">Name Item</label>
                        <input type="text" class="form-control @error('name_item') is-invalid @enderror"
                            wire:model="form.name_item" placeholder="Masukkan Judul Post">

                        <!-- error message untuk name_item -->
                        @error('form.name_item')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-control" id="category_id" wire:model="form.category_id">
                            <option selected>Choose Category Item</option>
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

                    <div class="form-group mb-3">
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

                    <div class="form-group mb-3">
                        <label class="form-label" for="unit">Satuan</label>
                        <input type="text" class="form-control" id="unit" wire:model="form.unit"
                            placeholder="PCS">

                        <!-- error message untuk content -->
                        @error('form.unit')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
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

                    <div>
                        <button type="submit" class="btn btn-md btn-primary btn-sm me-2">SIMPAN</button>
                        <a href="{{ route('items.index') }}" wire:navigate class="btn btn-md btn-warning btn-sm">
                            KEMBALI
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
