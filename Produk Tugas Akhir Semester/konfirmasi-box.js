function myFunction() {
  var txt;
  if (confirm("Apakah anda yakin memilih tiket ini ?")) {
    txt = "Tiket sudah di pilih";
  } else {
    txt = " ";
  }
  document.getElementById("hasil").innerHTML = txt;
}
