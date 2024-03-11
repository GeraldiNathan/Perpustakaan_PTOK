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
                    <label for="kode_buku" class="font-semibold text-lg">Kode buku</label>
                    <input type="text" id="kode_buku" class="border rounded-lg border-black p-2" name="kode_buku">
                </div>
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
        <div id="tabel-buku" class="content-container" style="display: none;">
            <p>Konten Tabel Buku</p>
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