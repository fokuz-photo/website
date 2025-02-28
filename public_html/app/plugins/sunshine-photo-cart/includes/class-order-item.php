<?php
class SPC_Order_Item extends SPC_Cart_Item {

	protected $id;
	protected $order_id;
	protected $order;

	function __construct( $item ) {
		global $wpdb;

		parent::__construct( $item );

		$meta = $wpdb->get_results(
			$wpdb->prepare(
				"SELECT * FROM {$wpdb->prefix}sunshine_order_itemmeta WHERE order_item_id=%d",
				$this->get_id()
			)
		);
		if ( $meta ) {
			foreach ( $meta as $meta_item ) {
				$this->meta[ $meta_item->meta_key ] = maybe_unserialize( $meta_item->meta_value );
			}
		}

		// Do all the magic to determine actual price and tax based on order settings.
		/*
		if ( $this->price && $this->tax > 0 ) {
			$order = $this->get_order();
			$price_has_tax = $order->get_meta_value( 'price_has_tax' );
			if ( 'yes' == $price_has_tax ) {
				// Take out tax from current price and lower price adjusting for tax amount.
				$this->subtotal = $this->subtotal - $this->tax;
				$this->line_total = floatval( $this->subtotal * $this->qty );
				$this->total = max( 0, floatval( $this->line_total - ( $this->discount * $this->qty ) ) );
			}
		}
		*/
		$this->tax_total = $this->tax * $this->qty;

		if ( !empty( $this->meta['options'] ) ) {
			$this->options = $this->meta['options'];
		}

	}

	public function get_id() {
		return $this->item['order_item_id'];
	}

	public function get_order() {
		if ( ! empty( $this->item['order_id'] ) ) {
			return new SPC_Order( $this->item['order_id'] );
		}
		return false;
	}

	public function get_meta_value( $key ) {
		if ( isset( $this->meta[ $key ] ) ) {
			return maybe_unserialize( $this->meta[ $key ] );
		}
		return false;
	}

	public function update_meta_value( $key, $value ) {
		global $wpdb;
		$existing_value = $this->get_meta_value( $key );
		if ( $existing_value ) {
			$result = $wpdb->update(
				$wpdb->prefix . 'sunshine_order_itemmeta',
				array( 'meta_value' => $value ),
				array(
					'order_item_id' => $this->get_id(),
					'meta_key' => sanitize_key( $key ),
				)
			);
		} else {
			$result = $wpdb->insert(
				$wpdb->prefix . 'sunshine_order_itemmeta',
				array(
					'order_item_id' => $this->get_id(),
					'meta_key' => $key,
					'meta_value' => $value,
				),
			);
		}
		$this->meta[ $key ] = $value;
	}

	public function get_name() {
		if ( ! empty( $this->name ) ) {
			return $this->name;
		}
		$name = '';
		$product_name = $this->get_meta_value( 'product_name' );
		if ( $product_name ) {
			$name = $product_name;
		}
		$product_cat_name = $this->get_meta_value( 'product_cat_name' );
		if ( $product_cat_name ) {
			$separator = apply_filters( 'sunshine_product_name_separator', ' &mdash; ' );
			$name = $product_cat_name . $separator . $name;
		}
		return $name;
	}

	public function get_image_url( $size = 'sunshine-thumbnail' ) {
		$image_url = '';
		if ( ! empty( $this->image ) ) {
			$image_url = $this->image->get_image_url( $size );
		}
		if ( empty( $image_url ) && $this->product->exists() ) {
			$image_url = $this->product->get_image_url( $size );
		}
		$image_url = apply_filters( 'sunshine_order_item_image_url', $image_url, $this );
		return $image_url;
	}

	public function get_image_name( $show = 'gallery' ) {
		$image_name = '';
		if ( ! empty( $this->meta['image_name'] ) ) {
			$image_name = $this->meta['image_name'];
			if ( $show == 'gallery' ) {
				$gallery_name = $this->get_gallery_name();
				if ( ! empty( $gallery_name ) ) {
					$image_name .= ' &mdash; ' . $gallery_name;
				}
			}
		}
		return apply_filters( 'sunshine_order_item_image_name', $image_name, $this );
	}
	/*
	public function get_image_name() {
		$image_name = '';
		if ( ! empty( $this->image ) && ! empty( $this->image->gallery ) ) {
			$image_name = $this->image->get_name( 'filename' ) . ' &mdash; <a href="' . $this->image->gallery->get_permalink() . '">' . $this->image->gallery->get_name() . '</a>';
		} elseif ( ! empty( $this->item['image_name'] ) ) {
			$image_name = $this->item['image_name'];
		}
		return $image_name;
	}
	*/

	public function get_price_level() {
		return $this->item['price_level'];
	}

	public function get_regular_price() {
		return $this->item['price'];
	}

	public function get_price() {
		return ( $this->item['price'] - $this->item['discount'] );
	}

	public function get_type() {
		return $this->item['type'];
	}

	function get_gallery_id() {
		if ( $this->item['gallery_id'] ) {
			return $this->item['gallery_id'];
		}
		return false;
	}

	function get_gallery_name() {
		if ( ! empty( $this->meta['gallery_name'] ) ) {
			return $this->meta['gallery_name'];
		} elseif ( ! empty( $this->gallery ) ) {
			return $this->gallery->get_name();
		}
		return false;
	}

	function get_filename() {
		if ( ! empty( $this->meta['filename'] ) ) {
			return $this->meta['filename'];
		}
		return false;
	}

	function get_file_name() {
		return $this->get_filename();
	}

	public function get_file_names() {
		$file_names = array();
		if ( ! empty( $this->meta['filename'] ) ) {
			$file_names[] = $this->meta['filename'];
		}
		if ( ! empty( $this->options['images'] ) ) {
			foreach ( $this->options['images'] as $image ) {
				$file_names[] = $image['filename'];
			}
		}
		/*
		$final_file_names = array();
		if ( ! empty( $file_names ) ) {
			foreach ( $file_names as $file_name ) {
			    $info = pathinfo( $file_name );
			    $final_file_names[] = $info['filename'];
			}
		}
		*/
		$file_names = apply_filters( 'sunshine_order_item_file_names', $file_names, $this );
		return array_unique( $file_names );
	}

	public function set_options_total() {
		if ( ! empty( $this->meta['options'] ) ) {
			foreach ( $this->meta['options'] as $option_item ) {
				if ( ! empty( $option_item['price'] ) ) {
					$this->options_total += $option_item['price'];
				}
			}
		}
	}

	public function get_options_formatted() {
		$options = $this->get_options();
		if ( ! empty( $options ) ) {
			$html = '';
			foreach ( $options as $key => $option ) {
				if ( $key == 'images' ) {
					if ( is_admin() ) {
						continue; // Don't do this in the admin, not ideal way but it works.
					}
					$html .= sunshine_get_template_html(
						'order/product-option-images',
						array(
							'images' => $option,
						)
					);
					continue;
				}
				$html .= sunshine_get_template_html(
					'order/product-option-item',
					array(
						'option' => $option,
					)
				);
			}
			return $html;
		}
		return false;
	}

	public function get_extra() {
		do_action( 'sunshine_order_item_extra', $this );
	}

	public function get_comments() {
		if ( ! empty( $this->meta['comments'] ) ) {
			return $this->meta['comments'];
		}
		return false;
	}

}
