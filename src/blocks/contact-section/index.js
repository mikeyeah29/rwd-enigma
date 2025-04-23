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
	PanelBody
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

registerBlockType('rwd-enigma/contact-section', {
	title: __('Contact Section', 'rwd-enigma'),
	icon: 'email',
	category: 'layout',
	attributes: {
		subheading: {
			type: 'string',
			default: 'Contact Me'
		},
		heading: {
			type: 'string',
			default: 'Get in Touch'
		},
		supportingText: {
			type: 'string',
			default: 'Let’s connect. I work with clients worldwide in private, judgment-free containers.'
		},
		backgroundImage: {
			type: 'string',
			default: 'https://placehold.co/600x400'
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
		const { subheading, heading, supportingText, backgroundImage } = attributes;

		const blockProps = useBlockProps({
			className: 'contact-section position-relative',
			style: {
				backgroundImage: backgroundImage ? `url(${backgroundImage})` : undefined,
				backgroundSize: 'cover',
				backgroundPosition: 'center'
			}
		});

		return (
			<>
				<InspectorControls>
					<PanelBody title={__('Background Image', 'rwd-enigma')} initialOpen={true}>
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
				</InspectorControls>

				<div {...blockProps}>
					<div className="container">
						<div className="row justify-content-center">
							<div className="col-md-8">
								<RichText
									tagName="h6"
									className="subheading"
									value={subheading}
									onChange={(val) => setAttributes({ subheading: val })}
									placeholder={__('Subheading')}
								/>
								<RichText
									tagName="h2"
									className="heading"
									value={heading}
									onChange={(val) => setAttributes({ heading: val })}
									placeholder={__('Heading')}
								/>
								<RichText
									tagName="p"
									value={supportingText}
									onChange={(val) => setAttributes({ supportingText: val })}
									placeholder={__('Supporting text…')}
								/>
								<p><em>{__('Contact form will be rendered here.', 'rwd-enigma')}</em></p>
							</div>
						</div>
					</div>
				</div>
			</>
		);
	},

	save: () => null // Server-rendered
});
