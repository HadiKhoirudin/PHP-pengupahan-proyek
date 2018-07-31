<?php
date_default_timezone_set('Asia/Jakarta');
$data_tanggal	 = date("Y-m-d");
$data_jam 		 = date("h:i:s a");
$detik 			 = date('s');
$menit 			 = date('i');
$jam   			 = date('H');
echo"
<script type='text/javascript'>
    var detik = $detik;
    var menit = $menit;
    var jam   = $jam;
    function clock()
    {
        if (detik!=0 && detik%60==0) {
            menit++;
            detik=0;
        }
        second = detik;
        
        if (menit!=0 && menit%60==0) {
            jam++;
            menit=0;
        }
        minute = menit;
        
        if (jam!=0 && jam%24==0) {
            jam=0;
        }
        hour = jam;
        
        if (detik<10){
            second='0'+detik;
        }
        if (menit<10){
            minute='0'+menit;
        }
        
        if (jam<10){
            hour='0'+jam;
        }
        waktu = hour+':'+minute+':'+second;
        
        document.getElementById('clock').innerHTML = waktu;
        detik++;
    }
    setInterval(clock,1000);
</script>
";