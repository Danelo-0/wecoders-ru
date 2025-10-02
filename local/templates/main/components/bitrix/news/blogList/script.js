
BX.ready(function () {
	$('#search-form').on('submit', function (e) {
		e.preventDefault();
		var query = $(this).find('input[name="q"]').val();

		$.ajax({
			url: window.location.href,
			type: 'GET',
			data: {
				q: query,
				ajax: 'Y'
			},
			success: function (data) {
				var newContent = $(data).find('.news-list-container').html();
				$('.news-list-container').html(newContent);
			}
		});
	});
});
