<?PHP
class FlashObject {
   
   public $attributes = array();
   public $params = array();
   public $variables = array();
   public $path;
   public $width;
   public $height;
   public $id;
   public static $default_alt_content = '<a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a>';
     
   function __construct ($path = '#', $width = 100, $height = 100, $alt_content = '', $id = '') {
      $this->path = $path;
      $this->width = $width;
      $this->height = $height; 
      $this->alt_content = !empty($alt_content) ? $alt_content : $this->default_alt_content; 
      $this->id = !empty($id) ? ' id="' . $id . '"' : '';
   }
   
   function setAltContent ($str) {   
      $this->alt_content = $str;
   }   
   function setVariables ($arr) {
      $this->variables = $arr;
   }
   function setParams ($arr) {
      $this->params = $arr;
   }
   function setAttributes ($arr) {
      $this->attributes = $arr;
   }
   function setId ($id) {
      $this->id = $id;
   }
   
   function get () {
      $attributes = '';
      $params = '';
      $variables = array();
      foreach ($this->attributes as $key=>$val) {
         if ($key !== 'id') { $attributes .= ' ' . $key . '=' . '"' . $val . '"'; }
      }
      foreach ($this->params as $key=>$val) {
         $params .= "<param name=\"{$key}\" value=\"{$val}\" />";   
      }
      foreach ($this->variables as $key=>$val) {
         $variables[] = $key . '=' . urlencode($val);
      }
      if ( count($variables) ) {
         $params .= "<param name=\"flashvars\" value=\"" . implode('&', $variables) . "\" />";
      }
      $str = "\n<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\"{$this->width}\" height=\"{$this->height}\"{$this->id}{$attributes}>";
      $str .= "\n<param name=\"movie\" value=\"{$this->path}\" />";
      $str .= $params;
      $str .= "\n<!--[if !IE]>-->";
      $str .= "\n<object type=\"application/x-shockwave-flash\" data=\"{$this->path}\" width=\"{$this->width}\" height=\"{$this->height}\"{$attributes}>";
      $str .= $params;
      $str .= "\n<!--<![endif]-->";
      $str .= $this->alt_content;
      $str .= "\n<!--[if !IE]>-->";
      $str .= "\n</object>";
      $str .= "\n<!--<![endif]-->";      
      $str .= "\n</object>";            
      return $str;
   }
   
   function render () {
      echo $this->get();
   }
}

?>