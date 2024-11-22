// It needs to be debbuged

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
				// $('#universalResults').html(`
                //     <h4>Postal Code Lookup Results</h4>
                //     <p><strong>Place Name:</strong> ${result.data[0]?.placeName || 'N/A'}</p>
                //     <p><strong>State:</strong> ${result.data[0]?.adminName1 || 'N/A'}</p>
                //     <p><strong>Postal Code:</strong> ${result.data[0]?.postalcode || 'N/A'}</p>
                // `);
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
                // $('#universalResults').html(`
                //     <h4>Sunrise and Sunset Times</h4>
                //     <p><strong>Country:</strong> ${result.data.countryName || 'N/A'}</p>
                //     <p><strong>Sunrise:</strong> ${result.data.sunrise || 'N/A'}</p>
                //     <p><strong>Sunset:</strong> ${result.data.sunset || 'N/A'}</p>
                // `);
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

