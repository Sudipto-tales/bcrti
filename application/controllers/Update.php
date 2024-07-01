<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends MX_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("u_id")){
			redirect("/");
		}else{
			$data_auth = array(  
				'u_id'     => $this->session->userdata("u_id"),  
				'auth_page'  => current_url().$_SERVER['QUERY_STRING'],  
				'auth_ip'   => $this->input->ip_address(),  
				'auth_stamp' => date("Y-m-d H:i:s")  
				);
			$this->db->insert('auth_tbl',$data_auth);
			if($this->session->userdata("u_mstats") == "void"){
				redirect("/mob_verify");
			}elseif($this->session->userdata("u_estats") == "void"){
				redirect("/email_verify");
			}else{
				//Do Nothing!
			}
		}
        $this->load->model('update_m', 'update_m');

	}
	public function index()
	{
		$page_data["page_name"] = "Update Data";
		$page_data["page_data"] = "Update Data";
        $this->load->view('upload_form', $page_data);
    }
	
	public function update_save()
	{
		//Save Code for Update Data
        // $page_data["page_name"] = "Update Data";
		// $page_data["page_data"] = "Update Data";
        // $this->load->view('upload_form', $page_data);

            $old_data = $this->input->post('old_data');
            $new_data = $this->input->post('new_data');
            $tbl_name = $this->input->post('tbl_name');
            $tbl_ucol = $this->input->post('tbl_ucol');
            $tbl_uid = $this->input->post('tbl_uid');
            $tbl_col = $this->input->post('tbl_col');

        if($this->update_m->save_data($tbl_name, $tbl_ucol, $tbl_uid, $tbl_col, $new_data)){
            ?>
            <div class="alert alert-warning">
            <strong>Status!</strong> Updated Successfully.</b>
            <script>
            function reload_close() {
            parent.location.reload();
            parent.closeModal();
            }
            setTimeout(reload_close, 2000);
            </script>
            </div>
            <?php
		}else{
			?>
            <div class="alert alert-danger">
            <strong>Status!</strong> Updated Failed.
            <script>
            function reload_close() {
            parent.location.reload();
            parent.closeModal();
            }
            setTimeout(reload_close, 2000);
            </script>
            </div>
            <?php
        }
    }
}