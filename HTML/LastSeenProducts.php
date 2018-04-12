<?php
include_once 'initialize.php';

function viewedProduct( $productID ) {
    if ( !isset( $_SESSION[ 'recent-products' ] ) ) {
        $_SESSION[ 'recent-products' ] = "{
                                            \"viewed-products\": []
                                        }";
    }

    $viewedIndex = json_decode( $_SESSION[ "recent-products" ], true );

    $products = $viewedIndex[ 'viewed-products' ];

    $productAdded = false;
    foreach ( $products as $product ) {
        if ( $product[ "productID" ] == $productID ) {
            $productAdded = true;
        }
    }

    if ( !$productAdded ) {
        array_push( $products, array( 'productId' => $productID ) );
    }

    $products = array_values( $products );

    $jsonArray = array( 'viewed-products' => array() );
    $jsonArray[ 'viewed-products' ] = $products;
    $jsonString = json_encode( $jsonArray );

    $_SESSION[ 'recent-products' ] = $jsonString;
}
	?>

			<div class="row" id="laatstBekeken">
		<h2>Laatst Bekeken</h2>
		<div class="row center-block">
		<div class="col-lg-3 col-sm-6 col-xs-12">
			
				<a href="https://www.google.com">
					<img src="images/products/Whitebeard's flag.png" class=" img-responsive center-block">
				</a>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12">
			
				<a href="https://www.google.com">
					<img src="images/products/Shank's flag.jpg" class=" img-responsive center-block">
				</a>
		</div>
		<div class=" col-lg-3 col-sm-6 col-xs-12">
			
				<a href="https://www.google.com">
					<img src="images/products/Sanji's Flag.png" class=" img-responsive center-block">
				</a>
		</div>
		<div class=" col-lg-3 col-sm-6 col-xs-12">
			
				<a href="https://www.google.com">
					<img src="images/products/FirstTry.jpg" class=" img-responsive center-block">
				</a>
		</div>
		</div>
	</div>