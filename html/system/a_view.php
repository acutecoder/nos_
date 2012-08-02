<?php
    class a_view {
		
    	protected $PATH;
    	protected $DATA;

    	protected $EXTS = array(
    		'.php',
    		'.html',
    		'.htm'
    		);

    	public function __construct( $path = null,  $data = null ) {

			if( !empty( $path ) ) :

				if( !empty( $data ) ) : 
					$this->DATA = $data;
				endif;
				$this->PATH = VIEWS . '/'.$path;

			endif;
		}

		public function render( $extract = false ) {

			if( !empty( $this->PATH ) ) :

				foreach ( $this->EXTS as $ext ) :

					if( file_exists( $this->PATH . $ext ) ) :

						if( !empty( $this->DATA ) ) :

							$data = $this->DATA;
							if( $extract ) extract( $data );

						endif;

						include $this->PATH . $ext;
						return;

					endif;

				endforeach;

			endif;
		}
    }
    //	END ::	system / a_view.php