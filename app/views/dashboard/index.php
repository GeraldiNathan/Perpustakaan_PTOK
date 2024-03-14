<div class=" w-full pl-24 pb-20 mt-20 flex-col flex">
    <span class="text-3xl font-semibold">Admin Dashboard | Manajemen Buku</span>
    <div class="flex items-center gap-5 mt-8">
        <button id="btnTambah" class="px-8 py-2 border border-black font-semibold rounded-lg bg-amber-500">
            Tambah Buku
        </button>
        <button id="btnTabel" class="px-8 py-2 rounded-lg font-semibold bg-gray-white border border-black">
            Tabel Buku
        </button>
    </div>
    <div class="w-1/3 mt-4">
        <?php Flasher::flash(); ?>
    </div>

    <div class="mt-10 w-full flex">

        <div id="tambah-buku" class="content-container w-1/2">
            <form action="<?= BASEURL; ?>/dashboard/addBuku" class="flex flex-col gap-3" method="post">
                <div class="flex flex-col gap-2">
                    <label for="judul_buku" class="font-semibold text-lg">Judul buku</label>
                    <input type="text" id="judul_buku" class="border rounded-lg border-black p-2" name="judul_buku">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="pengarang_buku" class="font-semibold text-lg">Pengarang buku</label>
                    <input type="text" id="pengarang_buku" class="border rounded-lg border-black p-2" name="pengarang_buku">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="kategori_buku" class="font-semibold text-lg">Kategori buku</label>
                    <select class="border rounded-lg border-black p-2" name="kategori_buku" id="kategori_buku">
                        <option value="">Pilih Kategori</option>
                        <option value="fiksi">Fiksi</option>
                        <option value="non-fiksi">Non-Fiksi</option>
                        <option value="sejarah">Sejarah</option>
                        <option value="biografi">Biografi</option>
                        <option value="sains">Sains</option>
                        <option value="teknologi">Teknologi</option>

                    </select>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="tahun_terbit" class="font-semibold text-lg">Tahun terbit</label>
                    <input maxlength="4" type="text" id="tahun_terbit" class="border rounded-lg border-black p-2" name="tahun_terbit">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="jumlah_hal" class="font-semibold text-lg">Jumlah halaman</label>
                    <input maxlength="4" type="text" id="jumlah_hal" class="border rounded-lg border-black p-2" name="jumlah_hal">
                </div>
                <div class="flex items-center justify-end gap-4 mt-8">
                    <button type="reset">
                        <span class="font-semibold text-lg px-8 py-2 rounded-lg bg-white border border-black hover:text-gray-600 transition duration-300">Reset</span>
                    </button>
                    <button type="submit">
                        <span class="font-semibold text-lg px-8 py-2 rounded-lg bg-amber-400 border border-black hover:bg-amber-500 transition duration-300">Submit</span>
                    </button>
                </div>
            </form>
        </div>

        <div id="tabel-buku" class="container" style="display: none;">
            <div class="mx-0 w-full">
                <table id="bukuTable" class="w-full bg-white border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-2 px-4 border-b border-r">Kode Buku</th>
                            <th class="py-2 px-4 border-b border-r">Judul Buku</th>
                            <th class="py-2 px-4 border-b border-r">Pengarang Buku</th>
                            <th class="py-2 px-4 border-b border-r">Kategori Buku</th>
                            <th class="py-2 px-4 border-b border-r">Tahun Terbit</th>
                            <th class="py-2 px-4 border-b border-r">Jumlah Halaman</th>
                            <th class="py-2 px-6 border-b border-r">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['buku'] as $buku) : ?>
                            <tr>
                                <td class="py-2 px-4 border-b border-r  "><?= $buku['kode_buku']; ?></td>
                                <td class="py-2 px-4 border-b border-r"><?= $buku['judul_buku']; ?></td>
                                <td class="py-2 px-4 border-b border-r"><?= $buku['pengarang_buku']; ?></td>
                                <td class="py-2 px-4 border-b border-r"><?= $buku['kategori_buku']; ?></td>
                                <td class="py-2 px-4 border-b border-r"><?= $buku['tahun_terbit']; ?></td>
                                <td class="py-2 px-4 border-b border-r"><?= $buku['jumlah_hal']; ?></td>
                                <td class="py-2 px-6 border-b border-r flex">
                                    <button id="ubah" data-id=<?= $buku["kode_buku"] ?> data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="buku-uniqueBuku block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                        Ubah
                                    </button>
                                    <form action="<?= BASEURL ?>/dashboard/hapus" method="post">
                                        <input type="hidden" name="kode_buku" value="<?= $buku['kode_buku']; ?>">
                                        <button type="submit" class="text-sm mx-1 px-2 py-1 rounded-lg bg-red-400 border border-black hover:bg-red-500 transition duration-300" onclick="return confirm('Apakah yakin anda ingin menghapus buku ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Ubah Buku
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" action="<?= BASEURL ?>/dashboard/ubah" method="post">
                <input type="hidden" name="_kode_buku" id="_kode_buku">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Buku</label>
                        <input type="text" name="_judul_buku" id="_judul_buku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>

                    <div class="col-span-2">
                        <label for="pengarang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pengarang</label>
                        <input type="text" name="_pengarang_buku" id="_pengarang_buku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Terbit</label>
                        <input type="number" name="_tahun_terbit" id="_tahun_terbit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select id="_kategori_buku" name="_kategori_buku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Pilih Kategori</option>
                            <option value="fiksi">Fiksi</option>
                            <option value="non-fiksi">Non Fiksi</option>
                            <option value="sejarah">Sejarah</option>
                            <option value="biografi">Biografi</option>
                            <option value="sains">Sains</option>
                            <option value="teknologi">Teknologi</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="jumlah-halaman" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah halaman:</label>
                        <input type="number" name="_jumlah_hal" id="_jumlah_hal" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                </div>

                <button type="submit" class=" updateBuku text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Ubah Buku
                </button>
            </form>
        </div>
    </div>
</div>


<script>
    var tambahBukuDiv = document.getElementById("tambah-buku");
    var tabelBukuDiv = document.getElementById("tabel-buku");
    var btnTambah = document.getElementById("btnTambah");
    var btnTabel = document.getElementById("btnTabel");

    btnTambah.addEventListener("click", function() {

        tambahBukuDiv.style.display = "block";
        tabelBukuDiv.style.display = "none";
        btnTambah.classList.add("bg-amber-500");
        btnTambah.classList.remove("bg-white");
        btnTabel.classList.remove("bg-amber-500");
        btnTabel.classList.add("bg-white");
    });

    btnTabel.addEventListener("click", function() {
        tabelBukuDiv.style.display = "block";
        tambahBukuDiv.style.display = "none";
        btnTambah.classList.remove("bg-amber-500");
        btnTambah.classList.add("bg-white");
        btnTabel.classList.add("bg-amber-500");
        btnTabel.classList.remove("bg-white");
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#bukuTable').DataTable({
            autoWidth: false,
            columnDefs: [{
                targets: [0, 4, 5],
                className: 'text-center'
            }]

        });
    });
</script>