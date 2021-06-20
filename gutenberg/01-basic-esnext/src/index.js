import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';

const blockStyle = {
	backgroundColor: '#900',
	color: '#fff',
	padding: '20px',
};

registerBlockType( 'gutenberg-examples/section-header', {
	title: __( 'Interactive Section Header' ),
	icon: 'universal-access-alt',
	category: 'layout',
	example: {},
	edit : (props)=> {
		var scrollY = window.pageYOffset
		return (
			<div style={ blockStyle } id='myBar'>
				Hello World, step 1 (from the editor).
			</div>
		);
	},
	save() {
		return (
			<div style={ blockStyle }>
				Hello World, step 1 (from the frontend).
			</div>
		);
	},
} );
