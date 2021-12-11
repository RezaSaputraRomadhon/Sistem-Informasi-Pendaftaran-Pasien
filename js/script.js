function cekFormLogin() {
    nama = document.getElementById("nama");
    no_induk = document.getElementById("no_induk");


    if (nama.value == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Nama Atau No Induk Tidak Boleh Di Kosongi',
        })
        return false;
    } else if (nama.value.length <= 3) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Nama Atau No Induk Minimal 3 Karakter',
        })
        return false;
    } else if (no_induk.value == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Nama Atau No Induk Tidak Boleh Di Kosongi',
        })
        return false;
    } else if (no_induk.value <= 3) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Nama Atau No Induk Minimal 3 Karakter',
        })
        return false;
    }

}

function cekFormKategori()
{
    kategori = document.getElementById("kategoriObat");
    if(kategori.value == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Kategori Tidak Boleh Di Kosongi',
        })
        return false;
    } else if(kategori.value.length <= 5){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Kategori Minimal 5 Karakter',
        })
        return false;
    }
}

function cekFormJenis()
{
    jenis = document.getElementById("jenisObat");
    if(jenis.value == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'jenis Tidak Boleh Di Kosongi',
        })
        return false;
    } else if(jenis.length <= 3){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'jenis Minimal 3 Karakter',
        })
        return false;
    }
}

function cekFormObat()
{
    stock = document.getElementById("stock");
    harga = document.getElementById("harga");
    namaObat = document.getElementById("namaObat");
    if(namaObat.value == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Nama Obat Tidak Boleh Di Kosongi',
        })
        return false;
    } else if(namaObat.value.length <= 3){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Nama Obat Minimal 3 Karakter',
        })
        return false;
    } else if(stock.value == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Stock Tidak Boleh Di Kosongi',
        })
        return false;
    } else if (stock.value <= 3){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Stock Minimal 3 Karakter',
        })
        return false;
    } else if(harga.value == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Harga Tidak Boleh Di Kosongi',
        })
        return false;
    } else if(harga.value <= 3){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Harga Minimal 3 Karakter',
        })
        return false;
    }

}

function cekFormPoliklinik()
{
    poliklinik = document.getElementById("nama");
    if(poliklinik.value == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Nama Tidak Boleh Di Kosongi',
        })
        return false;
    } else if(poliklinik.length <= 3){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'nama Minimal 3 Karakter',
        })
        return false;
    }
}

function cekFormPasien()
{
    pasien = document.getElementById("nama");
    email = document.getElementById("email");
    noHp = document.getElementById("noHp");
    pekerjaan = document.getElementById("pekerjaan");
    alamat = document.getElementById("alamat");
    if(pasien.value == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Nama Tidak Boleh Di Kosongi',
        })
        return false;
    } else if(pasien.length <= 3){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'nama Minimal 3 Karakter',
        })
        return false;
    } else if(email.value == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Harga Tidak Boleh Di Kosongi',
        })
        return false;
    } else if(email.value <= 3){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Harga Minimal 3 Karakter',
        })
        return false;
    } else if(noHp.value == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Harga Tidak Boleh Di Kosongi',
        })
        return false;
    } else if(noHp.value <= 3){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Harga Minimal 3 Karakter',
        })
        return false;
    } else if(pekerjaan.value == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Harga Tidak Boleh Di Kosongi',
        })
        return false;
    } else if(pekerjaan.value <= 3){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Harga Minimal 3 Karakter',
        })
        return false;
    } else if(alamat.value == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Harga Tidak Boleh Di Kosongi',
        })
        return false;
    } else if(alamat.value <= 3){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Harga Minimal 3 Karakter',
        })
        return false;
    }
}