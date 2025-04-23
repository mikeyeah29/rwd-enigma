import { registerBlockType } from '@wordpress/blocks';
import {
	useBlockProps,
	RichText,
	InspectorControls,
	MediaUpload,
	MediaUploadCheck
} from '@wordpress/block-editor';
import {
	Button,
	PanelBody,
	RangeControl
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

registerBlockType('rwd-enigma/testimonial-carousel', {
	title: __('Testimonial Carousel', 'rwd-enigma'),
	icon: 'format-quote',
	category: 'widgets',
	attributes: {
		subheading: {
			type: 'string',
			default: 'Client Experiences'
		},
		heading: {
			type: 'string',
			default: 'From Those I\'ve Worked With'
		},
		backgroundImage: {
			type: 'string',
			default: ''
		},
		limit: {
			type: 'number',
			default: 8
		}
	},
	supports: {
		color: {
			background: true,
			text: true
		},
		spacing: {
			padding: true
		}
	},

	edit: ({ attributes, setAttributes }) => {
		const { subheading, heading, backgroundImage, limit } = attributes;

		const blockProps = useBlockProps({
			style: {
				backgroundImage: backgroundImage ? `url(${backgroundImage})` : undefined,
				backgroundSize: 'cover',
				backgroundPosition: 'center'
			},
			className: 'testimonials-section bg-secondary py-large'
		});

		return (
			<>
				<InspectorControls>
					<PanelBody title={__('Background Image', 'custom')} initialOpen={true}>
						<MediaUploadCheck>
							<MediaUpload
								allowedTypes={['image']}
								onSelect={(media) => setAttributes({ backgroundImage: media.url })}
								render={({ open }) => (
									<Button onClick={open} isSecondary>
										{backgroundImage ? __('Replace Image') : __('Select Image')}
									</Button>
								)}
							/>
						</MediaUploadCheck>
						{backgroundImage && (
							<Button
								isLink
								isDestructive
								onClick={() => setAttributes({ backgroundImage: '' })}
							>
								{__('Remove Image')}
							</Button>
						)}
					</PanelBody>

					<PanelBody title={__('Settings', 'custom')} initialOpen={false}>
						<RangeControl
							label={__('Max Testimonials to Show')}
							value={limit}
							onChange={(val) => setAttributes({ limit: val })}
							min={1}
							max={20}
						/>
					</PanelBody>
				</InspectorControls>

				<section {...blockProps}>
					<div className="container">
						<div className="row justify-content-center">
							<div className="col-md-10">
								<RichText
									tagName="h6"
									value={subheading}
									onChange={(val) => setAttributes({ subheading: val })}
									placeholder={__('Subheading')}
								/>
								<RichText
									tagName="h2"
									value={heading}
									onChange={(val) => setAttributes({ heading: val })}
									placeholder={__('Heading')}
								/>
								<p><em>{__('Testimonials will load from the CPT and appear here.', 'custom')}</em></p>
							</div>
						</div>
					</div>
				</section>
			</>
		);
	},

	save: () => null
});
