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
	PanelBody
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

registerBlockType('rwd-enigma/about-me', {
	title: __('About Me', 'rwd-enigma'),
	icon: 'id-alt',
	category: 'layout',
	attributes: {
		subheading: { type: 'string' },
		heading: { type: 'string' },
		body1: { type: 'string' },
		body2: { type: 'string' },
		imageUrl: { type: 'string' },
		listItems: {
			type: 'array',
			default: [],
			source: 'query',
			selector: 'ul li',
			query: { item: { type: 'string', source: 'text' } }
		},
		buttonText: { type: 'string' },
		buttonUrl: { type: 'string' },
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
			body1,
			imageUrl,
			listItems,
			buttonText,
			buttonUrl,
		} = attributes;

		const blockProps = useBlockProps();

		const updateListItem = (value, index) => {
			const newItems = [...listItems];
			newItems[index] = { item: value };
			setAttributes({ listItems: newItems });
		};

		const addListItem = () => {
			setAttributes({ listItems: [...listItems, { item: '' }] });
		};

		const removeListItem = (index) => {
			const newItems = [...listItems];
			newItems.splice(index, 1);
			setAttributes({ listItems: newItems });
		};

		return (
			<>
				<InspectorControls>
					<PanelBody title={__('Image', 'custom')} initialOpen={true}>
						<MediaUploadCheck>
							<MediaUpload
								onSelect={(media) => setAttributes({ imageUrl: media.url })}
								allowedTypes={['image']}
								render={({ open }) => (
									<Button onClick={open} isSecondary>
										{imageUrl ? __('Replace Image') : __('Select Image')}
									</Button>
								)}
							/>
						</MediaUploadCheck>
						{imageUrl && (
							<Button onClick={() => setAttributes({ imageUrl: '' })} isLink isDestructive>
								{__('Remove Image')}
							</Button>
						)}
					</PanelBody>
					<PanelBody title={__('Button Settings', 'custom')} initialOpen={false}>
						<RichText
							tagName="span"
							value={buttonText}
							onChange={(val) => setAttributes({ buttonText: val })}
							placeholder={__('Button Text')}
							allowedFormats={[]}
						/>
						<URLInputButton
							url={buttonUrl}
							onChange={(url) => setAttributes({ buttonUrl: url })}
						/>
					</PanelBody>
				</InspectorControls>

				<section {...blockProps} className="section about-section py-large" id="about">
					<div className="container">
						<div className="row align-items-center">
							<div className="col-lg-6 text-center">
								<div className="position-relative about-image-wrapper parallax" data-rellax-speed="1" data-rellax-percentage="0.5">
									{imageUrl && (
										<img src={imageUrl} className="img-fluid" alt="Therapist" />
									)}
								</div>
							</div>

							<div className="col-lg-6">
								<div className="heading-group">
									<RichText
										tagName="h6"
										className="subheading"
										value={subheading}
										onChange={(val) => setAttributes({ subheading: val })}
										placeholder={__('Subheading')}
									/>
									<RichText
										tagName="h2"
										className="hdln-2"
										value={heading}
										onChange={(val) => setAttributes({ heading: val })}
										placeholder={__('Heading')}
									/>
								</div>

								<RichText
									tagName="p"
									value={body1}
									onChange={(val) => setAttributes({ body1: val })}
									placeholder={__('Body paragraph 1')}
								/>

								<ul className="list-unstyled">
									{listItems.map((listItem, i) => (
										<li key={i}>
											<RichText
												tagName="span"
												value={listItem.item}
												onChange={(val) => updateListItem(val, i)}
												placeholder={__('List item')}
											/>
											<Button
												onClick={() => removeListItem(i)}
												isDestructive
												isSmall
											>
												{__('Remove')}
											</Button>
										</li>
									))}
								</ul>
								<Button onClick={addListItem} isSecondary>
									{__('Add List Item')}
								</Button>

								{buttonText && buttonUrl && (
									<p>
										<a href={buttonUrl} className="rwd-btn mt-3">
											{buttonText}
										</a>
									</p>
								)}
							</div>
						</div>
					</div>
				</section>
			</>
		);
	},

	save: () => null, // Server-rendered
});
