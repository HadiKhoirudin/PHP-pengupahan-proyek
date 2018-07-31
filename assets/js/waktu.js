            $(document).ready(function() {
				$( "#tanggal" ).datepicker({
					dateFormat: 'yy-mm-dd',
					changeMonth: true,
					changeYear: true,
					yearRange: '1950'
				});
                $('#jam_masuk').timepicker({
					timeFormat: 'HH:mm:ss p',
					    hours: {
						starts: 0,
						ends: 23
				},
					minutes: {
					starts: 0,
					ends: 55,
					interval: 5
				},
                    showPeriodLabels: false
                });
				$('#jam_keluar').timepicker({
					timeFormat: 'HH:mm:ss p',
					    hours: {
						starts: 0,
						ends: 23
				},
					minutes: {
					starts: 0,
					ends: 55,
					interval: 5
				},
                    showPeriodLabels: false
                });
              });