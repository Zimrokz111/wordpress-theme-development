(function() {
	tinymce.PluginManager.add('my_mce_button', function( editor, url ) {
		editor.addButton('my_mce_button', {
			text: 'ShortCodes',
			icon: 's_code_icon',
      type: 'menubutton',
      menu: [
          {
            text: 'Shortcode',
            onclick: function() {
      				// editor.insertContent('WPExplorer.com is awesome!');
              editor.windowManager.open( {
      					title: 'Insert Button Shortcode',
      					body: [
      						{
      							type: 'textbox',
      							name: 'textName',
      							label: 'Button Text',
      							value: 'Register'
      						},
      						{
      							type: 'textbox',
      							name: 'linkName',
      							label: 'Button URL',
      							value: '#'
      						},
      						{
      							type: 'listbox',
      							name: 'typeName',
      							label: 'Button Type',
      							'values': [
      								{text: 'theme', value: 'theme'},
      								{text: 'info', value: 'info'},
      								{text: 'primary', value: 'primary'},
      								{text: 'warning', value: 'warning'},
      								{text: 'danger', value: 'danger'},
      								{text: 'success', value: 'success'}
      							]
      						},
      						{
      							type: 'listbox',
      							name: 'iconName',
      							label: 'Icon',
      							'values': [
      								{text: 'facebook', value: 'facebook'},
      								{text: 'twitter', value: 'twitter'},
      								{text: 'instagram', value: 'instagram'},
      								{text: 'linkedin', value: 'linkedin'},
      								{text: 'yahoo', value: 'yahoo'},
      								{text: 'google', value: 'google'},
      								{text: 'google-plus', value: 'google-plus'}
      							]
      						}
      					],
      					onsubmit: function( e ) {
      						editor.insertContent( '[btn  text="' + e.data.textName + '" link="' + e.data.linkName + '" type="' + e.data.typeName + '" icon="' + e.data.iconName + '"]');
      					}
      				});
      			} //end onclick
          },
          {
            text: 'Progress Bar',
            onclick: function() {
      				// editor.insertContent('WPExplorer.com is awesome!');
              editor.windowManager.open( {
      					title: 'Insert Button Shortcode',
      					body: [
      						{
      							type: 'textbox',
      							name: 'textName',
      							label: 'Bar Text',
      							value: ''
      						},
      						{
      							type: 'textbox',
      							name: 'valueName',
      							label: 'Value',
      							value: '40'
      						},
      						{
      							type: 'listbox',
      							name: 'typeName',
      							label: 'Button Type',
      							'values': [
      								{text: 'theme', value: 'theme'},
      								{text: 'info', value: 'info'},
      								{text: 'primary', value: 'primary'},
      								{text: 'warning', value: 'warning'},
      								{text: 'danger', value: 'danger'},
      								{text: 'success', value: 'success'}
      							]
      						},
      						{
      							type: 'listbox',
      							name: 'activeName',
      							label: 'Active/Inactive',
      							'values': [
      								{text: 'active', value: 'active'},
      								{text: 'not active', value: ''}
      							]
      						}
      					],
      					onsubmit: function( e ) {
      						editor.insertContent( '[bar  text="' + e.data.textName + '" value="' + e.data.valueName + '" type="' + e.data.typeName + '" active="' + e.data.activeName + '"]');
      					}
      				});
      			} //end onclick
          },
					{
            text: 'Portfolio',
            onclick: function() {
      				// editor.insertContent('WPExplorer.com is awesome!');
              editor.windowManager.open( {
      					title: 'Portfolio',
      					body: [
      						{
      							type: 'textbox',
      							name: 'countName',
      							label: 'Post Per Page',
      							value: ''
      						},
      						{
      							type: 'listbox',
      							name: 'orderName',
      							label: 'Order By',
      							'values': [
      								{text: 'Ascending', value: 'asc'},
      								{text: 'Descending', value: 'desc'}
      							]
      						}
      					],
      					onsubmit: function( e ) {
      						editor.insertContent( '[portfolio  count="' + e.data.countName + '" order="' + e.data.orderName + '"]');
      					}
      				});
      			} //end onclick
          }, //end portfolio
					{
            text: 'Jobs',
            onclick: function() {
      				editor.insertContent( '[jobs]');
      			} //end onclick
          } //end jobs
      ]

		});
	});
})()
