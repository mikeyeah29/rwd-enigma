import { registerBlockType } from '@wordpress/blocks';
import {
    useBlockProps,
    RichText,
    MediaUpload,
    MediaUploadCheck,
    InspectorControls
} from '@wordpress/block-editor';
import {
    Button,
    PanelBody,
    ToggleControl
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

registerBlockType('rwd-enigma/hero-default', {
    title: __('Hero Default', 'rwd-enigma'),
    icon: 'format-quote',
    category: 'layout',
    attributes: {
        quote: {
            type: 'string'
        },
        author: {
            type: 'string'
        },
        backgroundImage: {
            type: 'string',
            default: '',
        },
        useGradientOverlay: {
            type: 'boolean',
            default: true,
        },
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
        const { quote, author, backgroundImage, useGradientOverlay } = attributes;

        const backgroundStyle = backgroundImage
            ? `${useGradientOverlay ? 'linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.5)), ' : ''}url(${backgroundImage})`
            : undefined;

        const blockProps = useBlockProps({
            style: {
                backgroundImage: backgroundStyle,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
            },
            className: 'hero-default',
        });

        return (
            <>
                <InspectorControls>
                    <PanelBody title={__('Background Image', 'custom')} initialOpen={true}>
                        <MediaUploadCheck>
                            <MediaUpload
                                onSelect={(media) => setAttributes({ backgroundImage: media.url })}
                                allowedTypes={['image']}
                                render={({ open }) => (
                                    <Button onClick={open} isSecondary style={{ marginBottom: '0.5em' }}>
                                        {backgroundImage
                                            ? __('Replace Background Image', 'custom')
                                            : __('Select Background Image', 'custom')}
                                    </Button>
                                )}
                            />
                        </MediaUploadCheck>
                        {backgroundImage && (
                            <>
                                <Button
                                    onClick={() => setAttributes({ backgroundImage: '' })}
                                    isLink
                                    isDestructive
                                    style={{ marginBottom: '1em' }}
                                >
                                    {__('Remove Background Image', 'custom')}
                                </Button>
                                <ToggleControl
                                    label={__('Use Gradient Overlay', 'custom')}
                                    checked={useGradientOverlay}
                                    onChange={(val) => setAttributes({ useGradientOverlay: val })}
                                />
                            </>
                        )}
                    </PanelBody>
                </InspectorControls>

                <div {...blockProps}>
                    <div className="container-fluid">
                        <div className="row">
                            <div className="col-12">
                                <div className="hero-default__quote parallax">
                                    <RichText
                                        tagName="p"
                                        className="hero-default__quote-text"
                                        value={quote}
                                        onChange={(val) => setAttributes({ quote: val })}
                                        placeholder={__('Enter quote…', 'custom')}
                                    />
                                    <RichText
                                        tagName="p"
                                        className="hero-default__quote-author"
                                        value={author}
                                        onChange={(val) => setAttributes({ author: val })}
                                        placeholder={__('— Author', 'custom')}
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </>
        );
    },

    save: ({ attributes }) => {
        return null;
    },
});
