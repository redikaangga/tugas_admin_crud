<?php 

class Template
{
	protected $_ci;

	function __construct()
	{
		$this->_ci = &get_instance();
	}

	function temp($template = null, $data=null)
	{
		if ($template != NULL and $template != 'tables'){
			// $data['data'] = $template;
			$data['body'] = $this->_ci->load->view($template, $data, TRUE);
			$data['navbar'] = $this->_ci->load->view('template/navbar', $data, TRUE);
			$data['footer'] = $this->_ci->load->view('template/footer', $data, TRUE);
			$data['css'] = $this->_ci->load->view('template/css', $data, TRUE);
			$data['js'] = $this->_ci->load->view('template/js', $data, TRUE);

			echo $data['template'] = $this->_ci->load->view('template/template', $data, TRUE);
		} 
	}
}

?>