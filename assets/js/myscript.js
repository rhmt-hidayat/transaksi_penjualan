//Memperoleh harga
$(document).ready(function(){
    $('#nama_barang').change(function(){
        var nama = $(this).val();
		alert(nama);
        
    });   
});

//memperoleh keterangan promo
$(document).ready(function(){
    $('#kode_promo').change(function(){ 
      var kode = $(this).val();
    	alert(kode);
      
  });    
});

//Menghitung total harga
function totalHarga()
{
    var harga = $('#harga').val();
    var jumlah = $('#jumlah').val();
	var result = harga * jumlah;
	// alert(result);
    $('#total').val(result);
          
}

//mrnghitung kembalian
function kembali()
{
    var bayar = $('#bayar').val();
    var total = $('#total').val();
    var result = bayar - total;
    // alert(result);
	$('#kembalian').val(result);
    
}
