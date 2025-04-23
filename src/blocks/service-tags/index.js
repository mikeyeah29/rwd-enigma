import { registerBlockType } from '@wordpress/blocks';
import {
	useBlockProps,
	RichText,
	InspectorControls
} from '@wordpress/block-editor';
import {
	Button,
	PanelBody,
	TextControl
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

registerBlockType('rwd-enigma/service-tags', {
	title: __('Service Tags', 'rwd-enigma'),
	icon: 'tag',
	category: 'layout',
	attributes: {
		subheading: { type: 'string', default: '' },
		heading: { type: 'string', default: '' },
		tags: {
			type: 'array',
			default: [],
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
		const { subheading, heading, tags } = attributes;
		const blockProps = useBlockProps();

		const updateTag = (index, value) => {
			const newTags = [...tags];
			newTags[index] = value;
			setAttributes({ tags: newTags });
		};

		const addTag = () => {
			setAttributes({ tags: [...tags, ''] });
		};

		const removeTag = (index) => {
			const newTags = [...tags];
			newTags.splice(index, 1);
			setAttributes({ tags: newTags });
		};

		return (
			<div {...blockProps}>
				<RichText
					tagName="p"
					className="font-display"
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

				<InspectorControls>
					<PanelBody title={__('Tags')} initialOpen={true}>
						{tags.map((tag, index) => (
							<div key={index} style={{ marginBottom: '10px' }}>
								<TextControl
									label={__('Tag')}
									value={tag}
									onChange={(value) => updateTag(index, value)}
								/>
								<Button
									isDestructive
									isSmall
									onClick={() => removeTag(index)}
								>
									{__('Remove')}
								</Button>
							</div>
						))}
						<Button onClick={addTag} isSecondary>
							+ {__('Add Tag')}
						</Button>
					</PanelBody>
				</InspectorControls>
			</div>
		);
	},
	save: () => null, // Server-rendered
});
