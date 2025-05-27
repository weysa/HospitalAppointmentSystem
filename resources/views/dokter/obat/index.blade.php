<!-- resources/views/obat/index-dummy.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Obat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 bg-white shadow-sm sm:p-8 sm:rounded-lg">
                <section>
                    <header class="flex items-center justify-between">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Daftar Obat') }}
                        </h2>

                        <div class="flex-col items-center justify-center text-center">
                            <a href="#" class="btn btn-primary">Tambah Obat</a>

                            <p class="text-sm text-gray-600">{{ __('Created.') }}</p>
                        </div>
                    </header>

                    <table class="table mt-6 overflow-hidden rounded table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Obat</th>
                                <th scope="col">Kemasan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="align-middle text-start">1</th>
                                <td class="align-middle text-start">Paracetamol</td>
                                <td class="align-middle text-start">Tablet 500 mg</td>
                                <td class="align-middle text-start">Rp10.000</td>
                                <td class="flex items-center gap-3">
                                    <a href="#" class="btn btn-secondary btn-sm">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle text-start">2</th>
                                <td class="align-middle text-start">Amoxicillin</td>
                                <td class="align-middle text-start">Kapsul 250 mg</td>
                                <td class="align-middle text-start">Rp15.000</td>
                                <td class="flex items-center gap-3">
                                    <a href="#" class="btn btn-secondary btn-sm">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle text-start">3</th>
                                <td class="align-middle text-start">Ibuprofen</td>
                                <td class="align-middle text-start">Tablet 400 mg</td>
                                <td class="align-middle text-start">Rp12.000</td>
                                <td class="flex items-center gap-3">
                                    <a href="#" class="btn btn-secondary btn-sm">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
