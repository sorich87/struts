<?php

class Struts_Option_Textarea extends Struts_Option {
	public function input_html() {
		$id = esc_attr( $this->html_id() );
		$name = esc_attr( $this->html_name() );
		$value = esc_textarea( $this->value() );

		echo "<textarea id='$id' name='$name'>$value</textarea>";
	}

	protected function standard_validation( $value ) {
		return trim( $value );
	}
}
