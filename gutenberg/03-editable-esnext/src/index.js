import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { Button } from '@wordpress/components';

import {
	RichText,
	AlignmentToolbar,
	BlockControls,
	MediaUpload, MediaUploadCheck 
} from '@wordpress/block-editor';
const ALLOWED_MEDIA_TYPES = [ 'image' ];

registerBlockType( 'gutenberg-examples/example-03-editable-esnext', {
	title: __( 'Example: Editable (ESNext)', 'gutenberg-examples' ),
	icon: 'universal-access-alt',
	category: 'layout',
	attributes: {
		background: {
			type: 'string',
			source: 'attribute',
			selector: '#inner',
			attribute: 'style',
			default:{backgroundImage:''}
		},
	},
	example: {
		attributes: {
			background: __( {background:'blue'} ),
		},
	},
	edit: ( {attributes, setAttributes} ) => {
		
		const onChangeBackground = ( newBackground ) => {
			setAttributes( { background: newBackground } );
		};
		return (
			<div>
			<BlockControls></BlockControls>
			<div id='inner' style={{height:'calc(99vh - 100px)', ...attributes.background}} ><MediaUploadCheck>
			<MediaUpload
				onSelect={ ( media ) =>
					onChangeBackground( {backgroundImage: 'url(' + media.url + ')'} )
				}
				allowedTypes={ ALLOWED_MEDIA_TYPES }
				render={ ( { open } ) => (
					<Button onClick={ open }>Open Media Library</Button>
				) }
			/>
		</MediaUploadCheck></div>
			</div>
		);
	},
	save: ( props ) => {
		return (
			<div style={{height:'calc(99vh - 100px)', ...props.attributes.background}} >
			</div>
		);
	},
} );
