import { registerBlockType } from '@wordpress/blocks';
import {
	useBlockProps,
	RichText,
	MediaUpload,
	MediaUploadCheck,
	InspectorControls,
	URLInputButton
} from '@wordpress/block-editor';
import {
	Button,
	PanelBody,
	TextControl
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

registerBlockType('rwd-enigma/media-section', {
	title: __('Media Section', 'rwd-enigma'),
	icon: 'video-alt3',
	category: 'layout',
	attributes: {
		subheading: {
			type: 'string',
			default: 'Media',
		},
		heading: {
			type: 'string',
			default: 'As Seen On',
		},
		body: {
			type: 'string',
			default: 'Emiliana is a best selling author, psychotherapist, and TV personality who regularly appears on television and radio giving advice, debating about love, sex, and the trials and tribulations of being in a relationship.',
		},
		iframeUrl: {
			type: 'string',
			default: 'https://www.youtube.com/embed/dQw4w9WgXcQ',
		},
		buttons: {
			type: 'array',
			default: [
				{ label: 'Watch on ITV', url: '' },
				{ label: 'Listen on BBC Radio', url: '' },
				{ label: 'Other Media', url: '' }
			]
		},
		logos: {
			type: 'array',
			default: []
		}
	},
	supports: {
		color: {
			background: true,
			text: true,
		},
		spacing: {
			padding: true,
		},
	},

	edit: ({ attributes, setAttributes }) => {
		const {
			subheading,
			heading,
			body,
			iframeUrl,
			buttons,
			logos
		} = attributes;

		const blockProps = useBlockProps();

		const addButton = () => {
			setAttributes({ buttons: [...buttons, { label: '', url: '' }] });
		};
		
		const removeButton = (index) => {
			const newButtons = [...buttons];
			newButtons.splice(index, 1);
			setAttributes({ buttons: newButtons });
		};		

		const updateButton = (index, key, value) => {
			const newButtons = [...buttons];
			newButtons[index][key] = value;
			setAttributes({ buttons: newButtons });
		};

		const updateLogo = (url, index) => {
			const newLogos = [...logos];
			newLogos[index] = url;
			setAttributes({ logos: newLogos });
		};

		const addLogo = () => setAttributes({ logos: [...logos, ''] });

		const removeLogo = (index) => {
			const newLogos = [...logos];
			newLogos.splice(index, 1);
			setAttributes({ logos: newLogos });
		};

		return (
			<>
				<InspectorControls>
					<PanelBody title={__('Media Logos', 'rwd-enigma')} initialOpen={false}>
						{logos.map((logo, i) => (
							<div key={i} style={{ marginBottom: '10px' }}>
								<MediaUploadCheck>
									<MediaUpload
										onSelect={(media) => updateLogo(media.url, i)}
										allowedTypes={['image']}
										render={({ open }) => (
											<Button onClick={open} isSecondary>
												{logo ? __('Change Logo') : __('Upload Logo')}
											</Button>
										)}
									/>
								</MediaUploadCheck>
								{logo && (
									<>
										<img src={logo} alt={`Logo ${i + 1}`} style={{ width: '100px', marginTop: '5px' }} />
										<Button
											onClick={() => removeLogo(i)}
											isDestructive
											isSmall
										>
											{__('Remove')}
										</Button>
									</>
								)}
							</div>
						))}
						<Button onClick={addLogo} isSecondary>
							{__('Add Logo')}
						</Button>
					</PanelBody>
				</InspectorControls>

				<section {...blockProps} className="media-section">
					<div className="container">
						<div className="row d-flex align-items-center">
							<div className="col-md-6">
								<div className="heading-group">
									<RichText
										tagName="p"
										className="font-display text-white"
										value={subheading}
										onChange={(val) => setAttributes({ subheading: val })}
										placeholder={__('Subheading')}
									/>
									<RichText
										tagName="h2"
										className="hdln-2 text-white"
										value={heading}
										onChange={(val) => setAttributes({ heading: val })}
										placeholder={__('Heading')}
									/>
								</div>
								<RichText
									tagName="div"
									className="text-white"
									value={body}
									onChange={(val) => setAttributes({ body: val })}
									placeholder={__('Body text…')}
									multiline={false}
									allowedFormats={[]}
								/>

							</div>

							<div className="col-md-6">
								<div className="parallax" data-rellax-speed="1" data-rellax-percentage="0.5">
									<div className="iframe-wrapper">
										<TextControl
											label={__('YouTube Embed URL')}
											value={iframeUrl}
											onChange={(val) => setAttributes({ iframeUrl: val })}
											placeholder="https://www.youtube.com/embed/..."
										/>
										{iframeUrl && (
											<iframe
												src={iframeUrl}
												frameBorder="0"
												allowFullScreen
												title="Media Video"
												style={{ width: '100%', aspectRatio: '16/9', marginTop: '1rem' }}
											></iframe>
										)}
									</div>
								</div>

								<div className="d-flex flex-wrap mt-3">
									{buttons.map((btn, i) => (
										<div
											key={i}
											style={{
												border: '1px solid #ccc',
												borderRadius: '5px',
												padding: '10px',
												marginRight: '10px',
												marginBottom: '10px',
												background: 'white',
											}}
										>
											<TextControl
												label={__('Button Text')}
												value={btn.label}
												onChange={(val) => updateButton(i, 'label', val)}
											/>
											<URLInputButton
												url={btn.url}
												onChange={(url) => updateButton(i, 'url', url)}
											/>
											<Button
												isDestructive
												isSmall
												onClick={() => removeButton(i)}
												style={{ marginTop: '8px' }}
											>
												{__('Remove Button')}
											</Button>
										</div>
									))}
									<Button
										isSecondary
										onClick={addButton}
										style={{ alignSelf: 'start', height: 'fit-content' }}
									>
										+ {__('Add Button')}
									</Button>
								</div>

							</div>
						</div>

						{logos.length > 0 && (
							<div className="media-logos">
								<div className="row">
									<div className="logo-slider">
										<div className="container">
											<div className="logo-carousel">
												{logos.map((logo, i) => (
													<div key={i}>
														<img src={logo} alt={`Logo ${i + 1}`} />
													</div>
												))}
											</div>
										</div>
									</div>
								</div>
							</div>
						)}
					</div>
				</section>
			</>
		);
	},

	save: () => {
		return null; // Server-rendered
	},
});
