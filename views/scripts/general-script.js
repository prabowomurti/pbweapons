$(document).ready( function () {

	$('.table').each(function () {
		var $table = $(this);
		$('.thead div a', $table).each(function (column){

				$(this).click(function () {
					var rows = $table.find('.tbody > .tr').get();
					$.each(rows, function (index, row) {
						if (column == 0 || column == 9 || column == 10){//sort by value
							row.sortKey = parseFloat($(row).children('div').eq(column).text().toUpperCase());
						}else {//sort aplhabetically
							row.sortKey = $(row).children('div').eq(column).text().toUpperCase();
						}

					})

					rows.sort(function (a,b){
						if (a.sortKey < b.sortKey) return -1;
						if (a.sortKey > b.sortKey) return 1;
						return 0;
					});

					$.each(rows, function (index, row) {
						$table.children('.tbody').append(row);
						row.sortKey = null;
					})
				})

		})
	})//end of ('.container').each

	//creating popup to show the image of weapon
	var popupShown = false;

	function loadPopup() {
		if (!popupShown){
			$('#popup-background').fadeIn();
			$('#popup').fadeIn();
			popupShown = true;
		}
	}

	function unloadPopup() {
		if (popupShown){
			$('#popup-background').fadeOut();
			$('#popup').fadeOut();
			popupShown = false;

		$('title').text('Daftar Senjata di Point Blank');
		}
	}

	$('.show-image').click(function () {
		var weapon_id = $(this).attr('href').substr(1);

		$('title').text($(this).parent().parent().find('div').eq(1).text());
		$('#popup > div > img').attr('src', 'pbweapons.php/main/image/'+weapon_id+'.jpg');
		loadPopup();
	})

	$('#popup-close').click(function () {
		unloadPopup();
	});

	$('#popup-background').click(function () {
		unloadPopup();
	});

	$(document).keypress(function (e){
		if (e.keyCode == 27 && popupShown){
			unloadPopup();
		}
	})
})//end of (document).ready
