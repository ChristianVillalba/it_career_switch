// btnPostalCodeLookup - getPostalCodeInfo.php
$('#btnGetPostalCodeInfo').click(function() {
    $.ajax({
        url: "libs/php/getPostalCodeInfo.php",
        type: "POST",
        dataType: "json",
        data: {
            postalcode: $('#postalCode').val().trim(), //.trim() removes whitespaces
            country: 'GB'  // Fixed to United Kingdom
        },
        success: function(result) {
            console.log(JSON.stringify(result));
			if (result.status.name == "ok") {
				$('#placeName').html(result['data'][0]['placeName']);
				$('#state').html(result['data'][0]['adminName1']);
				$('#countryCodeResult').html(result['data'][0]['postalcode']);
			}
		},
		error: function(jqXHR, textStatus, errorThrown) {
			alert("An error occurred");
		}
    });
});

// btnPostalCodeLookup - getSunriseSunsetInfo.php
$('#btnGetSunriseSunsetInfo').click(function() {
	const country = $('#selCountry').val();
    $.ajax({
        url: "libs/php/getSunriseSunsetInfo.php",
        type: "POST",
        dataType: "json",
        data: {
            country: country
        },
        success: function(result) {
            console.log(JSON.stringify(result));
			if (result.status.name == "ok") {
				$('#placeName').text(result.data.countryName);
                $('#state').text(result.data.sunrise);
                $('#countryCodeResult').text(result.data.sunset);
			}
		},
		error: function(jqXHR, textStatus, errorThrown) {
			alert("An error occurred");
		}
    });
});

$(window).on('load', function () {
	if ($('#preloader').length) {
		$('#preloader').delay(1000).fadeOut('slow', function () {
			$(this).remove();
		});
	}
})

