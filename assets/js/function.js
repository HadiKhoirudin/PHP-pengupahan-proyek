$(document).ready(function(){
		$('#uang_lembur').maskMoney({prefix:'Rp. ', thousands: '.', decimal: ',', precision: 0});
		$("#uang_lembur").keyup(function(){
		var clone = $(this).val();
		var cloned = clone.replace(/[A-Za-z$. ,-]/g, "")
		$("#uang_lembur_jam").val(cloned);
		});
		$("#uang_lembur").click(function(){
		var clone = $(this).val();
		var cloned = clone.replace(/[A-Za-z$. ,-]/g, "")
		$("#uang_lembur_jam").val(cloned);
		});

		$('#transport').maskMoney({prefix:'Rp. ', thousands: '.', decimal: ',', precision: 0});
		$("#transport").keyup(function(){
		var clone = $(this).val();
		var cloned = clone.replace(/[A-Za-z$. ,-]/g, "")
		$("#uang_transport").val(cloned);
		});
		$("#transport").click(function(){
		var clone = $(this).val();
		var cloned = clone.replace(/[A-Za-z$. ,-]/g, "")
		$("#uang_transport").val(cloned);
		});

		$('#upah').maskMoney({prefix:'Rp. ', thousands: '.', decimal: ',', precision: 0});
		$("#upah").keyup(function(){
		var clone = $(this).val();
		var cloned = clone.replace(/[A-Za-z$. ,-]/g, "")
		$("#upah_harian").val(cloned);
		});
		$("#upah").click(function(){
		var clone = $(this).val();
		var cloned = clone.replace(/[A-Za-z$. ,-]/g, "")
		$("#upah_harian").val(cloned);
		});

		$('#makan').maskMoney({prefix:'Rp. ', thousands: '.', decimal: ',', precision: 0});
		$("#makan").keyup(function(){
		var clone = $(this).val();
		var cloned = clone.replace(/[A-Za-z$. ,-]/g, "")
		$("#uang_makan").val(cloned);
		});
		$("#makan").click(function(){
		var clone = $(this).val();
		var cloned = clone.replace(/[A-Za-z$. ,-]/g, "")
		$("#uang_makan").val(cloned);
		});
});