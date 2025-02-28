<?php
class SPC_Discount extends Sunshine_Data {

	protected $post_type = 'sunshine-discount';
	protected $meta = array(
		'code'     => '',
		'auto'  => '',
		'discount_type' => '',
		'discount_amount'  => '',
		'apply_to_shipping' => '',
		'free_shipping'  => '',
		'start_date'  => '',
		'end_date'  => '',
		'max_product_quantity'  => '',
		'solo'  => '',
		'allowed_products'  => '',
		'disallowed_products'  => '',
		'allowed_categories'  => '',
		'disallowed_categories'  => '',
		'allowed_galleries'  => '',
		'disallowed_galleries'  => '',
		'min_amount'  => '',
		'max_uses'  => '',
		'max_uses_per_person'  => '',
		'use_count' => '',
		'used_by' => '',
		'required_products' => '',
	);

	public function __construct( $object = '', $price_level = '' ) {

		if ( is_numeric( $object ) && $object > 0 ) {
			$object = get_post( $object );
			if ( empty( $object ) || $object->post_type != $this->post_type || $object->post_status != 'publish' ) {
				return false; }
		} elseif ( is_a( $object, 'WP_Post' ) ) {
			if ( $object->post_type != $this->post_type || $object->post_status != 'publish' ) {
				return false; }
		} elseif ( ! empty( $object ) ) {
			$args = array(
				'post_type' => $this->post_type,
				'meta_key' => 'code',
				'meta_value' => $object
			);
			$discounts = get_posts( $args );
			if ( ! empty( $discounts ) ) {
				$object = $discounts[0];
			}
		}

		if ( ! empty( $object->ID ) ) {

			$this->id   = $object->ID;
			$this->data = $object;

			if ( $object->post_title ) {
				$this->name = $object->post_title;
			}

			$this->set_meta_data();

		}

	}

	public function is_auto() {
		return $this->meta['auto'];
	}

	public function get_code() {
		return $this->meta['code'];
	}

	public function get_type() {
		return $this->meta['discount_type'];
	}

	public function get_amount() {
		return floatval( $this->meta['discount_amount'] );
	}

	public function get_min_amount() {
		return floatval( $this->meta['min_amount'] );
	}

	public function is_solo() {
		return ( $this->meta['solo'] == 1 ) ? true : false;
	}

	public function apply_to_shipping() {
		return ( $this->meta['apply_to_shipping'] == 1 ) ? true : false;
	}

	public function enables_free_shipping() {
		return $this->meta['free_shipping'];
	}

	public function get_start_date() {
		return $this->meta['start_date'];
	}

	public function get_end_date() {
		return $this->meta['end_date'];
	}

	public function get_required_products() {
		return $this->meta['required_products'];
	}

	public function get_allowed_products() {
		return $this->meta['allowed_products'];
	}

	public function get_disallowed_products() {
		return $this->meta['disallowed_products'];
	}

	public function get_allowed_categories() {
		return $this->meta['allowed_categories'];
	}

	public function get_disallowed_categories() {
		return $this->meta['disallowed_categories'];
	}

	public function get_allowed_galleries() {

		$galleries = $this->meta['allowed_galleries'];
		if ( ! empty( $galleries ) ) {
			$descendants = array();
			foreach ( $galleries as $gallery_id ) {
				$descendants = array_merge( sunshine_get_gallery_descendant_ids( $gallery_id ), $descendants );
			}
			$galleries = array_merge( $galleries, $descendants );
			$galleries = array_unique( $galleries );
		}
		return $galleries;

	}

	public function get_disallowed_galleries() {

		$galleries = $this->meta['disallowed_galleries'];
		if ( ! empty( $galleries ) ) {
			$descendants = array();
			foreach ( $galleries as $gallery_id ) {
				$descendants = array_merge( sunshine_get_gallery_descendant_ids( $gallery_id ), $descendants );
			}
			$galleries = array_merge( $galleries, $descendants );
			$galleries = array_unique( $galleries );
		}
		return $galleries;

	}

	public function max_product_quantity() {
		return $this->meta['max_product_quantity'];
	}

	public function get_use_count() {
		return intval( $this->meta['use_count'] );
	}

	public function get_use_count_by( $value ) {
		if ( ! empty( $this->meta['used_by'] ) ) {
			if ( is_array( $this->meta['used_by'] ) ) {
				$count = count( array_keys( $this->meta['used_by'], $value ) );
				return $count;
			} elseif ( $this->meta['used_by'] == $value ) {
				return 1;
			}
		}
		return 0;
	}

	public function get_max_uses() {
		return intval( $this->meta['max_uses'] );
	}

	public function get_max_uses_per_person() {
		return intval( $this->meta['max_uses_per_person'] );
	}

	// Determines if this coupon is valid with the current cart vs discount settings
	public function is_valid() {

		// Check start/end date
		$start_date = $this->get_start_date();
		if ( $start_date && current_time( 'Y-m-d' ) < $start_date ) {
			return false;
		}

		$end_date = $this->get_end_date();
		if ( $end_date && current_time( 'Y-m-d' ) > $end_date ) {
			return false;
		}

		$max_uses = $this->get_max_uses();
		if ( $max_uses && $this->get_use_count() >= $max_uses ) {
			return false;
		}

		// Only checking by logged in user id for now.
		$max_uses_per_person = $this->get_max_uses_per_person();
		if ( $max_uses_per_person && is_user_logged_in() && $this->get_use_count_by( get_current_user_id() ) >= $max_uses_per_person ) {
			return false;
		}

		$min_amount = $this->get_min_amount();
		if ( $min_amount && SPC()->cart->get_total() < $min_amount ) {
			return false;
		}

		$cart = SPC()->cart->get_cart_items();
		if ( ! empty( $cart ) ) {

			$required_products = $this->get_required_products();
			$allowed_products = $this->get_allowed_products();
			$disallowed_products = $this->get_disallowed_products();
			$allowed_categories = $this->get_allowed_categories();
			$disallowed_categories = $this->get_disallowed_categories();
			$allowed_galleries = $this->get_allowed_galleries();
			$disallowed_galleries = $this->get_disallowed_galleries();

			$discount_allowed = array();

			if ( ! empty( $required_products ) && is_array( $required_products ) ) {
				$allowed = 0;
				foreach ( $cart as $key => $item ) {
					if ( in_array( $item->get_product_id(), $required_products ) ) {
						$allowed = 1;
					}
				}
				if ( ! $allowed ) {
					return false;
				}
			}

			foreach ( $cart as $key => $item ) {

				$allowed = 1;

				if ( $allowed && ! empty( $allowed_products ) && ! in_array( $item->get_product_id(), $allowed_products ) ) {
					$allowed = 0;
				}

				if ( $allowed && ! empty( $disallowed_products ) && $item->get_product_id() && in_array( $item->get_product_id(), $disallowed_products ) ) {
					$allowed = 0;
				}

				if ( $allowed && ! empty( $allowed_categories ) && ! in_array( $item->product->get_category_id(), $allowed_categories ) ) {
					$allowed = 0;
				}

				if ( $allowed && ! empty( $disallowed_categories ) && $item->get_category_id() && in_array( $item->get_category_id(), $disallowed_categories ) ) {
					$allowed = 0;
				}

				if ( $allowed && ! empty( $allowed_galleries ) && ( empty( $item->get_gallery_id() ) || ! in_array( $item->get_gallery_id(), $allowed_galleries ) ) ) {
					$allowed = 0;
				}

				if ( $allowed && ! empty( $disallowed_galleries ) && in_array( $item->get_gallery_id(), $disallowed_galleries ) ) {
					$allowed = 0;
				}

				$discount_allowed[ $key ] = $allowed;

			}

			// If any item in cart allows the discount, then it is valid.
			// Doesn't mean it will get applied to every coupon, that is done below in get_total.
			if ( in_array( 1, $discount_allowed ) ) {
				return true;
			}

		}

		return false;
	}

	// Deprecated, only using is_valid().
	public function is_allowed() {
		return $this->is_valid();
		/*
		if ( ! $this->is_valid() ) {
			return false;
		}
		*/

		return true;

	}

	public function get_total() {

		if ( SPC()->cart->is_empty() || empty( $this->get_amount() ) ) {
			return false;
		}

		$type = $this->get_type();
		$cart = SPC()->cart->get_cart_items();

		$allowed_products = $this->get_allowed_products();
		$disallowed_products = $this->get_disallowed_products();
		$allowed_categories = $this->get_allowed_categories();
		$disallowed_categories = $this->get_disallowed_categories();
		$allowed_galleries = $this->get_allowed_galleries();
		$disallowed_galleries = $this->get_disallowed_galleries();

		$max_product_quantity = $this->max_product_quantity();

		$discountable_total = 0;
		$product_total = array();

		foreach ( $cart as $item ) {

			// Skip the cart item if it does not meet the rules for it.
			
			if ( ! empty( $allowed_products ) && ! in_array( $item->get_product_id(), $allowed_products ) ) {
				continue;
			}

			if ( ! empty( $disallowed_products ) && $item->get_product_id() && in_array( $item->get_product_id(), $disallowed_products ) ) {
				continue;
			}

			if ( ! empty( $allowed_categories ) && ! in_array( $item->product->get_category_id(), $allowed_categories ) ) {
				continue;
			}

			if ( ! empty( $disallowed_categories ) && $item->get_category_id() && in_array( $item->get_category_id(), $disallowed_categories ) ) {
				continue;
			}

			if ( ! empty( $allowed_galleries ) && ( empty( $item->get_gallery_id() ) || ! in_array( $item->get_gallery_id(), $allowed_galleries ) ) ) {
				continue;
			}

			if ( ! empty( $disallowed_galleries ) && in_array( $item->get_gallery_id(), $disallowed_galleries ) ) {
				continue;
			}

			$discountable_total += $item->get_subtotal();

			if ( empty( $product_total[ $item->get_product_id() ] ) ) {
				$product_total[ $item->get_product_id() ] = 0;
				$product_qty[ $item->get_product_id() ] = 0;
			}
			$product_total[ $item->get_product_id() ] += $item->get_subtotal();
			$product_qty[ $item->get_product_id() ] += $item->get_qty();
			$product_price[ $item->get_product_id() ] = $item->get_subtotal();

			if ( SPC()->get_option( 'discount_after_tax' ) ) {
				$discountable_total += $item->get_tax_total();
				$product_total[ $item->get_product_id() ] += $item->get_tax_total();
			}

		}

		if ( $max_product_quantity > 0 && ! empty( $product_qty ) ) {
			foreach ( $product_qty as $product_id => $qty ) {
				if ( $qty > $max_product_quantity ) {
					$product_qty[ $product_id ] = $max_product_quantity;
					$product_total[ $product_id ] = $product_price[ $product_id ] * $max_product_quantity;
				}
			}
		}

		if ( $discountable_total <= 0 ) {
			return false;
		}

		if ( $type == 'percent-total' ) {

			$percent = $this->get_amount();

			if ( $this->apply_to_shipping() ) {
				$discountable_total += SPC()->cart->get_shipping();
				if ( SPC()->get_option( 'discount_after_tax' ) ) {
					$discountable_total += SPC()->cart->get_shipping_tax();
				}
			}

			return round( $discountable_total * ( $percent / 100 ), 2 );

		} elseif ( $type == 'amount-total' ) {

			return $this->get_amount();

		} elseif ( $type == 'percent-product' ) {

			$percent = $this->get_amount();
			$discountable_product_total = array_sum( $product_total );
			return round( $discountable_product_total * ( $percent / 100 ), 2 );

		} elseif ( $type == 'amount-product' ) {

			$amount = $this->get_amount();
			$discountable_product_qty = array_sum( $product_qty );
			return round( $discountable_product_qty * $amount, 2 );

		}

		return false;

	}

	public function increment_use_count() {
		$use_count = $this->get_use_count();
		$use_count++;
		$this->update_meta_value( 'use_count', $use_count );
	}

	public function increment_use_count_by( $value ) {
		$this->add_meta_value( 'used_by', $value );
	}


}
