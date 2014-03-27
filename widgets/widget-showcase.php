<?php
		add_action('widgets_init', 'showcase_widget'); 

		function showcase_widget() { // function name matches name from add_action
			register_widget('Showcase_Widget');
		}

		class Showcase_Widget extends WP_Widget {

			function Showcase_Widget() { // function name matches class name
				$widget_ops = array(
					'classname'=>'showcase-widget', // class that will be added to li element in widgeted area ul
					'description'=>'Links to Showcase' // description displayed in admin
					);
				$control_ops = array(
					'width'=>200, 'height'=>250, // width of input widget in admin
					'id_base'=>'showcase-widget' // base of id of li element ex. id="example-widget-1"
					);
				$this->WP_Widget('showcase-widget', __('Showcase Link', 'showcase-widget'), $widget_ops, $control_ops);
			}

			function widget($args, $instance) { //this displays the widget in the sidebar
				extract($args);
				
				$first_line = $instance['first_line'];  
				$widget_url = $instance['widget_url']; ?>

				<div class="widget showcase-widget">
					<h3>
						<a href="<?php echo $widget_url; ?>">
							<?php echo $first_line; ?>
						</a>
					</h3>
				</div>
			<?php } 
		
			function update( $new_instance, $old_instance ) {  
			    $instance = $old_instance;  

			    //Strip tags from title and name to remove HTML  
			    $instance['first_line'] = strip_tags( $new_instance['first_line'] );  
				$instance['widget_url'] = strip_tags( $new_instance['widget_url'] );  
			    return $instance;  
			}
		
			function form($instance) { 
				$defaults = array( 'first_line' => __('See our theme in action', 'showcase-widget'), 'widget_url' => __('/showcase', 'showcase-widget') );  
				$instance = wp_parse_args( (array) $instance, $defaults ); ?>
				<p>  
				    <label for="<?php echo $this->get_field_id( 'first_line' ); ?>"><?php _e('Text:', 'showcase-widget'); ?></label>  
				    <input id="<?php echo $this->get_field_id( 'first_line' ); ?>" name="<?php echo $this->get_field_name( 'first_line' ); ?>" value="<?php echo $instance['first_line']; ?>" style="width:100%;" />  
				</p>  
				
				<p>  
				    <label for="<?php echo $this->get_field_id( 'widget_url' ); ?>"><?php _e('Link:', 'showcase-widget'); ?></label>  
				    <input id="<?php echo $this->get_field_id( 'widget_url' ); ?>" name="<?php echo $this->get_field_name( 'widget_url' ); ?>" value="<?php echo $instance['widget_url']; ?>" style="width:100%;" />  
				</p>
		<?php } 
		}
?>