// let mahasiswa ={
//     nama : "wildan haqiqi",
//     nip  :"2217020158",
//     email :"wildanhaqiqi120@gmail.com"
// }

// console.log(JSON.stringify(mahasiswa));

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if(xhr.readyState == 4 && xhr.status== 200){
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log (mahasiswa);
//     }
// }
// xhr.open('GET','coba.json',true);
// xhr.send();

$.getJSON('Coba.json',function(data){
    console.log(data)
});
