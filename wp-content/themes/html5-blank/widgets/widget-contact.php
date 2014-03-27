<?php
		add_action('widgets_init', 'contact_widget'); 

		function contact_widget() { // function name matches name from add_action
			register_widget('Contact_Widget');
		}

		class Contact_Widget extends WP_Widget {

			function Contact_Widget() { // function name matches class name
				$widget_ops = array(
					'classname'=>'contact-widget', // class that will be added to li element in widgeted area ul
					'description'=>'Contact Info' // description displayed in admin
					);
				$control_ops = array(
					'width'=>200, 'height'=>250, // width of input widget in admin
					'id_base'=>'contact-widget' // base of id of li element ex. id="example-widget-1"
					);
				$this->WP_Widget('contact-widget', __('Contact Widget', 'contact-widget'), $widget_ops, $control_ops);
			}

			function widget($args, $instance) { //this displays the widget in the sidebar
				extract($args);
				
				$title = $instance['title'];  
				$text = $instance['text']; 
				$email = $instance['email']; ?>

				<div class="widget contact-widget">
					<h3><?php echo $title; ?></h3>
					<?php echo $text; ?>
					<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
				</div>
			<?php } 
		
			function update( $new_instance, $old_instance ) {  
			    $instance = $old_instance;  

			    //Strip tags from title and name to remove HTML  
			    $instance['title'] = strip_tags($new_instance['title']);  
			    $instance['text'] = strip_tags($new_instance['text']);  
				$instance['email'] = strip_tags($new_instance['email']);  
			    return $instance;  
			}
		
			function form($instance) { 
				$defaults = array( 'title' => __('Contact', 'contact-widget'), 'text' => __('You can email us at', 'contact-widget'), 'email' => __('shopify-support@barrelny.com', 'contact-widget') );  
				$instance = wp_parse_args( (array) $instance, $defaults ); ?>
				<p>  
				    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('First Line:', 'contact-widget'); ?></label>  
				    <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />  
				</p>  

				<p>  
				    <label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e('Second Line:', 'contact-widget'); ?></label>  
				    <textarea id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>" style="width:100%;"><?php echo $instance['text']; ?></textarea>  
				</p>  
				
				<p>  
				    <label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e('Link:', 'contact-widget'); ?></label>  
				    <input id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" value="<?php echo $instance['email']; ?>" style="width:100%;" />  
				</p>
		<?php } 
		}
?>