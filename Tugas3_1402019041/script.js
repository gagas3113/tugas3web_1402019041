let name = prompt("Masukkan name Anda ?");

let dat = new Date();
let jam = dat.getHours();
let day = "";
if (jam < 12) {
    day = "Pagi";
}
else if (jam > 12 && jam < 16) {
    day = "Siang";
}
else if (jam > 16 && jam < 19) {
    day = "Sore"
}
else {
    day = "Malam";
}


document.getElementById('user').innerHTML = ", Selamat " + day + " " +  name;

function hitungSilinder() {
    let jari = document.getElementById("jarijarisilinder");
    let tinggi = document.getElementById("tinggisilinder");
    let luas = 0.25 * Math.PI * (jari.value * 2) * (jari.value * 2);
    let volume = Math.PI * (jari.value * jari.value) * tinggi.value;
    document.getElementById('luas-silinder').innerHTML = "Luas Permukaan Silinder: " + luas.toFixed(2);
    document.getElementById('volume-silinder').innerHTML = "Volume Silinder: " + volume.toFixed(2);
}

function hitungKerucut() {
    let jari = document.getElementById("jarijarikerucut");
    let tinggi = document.getElementById("tinggikerucut");
    let garis = document.getElementById("pelukiskerucut");
    let luas = ( Math.PI * jari.value * jari.value ) + (Math.PI * jari.value * garis.value);
    let volume = 1 / 3 * Math.PI * (jari.value * jari.value) * tinggi.value;   
    document.getElementById('luas-kerucut').innerHTML = "Luas Permukaan Kerucut: " + luas.toFixed(2);
    document.getElementById('volume-kerucut').innerHTML = "Volume Kerucut: " + volume.toFixed(2);
}

function hitungBola() {
    let jari = document.getElementById("jarijaribola");
    let luas = 4 * Math.PI * jari.value * jari.value;
    let volume = 4 / 3 * Math.PI * jari.value * jari.value * jari.value;
    document.getElementById('luas-bola').innerHTML = "Luas Permukaan Bola: " + luas.toFixed(2);
    document.getElementById('volume-bola').innerHTML = "Volume Bola: " + volume.toFixed(2);

}
    



