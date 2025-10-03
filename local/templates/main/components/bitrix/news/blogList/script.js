$(document).ready(function() {
    // Основная функция подгрузки новостей
    function loadNews(params, pushState = true) {
        $.ajax({
            url: window.location.pathname,
            type: 'GET',
            data: params,
            success: function(data) {
                // Заменяем контейнер новостей
                var html = $(data).find('.news-list-container').html();
                $('.news-list-container').html(html);

                // Заменяем пагинацию
                var pager = $(data).find('.pagination').html();
                if ($('.pagination').length) {
                    $('.pagination').html(pager);
                } else if (pager) {
                    $('.news-list-container').after('<ul class="pagination mt-50">' + pager + '</ul>');
                }

                // Обновляем активную категорию
                $('.widget-cat-link').removeClass('active');
                if (params.section) {
                    $('.widget-cat-link[data-section-id="' + params.section + '"]').addClass('active');
                }

                // Обновляем URL
                if (pushState) {
                    history.pushState(null, '', '?' + $.param(params));
                }
            }
        });
    }

    // Поиск
    $('#search-form').on('submit', function(e) {
        e.preventDefault();
        var params = {
            q: $('#search-form input[name="q"]').val(),
            section: $('.widget-cat-link.active').data('section-id') || '',
            PAGEN_1: 1
        };
        loadNews(params);
    });

    // Фильтр по категории
    $(document).on('click', '.widget-cat-link', function(e) {
        e.preventDefault();
        var section = $(this).data('section-id');
        var params = {
            section: section,
            q: $('#search-form input[name="q"]').val() || '',
            PAGEN_1: 1
        };
        loadNews(params);
    });

    // Пагинация через AJAX
    $(document).on('click', '.pagination .ajax-page', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        var pageMatch = href.match(/PAGEN_\d+=\d+/);
        if (!pageMatch) return;
        var pageNum = pageMatch[0].split('=')[1];

        var params = {
            section: $('.widget-cat-link.active').data('section-id') || '',
            q: $('#search-form input[name="q"]').val() || '',
            PAGEN_1: pageNum
        };
        loadNews(params);
    });

    // Поддержка кнопки "Назад" браузера
    window.onpopstate = function() {
        var params = {};
        var query = window.location.search.substring(1);
        query.split('&').forEach(function(pair) {
            if (!pair) return;
            var parts = pair.split('=');
            params[decodeURIComponent(parts[0])] = decodeURIComponent(parts[1] || '');
        });
        loadNews(params, false);
    };
});