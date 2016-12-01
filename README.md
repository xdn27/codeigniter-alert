# codeigniter-alert
An easy flashdata alert for codeigniter  
This is just a simple alert..

## How To Use

### File
Put the Alert.php in the application/library  
Put the alert_helper.php in the application/helper  
Load the library automatically..  
  
The library is work with the codeigniter 2.2 and 3.0  

### Set an Alert
* NAME(String): Your alert name/type/class/whatever..
* MESSAGE(String): Of course this is for the message..
* NEXT REQUEST(Bool / Default: false): Set TRUE if not for next request.. I think you now about this if you have use a flashdata codeigniter

`$this->alert->set(NAME, MESSAGE, NEXT REQUEST);`

### Display an alert
`echo has_alert(NAME);`  
`print_r(has_alert());`  

## Sample

### Controller

	public function index()
	{
		if(!auth_check('member')){
			
			// Alert will show after redirect
			$this->alert->set('alert-danger', 'Orang asing dilarang masuk!');
			redirect(base_url('auth/login'));
		}
		
		redirect(base_url());
	}
	
	public function login()
	{
		if($this->input->post('do_login') AND !$this->do_login()){
			
			// This is not for next request
			$this->alert->set('alert-danger', 'Login gagal!', true);
		}
		
		$this->load->view('login');
	}

### View

	<?php if(has_alert()):  
		foreach(has_alert() as $type => $message): ?>  
			<div class="alert alert-dismissible <?php echo $type; ?>">  
				<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
				<?php echo $message; ?>  
			</div>  
		<?php endforeach;  
	endif; ?>


Very simple..  
Thanks

Tweet your question to @d_nizh

Bahasa Indonesia
http://kabisadenis.net/php/codeigniter/membuat-alert-pada-codeigniter-dengan-mudah/
