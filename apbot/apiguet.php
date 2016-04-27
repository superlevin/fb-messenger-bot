<?php
$bot = new MessengerBot( array(
	'text'    => array(
		'Show text'              => array(
			array(
				'type'    => 'text',
				'content' => 'Hi there!'
			)
		),
		'Say hello'              => array(
			array(
				'type'    => 'text',
				'content' => 'Welcome to Audemars Piguet!'
			)
		),
		'Show buttons'           => array(
			array(
				'type'    => 'button',
				'content' => array(
					'text'    => 'Choose one from these button',
					'buttons' => array(
						array(
							'type'  => 'web_url',
							'url'   => 'http://www.audemarspiguet.com/en/',
							'title' => 'Show website'
						),
						array(
							'type'    => 'postback',
							'payload' => 'GoShopping',
							'title'   => 'Go Shopping'
						)
					)
				)
			),
		),
		'Show me a watch'             => array(
			array(
				'type'    => 'image',
				'content' => 'http://folkr.fr/wp-content/uploads/2015/08/audemars-piguet-royal-oak-offshore-chrono24-folkr-05.jpg'
			),
		),
		'Show me another one'        => array(
			array(
				'type'    => 'image',
				'content' => 'http://www.titanblack.co.uk/sites/default/files/ap_titanium_grey_oblique.jpg'
			),
		),
		'Show generic'           => array(
			array(
				'type'    => 'generic',
				'content' => array(
					array(
						"title"     => "Jules Audemars Automatic Chronograph Titanium Men's Watch",
						"image_url" => "http://cdn2.jomashop.com/media/catalog/product/a/u/audemars-piguet-jules-audemars-automatic-chronograph-titanium-men_s-watch-26558ti.oo.d080ve.01_1.jpg",
						"subtitle"  => "Titanium case with a brown leather strap. Fixed titanium bezel.",
						"buttons"   => array(
							array(
								"type"  => "web_url",
								"url"   => "http://www.jomashop.com/audemars-piguet-watch-26558tiood080ve01.html",
								"title" => "Show website"
							),
							array(
								"type"    => "postback",
								"payload" => "AddToCart",
								"title"   => "Add to cart"
							)
						)
					),
					array(
						"title"     => "Royal Oak Offshore Black Dial Rubber Men's Watch",
						"image_url" => "http://cdn2.jomashop.com/media/catalog/product/cache/1/image/490x490/9df78eab33525d08d6e5fb8d27136e95/a/u/audemars-piguet-royal-oak-offshore-black-dial-rubber-men_s-watch-26207io.oo.a002ca.01.jpg",
						"subtitle"  => "Titanium with microbille finishes and polished case with a black rubber strap. Fixed bezel.",
						"buttons"   => array(
							array(
								"type"  => "web_url",
								"url"   => "http://www.jomashop.com/audemars-piguet-watch-26207ioooa002ca01.html",
								"title" => "Show website"
							),
							array(
								"type"    => "postback",
								"payload" => "AddToCart",
								"title"   => "Add to cart"
							)
						)
					),
				)
			),
		),
		'Show receipt'           => array(
			array(
				'type'    => 'receipt',
				'content' => array(
					'name'           => 'Mr Finbarrs Oketunji',
					'order_number'   => rand( 0, 99999999999 ),
					'currency'       => 'USD',
					'payment_method' => 'Visa',
					'order_url'      => 'http://www.jomashop.com/',
					'elements'       => array(
						array(
							"title"     => "Jules Audemars Automatic Chronograph Titanium Men's Watch",
							"subtitle"  => "Titanium case with a brown leather strap. Fixed titanium bezel.",
							"quantity"  => 2,
							"price"     => 21990,
							"currency"  => "USD",
							"image_url" => "http://cdn2.jomashop.com/media/catalog/product/a/u/audemars-piguet-jules-audemars-automatic-chronograph-titanium-men_s-watch-26558ti.oo.d080ve.01_1.jpg"
						),
						array(
							"title"     => "Royal Oak Offshore Black Dial Rubber Men's Watch",
							"subtitle"  => "Titanium with microbille finishes and polished case with a black rubber strap. Fixed bezel.",
							"quantity"  => 2,
							"price"     => 52990,
							"currency"  => "USD",
							"image_url" => "http://cdn2.jomashop.com/media/catalog/product/cache/1/image/490x490/9df78eab33525d08d6e5fb8d27136e95/a/u/audemars-piguet-royal-oak-offshore-black-dial-rubber-men_s-watch-26207io.oo.a002ca.01.jpg"
						)
					),
					'address'        => array(
						"street_1"    => "510 Market St.",
						"street_2"    => "#60180",
						"city"        => "San Francisco",
						"postal_code" => "94104",
						"state"       => "CA",
						"country"     => "US"
					),
					'summary'        => array(
						"subtotal"      => 74980.00,
						"shipping_cost" => 150.00,
						"total_tax"     => 50.00,
						"total_cost"    => 75150.00
					),
					'adjustments'    => array(
						array(
							"name"   => "New customer discount",
							"amount" => 20
						),
						array(
							"name"   => "10% off coupon code",
							"amount" => 10
						)
					)
				)
			)
		),
		'Show image and buttons' => array(
			array(
				'type'    => 'image',
				'content' => 'http://www.ablogtowatch.com/wp-content/uploads/2016/01/Audemars-Piguet-Royal-Oak-Double-Balance-Wheel-Openworked%E2%80%93aBlogtoWatch-70.jpg'
			),
			array(
				'type'    => 'button',
				'content' => array(
					'text'    => 'Choose one from these button',
					'buttons' => array(
						array(
							'type'  => 'web_url',
							'url'   => 'http://www.jomashop.com/audemars-piguet-watch-26330orood088cr01.html',
							'title' => 'Show website'
						),
						array(
							'type'    => 'postback',
							'payload' => 'GoShopping',
							'title'   => 'Go Shopping'
						)
					)
				)
			),
		)
	),
	'payload' => array(
		'GoShopping' => array(
			array(
				'type'    => 'text',
				'content' => 'Click add to cart to get receipt'
			),
			array(
				'type'    => 'generic',
				'content' => array(
					array(
						"title"     => "Royal Oak Men's Watch",
						"image_url" => "http://www.ablogtowatch.com/wp-content/uploads/2016/01/Audemars-Piguet-Royal-Oak-Double-Balance-Wheel-Openworked%E2%80%93aBlogtoWatch-70.jpg",
						"subtitle"  => "18kt rose gold case with a crocodile leather brown strap.",
						"buttons"   => array(
							array(
								"type"  => "web_url",
								"url"   => "http://www.jomashop.com/audemars-piguet-watch-26330orood088cr01.html",
								"title" => "Show website"
							),
							array(
								"type"    => "postback",
								"payload" => "AddToCart",
								"title"   => "Add to cart"
							)
						)
					),
					array(
						"title"     => "Jules Audemars Automatic Silver Dial White Gold Unisex Watch",
						"image_url" => "http://cdn2.jomashop.com/media/catalog/product/cache/1/small_image/360x/9df78eab33525d08d6e5fb8d27136e95/a/u/audemars-piguet-jules-audemars-automatic-silver-dial-white-gold-unisex-watch-25955bcood002cr01-25955bcood002cr01.jpg",
						"subtitle"  => "18 kt white gold case with a black alligator leather strap. Fixed bezel.",
						"buttons"   => array(
							array(
								"type"  => "web_url",
								"url"   => "http://www.jomashop.com/audemars-piguet-watch-25955bcood002cr01.html",
								"title" => "Show website"
							),
							array(
								"type"    => "postback",
								"payload" => "AddToCart",
								"title"   => "Add to cart"
							)
						)
					),
				)
			),
		),
		'AddToCart'  => array(
			array(
				'type'    => 'text',
				'content' => 'This product has been added to your cart'
			),
			array(
				'type'    => 'receipt',
				'content' => array(
					'name'           => 'Miss Abidemi Clayton',
					'order_number'   => rand( 0, 99999999999 ),
					'currency'       => 'USD',
					'payment_method' => 'Visa',
					'order_url'      => 'http://www.jomashop.com/',
					'elements'       => array(
						array(
							"title"     => "Dream Mother of Pearl Diamond Dial Blue Satin Ladies Watch",
							"subtitle"  => "Mother of pearl dial with silver-toned hands and diamond hour markers.",
							"quantity"  => 2,
							"price"     => 6895,
							"currency"  => "USD",
							"image_url" => "http://cdn2.jomashop.com/media/catalog/product/cache/1/image/490x490/9df78eab33525d08d6e5fb8d27136e95/a/u/audemars-piguet-dream-mother-of-pearl-diamond-dial-blue-satin-ladies-watch-67438bczza021su01-67438bczza021su01.jpg"
						),
						array(
							"title"     => "Millenary Manual Wind Skeleton Dial Platinum Men's Watch",
							"subtitle"  => "Skeleton dial with blue hands and Arabic numeral hour markers. Minute markers around the outer rim.",
							"quantity"  => 2,
							"price"     => 369995,
							"currency"  => "USD",
							"image_url" => "http://cdn2.jomashop.com/media/catalog/product/cache/1/small_image/360x/9df78eab33525d08d6e5fb8d27136e95/a/u/audemars-piguet-millenary-tourbillon-blue-aventurine-dial-mens-hand-wind-diamond-watch-26381bczzd312cr01-26381bczzd312cr01.jpg"
						)
					),
					'address'        => array(
						"street_1"    => "10 Market St. NW.",
						"street_2"    => "#340",
						"city"        => "Atlanta",
						"postal_code" => "30318",
						"state"       => "GA",
						"country"     => "US"
					),
					'summary'        => array(
						"subtotal"      => 753780.00,
						"shipping_cost" => 200.00,
						"total_tax"     => 100.00,
						"total_cost"    => 754050.00
					),
					'adjustments'    => array(
						array(
							"name"   => "New customer discount",
							"amount" => 20
						),
						array(
							"name"   => "10% off coupon code",
							"amount" => 10
						)
					)
				)
			)
		)
	),
	'default' => array(
		array(
			'type'    => 'text',
			'content' => "You can type 'help', 'Show text', 'Show buttons', 'Show image', 'Show generic', 'Show image and buttons' to see our example function with text"
		)
	)
) );

$bot->add( 'text', array(
	'help' => array(
		array(
			'type'    => 'text',
			'content' => 'This messenger bot is added by add(\'text\', $script) function.'
		),
		array(
			'type'    => 'button',
			'content' => array(
				'text'    => 'You can See documentation to get more detail',
				'buttons' => array(
					array(
						'type'  => 'web_url',
						'url'   => 'https://afoketunji.me/fb/documentation.html',
						'title' => 'See documentation'
					),
					array(
						'type'    => 'postback',
						'payload' => 'GoShopping',
						'title'   => 'Go shopping'
					),
					array(
						'type'    => 'postback',
						'payload' => 'WatchTrailer',
						'title'   => 'Watch Trailers'
					)
				)
			)
		)
	)
) );

$bot->add( 'payload', array(
	'WatchTrailer' => array(
		array(
			'type'    => 'text',
			'content' => 'This messenger bot is added by add(\'payload\', $script) function.'
		),
		array(
			'type'    => 'button',
			'content' => array(
				'text'    => 'Click one of these link to watch the making of Audemars Piguet',
				'buttons' => array(
					array(
						'type'  => 'web_url',
						'url'   => 'https://www.youtube.com/watch?v=ckvceoedFUU',
						'title' => 'Audemars Piguet Making of'
					),
					array(
						'type'  => 'web_url',
						'url'   => 'https://www.youtube.com/watch?v=kFeIskdGDfE',
						'title' => 'Time Travel: Audemars Piguet'
					)
				)
			)
		)
	)
) );

$bot->add( 'default', array(
	array(
		'type'    => 'button',
		'content' => array(
			'text'    => 'Or you can click one from these button to see example action with payload or web url',
			'buttons' => array(
				array(
					'title' => 'Visit website',
					'type'  => 'web_url',
					'url'   => 'http://www.audemarspiguet.com/en/'
				),
				array(
					'title'   => 'Go Shopping',
					'type'    => 'postback',
					'payload' => 'GoShopping'
				)
			)
		)
	)
) );

$bot->run();