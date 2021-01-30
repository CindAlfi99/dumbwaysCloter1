function hitungHurufDariKalimat(a, b) {
    // let hitungHuruf = b;
    let huruf = a;
    let hitung = 0;
    for (var i = 1; i < b.length; i++) {
        if (b[i] == huruf) {
            hitung++;
        }
    }

    let total = hitung - 2;
    if (total < 0) {
        total = 0;
    }
    console.log(`Hasil hitung huruf "${huruf}" muncul sebanyak ${total} kali`);

}


hitungHurufDariKalimat("a", "saya mau makan sate bersama teman saya setelah lulus dari sekolah dasar");