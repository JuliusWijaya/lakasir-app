<div>
    <div class="row">
        <div class="col-12 col-lg-12">
            @if (Session::has('message'))
                <x-alert />
            @endif


            <a href="{{ route('adm.items.create') }}" wire:navigate class="btn btn-success btn-sm mb-3">ADD NEW ITEM</a>
            <div class="card border-0 rounded shadow-sm">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('Table Barang') }}</h6>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead class="bg-primary text-white text-center">
                                <tr>
                                    <th scope="col">Kode Item</th>
                                    <th scope="col">Name Item</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Unit</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($items as $item)
                                    <tr>
                                        <td class="text-center">
                                            {{ $item->kode_item }}
                                        </td>
                                        <td>{{ $item->name_item }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->unit }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('adm.items.edit', $item->id) }}" wire:navigate
                                                class="btn btn-sm btn-primary">
                                                <i class="fas fa-fw fa-pen-square"></i>
                                            </a>
                                            <button wire:click="destroy({{ $item->id }})"
                                                class="btn btn-sm btn-danger">
                                                <i class="fas fa-fw fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
                                            <div class="alert alert-warning text-center">
                                                Data Post belum Tersedia.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- {{ $items->links('vendor.pagination.bootstrap-4') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
