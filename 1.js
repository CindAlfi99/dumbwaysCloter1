// let cek = 120000000;
// let limit = cek / 5;
// console.log(limit);
function lamaKredit(lamaKredit) {

    let type = 0;
    let namaRUmah = '';
    let uangMuka = 0;
    let sisa = 0;
    let Kredit = 0;
    let angsuran = 0;
    let body = document.getElementById('container');

    if (lamaKredit === "24 Bulan") {
        type = 120000000;
        namaRUmah = "Rose";
        uangMuka = type / 5;
        sisa = type - uangMuka;
        Kredit = 24;
        angsuran = sisa / Kredit;

    } else if (lamaKredit === "18 Bulan") {
        type = 300000000;
        namaRUmah = "Gold";
        uangMuka = type / 5;
        sisa = type - uangMuka;
        Kredit = 18;
        angsuran = sisa / Kredit;
    } else {
        type = 360000000;
        namaRUmah = "Platinum";
        uangMuka = type / 5;
        sisa = type - uangMuka;
        Kredit = 12;
        angsuran = sisa / Kredit;
    }
    document.write(`Type Rumah :${namaRUmah}<br> `);
    document.write(`Harga Rumah :${type} <br>`);
    document.write(`Uang Muka :${uangMuka} <br>`);
    document.write(`Sisa :${sisa} <br>`);
    document.write(`Lama Kredit :${Kredit} <br>`);
    document.write(`Angsuran :${angsuran} <br>`);
    document.write('<table border="1" cellspacing="0" style="width:50%">');
    document.write('<tr><td>Bulan Ke</td><td>Angsuran</td><td>Sisa</td></tr>');
    for (let i = 1; i <= Kredit; i++) {

        document.write('<tr>');

        for (let j = 1; j < 2; j++) {
            sisa -= angsuran;

            document.write(`<td>${i}</td>`);
            document.write(`<td>${angsuran}</td>`);
            document.write(`<td>${sisa}</td>`);
        }

        document.write('</tr>');
    }
    document.write('</table>');

}
lamaKredit("18 Bulan");