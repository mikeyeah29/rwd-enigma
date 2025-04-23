import { registerBlockType } from '@wordpress/blocks';
import {
	useBlockProps,
	RichText,
} from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

registerBlockType('rwd-enigma/info-section', {
	title: __('Info Section', 'rwd-enigma'),
	icon: 'heart',
	category: 'layout',
	attributes: {
		subheading: { type: 'string', default: '' },
		heading: { type: 'string', default: 'How Can Therapy Help' },
        body: { type: 'string', default: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' },
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
		const { subheading, heading, body } = attributes;
		const blockProps = useBlockProps();

		return (
			<div {...blockProps}>
				<div className="heading-group">
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
				</div>
                <div class="row justify-content-center">
                    <div class="col-md-8 offset-md-1">
                        <RichText
                            tagName="p"
                            className="body-text"
                            value={body}
                            onChange={(val) => setAttributes({ body: val })}
                            placeholder={__('Body text')}
                        />
                    </div>
                </div>
			</div>
		);
	},
	save: () => null,
});
