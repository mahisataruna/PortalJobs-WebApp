<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    // Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    // Controller Login
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'trim|required');
        // Validasi login
        if($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // Jika validasi success
            $this->_login();
        }
        
    }
    // Controller login or private function
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password1');
        // Buat query ke database
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // Cek jika ada user 
        if ($user) {
            // Cek jika user active 
            if ($user['is_active'] == 1) {
                // Jika active cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
                    // Redirect berdasarkan role_id
                    if ($user['role_id'] == 1 ) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                    
                } else {
                    // Jika password salah
                    $this->session->set_flashdata('message', 
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Sorry!</strong> wrong password.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                    );
                    redirect('auth');
                }
            } else {
                // Jika belum active
                $this->session->set_flashdata('message', 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Sorry!</strong> your account not actived.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
                );
			    redirect('auth');
            }
        } else {
            // Gagalkan login jika user tidak ada
            $this->session->set_flashdata('message', 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Sorry!</strong> your email not registered.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('auth');
        }
    }
    // Controller Register
    public function registration()
    {
        // Form validation rules
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',
			[
				'is_unique' => 'Email sudah terdaftar!'
				//is_unique dapat ditambah agar email tidak ada yang sama
			]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        // Jika validasi gagal
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register User';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role_id'),
                'is_active' => 1,
                'date_created' => time()
            ];
            // insert ke database
            $this->db->insert('user', $data);
            // Pesan Success
            $this->session->set_flashdata('message', 
            '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-fw fa-solid fa-message"></i> Done!</strong> Your account has been registered.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
            );
            redirect('auth');
        }
    }
    // Controller Logout
    public function logout()
    {
        $this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
        // Success and flashdata and redirect
		$this->session->set_flashdata('message', 
            '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-fw fa-solid fa-message"></i> Done!</strong> your logout.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
            );
		redirect('auth');
    }
}