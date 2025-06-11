<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Riwayat Periksa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 bg-white shadow-sm sm:p-8 sm:rounded-lg">
                <section>
                    <header class="mb-4">
                        <h2 class="text-lg font-medium text-gray-900">
                            Riwayat Pemeriksaan
                        </h2>
                        <p class="mt-1 text-sm text-gray-600">
                            Informasi lengkap mengenai jadwal pemeriksaan Anda.
                        </p>
                    </header>

                    <div class="mb-4 border-2 card">
                        <div class="bg-white border-black card-header border-bottom">
                            <h5 class="mb-0 font-semibold text-gray-800 card-title">Detail Pemeriksaan</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="border-black col-md-6 border-end">
                                    <div class="mb-3">
                                        <label class="font-semibold text-gray-700 form-label">Tanggal Periksa</label>
                                        <div class="form-control-plaintext">
                                            10 Juni 2025 14.30
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="font-semibold text-gray-700 form-label">Catatan</label>
                                        <div class="form-control-plaintext">
                                            Pasien disarankan istirahat penuh.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 border-2 card">
                        <div class="bg-white border-black card-header border-bottom">
                            <h5 class="mb-0 font-semibold text-gray-800 card-title">Daftar Obat Diresepkan</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="px-0 list-group-item d-flex justify-content-between align-items-center border-bottom">
                                    <span>Paracetamol</span>
                                    <span class="badge bg-light text-dark">10 tablet</span>
                                </li>
                                <li class="px-0 list-group-item d-flex justify-content-between align-items-center border-bottom">
                                    <span>Amoxicillin</span>
                                    <span class="badge bg-light text-dark">5 tablet</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mb-4 border-2 card bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="font-semibold text-gray-800 fw-bold">Biaya Periksa</span>
                                <span class="fw-bold fs-5 text-primary">
                                    Rp150.000
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="btn btn-secondary">
                            <i class="bi bi-arrow-left me-1"></i> Kembali
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>