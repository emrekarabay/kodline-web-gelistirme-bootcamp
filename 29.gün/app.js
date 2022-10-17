// console.log("emre");
//
// var isim = " emre";
// var soyad = " karabay";
// var sayi = 10;
//
// var b= 40;
// console.log(b);
//
// b = prompt("Lütfen b değer giriniz");
// console.log(b);
//
// var birinciDeger = prompt("Depo kaç litre?");
// var IkinciDeger = prompt("100 Kilometrede ne kadar yakıyor?");
//
// var menzil =  birinciDeger/(IkinciDeger/100);
//
// if(menzil < 100){
//     console.log("Menziliniz az")
// }else{
//     console.log("Menziliniz çok")
// }
//
// var ay = prompt("Hangi aydasın?")
//
// switch (parseInt(ay)) {
//     case 12:
//     case 1:
//     case 2:
//         console.log("Kış");
//         break;
//     case 3:
//     case 4:
//     case 5:
//         console.log("ilkahar");
//         break;
//     case 6:
//     case 7:
//     case 8:
//         console.log("yaz");
//         break;
//     case 9:
//     case 10:
//     case 11:
//         console.log("Sonbahar");
//         break;
//     default:
//         console.log("Lütfen 1-12 arasında sayı giriniz")
// }
//
// for(var i = 1; i < 10; i++){
//     console.log(i);
// }
//
// var i=0;
// while(i <= 100){
//     console.log(i+5);
//     i++;
// }
//
// var dizi=["pazartesi","salı","çarşamba","perşembe","cuma","cumartesi","pazar"];
//
// for(var i = 0; i < dizi.length;i++){
//     console.log(dizi[i]);
// }
// dizi.push("salıertesi");
//
// for(var i = 0; i < dizi.length;i++){
//     console.log(dizi[i]);
// }
//
function deneme2(){
    console.log("eşit");
}

var artirButton = document.querySelector("#artir");
var azaltButton = document.querySelector("#azalt");

function artir(){
    if(document.getElementById("textInput").value < 10){
        document.getElementById("textInput").value++;
    }else{
        artirButton.style.backgroundColor = "red";
    }
}

function azalt(){
    if(document.getElementById("textInput").value > 0) {
        document.getElementById("textInput").value--;

    }else{
        azaltButton.style.backgroundColor = "red";
    }
}