<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Riwayat Periksa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 bg-white shadow sm-sm:p-8 sm:rounded-lg">
                <section>
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            Riwayat Janji Periksa
                        </h2>
                    </header>

                    <!-- Table -->
                    <table class="table mt-6 overflow-hidden rounded table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Poliklinik</th>
                                <th scope="col">Dokter</th>
                                <th scope="col">Hari</th>
                                <th scope="col">Mulai</th>
                                <th scope="col">Selesai</th>
                                <th scope="col">Antrian</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dummy Row 1 -->
                            <tr>
                                <th scope="row" class="align-middle text-start">1</th>
                                <td class="align-middle text-start">Umum</td>
                                <td class="align-middle text-start">Dr. Ahmad</td>
                                <td class="align-middle text-start">Senin</td>
                                <td class="align-middle text-start">08.00</td>
                                <td class="align-middle text-start">10.00</td>
                                <td class="align-middle text-start">5</td>
                                <td class="align-middle text-start">
                                    <span class="badge badge-pill badge-warning">Belum Diperiksa</span>
                                </td>
                                <td class="align-middle text-start">
                                    <a href="#" class="btn btn-info">Detail</a>
                                    <!-- Modal -->
                                    <div class="modal fade bd-example-modal-lg" id="detailModal1" tabindex="-1" role="dialog" aria-labelledby="detailModalTitle1" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h5 class="modal-title font-weight-bold" id="riwayatModalLabel1">
                                                        Detail Riwayat Pemeriksaan
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <!-- Modal Body -->
                                                <div class="modal-body">
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <strong>Poliklinik:</strong> Umum
                                                        </li>
                                                        <li class="list-group-item">
                                                            <strong>Nama Dokter:</strong> Dr. Ahmad
                                                        </li>
                                                        <li class="list-group-item">
                                                            <strong>Hari Pemeriksaan:</strong> Senin
                                                        </li>
                                                        <li class="list-group-item">
                                                            <strong>Jam Mulai:</strong> 08.00
                                                        </li>
                                                        <li class="list-group-item">
                                                            <strong>Jam Selesai:</strong> 10.00
                                                        </li>
                                                    </ul>
                                                    <div class="mt-4 text-center">
                                                        <div class="mb-2 h5 font-weight-bold">Nomor Antrian Anda</div>
                                                        <span class="badge badge-primary" style="font-size: 1.75rem; padding: 0.6em 1.2em;">
                                                            5
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        Tutup
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Dummy Row 2 -->
                            <tr>
                                <th scope="row" class="align-middle text-start">2</th>
                                <td class="align-middle text-start">Gigi</td>
                                <td class="align-middle text-start">Dr. Sari</td>
                                <td class="align-middle text-start">Rabu</td>
                                <td class="align-middle text-start">14.00</td>
                                <td class="align-middle text-start">16.00</td>
                                <td class="align-middle text-start">3</td>
                                <td class="align-middle text-start">
                                    <span class="badge badge-pill badge-success">Sudah Diperiksa</span>
                                </td>
                                <td class="align-middle text-start">
                                    <a href="#" class="btn btn-secondary">Riwayat</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>