wp.blocks.registerBlockType('taurus-mcq-plugin/multiple-choice-quiz',{
	'title': 'Multiple Choice Question',
	'category':'common',
	'icon':'smiley',
	'description':'Ask a question to the reader to check if they are reading it properly.',
	'attributes': {
		skyColor:{type:'string'},
		grassColor:{type:'string'}
	},
	'edit':function(props){
		function updateSkyColor(e){
			props.setAttribute(skyColor, e.target.value);
		}
		function updateGrassColor(e){
			props.setAttribute(grassColor,e.target.value);
		}

		return (
			<div>
				<input type="text" placeholder="sky color" name="skyColor" onChange={updateSkyColor} value={props.attributes.skyColor}/>
				<input type="text" placeholder="grass color" name="grassColor" onChange={updateGrassColor} value={props.attributes.grassColor}/>
			</div>
		);
	},
	'save':function(props){
		return(
			<p>The Sky Color is {props.attributes.skyColor} and the Grass Color is {props.attributes.grassColor}</p>
		)
	}
})