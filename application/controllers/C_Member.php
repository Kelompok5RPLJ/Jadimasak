`<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class C_Member extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $autoload['libraries'] = array('database', 'session', 'xmlrpc');
        $autoload['helper'] = array('url', 'file');  
    }
     public function index() {
            $data['judul']="Member";
            $data['content']="Member/home_member";
            $data['datauser'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();	
            $this->load->view('Member/home_member',$data);
    }
     public function lihatdetailresep($id_resep){
        $data['barang'] = $this->E_Barang->pilih_resep($id_resep)->row();
        $data['user'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();
        $this->load->view('Member/detailbarang',$data);
    }

     public function filter_kategoriberkuah() {
        $data['resep'] = $this->E_Barang->list_berkuah();
        $this->load->view('Member/kategoriberkuah',$data);
    }

     public function lihatprofile() {
        $data['user'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();
        $this->load->view('Member/profilemember',$data);
      }

     public function editprofileM() {
        $data['user'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();
        $this->load->view('Member/editprofil',$data);
      }

     public function editprofile(){
        $id=$this->session->userdata('id');
        $firstnamebr =$this->input->post('firstnamebr');
        $lastnamebr =$this->input->post('lastnamebr');
        $mobilenumberbr =$this->input->post('mobilenumberbr');
        $usernamebr =$this->input->post('usernamebr');
        $emailbr =$this->input->post('emailbr');

        $pisah = explode(' ',$usernamebr);
        if(count($pisah)==0){
        }else{
            $namabaru = implode('_',$pisah);
        }
       
            $this->E_User->update_user('user',array("username" => $usernamebr,"first_name" => $firstnamebr, "last_name" => $lastnamebr, "email" => $emailbr, "mobile_number" => $mobilenumberbr),$id);
        
        ?><script language="JavaScript">alert('Update Profile Success');
        document.location='<?php echo site_url('C_Member/index');?>'</script><?php
        //redirect('C_Member/listuserview');
    }
     function add_to_cart($id){
        $data = array(
            $id => $this->input->post('id_user_cart'),
            'id_resep' => $this->input->post('id_resep_cart'), 
            'namaresep' => $this->input->post('namaresep_cart'), 
            'harga' => $this->input->post('harga_cart'), 
          //  'qty' => $this->input->post('quantity'), 
        );
        $this->cart->insert($data);
       // echo $this->show_cart(); 
    }

  
    }
?>