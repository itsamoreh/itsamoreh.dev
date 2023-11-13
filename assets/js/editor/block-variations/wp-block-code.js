wp.domReady(() => {
	wp.blocks.registerBlockVariation('core/code', {
		name: 'default',
		title: 'Code No Wrap',
		icon: 'editor-code',
		attributes: { className: '' },
		scope: ['transform'],
	});

	wp.blocks.registerBlockVariation('core/code', {
		name: 'wrap',
		title: 'Code Wrap',
		icon: 'media-code',
		attributes: { className: 'is-style-wrap' },
		scope: ['transform'],
	});
});
