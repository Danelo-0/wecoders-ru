initMap();

async function initMap() {
	await ymaps3.ready;

	const {
		YMapDefaultMarker
	} = await ymaps3.import('@yandex/ymaps3-markers@0.0.1');

	const {
		YMapZoomControl,
		YMapGeolocationControl
	} = await ymaps3.import('@yandex/ymaps3-controls@0.0.1');

	const {
		YMap,
		YMapDefaultSchemeLayer,
		YMapDefaultFeaturesLayer,
		YMapControls,
		YMapControlButton
	} = ymaps3;

	const map = new YMap(document.getElementById('map'), {

		location: {
			center: [65.596949, 57.115882],
			zoom: 13,
		},
	},
		[
			new YMapDefaultSchemeLayer({}),
			new YMapDefaultFeaturesLayer({}),
		]);

	const marker = new YMapDefaultMarker({
		coordinates: [65.596949, 57.115882],
		title: 'Адрес',
		subtitle: 'ул. 30 лет Победы, 109/3',
	});


	const controlsZoom = new YMapControls({
		position: 'right'
	});

	controlsZoom.addChild(new YMapZoomControl({
		easing: 'linear'
	}));

	controlsZoom.addChild(new YMapGeolocationControl());
	map.addChild(controlsZoom);

	map.addChild(marker);
}