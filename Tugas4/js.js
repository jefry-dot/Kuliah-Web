function onLamp(){
    document.getElementById('myImage').src='pic_bulbon.gif'
}

function offLamp(){
    document.getElementById('myImage').src='pic_bulboff.gif'
}

function tambah() {
    let num1 = document.getElementById("num1").value;
    let num2 = document.getElementById("num2").value;
    let hasil = parseInt(num1) + parseInt(num2);    
    document.getElementById("hasil").innerText = hasil;
}
function kurang() {
    let num1 = document.getElementById("num1").value;
    let num2 = document.getElementById("num2").value;
    let hasil = parseInt(num1) - parseInt(num2);    
    document.getElementById("hasil").innerText = hasil;
}
function bagi() {
    let num1 = document.getElementById("num1").value;
    let num2 = document.getElementById("num2").value;
    let hasil = parseInt(num1) / parseInt(num2);    
    document.getElementById("hasil").innerText = hasil;
}
function kali() {
    let num1 = document.getElementById("num1").value;
    let num2 = document.getElementById("num2").value;
    let hasil = parseInt(num1) * parseInt(num2);    
    document.getElementById("hasil").innerText = hasil;
}
  
function cekNilai() {
    let nilai = parseInt(document.getElementById("nilai").value);

    if (nilai >= 80 && nilai <= 100) {
        alert("Nilai A");
    } else if (nilai >= 70 && nilai < 80) {
        alert("Nilai B");
    } else if (nilai >= 60 && nilai < 70) {
        alert("Nilai C");
    } else if (nilai >= 50 && nilai < 60) {
        alert("Nilai D");
    } else {
        alert("Nilai E");
    }
}